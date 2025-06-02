<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FarmerController extends Controller
{
    // ✅ Farmer Registration API
   public function register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'phone' => 'required|unique:farmers',
        'password' => 'required|string|min:6',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'message' => 'Validation Error',
            'errors' => $validator->errors()
        ], 422);
    }

    dd($request->all()); // 🔍 Debug: Check incoming data
}

    // ✅ Get All Farmers for Admin Panel
    public function getFarmers()
    {
        try {
            $farmers = Farmer::all();
            return response()->json($farmers, 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error fetching farmers', 'error' => $th->getMessage()], 500);
        }
    }
}