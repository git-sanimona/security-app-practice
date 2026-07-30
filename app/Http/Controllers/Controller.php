<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showForm()
    {

        return view('contact.form');

    }

    protected function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required'
        ];
    }

    public function submit(Request $request)
    {
        $validated = $request->validate($this->rules());

        return view('contact.thanks', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

    }
}
