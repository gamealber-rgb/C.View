<?php

namespace App\Http\Controllers;

use App\Support\WhatsApp;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'phone' => ['nullable', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:100'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        $whatsappMessage = __('motel.whatsapp.contact_form', [
            'name' => $validated['name'],
            'phone' => $validated['phone'] ?: '—',
            'email' => $validated['email'] ?: '—',
            'message' => $validated['message'],
        ]);

        return redirect(WhatsApp::url($whatsappMessage));
    }
}
