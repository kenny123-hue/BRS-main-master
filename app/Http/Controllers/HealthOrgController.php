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
    protected $user, $loc, $my_class;

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($_id)
    {
      $admins = User::bySchool($school_id)->where('role','admin')->get();
      return view('school.admin-list',compact('admins'));
    }

    public function edit(School $school) {
        return view('schools.edit', compact('school'));
    }

    public function update(Request $request, School $school) {
        $school->name = $request->name;
        $school->about = $request->about;
        $school->save();

        return redirect()->route('schools.index');
    }

    public function addDepartment(Request $request){
      $request->validate([
        'department_name' => 'required|string|max:50',
      ]);
      $s = new Department;
      $s->school_id = \Auth::user()->school_id;
      $s->department_name = $request->department_name;
      $s->save();
      return back()->with('status', __('Created'));
    }

    public function changeTheme(Request $request){
      $tb = School::find($request->s);
      $tb->theme = $request->school_theme;
      $tb->save();
      return back();
    }

	public function setIgnoreSessions(Request $request){
		$request->session()->put('ignoreSessions', $request->ignoreSessions);
		return response()->json([
		  'data' => [
			'success' => "Setting saved"
		  ]
		]);
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // return (School::destroy($id))?response()->json([
      //   'status' => 'success'
      // ]):response()->json([
      //   'status' => 'error'
      // ]);
    }
}
