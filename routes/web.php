<?php

use Illuminate\Support\Facades\Route;
use CraigPaul\Mail\TemplatedMailMessage;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/contact', function(Request $request){
    Mail::to('a.binmadhi@secure-transition.sa')->send(new Contact($request->name, $request->phone, $request->email, $request->message));
    return redirect()->back()->with('success', 'تم إرسال الرسالة بنجاح');
    
});