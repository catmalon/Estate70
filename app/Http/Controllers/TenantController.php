<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Landlord;
use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Rent;
use App\Models\Order;
use Hamcrest\Type\IsInteger;

class TenantController extends Controller
{
    
    public function index(Request $request)
    {

        try {
            $landlord = Landlord::where('phone', $request->get('landlord_phone'))
                                    ->where('email', $request->get('landlord_mail'))
                                    ->firstOrFail();
        } catch (ModelNotFoundException $th) {
            return view('property-submit');
            // return 'can not find';
        }
        $orders = Order::where('landlord_id', $landlord->id)->orderByDesc('rent_id')->get();
        
        // return 'find landlord ID = ' . $landlord->id;
        return view('property-confirm')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $pieces = explode("/", $request->headers->get('referer'));
        
        if ($pieces[count($pieces) - 2] == 'property') {
            $rent_id = $pieces[count($pieces) - 1];
            if (is_numeric($rent_id)){
                $rent = Rent::find($rent_id)->first();
                
                $tenant = new Tenant([
                    "name" => $request->get('tenant_name'),
                    "phone" => $request->get('tenant_phone'),
                    "email" => $request->get('tenant_mail')
                ]);
                $tenant->save();
                
                $order = new Order([
                    'rent_id' => $rent_id,
                    'landlord_id' => $rent->landlord_id,
                    'tenant_id' => $tenant->id,
                    'state' => 1
                ]);
                $order->save();

                return view('property-thank');
            }
        } else {
            return 'rent id error!';
        }
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
