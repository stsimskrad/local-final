<?php

use Illuminate\Support\Facades\Route;

Route::get('/profile', function () {  return inertia('Scholarship/Profile/Index'); });
Route::get('/education', function () {  return inertia('Scholarship/Education/Index'); });
Route::get('/employment', function () {  return inertia('Scholarship/Employment/Index'); });
Route::get('/prospectus', function () {  return inertia('Scholarship/Prospectus/Index'); });
Route::get('/financial-benefits', function () {  return inertia('Scholarship/Financial/Index'); });