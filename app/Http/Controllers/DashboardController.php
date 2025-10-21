<?php

namespace App\Http\Controllers;


use Carbon\Carbon;

class DashboardController extends Controller
{
   public function index()
   {
       $user_id = auth()->user()->id;
       $currentMonthLimits = getCurrentMonthLimits();
       $currentMonthStats = TransactionController::showStats($user_id, new Carbon($currentMonthLimits[0]),new Carbon($currentMonthLimits[1]));
       $currentDayStats = TransactionController::showStats($user_id, now()->startOfDay(), now()->endOfDay());

       return view('dashboard', [
           'currentMonthStats' => $currentMonthStats,
           'currentDayStats' => $currentDayStats,
       ]);
   }
}
