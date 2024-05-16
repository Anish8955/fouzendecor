<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index(){
        return view('admin.testimonial');
    }

    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|string',
            'content' => 'required|string',
            'status' => 'required|in:1,2', 
        ]);
        $status = (int) $request->status;

        Testimonial::create([
            'author' => $request->author,
            'content' => $request->content,
            'status' => $status,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('addtestimonial.show')->with('success', 'Testimonial added successfully');
    }

    public function list()
    {
        $testimonials = Testimonial::all();
        return view('admin.listtestimonials', compact('testimonials'));  
    }

    public function edit($testimonialId, Request $request){

        $testimonial = Testimonial::find($testimonialId);
        if(empty($testimonial)){
         return redirect()->route('listtestimonial.show');
        }
 
        return view('admin.testimonialedit',compact('testimonial'));
 
 
     }

     public function update(Request $request, Testimonial $testimonial)
     {
         // Validate the incoming data
         $request->validate([
             'author' => 'required|string',
             'content' => 'nullable|string',
             'status' => 'required|boolean',  // Ensure it's a boolean or compatible type
         ]);
     
         // Update the service with the new data
         $testimonial->update([
             'author' => $request->author,
             'content' => $request->content,
             'status' => filter_var($request->status, FILTER_VALIDATE_BOOLEAN),
         ]);
     
         // Redirect back with a success message
         return redirect()->route('listtestimonial.show')->with('success', 'Testimonial updated successfully');
     }

     public function delete(Testimonial $testimonial){
        $testimonial->delete();
        return redirect()->route('listtestimonial.show')->with('success','Testimonial deleted successfully');
    
      } 
    

}
