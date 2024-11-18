<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('nagarpalika-home.main-home.home');
    }

    public function aboutUs()
    {
        return view('nagarpalika-home.hamara.index');
    }
    
    public function departmentObjective()
    {
        return view('nagarpalika-home.hamara.department');
    }
    public function overview()
    {
        return view('nagarpalika-home.hamara.overview');
    }
    
    public function organizationalStructure()
    {
        return view('nagarpalika-home.hamara.organizationalStructure');
    }
    
    public function department()
    {
        return view('nagarpalika-home.department');
    }
    
    public function services()
    {
        return view('nagarpalika-home.services');
    }
    
    public function accountingAndFinance()
    {
        return view('nagarpalika-home.accountingAndFinance');
    }
    
    public function plans()
    {
        return view('nagarpalika-home.plans');
    }

    public function societyProfile()
    {
        return view('nagarpalika-home.hamara.society-profile');
    }

    public function townActivity()
    {
        return view('nagarpalika-home.hamara.town-profile');
    }

    public function mailView()
    {
        return view('nagarpalika-home.hamara.mail');
    }

    public function chairmanView()
    {
        return view('nagarpalika-home.hamara.chairman');
    }

    public function targetView()
    {
        return view('nagarpalika-home.hamara.target');
    }

    public function dutyView()
    {
        return view('nagarpalika-home.hamara.duty');
    }

    public function financialView()
    {
        return view('nagarpalika-home.hamara.financial');
    }

    public function serviceIndex()
    {
        return view('nagarpalika-home.service.index');
    }

    public function nividaView()
    {
        return view('nagarpalika-home.nivida.index');
    }

    public function budgetView()
    {
        return view('nagarpalika-home.budget.index');
    }

    public function suchnaView()
    {
        return view('nagarpalika-home.suchna.index');
    }

    public function citizenView()
    {
        return view('nagarpalika-home.suchna.citizen');
    }

    public function appealView()
    {
        return view('nagarpalika-home.appeal.index');
    }

    public function photoView()
    {
        return view('nagarpalika-home.photo-gallery.photo');
    }

    public function videoView()
    {
        return view('nagarpalika-home.photo-gallery.video');
    }

    public function mapView()
    {
        return view('nagarpalika-home.contact-us.map');
    }

    public function contactView()
    {
        return view('nagarpalika-home.contact-us.contact');
    }

    public function privacyPolicy()
    {
        return view('nagarpalika-home.policy-pages.privacy');
    }

    public function refundPolicy()
    {
        return view('nagarpalika-home.policy-pages.refund');
    }

    public function termsPolicy()
    {
        return view('nagarpalika-home.policy-pages.terms');
    }
    
    
}
