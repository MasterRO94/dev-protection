<?php

namespace MasterRO\DevProtection;

use Illuminate\Support\Traits\Macroable;

class Protector
{
    use Macroable;


    /**
     * @return array
     */
    public static function block()
    {
        file_put_contents(storage_path('framework/block'), '');

        return ['result' => 'Blocked.'];
    }

    /**
     * @return array
     */
    public static function unblock()
    {
        if (self::isBlocked()) {
            unlink(storage_path('framework/block'));
        }

        return ['result' => 'Unblocked.'];
    }


    /**
     * @return bool
     */
    public static function isBlocked(){
        return file_exists(storage_path('framework/block'));
    }

}