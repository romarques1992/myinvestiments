<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
// use DB;

class InvestimentController extends Controller
{
    public function index()
    {
        $investiments = DB::table('investiments')->paginate(3);
        return view('index', compact('investiments'));
    }

    public function show($id)
    {
        
        return view('show');
    }
}
