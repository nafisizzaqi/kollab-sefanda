<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\GalleryDetail;
use Illuminate\Routing\Controller;

class GalleryDetailController extends Controller
{
    public function show($slug)
    {
        $detail = GalleryDetail::where('slug', $slug)->first();

        if (!$detail) {
            return response()->json([
                'success' => false,
                'message' => 'Gallery detail not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $detail,
        ]);
    }
}
