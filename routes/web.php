<?php

use App\Http\Controllers\AlterController;
use App\Http\Controllers\AnnihilationController;
use App\Http\Controllers\AttendController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\CreaturesController;
use App\Http\Controllers\Error;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AttendController::class,'Rule']);

Route::post('/', [CreateController::class , 'Rule']);

Route::delete('/{rule}',[AnnihilationController::class , 'Rule']);

Route::get('/edit/{rule}/' , [AttendController::class ,  'EditRule']);

Route::put('/update/{rule}/',[AlterController::class , 'Rule']);


/////////////////////////////////////////////////////////////////////

Route::get('/objectives',[AttendController::class , 'Objective']);

Route::post('/objectives', [CreateController::class , 'Objective']);

Route::delete('/objectives/{objective}/',[AnnihilationController::class , 'Objective']);

Route::get('/objectives/edit/{objective}/' , [AttendController::class ,  'EditObjective']);

Route::put('/objectives/update/{objective}/',[AlterController::class , 'Objective']);

//////////////////////////////////////////////////////////////

Route::get('/meadvices', [CreaturesController::class , 'me_advices']);






Route::get('/extra',[CreaturesController::class , 'extra']);



Route::get('/day/{id}',[CreaturesController::class , 'days']);

Route::get('/day/{id}/toodo',[CreaturesController::class , 'todo']);

Route::get('/day/{id}/things',function(int $id){
    return view('humans.things',[
        'id'=>$id,
    ]);
});
Route::get('/day/{id}/achives',function(int $id){
    return view('humans.achives',[
        'id'=>$id,
    ]);
});
Route::get('/notes',function(){
    return view('eve.notes');
});

Route::get('/timer',function(){
    return view('humans.timer');
});
Route::fallback([Error::class , 'show']);