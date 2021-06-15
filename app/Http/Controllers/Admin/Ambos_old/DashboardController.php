<?php

namespace App\Http\Controllers\Admin\Ambos_old;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.pages.site.index.index');
    }
}
