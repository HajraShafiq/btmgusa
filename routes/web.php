<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/python', function () {
    return view('python');
})->name('python');

Route::get('/excel', function () {
    return view('excel');
})->name('excel');

Route::get('/microservices', function () {
    return view('microservices');
})->name('microservices');


Route::get('/agileandaIscrummaster', function () {
    return view('agileandaIscrummaster');
})->name('agileandaIscrummaster');

Route::post('/python-register', function (Request $request) {

    $messageText =
        "New Python Course Registration\n\n" .
        "Full Name: " . $request->fullName . "\n" .
        "Email: " . $request->email . "\n" .
        "Phone: " . ($request->phone ?? 'N/A') . "\n" .
        "Registration Type: " . $request->type . "\n\n" .
        "Message:\n" . ($request->message ?? 'N/A');

    Mail::raw($messageText, function ($message) {
        $message->to('yourgmail@gmail.com')
                ->subject('New Python Registration - BTMGUSA');
    });

    return back()->with('success', 'Thank you! Your registration has been submitted. Our team will contact you soon');
})->name('python.register');



Route::post('/registration-send', function (Request $request) {

    $emailBody =
        "Excel Registration Received\n\n" .
        "Full Name: {$request->fullName}\n" .
        "Email: {$request->email}\n" .
        "Phone: {$request->phone}\n" .
        "Registration Type: {$request->type}\n\n" .
        "Message:\n" . ($request->message ?? 'N/A');

    Mail::raw($emailBody, function ($message) {
        $message->to('yourgmail@gmail.com')
                ->subject('New Registration - BTMGUSA');
    });

    return back()->with('success', 'Registration submitted successfully! Our team will contact you soon');
})->name('registration.send');



Route::post('/microservices-send', function (Request $request) {

    $mailText =
        "New Microservices Registration\n\n" .
        "Full Name: {$request->fullName}\n" .
        "Email: {$request->email}\n" .
        "Phone: {$request->phone}\n" .
        "Registration Type: {$request->type}\n\n" .
        "Message:\n" . ($request->message ?? 'N/A');

    Mail::raw($mailText, function ($message) {
        $message->to('yourgmail@gmail.com')
                ->subject('Microservices Registration - BTMGUSA');
    });

    return back()->with('success', 'Thank you! Your registration has been submitted. Our team will contact you soon');
})->name('microservices.send');




Route::post('/agileandaIscrummaster', function (Request $request) {

    $emailBody =
        "New AgileandAIScrumMaster Registration\n\n" .
        "Full Name: {$request->agileandaIscrummaster}\n" .
        "Email: {$request->email}\n" .
        "Phone: {$request->phone}\n" .
        "Registration Type: {$request->type}\n\n" .
        "Message:\n" . ($request->message ?? 'N/A');

    Mail::raw($emailBody, function ($message) {
        $message->to('yourgmail@gmail.com') // replace with your Gmail
                ->subject('Microservices Registration - BTMGUSA');
    });

    return back()->with('success', 'Thank you! Your registration has been submitted.our team will contact you soon');
})->name('agileandaIscrummaster');



Route::post('/contact-send', function (Request $request) {

    $emailBody =
        "New Contact Form Submission\n\n" .
        "Full Name: {$request->fullName}\n" .
        "Email: {$request->email}\n" .
        "Message:\n{$request->message}";

    Mail::raw($emailBody, function ($message) {
        $message->to('yourgmail@gmail.com') // replace with your Gmail
                ->subject('Contact Form Submission - BTMGUSA');
    });

    return back()->with('success', 'Thank you! Your message has been sent.');
})->name('contact.send');


Route::post('/request-send', function (Request $request) {

    $emailBody =
        "New Request Form Submission\n\n" .
        "Full Name: {$request->fullName}\n" .
        "Email: {$request->email}\n" .
        "Company Name: {$request->companyName}\n" .
        "Contact Number: {$request->countryCode} {$request->contactNumber}\n" .
        "Brief Requirement: {$request->briefRequirement}";

    Mail::raw($emailBody, function ($message) {
        $message->to('yourgmail@gmail.com') // replace with your Gmail
                ->subject('New Request Form Submission - BTMGUSA');
    });

    return back()->with('success', 'Thank you! Your request has been sent.');
})->name('request.send');




