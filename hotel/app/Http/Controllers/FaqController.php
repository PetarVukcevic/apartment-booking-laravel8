<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Feature;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function page()
    {
        $faq = Faq::all();

        return view('faq.page', [
            'faq' => $faq
        ]);
    }


    public function create()
    {
        return view('admin-faq.create');
    }


    public function store()
    {
        $attributes = \request()->validate([
            'title' => 'required',
            'description' => 'required',
            'collapse' => ''
        ]);
        $attributes['collapse'] = $attributes['title'];
        Faq::create($attributes);

        return redirect('/admin-faqs');
    }

    public function show()
    {
        $faqs = Faq::all();

        return view('admin-faq.faq-table',[
            'faqs' => $faqs
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        //
    }


    public function destroy(Request $request)
    {
        Faq::find($request->faq_delete_id)->delete();

        return redirect()->back()->with('success', 'FAQ deleted!');
    }
}
