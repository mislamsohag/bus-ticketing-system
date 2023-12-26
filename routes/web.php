<?php


use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BusController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManagementController;

// Home page only for views
Route::view("/", "FrontEnd.index");
Route::view("/home", "FrontEnd.index");


Route::group(["prefix" => "admin"], function () {    
    Route::get("/", [AdminHomeController::class, "AdminHome"])->name('admin.home');
    Route::get("/analytics", [DashboardController::class, "DashboardAnalytics"])->name('dashboard.analytics'); 

    // All Buses
    Route::get("/buses", [BusController::class, "Buses"])->name('buses');

    //Add Bus
    Route::view("/buses-add", "Backend.Pages.Management.add-bus")->name('buses-add'); 
    // Bus Store
    Route::post("/buses-store", [StoreController::class, "Store"])->name('buses-store');
        
    
    // Bus Details Show
     Route::get("/bus-details/{id}", [BusController::class, "BusDetails"])->name('bus.details');
    // Edit Product Show
    Route::get("/bus-update/{id}", [BusController::class, "updateShow"])->name('bus-update');
    // Update Product
    Route::post("/bus.update/{id}", [BusController::class, "BusUpdate"])->name('bus.update');
    
     // Single product Delete
    Route::delete("/product-destroy/{id}", [BusController::class, "Destroy"])->name('product.destroy');




    Route::get("/sales", [ManagementController::class, "Sales"])->name('sales');
    Route::get("/parcels", [ManagementController::class, "ParcelDetails"])->name('parcels');
    Route::get("/passagers", [ManagementController::class, "Passagers"])->name('passagers');
    Route::get("/profiles", [ManagementController::class, "Profiles"])->name('profiles');
    


    // Login Page
    Route::get("/login", [LoginController::class, "Login"])->name('login');
    Route::POST("/login", [LoginController::class, "LoginPost"])->name('login.post');
    
    //SignUp Page
    Route::get("/sign-up", [SignUpController::class, "SignUp"])->name('sign-up');
    Route::POST("/sign-up", [SignUpController::class, "SignUpPost"])->name('sign-up.post');
    Route::get("/logout", [LogoutController::class, "Logout"])->name('logout');
    // Route::get("/logout", [LogoutController::class, "LogoutDestroy"])->name('logout');

});