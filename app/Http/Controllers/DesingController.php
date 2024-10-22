<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add_Desing_View()
    {
        return view('product.add_desing');
    }
    public function manage_Desing_View()
    {
        return view('product.manage_designs');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function desing_add(Request $request)
    {
        // dd($request->all());
        // $request->validate(
        //     [
        //         'customer_name' => 'required|max:50|regex:/^[A-Za-z0-9\s]+$/i',
        //         'short_name' => 'required|max:50|regex:/^[A-Za-z\s]+$/i',
        //         'customer_gst' => 'nullable|max:20|regex:/^[A-Za-z0-9\s]+$/i',
        //         //    'customer_pan_no' => 'nullable|max:20|regex:/^[A-Za-z0-9\s]+$/i',
        //         //    'customer_details' => 'nullable|max:100|regex:/^[A-Za-z0-9\s\/\.\(\),:-]+$/i',
        //         //    'customer_address' => 'nullable|max:100|regex:/^[A-Za-z0-9\s\/\.\(\),:-]+$/i',
        //     ],
        //     [
        //         'customer_name.required' => 'Customer name no is required',
        //         'customer_name.max' => 'Customer name no accept maximum of 100 characters',
        //         'customer_name.regex' => 'Only alphanumeric space allowed here',

        //         'short_name.required' => 'Short name is required',
        //         'short_name.max' => 'Short name accept maximum of 50 characters',
        //         'short_name.regex' => 'Only alphanumeric space allowed here',

        //         // 'customer_gst.nullable' => 'Customer GST No. is required',
        //         'customer_gst.max' => 'Customer GST No. accept maximum of 100 characters',
        //         'customer_gst.regex' => 'Only alphanumeric space allowed here',
        //     ],
        // );
        try {
            // dd($request->all());
            // Add your user saving logic here
            //       DB Row Name       BackEnd Name
            // $desing = new DesingModel();
            // $desing->design_name = $request->design_name;
            // $desing->design_desc = $request->design_desc;
            // $desing->is_active =1;
            // // $desing->();
            // // dd('fdsgfdsg');
            // if ($desing->save()) {

            //     $response = [

            //         'status' => 1
            //     ];
            //     return $response;
            // }

            // DB::table('design')->insert([
            //     'design_name' => $request->design_name,
            //     'design_desc' => $request->design_desc,
            //     'is_active' => 1,
            //     'created_at' => now(),
            //     'updated_at' => now()
            // ]);


            $inserted = DB::table('design')->insert([
                'design_name' => $request->design_name,
                'design_desc' => $request->design_desc,
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            if ($inserted) {
                $response = [
                    'status' => 1

                ];
                return response()->json($response);
            }





        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
