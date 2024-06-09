<?php

use App\Models\Note;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $notes = Note::where('user_id',1)->get();
    return response()->json($notes);
});
