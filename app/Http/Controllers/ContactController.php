<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
		echo "masuk sini";
		exit;
		/*$validatedData = $request->validate([
			'name'=>'required',
			'phone'=>'required',
			'email'=>'required',
			'message'=>'required'
		]);
		Contact::create($validatedData);
		
		return redirect('Contact');*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
		$validatedData = $request->validate([
			'name'=>'required',
			'phone'=>'required',
			'email'=>'required',
			'message'=>'required'
		]);
		Contact::create($validatedData);
		
		return redirect('Contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //
		 
		 
		// echo $request['name'];
		
		$validatedData = $request->validate([
			'name'=>'required',
			'phone'=>'required',
			'email'=>'required',
			'message'=>'required'
		]);
		Contact::create($validatedData);
		
		return redirect('Contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
