<?php

namespace App\Http\Controllers;

use App\Models\Youth;
use Illuminate\Http\Request;

class YouthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return $this->sendResponse(ProductResource::collection($products), 'Products Retrieved Successfully.');

        // return view ('components.youth.index');    
    }

    public function create(){
        return view('components.youth.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mname' => 'required',
            'datebirth' => 'required',
            'birth_place' => 'required',
            'contact_no' => 'required',
            'address' => 'required',
            'zone' => 'required',
            'gender' => 'required',
            'kk_member' => 'required',
            'civil_status' => 'required',
            'tribe' => 'required',
            'religion' => 'required',
            'email' => 'required',
            'educational_attainment' => 'required',
            'occupation' => 'required',
            'youth_sector' => 'required',
            'organization' => 'required',
            'fathers_name' => 'required',
            'fathers_occupation' => 'required',
            'mothers_name' => 'required',
            'mothers_occupation' => 'required',
            'living_w_parents' => 'required',
            'concerns_issue' => 'required',
            'control_no' => 'required',
            'batch' => 'required',
            'civil_status_specify' => 'required',
            'spouse_name' => 'required',
            'youth_sec_specify' => 'required',
            'org_specify' => 'required',
            'encoded_by'=> 'required',
        ]);


        return Youth::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
