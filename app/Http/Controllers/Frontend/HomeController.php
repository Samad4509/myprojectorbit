<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return  view('frontend.home.index');
    }
    public function allproduct()
    {
        // return "ok";
        return  view('frontend.product.index');
    }
    public function service()
    {
        // return "ok";
        return  view('frontend.service.index');
    }
    public function ecommerce()
    {
        // return "ok";
        return  view('frontend.ecommerce.index');
    }
    public function multivandor()
    {
        // return "ok";
        return  view('frontend.multivandor.index');
    }
    public function newspotral()
    {
        // return "ok";
        return  view('frontend.news-potral.index');
    }
    public function blogsite()
    {
        // return "ok";
        return  view('frontend.blogsite.index');
    }
    public function erp()
    {
        // return "ok";
        return  view('frontend.erp.index');
    }
    public function payroll()
    {
        // return "ok";
        return  view('frontend.payroll.index');
    }
    public function inventory()
    {
        // return "ok";
        return  view('frontend.inventory.index');
    }
    public function hrm()
    {
        // return "ok";
        return  view('frontend.hrm.index');
    }
    public function hosting()
    {
        // return "ok";
        return  view('frontend.hosting.index');
    }
    public function hotel()
    {
        // return "ok";
        return  view('frontend.hotel.index');
    }
    public function webdesign()
    {
        // return "ok";
        return  view('frontend.webdesign.index');
    }
    public function mobile()
    {
        // return "ok";
        return  view('frontend.mobile.index');
    }
    public function desktop()
    {
        // return "ok";
        return  view('frontend.desktop.index');
    }
    public function customer()
    {
        // return "ok";
        return  view('frontend.customer.index');
    }
    public function accounted()
    {
        // return "ok";
        return  view('frontend.accounted.index');
    }
    public function digitalmerkiting()
    {
        // return "ok";
        return  view('frontend.digitalmerkiting.index');
    }
    public function partner()
    {
        // return "ok";
        return  view('frontend.partner.index');
    }
}
