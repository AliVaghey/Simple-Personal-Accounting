<?php

namespace App\Http\Controllers;


use Carbon\Carbon;

class DashboardController extends Controller
{
   public function index()
   {
       $currentMonthLimits = getCurrentMonthLimits();
       $currentMonthStats = TransactionController::showStats(new Carbon($currentMonthLimits[0]),new Carbon($currentMonthLimits[1]));
       $currentDayStats = TransactionController::showStats(now()->startOfDay(), now()->endOfDay());

       return view('dashboard', [
           'currentMonthStats' => $currentMonthStats,
           'currentDayStats' => $currentDayStats,
       ]);
   }
}
