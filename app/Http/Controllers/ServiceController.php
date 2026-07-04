<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    public function index()
    {
        $services = __('motel.services');

        return view('services.index', compact('services'));
    }
}
