<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUscontroller;
use App\Http\Controllers\AboutUscontroller;

Route:: get('/',[HomeController::class,'Home']);
Route:: get('/contactus',[ContactUscontroller::class, 'Contactus']);
Route:: get('/aboutus',[aboutuscontroller::class, 'aboutus']);