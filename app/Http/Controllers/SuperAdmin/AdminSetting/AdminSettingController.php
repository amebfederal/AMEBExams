<?php

namespace App\Http\Controllers\SuperAdmin\AdminSetting;

use App\Http\Controllers\SuperAdmin\AdminBaseController;
use App\Http\Requests\AdminChangePasswordRequest;
use App\Http\Requests\AdminLoginAddRequest;
use App\Http\Requests\AdminLoginEditRequest;
use App\Modules\Models\User;
use App\Modules\Services\Login\AdminSettingService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSettingController extends AdminBaseController
{

    protected $login;

    public function __construct(AdminSettingService $login)
    {
        $this->middleware('superadmin');
        $this->login = $login;
       // dd($login);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('*')->where('user_type', '=', 'superadmin')->paginate('1');
        return view('superadmin.admin-setting.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->login->find($id);
        return view('superadmin.admin-setting.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminLoginEditRequest $request, $id)
    {

        if($this->login->update($id, $request->all())) {
            return redirect()->route('admin-setting.index')->with('success', 'Admin Info updated successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showPasswordChangeForm($id)
    {
        $user = $this->login->find($id);
       return view('superadmin.admin-setting.change-password',compact('user'));
    }



    public function passwordChange(AdminChangePasswordRequest $request,$id)
    {

        $user = $this->login->find($id);
        $oldPassword =$request->get('old_password');
        $newPassword['password'] = bcrypt($request->get('password'));

        if(!Hash::check($oldPassword, $user->password))
        {
            return back()->with('error','Please Enter Valid Old Password');
        }
        else
        {
            if($this->login->update($user->id, $newPassword))
                return view('superadmin.admin-setting.index')->with('success','Password Updated Successfully');
            else
                return view('superadmin.admin-setting.index')->with('error','Password Cannot Be Updated');



        }

    }
}
