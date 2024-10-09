<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.add_customer');
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
        // Validate the request
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_address_1' => 'required|string|max:255',
            'customer_town' => 'required|string|max:255',
            'customer_postcode' => 'required|string|max:10',
            'customer_phone' => 'required|string|max:15',
            'customer_county' => 'required|string|max:255',

            'customer_name_ship' => 'required|string|max:255',
            'customer_address_1_ship' => 'required|string|max:255',
            'customer_town_ship' => 'required|string|max:255',
            'customer_postcode_ship' => 'required|string|max:10',
            'customer_county_ship' => 'required|string|max:255',
        ]);

        // Create and store the customer
        try {
            $customer_details = array();
            $customer_details['name'] = trim($request->customer_name);
            $customer_details['email'] = trim($request->customer_email);
            $customer_details['address_1'] = trim($request->customer_address_1);
            $customer_details['address_2'] = trim($request->customer_address_2);
            $customer_details['state'] = trim($request->customer_town);
            $customer_details['postcode'] = trim($request->customer_postcode);
            $customer_details['phone'] = trim($request->customer_phone);
            $customer_details['county'] = trim($request->customer_county);
            $customer_details['name_ship'] = trim($request->customer_name_ship);
            $customer_details['address_1_ship'] = trim($request->customer_address_1_ship);
            $customer_details['address_2_ship'] = trim($request->customer_address_2_ship);
            $customer_details['state_ship'] = trim($request->customer_town_ship);
            $customer_details['postcode_ship'] = trim($request->customer_postcode_ship);
            $customer_details['county_ship'] = trim($request->customer_county_ship);
            // Create the customer using Eloquent model and save it to the database
            $customer = new Customer();
            $customer->fill($customer_details);
            $customer->save();

            // Customer::create($validatedData);
            return redirect()->back()->with('success', 'Customer created successfully!');
        } catch (\Exception $e) {
            // Handle any exception that occurs
            return redirect()->back()->withErrors(['error' => 'An error occurred while creating the customer.']);
        }
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
