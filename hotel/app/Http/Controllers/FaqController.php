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


    public function editFaq($id)
    {
        $faq = Faq::find($id);

        return view('admin-faq.edit',
            [
                'faq' => $faq
            ]);
    }


    public function updateFaq(Faq $faq)
    {
        $attributes = \request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $faq->update($attributes);
        return back()->with('success', 'FAQ updated!');
    }


    public function destroy(Request $request)
    {
        Faq::find($request->faq_delete_id)->delete();

        return redirect()->back()->with('success', 'FAQ deleted!');
    }
}
