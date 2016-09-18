<?php

    \Illuminate\Support\Facades\Route::post('dev/protection/from/anything', function(){
        dd(request()->all());
    });