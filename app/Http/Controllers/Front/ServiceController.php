<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Home;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;
use App\Models\Section;
use App\Models\TypeReservations;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $home = Home::find(1);
        $reservations = TypeReservations::get();

        return view('website.service.type',compact('reservations','home'));
    }

    /**
     * start booking section
    */




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
    public function section(int $id)
    {

        $sections = Section::where('type_id',$id)->get();
        $home = Home::find(1);
            return view('website.service.section', compact('sections','home'));
    }

    public function product(int $id)
    {
        $home = Home::find(1);
        $products = Product::where('section_id',$id)->get();
        $section = Section::find($id);
        $type = TypeReservations::find($section->type_id);
            return view('website.service.product', compact('home','products','section','type'));
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
