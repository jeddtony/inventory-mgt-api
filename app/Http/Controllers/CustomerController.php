<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:3',
            'company_name'=>'required|min:3',
            'email'=>'required|email',
            'address'=>'required',
            'city'=> 'required',
            'state'=> 'required'
        ]);

        if($validator->fails()){
            $message = array();
            foreach($validator->errors()->getMessages() as $item){
                array_push($message, $item);
            }
          return response()->json(['error'=> 'Errors exist', 'message' => $message], 401);
        }

       $customer = Customer::create([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'phone_number' => $request->phone_number,
        ]);

        return response()->json(['success' => 'Customer created successful', 'data' => $customer], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {
        //
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customers)
    {
        //
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:3',
            'company_name'=>'required|min:3',
            'email'=>'required|email',
            'address'=>'required',
            'city'=> 'required',
            'state'=> 'required'
        ]);

        if($validator->fails()){
            $message = array();
            foreach($validator->errors()->getMessages() as $item){
                array_push($message, $item);
            }
          return response()->json(['error'=> 'Errors exist', 'message' => $message], 401);
        }

    $customers->name = $request->name;
    $customers->company_name = $request->company_name;
    $customers->email = $request->email;
    $customers->address = $request->address;
    $customers->city = $request->city;
    $customers->state = $request->state;
    $customers->phone_number = $request->phone_number;
    $customers->save();

        return response()->json(['success' => 'Customer details updated successfully', 'data' => $customers], 201);
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
        //
    }
}
