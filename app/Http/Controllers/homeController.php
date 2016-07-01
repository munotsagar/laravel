<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users  = \App\Homemodel::all();
        $config_items = \App\Homemodel::getData();
        echo "<pre>";
        print_r($users);
    }
}
