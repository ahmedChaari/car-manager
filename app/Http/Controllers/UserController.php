<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(Request $request)  //role vendeur 2
    {
        $users = User::orderBy('created_at', 'DESC')
                        ->where('role_id', 2)
                       ->with('cars')
                        ->paginate(10);
                    //  dd($users);

        return view('user.list' , compact('users'));
    }

   

    public function listAcheteurs(Request $request)  //role acheteur 3
    {
        
        $users = User::orderBy('created_at', 'DESC')
                        ->where('role_id', 3)
                    // ->whereHas('user', function ($query)  {
                    //     $query->where('role_id', 3);
                    // })
                    ->paginate(10);
        return view('user.acheteur' , compact('users'));
    }



    // public function loginUser(Request $request) {
    //     $fields = $request->validate([
    //         'email'    => 'required|string',
    //         'password' => 'required|string'
    //     ]);
    //     // Check email
    //     $user = User::where('email', $fields['email']);

    //     // Check password
    //     if($user || !Hash::check($fields['password'], $user->password) ) {

    //         return redirect()->intended('dashboard')
    //                     ->withSuccess('You have Successfully loggedin');
                
    //     }elseif($user || !Hash::check($fields['password'], $user->password) ){
    //         return redirect()->intended('dashboard2')
    //                     ->withSuccess('You have Successfully loggedin');
    //     }
        

       
    //     return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    // }


    public function seachUser(Request $request){

        $users = User::where('role_id', 2)
           ->when($request->filled('first_name'), function ($query) use ($request) {
            return $query->where('first_name', $request->first_name);
            })->when($request->filled('last_name'), function ($query) use ($request) {
                return $query->orWhere('last_name', $request->last_name);
            })->when($request->filled('type_vendeur'), function ($query) use ($request) {
                return $query->orWhere('type_vendeur', $request->type_vendeur);
            })
        ->paginate(10);
            
            return view('user.search' , compact('users'));

    }

    public function seachUserAcheteur(Request $request){
        $users = User::where('role_id', 3)
        ->when($request->filled('first_name'), function ($query) use ($request) {
         return $query->where('first_name', $request->first_name);
         })->when($request->filled('last_name'), function ($query) use ($request) {
             return $query->orWhere('last_name', $request->last_name);
         })->when($request->filled('tel'), function ($query) use ($request) {
             return $query->orWhere('tel', $request->tel);
         })
     ->paginate(10);
         
         return view('user.searchAcheteur' , compact('users'));
    }

    public function deleteUser($id){

     $user =   User::find($id)->first();
     $userArray = Car::where('user_id', $id)->get();

    if (isset($userArray)) {

        foreach ($userArray as $userSingle){
            $userArray = Car::where('user_id', $id)->delete();
             }
             User::find($id)->delete();
    }else {
        User::find($id)->delete();
    }
    
        return redirect()->back();


   
        
    }


}
