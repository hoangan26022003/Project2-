<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.member', [
           'admins' => $admins
        ]);
    }

    public function indexTK()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addMember');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->input('password'));

        Admin::create($data);

        Session::flash('success', 'Member created successfully');
        return Redirect::route('admin.member')->with('success', 'Nhân viên đã được tạo thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return view('admin.loginShow');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admins)
    {
        return view('admin.editMember', [
            'admin' => $admins
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admins)
    {
        $admins->update($request->all());
        return Redirect::route('admin.member')->with('success', 'Cập nhật nhân viên thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admins)
    {
        $admins->delete();
        return Redirect::route('admin.member')->with('success', 'Xóa nhân viên thành công');
    }

    public function loginProcess(Request $request)
    {
        $account = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($account)){
            $admin = Auth::guard('admin')->user();
            Auth::login($admin);
            session(['admin' => $admin]);
            return redirect()->route('admin.index')->with('success', 'Đăng nhập thành công');
        } else {
            // Đăng nhập thất bại
            return back()->with('error', 'Thông tin đăng nhập bị sai. Hãy kiểm tra lại');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        session()->forget('admin'); // Clear the 'admin' guard session data
        return redirect()->route('admin.loginShow')->with('success', 'Đăng xuất thành công'); // Redirect to the admin login page
    }


}
