<?php

use App\Schedules\CalculateTagInfo;

Schedule::call(new CalculateTagInfo)->daily();
