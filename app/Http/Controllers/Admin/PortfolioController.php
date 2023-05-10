<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // admin/portfolio/createを呼び出す
    public function add()
    {
        return view('admin.portfolio.create');
    }
}
