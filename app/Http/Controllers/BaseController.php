<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class BaseController extends Controller
{
    public function __construct()
    {
       parent::__call();
    }
}
