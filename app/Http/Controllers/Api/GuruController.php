<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class GuruController
{
    public function index()
    {
        $gurus = \App\Models\Guru::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Data guru retrieved successfully',
            'data' => $gurus
        ]);
    }
}
