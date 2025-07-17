<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Mail\PartnerRegistered;
use App\Models\PartnerRegister;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use function Laravel\Prompts\alert;

class PartnerRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'companyName' => 'required|string|max:255',
        'fullName' => 'required|string|max:255',  // Assuming you want a separate fullName field
        'email' => 'required|email|unique:partner_registers,email',
        'phone' => 'required|string|max:20',
        'businessType' => 'required|string|max:255',
        'website' => 'nullable|url|max:255',
        'message' => 'nullable|string',
        'agree' => 'accepted',
    ]);

    $partner = new PartnerRegister();
    $partner->company_name = $request->companyName;
    $partner->fullName = $request->fullName;  // Corrected to fullName
    $partner->email = $request->email;
    $partner->phone = $request->phone;
    $partner->businessType = $request->businessType;
    $partner->website = $request->website;
    $partner->message = $request->message;
    $partner->agree = $request->agree;  // Save based on user input
    $partner->save();

    Mail::to('test@theorbit.one')->send(new PartnerRegistered($partner));

    return response()->json([
        'status' => true,
        'message' => 'Partner registered successfully'
    ]);
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
