<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $userRole = auth()->user()->role;

        return match($userRole) {
            'admin' => view('admin.dashboard.admin'),
            'user' =>  view('admin.dashboard.default'),
            default => abort(403, 'Unauthorized action.'),
        };
    }


}
