<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function section()
    {

        $apartments = Apartment::latest()->with('category', 'landlord', 'city')->get();

        return view('admin.section', [
            'apartments' => $apartments
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

//    public function destroy($id)
//    {
//        Apartment::find($id)->delete();
//
//        return redirect()->back();
//    }

    public function destroy(Request $request)
    {
        Apartment::find($request->apartment_delete_id)->delete();

        return redirect()->back()->with('success', 'Apartment deleted!');
    }
}
