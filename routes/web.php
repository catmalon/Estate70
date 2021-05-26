<?php

use Illuminate\Support\Facades\Route;

use App\Models\Landlord;
use App\Models\Tenant;
use App\Models\Rent;
use App\Models\Equipment;
use App\Models\Order;
use Illuminate\Http\Request;


Route::get('/', function () {
    $rents = Rent::where('state', 1)->get();
    return view('property-list')->with('rents', $rents);
});

Route::post('/confirm', function(Request $request) {
    $request->validate([
        'order_id' => 'required',
    ]);
    $order = Order::find($request->get('order_id'));

    $data = ['name' => $order->landlords->name,
             'phone' => $order->landlords->phone,
             'email' => $order->landlords->email
            ];
    Mail::send('emails.confirm', $data, function($message) use ($order) {
        $message->to($order->tenants->email)->subject('恭喜您的租屋申請已被房東確認');
    });

    $order->rents->state = 0;
    $order->rents->save();

    $order->state = 1;
    $order->save();

    return view('property-confirmok')->with('order', $order);
});

Route::post('/cancel', function(Request $request) {
    $request->validate([
        'order_id' => 'required',
    ]);
    $order = Order::find($request->get('order_id'));
    $order->state = 0;
    $order->save();
    
    return view('property-cancel') ->with('order', $order);
});

Route::resource('property','App\Http\Controllers\PropertyController');
Route::resource('forTenant','App\Http\Controllers\TenantController');

Route::get('/login', function() {
    return view('property-login');
});

