<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use Illuminate\Http\Request;
use PDF;

class DonorController extends Controller
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
        $donors = Donor::paginate(20);
        return view('superadmin.donors.list',compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.donors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $request->validate([
                'name' => 'required',
            ]);

            // Create a new donor record
            $donor = new Donor();
            $donor->name = $request->name;
            $donor->amount = $request->amount;
            $donor->donation_date = $request->donation_date;
            $donor->email = $request->email;
            $donor->phone = $request->phone;
            $donor->pan_number = $request->pan_number;
            $donor->cause = $request->cause;
            $donor->save();
            $idd = 100000+$donor->id;
            Donor::find($donor->id)->update([
                'receipt_no' => 'CLCF' . $idd,
            ]);
            return redirect()->route('superadmin.donors.index')
                            ->with('success', 'Donor created successfully.');         
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $donor = Donor::find($id);
        $pdf = PDF::loadView('superadmin.donors.myPDF', $donor->toArray());
        $name = str_replace(' ', '_', $donor->name).'_'.$donor->receipt_no.'.pdf';
        return $pdf->download($name);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $donor = Donor::findOrFail($id);
        return view('superadmin.donors.edit', compact('donor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
                'name' => 'required',
            ]);

            // Create a new donor record
            $donor = Donor::find($id);
            $donor->name = $request->name;
            $donor->amount = $request->amount;
            $donor->email = $request->email;
            $donor->donation_date = $request->donation_date;
            $donor->phone = $request->phone;
            $donor->pan_number = $request->pan_number;
            $donor->cause = $request->cause;
            $donor->save();

            return redirect()->route('superadmin.donors.index')
                            ->with('success', 'Donor Updated successfully.');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donor = Donor::find($id);
        $donor->delete();
        // Redirect back to the donors index with a success message
         return redirect()->route('superadmin.donors.index')
                            ->with('success', 'Donor Deleted successfully.'); 
    }
}
