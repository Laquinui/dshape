<?php

use App\Http\Controllers\MeasurementsController;
use App\Models\Measurements;
use Illuminate\Support\Facades\Route;

// Get - retornar coisas, vizual
// Post - mandar coisas

// //Quando acessar "/" retornar arquivo Landingpage                                                              
// Route::get('/', function () {
//     return view('landingpage');
// });

//Quando acessar "/measurements" retornar arquivo List  
Route::get('/measurements', [MeasurementsController::class, 'index']);

//Quando acessar "/measurements/new" retornar arquivo Form 
Route::get('/measurements/new', function (){
    return view('/measurements/form');
});

//Rota que salva no banco de dados uma nova medida
Route::post('/measurements/new', [MeasurementsController::class, 'store']);

//Rota que deleta medida no banco
Route::delete('/measurements/{id}', [MeasurementsController::class, 'destroy']);

//Rota que altera medida no banco
Route::put('/measurements/{id}', [MeasurementsController::class, 'update']);

//Rota que retorna uma medida específica no banco
Route::get('/measurements/{id}', [MeasurementsController::class, 'show']);


// // -- ÁREA DE LOGIN
//     //Quando acessar "/login" retornar arquivo Login 
//     Route::get('/login', function (){
//         return view('/auth/login');
//     });

//     //Quando acessar "/register" retornar arquivo Register 
//     Route::get('/register', function (){
//         return view('/auth/register');
//     });
// // -- fIM DA ÁREA DE LOGIN