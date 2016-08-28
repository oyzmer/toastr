<?php
/*
 * |--------------------------------------------------------------------------
 * | Toastr Facades
 * |--------------------------------------------------------------------------
 * | File : Toastr.php
 * | Date : 2016年8月28日 下午12:08:55
 * | Author : oyzm
 * | Version : 1.0
 */
namespace Oyzm\Toastr\Facades;

use Illuminate\Support\Facades\Facade;

class Toastr extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'toastr';
    }
}