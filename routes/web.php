<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('dashboard', function () {return view('dashboard');});

Route::get('tokens', function () {return view('tokens');});

Route::get('lab', function () {return view('lab');});

Route::get('services', function () {return view('services');});

Route::get('pos', function () {return view('pos');});

Route::get('orders', function () {return view('orders');});

Route::get('inventory', function () {return view('inventory');});

Route::get('purchases', function () {return view('purchases');});

Route::get('expenses', function () {return view('expenses');});

Route::get('reports', function () {return view('reports');});

Route::get('stakeholders', function () {return view('stakeholders');});

Route::get('users', function () {return view('users');});

Route::get('settings', function () {return view('settings');});

Route::get('dashboard', function () {return view('dashboard');});

Route::get('dashboard', function () {return view('dashboard');});