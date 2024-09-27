<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function get() {
        return Inertia::render('Dashboard', [
            'items' => Item::all()
        ]);
    }
}
