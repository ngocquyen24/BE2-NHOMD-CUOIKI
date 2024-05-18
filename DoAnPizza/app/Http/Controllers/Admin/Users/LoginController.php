<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======


>>>>>>> origin/menu

class LoginController extends Controller
{
    public function index(){
        return view('admin.users.login',[
            'title' => 'Đăng nhập hệ thống'
        ]);
    }

    public function store(Request $request ) {
        //dd($request->input());

       $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required',
<<<<<<< HEAD

=======
>>>>>>> origin/menu
       ]);

       if(Auth::attempt(['email' => $request->input('email'),
            'password' => $request->input('password'),
<<<<<<< HEAD

=======
>>>>>>> origin/menu
            ], $request->input('remember') )) {
            return redirect()->route('admin');
       }
       Session::flash('error','Email hoac Password khong dung');

       return redirect()->back();
    }
<<<<<<< HEAD

    public function indexRegister(){

        return view('admin.users.register',[
            'title' => 'Đăng ky hệ thống'
        ]);
    }

    public function register(Request $request)
    {
         //kiem tra du lieu  dau vao
         $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|same:password1',
            'phone' => 'required|min:10',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
         //Kiem tra tep tin co truong du lieu avatar hay kh
         if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();//Lay ten mo rong .jpg, .png...
            $filename = time().'.'.$extension;//
            $file->move('avatar/',$filename) ;  //upload len thu muc avatar trong public
        }

        //Lay tat ca co so du lieu gan vao mang data
        $data = $request->all();

        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'avatar' => $filename ?? NULL,
            // 'avatar' => $avatarName ?? NULL,

        ]);

        return redirect("admin\users\login");
    }
}


=======
}
>>>>>>> origin/menu
