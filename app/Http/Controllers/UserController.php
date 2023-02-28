<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(Request $request)
    {
        $users = Car::orderBy('created_at', 'DESC')
                    ->whereHas('user', function ($query)  {
                        $query->where('role_id', 3);
                    })
                    ->paginate(10);
        return view('user.list' , compact('users'));
    }

   

    public function listAcheteurs(Request $request)
    {
        // $roleId = $user->
        $users = Car::orderBy('created_at', 'DESC')
                    ->whereHas('user', function ($query)  {
                        $query->where('role_id', 2);
                    })
                    ->paginate(10);
        return view('user.acheteur' , compact('users'));
    }



    public function loginUser(Request $request) {
        $fields = $request->validate([
            'email'    => 'required|string',
            'password' => 'required|string'
        ]);
        // Check email
        $user = User::where('email', $fields['email']);

        // Check password
        if($user || !Hash::check($fields['password'], $user->password) ) {

            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
                
        }elseif($user || !Hash::check($fields['password'], $user->password) ){
            return redirect()->intended('dashboard2')
                        ->withSuccess('You have Successfully loggedin');
        }
        

       
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function seachUser(Request $request){

        $users = User::when($request->filled('brand'), function ($query) use ($request) {
            return $query->where('brand', $request->brand);
            })->when($request->filled('model'), function ($query) use ($request) {
                return $query->orWhere('model', $request->model);
            })->when($request->filled('city'), function ($query) use ($request) {
                return $query->orWhere('city', $request->city);
            })
        ->paginate(10);
            
            return view('car.search' , compact('users'));

    }

    public function deleteUser($id){
        User::find($id)->delete();

        return redirect()->back();
    }


}
