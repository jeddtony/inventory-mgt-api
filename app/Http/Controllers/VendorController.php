<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
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

       $vendor = Vendor::create([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'phone_number' => $request->phone_number,
        ]);

        return response()->json(['success' => 'Vendor created successful', 'data' => $vendor], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
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
    
        $vendor->name = $request->name;
        $vendor->company_name = $request->company_name;
        $vendor->email = $request->email;
        $vendor->address = $request->address;
        $vendor->city = $request->city;
        $vendor->state = $request->state;
        $vendor->phone_number = $request->phone_number;
        $vendor->save();
    
            return response()->json(['success' => 'Vendor details updated successfully', 'data' => $vendor], 201);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}
