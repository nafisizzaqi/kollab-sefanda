<?php

namespace App\Http\Controllers\Api;

use App\Models\gallery;
use Illuminate\Http\Request;

class GalleryController
{
    public function index()
    {
        $galleries = gallery::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Data gallery retrieved successfully',
            'data' => $galleries
        ]);
    }
}
