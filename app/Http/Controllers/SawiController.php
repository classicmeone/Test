<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

use App\Post;

class PagesController extends Controller
{
   public function index()
   {

      return "Welcome to Sawi Home";

   }


}

?>