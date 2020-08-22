<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurants;
use App\User;
use App\Foods;
use App\Orders;
use App\OrdersDetails;
use DB;

class RestoController extends Controller
{
    public function list()
    {
        $restaurants = Restaurants::all();
        return view('/list',["restaurants" => $restaurants]);
    }

    public function add(Request $req)
    {
        
       request()->validate([
            'restoname' => 'required',
            'email' => 'required',
            'address' => 'required',
            // 'foodname[]' => 'required',
            // 'dept[]' => 'required',
            // 'price[]' => 'required'
       ]);

       $resto = new Restaurants;
       $resto->restoname=$req->input('restoname');
       $resto->email=$req->input('email');
       $resto->address=$req->input('address');
       $resto->user_id = auth()->id();
       $resto->save();

    //    $food = new Foods;
    //    $food->resto_id = $resto->id;
    //    $food->foodname=$req->input('foodname');
    //    $food->dept=$req->input('dept');
    //    $food->price=$req->input('price');
    //    $food->save();

    //    $food = new Foods;
    
       foreach ($req->fid as $item => $v) {
           $food = array(
               'resto_id' => $resto->id,
               'foodname' => $req->foodname[$item],
               'dept' => $req->dept[$item],
               'price' => $req->price[$item]
           );
        Foods::insert($food);
       } 

       $req->session()->flash('status', 'Restaurant added successfully.');
       return redirect('list');
    }

    public function edit(Restaurants $restaurants)
    {   

        $foods = Foods::where('resto_id', '=', $restaurants->id)->get();
        
        
        // $this->authorize('view', $restaurants);
        return view('/edit',["restaurants" => $restaurants], ["foods" => $foods]);
    }

    public function update(Request $req)
    {
        
        request()->validate([
            'restoname' => 'required',
            'email' => 'required',
            'address' => 'required',
            // 'foodname[]' => 'required',
            // 'dept[]' => 'required',
            // 'price[]' => 'required|numeric'
       ]);
        
       $resto = Restaurants::findOrFail($req->input('id'));
       $resto->restoname=$req->input('restoname');
       $resto->email=$req->input('email');
       $resto->address=$req->input('address');
       $resto->user_id=$req->input('user_id');
       $resto->save();


    //    $foods = Foods::where('resto_id', '=', $resto->id)->get();
    //    dd($foods->pluck('fid')->toArray());

    //    if($req->foodname > 0)
    //    {
    //    foreach ($req->foodname as $item => $v) {
        
    //     $food = array(
    //         'fid' => $req->fid[$item],
    //         'resto_id' => $resto->id,
    //         'foodname' => $req->foodname[$item],
    //         'dept' => $req->dept[$item],
    //         'price' => $req->price[$item]
    //     );
    //     Foods::insert($food);
    //     }
    // } 

    //   for ($i=0; $i<count($req->fid); $i++) {

    //       DB::table('foods')
    //       ->where('fid', $req->fid[$i])
    //       ->update([
    //         'fid' => $req->fid[$i],
    //         'resto_id' => $resto->id,
    //         'foodname' => $req->foodname[$i],
    //         'dept' => $req->dept[$i],
    //         'price' => $req->price[$i]
    //       ]);
    //   }
    
    // $fu = $foodo->pluck('fid')->toArray();
    // // dd($fu);
    
    
    //    $foods = Foods::where('resto_id', '=', $resto->id)->get();
    //    dd($foods);

    foreach ($req->fid as $item => $v) {
        
            if($req->fid[$item] != null){
                    $foods = Foods::where('resto_id', '=', $resto->id)
                            ->where('fid', '=', $req->fid[$item])
                            ->update([
                                'fid' => $req->fid[$item],
                                'resto_id' => $resto->id,
                                'foodname' => $req->foodname[$item],
                                'dept' => $req->dept[$item],
                                'price' => $req->price[$item]
                            ]);
            }
            else{
                    $foods = array(
                    'resto_id' => $resto->id,
                    'foodname' => $req->foodname[$item],
                    'dept' => $req->dept[$item],
                    'price' => $req->price[$item]
                );
             Foods::insert($foods);
                        
            }                           
            // $foods->fid = $req->fid[$item];
            // $foods->resto_id = $resto->id;
            // $foods->foodname = $req->foodname[$item];
            // $foods->dept = $req->dept[$item];
            // $foods->price = $req->price[$item];
            // $foods->save();
    }
    
       $req->session()->flash('status', 'Restaurant updated successfully.');
       return redirect('list');
    }

    public function restaurant(Restaurants $restaurants)
    {
        $foods = Foods::where('resto_id', '=', $restaurants->id)->get();

        
        return view('/restaurant',["restaurants" => $restaurants], ["foods" => $foods]);
    }

    public function order(Request $req)
    {
        request()->validate([
            'daddress' => 'required',
            'pnumber' => 'required|numeric',
       ]);
        
        
        $orders = new Orders;
        $orders->ouser_id=auth()->id();
        $orders->pnumber=$req->input('pnumber');
        $orders->daddress=$req->input('daddress');
        
        $orders->save();

        // dd($req->orderaddress, $req->phnumber, $req->quantity, $req->foodname);
        foreach ($req->fid as $item => $v) {
            
            $total = ($req->price[$item] * $req->quantity[$item]);
            
            if($req->quantity[$item] > 0){

                    $orderd = array(
               'od_oid' => $orders->oid,
               'ofoodname' => $req->foodname[$item],
               'ofprice' => $req->price[$item],
               'ofquantity' => $req->quantity[$item],
               'oftprice' => $total
           );
           OrdersDetails::insert($orderd);
            }
            else{                       
            } 

        }
        $od = Orders::where('oid', '=', $orders->oid)->first();
        $odd = OrdersDetails::where('od_oid', '=', $orders->oid)->get();

        // dd($od, $odd);
        // dd($odd->pluck('oftprice')->toArray()->sum('oftprice'));
        return view('/orderdetails',["od" => $od], ["odd" => $odd]);
    }

    public function profile()
    {
        $user = User::where('id', '=', auth()->id())->first();
        // dd($user->id);
        $restaurants = Restaurants::where('user_id', '=', $user->id)->get();
        // dd($user, $restaurants);
        return view('/profile', ["user" => $user], ["restaurants" => $restaurants]);
    }

    public function orderhistory()
    {
        $user = User::where('id', '=', auth()->id())->first();
        $orders = Orders::where('ouser_id', '=', $user->id)->get();
        // dd($orders);
        return view('/orderhistory', ['user' => $user], ['orders' => $orders]);
    }
}