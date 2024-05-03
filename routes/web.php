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

Route::get('/meadvices',[AttendController::class , 'Meadvice']);

Route::POSt('/meadvices', [CreateController::class ,  'Meadvices']);

Route::delete('/meadvices/{meadvice}/',[AnnihilationController::class , 'Meadvice']);

Route::put('/meadvices/update/{meadvice}/',[AlterController::class , 'Meadvice']);

Route::get('/meadvices/edit/{meadvice}/' , [AttendController::class ,  'EditMeadvice']);
//////////////////////////////////////////////////////
Route::get('/extra',[AttendController::class , 'extra']);


//////////////////////////////////////////////////////////
// Route::get('extra/{id}/days',[CreaturesController::class , 'days']);

Route::get('/extra/{day}' , [AttendController::class , 'Days']);






Route::get('/extra/{id}/toodo',[AttendController::class , 'Toodo']);
Route::get('/extra/{id}/things',function(int $id){
    return view('humans.things',[
        'id'=>$id,
    ]);
});
Route::get('/extra/{id}/achives',function(int $id){
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