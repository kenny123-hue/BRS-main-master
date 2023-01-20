<?php

namespace App\Services;

use App\Models\Counties;
use App\Models\Sub_Counties;
use App\Models\HealthOrg;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class OrgService
 * @package App\Services
 */
class OrgService
{


public function addHealthOrg(Request $request)
{
   $HealthOrg = ([
            'name'        => $request->get('name'),
            'email'       => $request->get('email'),
            'service_number'  => date("y").substr(number_format(time() * mt_rand(), 0, '', ''), 0, 4),
            'org_type'  => ('health'),
            'phone'       => $request->get('phone'),
            'county'      => $request->get('counties_id'),
            'sub_county'  => $request->get('sub__counties_id'),
            'f_description' =>$request->get('f_description'),
            'location'    => $request->get('location'),
            'cor'         => $request->get('cor'),
            'category'    => $request->get('category'),
            'aname'       => $request->get('aname'),
            'aphone'      => $request->get('aphone'),
            'aID'         => $request->get('aID'),
            'kra'         => $request->get('kra'),
            
            
        ]);

          session()->flash('success', 'Your account has been created.');
          $health= Healthorg::create($HealthOrg);
        
//print_r($HealthOrg);

        //return redirect('/dashboard');
       
    
    }

    



}
