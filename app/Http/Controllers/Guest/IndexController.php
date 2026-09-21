<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Cases;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('guest.homepage.index');
    }

    public function aboutUs() {
        return view('guest.about-us');
    }

    public function termsAndConditions() {
        return view('guest.terms-and-conditions');
    }

    public function privacyPolicy() {
        return view('guest.privacy-policy');
    }

    public function contactUs() {
        return view('guest.contact-us');
    }

    public function medicalHelp() {
        $cases = Cases::where('publish','Active')->orderBy('order')->get();

        return view('guest.medical-help', [
            'cases'   => $cases,
            'current' => $cases->where('status', 'Current'),
            'past'    => $cases->where('status', 'Past'),
        ]);
    }

    public function caseDetail($id) {
        $case = Cases::where('publish','Active')->findOrFail($id);

        $related = Cases::where('publish','Active')
            ->where('id', '!=', $case->id)
            ->where('status', 'Current')
            ->orderBy('order')
            ->take(3)
            ->get();

        return view('guest.case-detail', compact('case','related'));
    }

    public function udaan() {
        return view("guest.udaan");
    }

    public function gallery() {
        return view('guest.gallery');
    }
    
    public function donation() {
        return view('guest.donation');
    }
}
