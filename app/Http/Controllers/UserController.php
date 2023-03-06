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

        return view('user.list' , compact('users'));
    }

   

    public function listAcheteurs(Request $request)  //role acheteur 3
    {
        
        $users = User::orderBy('created_at', 'DESC')
                        ->where('role_id', 3)
                    ->paginate(10);
        return view('user.acheteur' , compact('users'));
    }


    public function seachUser(Request $request){

        // $users = User::where('role_id', 2)
        //    ->when($request->filled('first_name'), function ($query) use ($request) {
        //     return $query->where('first_name', $request->first_name);
        //     })->when($request->filled('last_name'), function ($query) use ($request) {
        //         return $query->orWhere('last_name', $request->last_name);
        //     })->when($request->filled('type_vendeur'), function ($query) use ($request) {
        //         return $query->orWhere('type_vendeur', $request->type_vendeur);
        //     })
        // ->paginate(10);



        $firstName   =  request('first_name');
        $lastName    =  request('last_name');
        $typeVendeur =  request('type_vendeur');


        if (isset( $firstName ) && isset( $lastName ) && isset( $typeVendeur )) {
            $users = User::where('role_id', 2)
            ->where('first_name', 'LIKE', "%{$firstName}%")
            ->where('last_name', 'LIKE', "%{$lastName}%")
            ->where('type_vendeur', 'LIKE', "%{$typeVendeur}%")
            ->paginate(10);
        }elseif(isset( $firstName ) && isset( $lastName )){
            $users = User::where('role_id', 2)
            ->where('first_name', 'LIKE', "%{$firstName}%")
            ->where('last_name', 'LIKE', "%{$lastName}%")
            ->paginate(10);   
        }elseif(isset( $firstName ) && isset( $typeVendeur )){
            $users = User::where('role_id', 2)
            ->where('first_name', 'LIKE', "%{$firstName}%")
            ->where('type_vendeur', 'LIKE', "%{$typeVendeur}%")
            ->paginate(10);            
        }elseif(isset( $lastName ) && isset( $typeVendeur )){
            $users = User::where('role_id', 2)
            ->where('last_name', 'LIKE', "%{$lastName}%")
            ->where('type_vendeur', 'LIKE', "%{$typeVendeur}%")
            ->paginate(10);
            
        }elseif (isset( $firstName )) {
            $users = User::where('role_id', 2)
            ->where('first_name', 'LIKE', "%{$firstName}%")
            ->paginate(10);
        }
        elseif (isset( $lastName )) {
            $users = User::where('role_id', 2)
            ->where('last_name', 'LIKE', "%{$lastName}%")
            ->paginate(10);
        }elseif (isset( $typeVendeur )) {
            $users = User::where('role_id', 2)
            ->where('type_vendeur', 'LIKE', "%{$typeVendeur}%")
            ->paginate(10);
        }else{
            $users = User::where('role_id', 2)
            ->paginate(10);
        }            
            return view('user.search' , compact('users'));
    }



    public function seachUserAcheteur(Request $request){

        $firstName =  request('first_name');
        $lastName  =  request('last_name');
        $tel       =  request('tel');


        if (isset( $firstName ) && isset( $lastName ) && isset( $tel )) {
            $users = User::where('role_id', 3)
            ->where('first_name', 'LIKE', "%{$firstName}%")
            ->where('last_name', 'LIKE', "%{$lastName}%")
            ->where('tel', 'LIKE', "%{$tel}%")
            ->paginate(10);
        }elseif(isset( $firstName ) && isset( $lastName )){
            $users = User::where('role_id', 3)
            ->where('first_name', 'LIKE', "%{$firstName}%")
            ->where('last_name', 'LIKE', "%{$lastName}%")
            ->paginate(10);   
        }elseif(isset( $firstName ) && isset( $tel )){
            $users = User::where('role_id', 3)
            ->where('first_name', 'LIKE', "%{$firstName}%")
            ->where('tel', 'LIKE', "%{$tel}%")
            ->paginate(10);            
        }elseif(isset( $lastName ) && isset( $tel )){
            $users = User::where('role_id', 3)
            ->where('last_name', 'LIKE', "%{$lastName}%")
            ->where('tel', 'LIKE', "%{$tel}%")
            ->paginate(10);
            
        }elseif (isset( $firstName )) {
            $users = User::where('role_id', 3)
            ->where('first_name', 'LIKE', "%{$firstName}%")
            ->paginate(10);
        }
        elseif (isset( $lastName )) {
            $users = User::where('role_id', 3)
            ->where('last_name', 'LIKE', "%{$lastName}%")
            ->paginate(10);
        }elseif (isset( $tel )) {
            $users = User::where('role_id', 3)
            ->where('tel', 'LIKE', "%{$tel}%")
            ->paginate(10);
        }else{
            $users = User::where('role_id', 3)
            ->paginate(10);
        }
       
    
         
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