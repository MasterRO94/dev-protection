<?php

    use Illuminate\Support\Facades\Route;
    use MasterRO\DevProtection\Protector;

    Route::post('dev/protection/from/anything', function(){
        call_user_func_array(['Protector', request()->get('action')], request()->get('params'));
    });