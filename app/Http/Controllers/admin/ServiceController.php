<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('admin.showservice');
    }

    public function store(Request $request)
    {
      
      
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',  // For simplicity, store image name or URL
            'status' => 'required|in:1,2', 
        ]);
        $status = (int) $request->status;

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_url' => $request->image,
            'status' => $status,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('addservice.show')->with('success', 'Service added successfully');
    }

    public function list(){
        $services = Service::all();  // Retrieve all services
        return view('admin.listservice', compact('services'));
    }

    public function edit($serviceId, Request $request){

        $service = Service::find($serviceId);
        if(empty($service)){
         return redirect()->route('listservice.show');
        }
 
        return view('admin.serviceedit',compact('service'));
 
 
     }
    
     public function update(Request $request, Service $service)
{
    // Validate the incoming data
    $request->validate([
        'name' => 'required|string',
        'description' => 'nullable|string',
        'price' => 'nullable|numeric',
        'image' => 'nullable|string',
        'status' => 'required|boolean',  // Ensure it's a boolean or compatible type
    ]);

    // Update the service with the new data
    $service->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'image_url' => $request->image,
        'status' => filter_var($request->status, FILTER_VALIDATE_BOOLEAN),
    ]);

    // Redirect back with a success message
    return redirect()->route('listservice.show')->with('success', 'Service updated successfully');
}

  public function delete(Service $service){
 
    $service->delete();
    return redirect()->route('listservice.show')->with('success','service deleted successfully');

  } 

  



}
