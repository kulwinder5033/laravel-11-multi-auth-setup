<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Cases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use PDF;

class CaseController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:superadmin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cases = Cases::paginate(20);
        return view('superadmin.cases.list',compact('cases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $image_url  = URL::to('assets/media/avatars/300-3.jpg');
        return view('superadmin.cases.create',compact('image_url'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $request->validate([
                'title' => 'required',
                'status' => 'required|in:Current,Past',
                'publish' => 'required|in:Active,Unactive',
                'order' => 'nullable|integer',
            ]);

            // Create a new Case
            $case = new Cases();
            $case->title = $request->title;
            $case->content = $request->content;
            $case->order = $request->order ?? 1;
            $case->status = $request->status;
            $case->publish = $request->publish;

            if($request->hasfile('image')){

                $image      = $request->file('image');

                $name       = $image->getClientOriginalName();

                $image->storeAs('uploads/case/image/', $name, 'public');

                $case->image = $name;

            }
            if($request->hasfile('pdf_file')){

                $image      = $request->file('pdf_file');

                $name       = $image->getClientOriginalName();

                $image->storeAs('uploads/case/pdf_file/', $name, 'public');

                $case->pdf_file = $name;

            }
           
            $case->save();

            return redirect()->route('superadmin.cases.index')
                            ->with('success', 'Case created successfully.');         
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $case = Cases::findOrFail($id);
        $case->image  = isset($case->image) ? asset('storage/uploads/case/image/'.$case->image) : URL::to('assets/media/avatars/300-3.jpg') ;
        return view('superadmin.cases.edit', compact('case'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
                'title' => 'required',
                'status' => 'required|in:Current,Past',
                'publish' => 'required|in:Active,Unactive',
                'order' => 'nullable|integer',
            ]);

            // Update the Case
            $case = Cases::findOrFail($id);
            $case->title = $request->title;
            $case->content = $request->content;
            $case->order = $request->order ?? 1;
            $case->status = $request->status;
            $case->publish = $request->publish;

            if($request->hasfile('image')){

                $image      = $request->file('image');

                $name       = $image->getClientOriginalName();

                $image->storeAs('uploads/case/image/', $name, 'public');

                $case->image = $name;

            }
            if($request->hasfile('pdf_file')){

                $image      = $request->file('pdf_file');

                $name       = $image->getClientOriginalName();

                $image->storeAs('uploads/case/pdf_file/', $name, 'public');

                $case->pdf_file = $name;

            }
           
            $case->save();

            return redirect()->route('superadmin.cases.index')
                            ->with('success', 'Case updated successfully.');       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donor = Cases::find($id);
        $donor->delete();
        // Redirect back to the donors index with a success message
         return redirect()->route('superadmin.cases.index')
                            ->with('success', 'Case Deleted successfully.'); 
    }
}
