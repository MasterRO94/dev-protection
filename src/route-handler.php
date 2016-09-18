<?php

    \Illuminate\Support\Facades\Route::post('/dev/protection/from/anything', function(HttpRequest $request){
        dd($request);
    });