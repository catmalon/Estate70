<?php

namespace App\Http\Controllers;

use App\Models\Landlord;
use App\Models\Rent;
use App\Models\Tenant;
use App\Models\Equipment;
use App\Models\Image;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        // homepage filter //
        $query = Rent::query();
        // top 3 list (location_city, type, room)
        if ($request->get('location_city') != "") {
            $query->where('location_city', $request->get('location_city'));
        }
        if ($request->get('type') != "") {
            $query->where('type', $request->get('type'));
        }
        if ($request->get('room') == "over_5") {
            $query->where('room', '>', 5);
        } elseif ($request->get('room') != "") {
            $query->where('room', $request->get('room'));
        }
        // size range
        $min_size = 0;
        $max_size = 0;
        sscanf($request->get('size'), "[ %d - %d ]", $min_size, $max_size);
        if ($max_size == 50) {
            $max_size = 1000;
        }
        $query->whereBetween('size', [$min_size, $max_size] );

        // price range
        $min_price = 0;
        $max_price = 0;
        sscanf($request->get('price'), "[ %d - %d ]", $min_price, $max_price);
        if ($max_price == 30000) {
            $max_price = 1000000;
        }
        $query->whereBetween('price', [$min_price, $max_price] );

        // equipment filter
        $query->whereHas('equipments', function($queryEqu) use ($request) {
            if ($request->has('air') == 'on') {
                $queryEqu->where('air', 1);
            }
            if ($request->has('lundry') == 'on') {
                $queryEqu->where('lundry', 1);
            }
            if ($request->has('gas') == 'on') {
                $queryEqu->where('gas', 1);
            }
            if ($request->has('wifi') == 'on') {
                $queryEqu->where('wifi', 1);
            }
            if ($request->has('balcony') == 'on') {
                $queryEqu->where('balcony', 1);
            }
            if ($request->has('elevator') == 'on') {
                $queryEqu->where('elevator', 1);
            }
            if ($request->has('notRooftop') == 'on') {
                $queryEqu->where('notRooftop', 1);
            }
            if ($request->has('pet') == 'on') {
                $queryEqu->where('pet', 1);
            }
        });

        $rents = $query->get();

        // return $request->all();
        return view('property-list')->with('rents', $rents);
    }

    public function create()
    {
        return view('property-submit');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'images' => 'required',
            'images.*' => 'mimes:jpeg,bmp,png'
        ]);
        
        try {
            $landlord = Landlord::where('phone', $request->get('landlord_phone'))
                                    ->where('email', $request->get('landlord_mail'))
                                    ->firstOrFail();
        } catch (ModelNotFoundException $th) {
            $landlord = new Landlord([
                "name" => $request->get('landlord_name'),
                "phone" => $request->get('landlord_phone'),
                "email" => $request->get('landlord_mail')
            ]);
            $landlord->save();
        }

        $rent = new Rent([
            "state" => 1,
            "size" => $request->get('size'),
            "room" => $request->get('room'),
            "type" => $request->get('type'),
            "price" => $request->get('price'),
            "floor" => $request->get('floor'),
            "photo" => null,
            "location_city" => $request->get('location_city'),
            "location_detail" => $request->get('location_detail'),
            "landlord_id" => $landlord->id
        ]);
        $rent->save();

        $equipment = new Equipment([
            "rent_id" => $rent->id,
            "air" => $request->has('air'),
            "lundry" => $request->has('lundry'),
            "refrigerator" => $request->has('refrigerator'),
            "gas" => $request->has('gas'),
            "bed" => $request->has('bed'),
            "closet" => $request->has('closet'),
            "sofa" => $request->has('sofa'),
            "balcony" => $request->has('balcony'),
            "elevator" => $request->has('elevator'),
            "pet" => $request->has('pet'),
            "TV" => $request->has('TV'),
            "tvCable" => $request->has('tvCable'),
            "wifi" => $request->has('wifi'),
            "notRooftop" => $request->has('notRooftop')
        ]);
        $equipment->save();

        if($request->hasfile('images')) {
            foreach($request->file('images') as $file)
            {
                $path = $file->store('property-images', 'public');
                $image = new Image([
                    "rent_id" => $rent->id,
                    "file_path" => $path
                ]);
                $image->save();
            }
        }
        // return $request->all();
        return view('property-thank');
    }

    public function show($id)
    {
        $rent = Rent::where('id', $id)->first();
        $landlord = Landlord::where('id', $rent->landlord_id)->first();
        $equipment = Equipment::where('rent_id', $id)->first();
        
        $notRooftop = ($equipment->notRooftop == 1) ? "否" : "是";
        $noPet = ($equipment->pet == 0) ? "不可" : "可以";
        $equString = "";
        if ($equipment->air) {
            $equString .= "冷氣 ";
        }
        if ($equipment->lundry){
            $equString .= "洗衣機 ";
        }
        if ($equipment->refrigerator){
            $equString .= "冰箱 ";
        }
        if ($equipment->gas){
            $equString .= "天然氣 ";
        }
        if ($equipment->bed){
            $equString .= "床 ";
        }
        if ($equipment->closet){
            $equString .= "衣櫃 ";
        }
        if ($equipment->sofa){
            $equString .= "沙發 ";
        }
        if ($equipment->balcony){
            $equString .= "陽台 ";
        }
        if ($equipment->elevator){
            $equString .= "電梯 ";
        }
        if ($equipment->TV){
            $equString .= "電視 ";
        }
        if ($equipment->tvCable){
            $equString .= "第四台 ";
        }
        if ($equipment->wifi){
            $equString .= "Wi-Fi網路 ";
        }

        //return $landlord->toArray();
        return view('property-detail')->with('rent', $rent)
                                      ->with('landlord', $landlord)
                                      ->with('equipment', $equipment)
                                      ->with('notRooftop',$notRooftop)
                                      ->with('noPet',$noPet)
                                      ->with('equString', $equString);
    }

    public function edit($id)
    {
        return "not supported.";
    }

    public function update(Request $request, $id)
    {
        return "not supported.";
    }

    public function destroy($id)
    {
        return "not supported.";
    }
}
