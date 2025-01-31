<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InfoController extends Controller
{
    public function show()
    {
       $data = [
            'email' => 'bolufunmiluyi@gmail.com',
            'current_datetime' => Carbon::now('UTC')->format('Y-m-d\TH:i:s\Z'),
            'github_url' => 'https://github.com/Boluwatife01-bea/hng_gopher'
        ];
        
        return response(json_encode($data, JSON_UNESCAPED_SLASHES))
            ->header('Content-Type', 'application/json');
    }
}
