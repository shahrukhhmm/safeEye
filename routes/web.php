<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\SubAdmin\SaleController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\SubAdmin\AttendanceController;
use App\Http\Controllers\Admin\InventoryCategoryController;
use App\Http\Controllers\SuperAdmin\SaleController as SuperAdminSaleController;

Route::redirect('/', '/dashboard');


Route::get('register', [AuthController::class, 'registerPage'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');
Route::get('login', [AuthController::class, 'loginPage'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');



Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::get('/all-branch-sales', [SaleController::class, 'allBranchSales'])->name('branch.allSales');



    //================ user

    Route::get('/user', [UserController::class, 'index'])->name('user');

    Route::get('/users-list', [UserController::class, 'getUsers'])->name('user.list');

    // add user
    Route::post('/add-user',                     [UserController::class, 'addUser'])->name('user.add');

    // edit user
    Route::get('/edit-user/{id}',                [UserController::class, 'editUser'])->name('user.edit');

    // update user
    Route::get('/update-user',                   [UserController::class, 'updateUser'])->name('user.update');

    // user delete
    Route::get('/user-delete/{id}',              [UserController::class, 'deleteUser'])->name('user.delete');


    // profile user
    Route::get('/profile-user',                   [UserController::class, 'profileUser'])->name('user.profile');





    //================ branch



    Route::get('/branch', [BranchController::class, 'index'])->name('branch');

    // change the user to branch


    Route::get('/branch-inventory-list', [BranchController::class, 'getBranchInventory'])->name('Branchinventory.list');

    Route::get('/branch-sale-list', [BranchController::class, 'getBranchSale'])->name('Branchsale.list');


    Route::get('/branches-list', [BranchController::class, 'getBranch'])->name('branch.list');

    // add branch
    Route::post('/add-branch',       [BranchController::class, 'addBranch'])->name('branch.add');

    // detail branch
    Route::get('/branch-detail/{id}',  [BranchController::class, 'detailBranch'])->name('branch.detail');

    // edit branch
    Route::get('/edit-branch/{id}',  [BranchController::class, 'editBranch'])->name('branch.edit');

    // update branch
    Route::get('/update-branch',     [BranchController::class, 'updateBranch'])->name('branch.update');

    // branch delete
    Route::get('/branch-delete/{id}',[BranchController::class, 'deleteBranch'])->name('branch.delete');




    //================ Inventory

     Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');

     // change the Inventory


     Route::get('/inventory-list', [InventoryController::class, 'getInventory'])->name('inventory.list');

     // add
     Route::post('/add-inventory', [InventoryController::class, 'addinventory'])->name('inventory.add');

    //  // edit
     Route::get('/edit-inventory/{id}',[InventoryController::class, 'editinventory'])->name('inventory.edit');

    //  // update
     Route::post('/update-inventory', [InventoryController::class, 'updateinventory'])->name('inventory.update');

     Route::get('/inventory-delete/{id}', [InventoryController::class, 'deleteinventory'])->name('inventory.delete');




    //================ Inventory Category

    Route::get('/inventoryCategory', [InventoryCategoryController::class, 'index'])->name('CAtegory');

    // change the InventoryCategory


    Route::get('/inventoryCategory-list', [InventoryCategoryController::class, 'getInventoryCategory'])->name('inventoryCategory.list');

    // add branch
    Route::post('/add-inventoryCategory', [InventoryCategoryController::class, 'addinventoryCategory'])->name('inventoryCategory.add');

   //  // edit branch
    Route::get('/edit-inventoryCategory/{id}',[InventoryCategoryController::class, 'editinventoryCategory'])->name('inventoryCategory.edit');

   //  // update branch
    Route::post('/update-inventoryCategory', [InventoryCategoryController::class, 'updateinventoryCategory'])->name('inventoryCategory.update');

    Route::get('/inventoryCategory-delete/{id}', [InventoryCategoryController::class, 'deleteinventoryCategory'])->name('inventoryCategory.delete');








    // --------------=========Sub Admin


    Route::get('/sales', [SaleController::class, 'index'])->name('sale.index');

    Route::get('/invoice/{sale}', [SaleController::class, 'show'])->name('invoice.show');

    Route::post('/sales', [SaleController::class, 'store'])->name('sales.store');




    // =================== user attendance

      // index
      Route::get('/user-attendance', [AttendanceController::class,'index'])->name('user-attandace');

      // load user data
      Route::get('/user-dashboard-data', [AttendanceController::class,'loadData'])->name('load-data');





});
