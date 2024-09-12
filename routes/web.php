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

Route::post('/meadvices', [CreateController::class ,  'Meadvice']);

Route::delete('/meadvices/{meadvice}/',[AnnihilationController::class , 'Meadvice']);

Route::put('/meadvices/update/{meadvice}/',[AlterController::class , 'Meadvice']);

Route::get('/meadvices/edit/{meadvice}/' , [AttendController::class ,  'EditMeadvice']);
//////////////////////////////////////////////////////
Route::get('/extra',[AttendController::class , 'extra']);



Route::post('/extra' ,[CreateController::class , 'extra']);


Route::delete('/extra/{day}' ,[AnnihilationController::class , 'extra']);


//////////////////////////////////////////////////////////
// Route::get('extra/{id}/days',[CreaturesController::class , 'days']);

Route::get('/extra/{day}' , [AttendController::class , 'Days'])->name('day.show');




///////////////////////////////////////////////////////////////////
Route::get('/extra/{day}/toodo',[AttendController::class , 'Toodo']);

Route::post('/extra/{day}/toodo',[CreateController::class , 'Toodo']);


Route::put('/extra/{day}/toodo/update/{toodo}',[AlterController::class , 'Toodo']);

Route::put('/extra/{day}/toodo/{id}',[AlterController::class , 'is_done' ]);

Route::get('/extra/{day}/toodo/{toodo}/',[AttendController::class , 'EditToodo' ]);

Route::delete('/extra/{day}/toodo/{toodo}/',[AnnihilationController::class , 'Toodo' ]);

///////////////////////////////////////////////////////////////////////////////

Route::get('/extra/{day}/things',[AttendController::class , 'Thing']);


Route::post('/extra/{day}/goodthing',[CreateController::class , 'GoodThing']);


Route::post('/extra/{day}/badthing',[CreateController::class , 'BadThing']);


Route::get('/extra/{day}/badthing/{thing}',[AttendController::class , 'EditBadThing']);

Route::get('/extra/{day}/goodthing/{thing}',[AttendController::class , 'EditGoodThing']);

Route::put('/extra/{day}/goodthing/{thing}',[AlterController::class ,  'GoodThing']);

Route::put('/extra/{day}/badthing/{thing}',[AlterController::class ,  'BadThing']);

Route::delete('/extra/{day}/goodthing/{thing}',[AnnihilationController::class ,  'GoodThing']);

Route::delete('/extra/{day}/badthing/{thing}',[AnnihilationController::class ,  'BadThing']);

//////////////////////////////////////////////////////////////////////////////////
Route::get('/extra/{day}/achives',[AttendController::class , 'Achive']);

Route::post('/extra/{day}/achives',[CreateController::class , 'Achive']);



Route::get('/extra/{day}/achive/{achive}' , [AttendController ::class , 'EditAchive']);

Route::put('/extra/{day}/achive/{achive}' , [AlterController ::class , 'Achive']);


Route::delete('/extra/{day}/achive/{achive}', [AnnihilationController ::class , 'Achive']);


/////////////////////////////////////////////////////////

Route::get("/notes",[AttendController::class,'Topics']);

Route::delete('/notes/{top}',[AnnihilationController::class,'Topics']);


Route::get('/notes/edit/{note}',[AttendController::class , 'EditNotes']);

Route::put('/notes/edit/{note}',[AlterController::class , 'Notes']);


Route::get('/notes/{top}/{stop}',[AttendController::class ,'Notes' ]);

Route::post('/notes/{top}',[CreateController::class ,'SubTopics' ]);

Route::post('/notes',[CreateController::class , 'Topics']);












Route::put('/subtopics/{stop}',[AnnihilationController::class , 'SubTopics']);
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


Route::get('/timer',function(){
    return view('humans.timer');
});
Route::fallback([Error::class , 'show']);