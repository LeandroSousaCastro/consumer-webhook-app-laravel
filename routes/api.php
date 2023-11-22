<?php

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::middleware('guest')->group(
    function () {
        Route::get('/test', function (Request $request) {
            Storage::disk('public')->put('test.json', json_encode($request->all()));
            return response()->json([
                'success' => true,
                'message' => 'Test Request GET Successful',
                'received_body' => $request->all()
            ], 200);
        });
        Route::post('/test', function (Request $request) {
            Storage::disk('public')->put('test.json', json_encode($request->all()));
            return response()->json([
                'success' => true,
                'message' => 'Test Request POST Successful',
                'received_body' => $request->all()
            ], 200);
        });
    }
);
