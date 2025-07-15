<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function SiteSetting()
    {
        // return "ok";
        return view('admin.site.setting');
    }
}
