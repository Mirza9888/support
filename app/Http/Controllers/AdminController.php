<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct(){

        $this->middleware(IsAdmin::class);




    }
    public function index(){


        return 'You are and administrator because you are beautiful and seeing this page';

    }
    //
}
