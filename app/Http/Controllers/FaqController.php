<?php

namespace App\Http\Controllers;

class FaqController extends Controller
{
    public function index()
    {
        return redirect(route('about').'#faq', 301);
    }
}
