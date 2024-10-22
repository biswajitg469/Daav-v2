<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.product_add');
    }

    public function manage_product_View()
    {
        return view('product.manage_products');
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
    public function product_add(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'product_name' => 'required|max:50|regex:/^[A-Za-z0-9\s]+$/i',
                'product_desc' => 'required|max:100|regex:/^[A-Za-z\s]+$/i',
                'product_price' => 'required|max:20|regex:/^[0-9\s]+$/i',

            ],
            [
                'product_name.required' => 'Customer name no is required',
                'product_name.max' => 'Customer name no accept maximum of 50 characters',
                'product_name.regex' => 'Only alphanumeric space allowed here',

                'product_desc.required' => 'Short name is required',
                'product_desc.max' => 'Short name accept maximum of 100 characters',
                'product_desc.regex' => 'Only alphanumeric space allowed here',

                // 'customer_gst.nullable' => 'Customer GST No. is required',
                'product_price.max' => 'Customer GST No. accept maximum of 100 characters',
                'product_price.regex' => 'Only Number allowed here',
            ],
        );
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


            $inserted = DB::table('product')->insert([
                'product_name' => $request->product_name,
                'product_desc' => $request->product_desc,
                'product_price' => $request->product_price,
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
