<?php

namespace MasterRO\DevProtection;

use Illuminate\Support\Traits\Macroable;

class Protector
{
    use Macroable;


    public function block($params)
    {
        dd($params);
    }

}