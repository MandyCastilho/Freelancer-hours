<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'projects.index')->name('projects.indexx');

Route::view('/project/{project}', 'projects.show')->name('projects.show');

