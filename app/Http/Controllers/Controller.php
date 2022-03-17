<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\BaseHttpController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseHttpController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
