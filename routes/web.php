<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\UserController;



// Route::get('/', function () {
//     return view('dashboard');
// });



Route::redirect('/', '/dashboard');


Route::get('register', [AuthController::class, 'registerPage'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.post');
Route::get('login', [AuthController::class, 'loginPage'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');



Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');


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


    Route::get('/branches-list', [BranchController::class, 'getBranch'])->name('branch.list');

    // add branch
    Route::post('/add-branch',                     [BranchController::class, 'addBranch'])->name('branch.add');

    // edit branch
    Route::get('/edit-branch/{id}',                [BranchController::class, 'editBranch'])->name('branch.edit');

    // update branch
    Route::get('/update-branch',                   [BranchController::class, 'updateBranch'])->name('branch.update');

    // branch delete
    Route::get('/branch-delete/{id}',              [BranchController::class, 'deleteBranch'])->name('branch.delete');

});
