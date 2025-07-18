<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalBookings = Booking::count();

        return view('dashboard', compact('totalUsers', 'totalBookings'));
    }

    public function dashboard()
    {
        $bookings = Booking::latest()->take(5)->get(); // or ->where('user_id', auth()->id())
        return view('dashboard', compact('bookings'));
    }
}

