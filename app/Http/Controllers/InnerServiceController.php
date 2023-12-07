<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InnerService;
use App\Models\Service;

class InnerServiceController extends Controller
{

    public function show($slug){
        $service = Service::where('slug', $slug)->first()->id;
        $data = InnerService::where('service_id',$service)->get();
        // return d($data);

        return view('innerServices.index', compact('data','service'));
    }


    public function edit(Request $request,$id)
    {
        $service = InnerService::findOrFail($id);
        // return dd($service, $request);
        
        return view('innerServices.edit', compact('service'));
    }
    public function update(Request $request, $id){
        $service = InnerService::findOrFail($id);

        $data = [

            'heading' => $request->title,
            'slug' => $request->slug,
            'para' => $request->para,
            'status' => $request->status,
            'image' => $request->file('image')

        ];

        // if ($request->hasFile('image')) {
        //     // $data['image']  = image_upload($request->file('image'), 'services/');
        // }

        // return dd($data);
        $service->update($data);
        $slug = Service::findOrFail($service->service_id)->slug;
        return redirect()->route('showTab', $slug)->with('success', 'Inner services data updated successfully.');

    }

    public function create(Request $request, $id)
    {

        if($request->method()=='GET'){
            return view('innerServices.store', compact('id'));
        }
        elseif($request->method()=='POST'){
            $data = [

                'heading' => $request->title,
                'slug' => $request->slug,
                'para' => $request->para,
                'status' => $request->status,
    
            ];
    
            if ($request->hasFile('image')) {
                $data['image']  = $request->file('image');
            }

            $data['service_id'] = $id;

            InnerService::create($data);
            $slug = Service::findOrFail($id)->slug;
            return redirect()->route('showTab', $slug)->with('success', 'Inner services data created successfully.');

    
                }
        else{
            return dd($request->method());
        }
    }
    public function view($id)
    {
        $service = InnerService::findOrFail($id);
        return view('innerServices.view', compact('service'));
    }
    public function destroy($id)
    {
        $service = InnerService::findOrFail($id);

        $slug = Service::findOrFail($service->service_id)->slug;

        $service->delete();

        return redirect()->route('showTab', $slug)->with('success', 'Inner services data Deleted successfully.');
    }

}
