<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;
use App\Http\Resources\testResource;

class test extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       return Response()->json( test::all() );
    }

}
