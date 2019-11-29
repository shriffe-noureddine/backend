<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hello()
    {
        return 'Hello, World !';
    }

    public function movie($id)
    {
        return 'A movie, id : ' . $id;
    }

    public function form()
    {
        return view('Form');
    }

    public function submitForm()
    {
        return 'Form was submitted';
    }
}
