<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\TestimonialPlatform;

class TestimonialController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testimonialPlatforms = TestimonialPlatform::Active()->get();

        return view('testimonial.store', compact('testimonialPlatforms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $data = [

            'name' => $request->name,
            'content' => $request->content,
            'platform_id' => $request->platform_id,
            'order' => $request->order,
            'status' => $request->status,
        ];

        // $data['image']  = image_upload($request->file('image'), 'testimonials/');

        // Create a new testimonial image record
        Testimonial::create($data);

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Testimonial::with('platform')->find($id);

        return view('testimonial.view', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonialPlatforms = TestimonialPlatform::Active()->get();

        return view('testimonial.edit', compact('testimonial', 'testimonialPlatforms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



        $data = [

            'name' => $request->name,
            'content' => $request->content,
            'platform_id' => $request->platform_id,
            'order' => $request->order,
            'status' => $request->status,
        ];

        // if ($request->hasFile('image')) {
        //     $data['image']  = image_upload($request->file('image'), 'testimonials/');
        // }

        $testimonial = Testimonial::find($id);


        $testimonial->update($data);

        return redirect()->route('testimonials.index')->with('success', 'testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'testimonial deleted successfully.');
    }
}

