<?php

namespace App\Http\Controllers;

use App\Models\HealthOrg;
use Illuminate\Http\Request;
use Http\Controllers\CountiesController;
use App\Services\LociService;
use App\Services\OrgService;
use App\Services\UserService;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;



class HealthOrgController extends Controller
{
    protected $user, $loc, $my_class, $org;

    public function __construct(UserService $user, LociService $loc, OrgService $org)
    {
       // $this->middleware('teamSA', ['only' => ['index', 'store', 'edit', 'update'] ]);
       // $this->middleware('super_admin', ['only' => ['reset_pass','destroy'] ]);

        $this->user = $user;
        $this->loc = $loc;
        $this->org = $org;
    }



     public function index()
    {

       $counties = $this->loc->getCounties();
       $sub__counties = $this->loc->getSubCounties();
        return view('health',compact('counties','sub__counties'));
    }

public function store(Request $request)
{
    
    
    $added = $this->org->addHealthOrg($request);
    
    
        
    

        return redirect('/dashboard');
    }
}