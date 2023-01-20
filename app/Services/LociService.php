<?php

namespace App\Services;
use App\Models\Nationality;
use App\Models\Counties;
use App\Models\Sub_Counties;

/**
 * Class LociService
 * @package App\Services
 */
class LociService
{

public function getCounties()
    {
        return Counties::all();
    }

    public function getSubCounties()
    {
        return Sub_Counties::all();
    }

    public function getAllCountiess()
    {
        return Counties::orderBy('name', 'asc')->get();
    }
/*
    public function getAllNationals()
    {
        return Nationality::orderBy('name', 'asc')->get();
    }
*/
    public function getSub_Counties($counties_id)
    {
        return Sub_Counties::where('counties_id', $counties_id)->orderBy('name', 'asc')->get();
    }

    

}
