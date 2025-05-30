<?php

namespace App\Http\Controllers\Api;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController
{
    public function index()
    {
        $abouts = About::first();
        return response()->json([
            'status' => 'success',
            'message' => 'Data about retrieved successfully',
            'data' => $abouts
        ]);
    }
}
