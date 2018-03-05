<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class userController extends Controller{
   public function index(){
    return view('user');

   }
   public function strodata(Request $request){
User::create($request->all());
return "register sucsess";
    // return $request->all();
   }


}

 ?>
