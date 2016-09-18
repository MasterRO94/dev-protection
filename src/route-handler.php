<?php

    \Illuminate\Support\Facades\Route::post('dev/protection/from/anything', function(){
        call_user_func_array('Protector::' . request()->get('action'), request()->get('params'));
    });