<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use Illuminate\Support\Facades\Session;

class AddressController extends Controller
{
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, [
            'street'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'country'=>'required',
            'postal_code'=> 'required'
        ]);
        // store in the database
        $address = new Address;
        if (Session::exists('user_id')) {
            $user = \App\User::find(Session::get('user_id'));
        } else {
            return redirect()->back();
        }
        $address->street = $request->street;
        $address->city = $request->city;
        $address->state = $request->state;
        if ($address->country == 1) {
            $country = 'India';
        } elseif ($address->country == 2){
            $country = 'France';
        } elseif ($address->country == 2){
            $country = 'US';
        } else {
            $country = 'India';
        }
        $address->country = $country;
        $address->postal_code = $request->postal_code;
        $user->addresses()->save($address);
        return redirect()->route('home');
    }

    public function get(Request $request, $id) {
        $address = Address::where('user_id', $id)->first();
        return view('addressEdit',['address'=> $address,'id'=> $id]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'street'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'country'=>'required',
            'postal_code'=> 'required'
        ]);
//            $address = Address::where('user_id',Session::get('user_id'))->get();
        $address = Address::where('user_id',$request->input('id'))->first();

        $address->street = $request->input('street');
        $address->city = $request->input('city');
        $address->state = $request->input('state');
        $address->country = $request->input('country');
        $address->postal_code = $request->input('postal_code');
        $address->save();
//        $user->addresses()->save($address);
//        $user->addresses()->sync($address);
//        better approach
//        $post->tags()->sync($request->input('tags') === null ? [] : $request->input('tags'));
        return redirect()->route('home');//->with('info', 'Post edited, new Title is: ' . $request->input('title'));
    }
}
