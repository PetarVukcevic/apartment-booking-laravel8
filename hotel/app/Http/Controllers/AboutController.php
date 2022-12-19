<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Apartment;
use App\Models\Badge;
use App\Models\Blog;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AboutController extends Controller
{

    public function page()
    {
        $about = About::first();
        $features = Feature::all();
        $blogs = Blog::all();
        $badges = Badge::all();

        return view('about.page', [
            'about' => $about,
            'features' => $features,
            'blogs' => $blogs,
            'badges' => $badges
        ]);

    }


    public function edit()
    {


        $about = About::first();
        return view('admin-about.edit', [
            'about' => $about
        ]);

    }

    public function update() {

        $about = About::first();

        $attributes = \request()->validate([
            'main_heading' => 'required',
            'main_helper' => 'required',
            'short_description' => 'required',
            'main_description' => 'required',
            'heading_one' => 'required',
            'description_one' => 'required',
            'heading_two' => 'required',
            'helper_two' => 'required',
            'signature_img_url' => 'image',
        ]);

        if (isset($attributes['signature_img_url'])) {
            $attributes['signature_img_url'] = 'storage/' . \request()->file('signature_img_url')->store('assets/images');
        }
        $about->update($attributes);

        return back()->with('success', 'About Us Page updated!');
    }

    public function features() {
        $features = Feature::all();

        return view('admin-about.features-table', [
            'features' => $features
        ]);
    }

    public function createFeature() {
        return view('admin-about.features-create');
    }

    public function storeFeature() {
        $attributes = \request()->validate([
            'title' => 'required',
            'description' => 'required',
            'about_id' => ''
        ]);
        $attributes['about_id'] = 1;
        Feature::create($attributes);

        return redirect('/admin-features');
    }

    public function destroy(Request $request)
    {
        Feature::find($request->feature_delete_id)->delete();

        return redirect()->back()->with('success', 'Apartment deleted!');
    }
}
