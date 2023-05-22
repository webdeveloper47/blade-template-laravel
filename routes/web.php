<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;


// Route::get('/', function () {
//     return view('welcome');
// });


// Answer to the quetion- 01



Route::post('/hello', function (Request $request) {
    $name = $request->input('name');
    return "my Name is {$name}"; 
});


// Answer to the quetion- 02


Route::get('/example', function (Request $request) {
    $userAgent = $request->header('User-Agent');
    return $userAgent;
});



// Answer 03 in api.php


 // Answer to the quetion- 04


Route::get('/example1', function () {
    $data = [
        'message' => 'Success',
        'data' => [
            'name' => 'John Doe',
            'age' => 25
        ]
    ];

    return response()->json($data);
});




Route::get('/example2', function () {
    $data = [
        'message' => 'Success',
        'data' => [
            'name' => 'John Doe',
            'age' => 25
        ]
    ];

    return new JsonResponse($data);
});

 // Answer to the quetion- 05



Route::post('/upload', function (Request $request) {
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();

        $path = $file->storeAs('uploads', $filename, 'public');

        

        return "File uploaded successfully!";
    }

    return "No file uploaded!";
});



 // Answer to the quetion- 06

Route::any('/example3', function (Request $request) {
    $rememberToken = $request->cookie('remember_token', null);
    return $rememberToken;
});


 // Answer to the quetion- 07


Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

   
    $responseData = [
        'success' => true,
        'message' => 'Form submitted successfully.'
    ];

    return response()->json($responseData);
});





