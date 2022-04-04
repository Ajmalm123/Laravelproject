<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Userss;
use App\Models\Designation;

class SortingController extends Controller
{
    public function home(){
        return view('home');
    }
    public function user(){
        $users=Userss::all();
    
        return view('users',['users'=>$users]);
    }
    public function designation(){
        return view('designation');
    }
    public function department(){
        return view('department');
    }
    public function store(Request $request){
     $validatedData= $request->validate([
              'title'=>'required|max:50',
               'depname'=>'required|max:50',
               'desname'=>'required|max:50',
               'phoneno'=>'required|max:20'
     ]);
      $user =new Userss();
      $user->name=$request->post('title');
      $user->department_name=$request->post('depname');
      $user->designation_name=$request->post('desname');
      $user->phone=$request->post('phoneno');
      $user->save();
      return redirect('/home');

}
public function storedep(Request $request){
    $validatedData= $request->validate([
        'title'=>'required|max:50',
         
]);
    $dep_name =new Department();
    $dep_name->name=$request->post('title');
    
   
    $dep_name->save();
    return redirect('/home');

}
public function storedes(Request $request){
    $validatedData= $request->validate([
        'title'=>'required|max:50',
         
]);
    $des_name=new Designation();
    $des_name->name=$request->post('title');
    $des_name->save();
    return redirect('/home');
    
}
}