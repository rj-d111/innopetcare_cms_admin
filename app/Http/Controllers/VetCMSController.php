<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VetCMSController extends Controller
{

    public function preview(Request $request)
    {
        $name = $request->query('name');
        $logo = $request->query('logo');
        $navbarColor = $request->query('navbarColor');
        $appbarColor = $request->query('appbarColor');
        $desktopSections = json_decode($request->query('desktopSections'), true);
        $mobileSections = json_decode($request->query('mobileSections'), true);

        return view('vet-cms.preview-web', compact('name', 'logo', 'navbarColor', 'appbarColor', 'desktopSections', 'mobileSections'));
    }
}
