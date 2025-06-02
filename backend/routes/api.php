
<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FarmerController;

//authenticated routes
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//un authenticated routes
Route::post('/login', [AuthController::class, 'login']);


//auth as middleware
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

//reg farmer route


Route::post('/register-farmer', [FarmerController::class, 'register']);




// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\FarmerController;

// // ✅ Enable CSRF Protection & CORS
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
// header('Access-Control-Allow-Headers: Content-Type, Authorization');

// // 🔹 Authenticated Routes (Protected APIs)
// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/user', function (Request $request) {
//         return $request->user();
//     });

//     Route::post('/logout', [AuthController::class, 'logout']); // ✅ Logout with Sanctum Auth
// });

// // 🔹 Public Routes (Unprotected APIs)
// Route::post('/login', [AuthController::class, 'login']); // ✅ Login API
// Route::post('/register-farmer', [FarmerController::class, 'register']); // ✅ Farmer Registration API

// // 🔹 Admin Routes (Access Control for Admin Panel)
// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/admin/farmers', [FarmerController::class, 'getFarmers']); // ✅ Admin Panel - Farmer List
// });