<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;

class CarController extends Controller
{
      public function edit(Request $req)
    {
        //
         $car = car::where('carId','=',$req->id)->first();
               
        return view('carList',['car' => null, 'car' => $car]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        //
         $car = car::where('carId','=',$req->id)->first();

        $car->carName = $req->carname;
        $car->carEmail = $req->carcost;
        $car->cartPhone = $req->cartype;
       
        $car->save();

        return redirect()->route('carlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteUser(Request $req)
    {
        $c = userList::where('carId','=',$req->id)->first();

        $c->delete();

        return redirect()->route('carlist');
    }
}
