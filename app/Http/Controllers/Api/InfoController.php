<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InfoController extends Controller
{
    public function show()
    {
        return response()->json([
            'email' => 'osadiayesolomon@gmail.com', // change email to the one used to register on the HNG12 Slack workspace
            'current_datetime' => Carbon::now('UTC')->format('Y-m-d\TH:i:s\Z'),
            'github_url' => 'https://github.com/yourusername/your-repo'
        ]);
    }
}
