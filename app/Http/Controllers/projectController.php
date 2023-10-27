<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function tailwindPage(){

      $datas=File::json(storage_path('data/projectdetails.json'));
      return view('projects.tailwind',compact('datas'));
    }

    public function laravelPage(){
      $datas=File::json(storage_path('data/projectdetails.json'));
      return view('projects.laravel',compact('datas'));
    }

   public function bootstrapPage(){
      $datas=File::json(storage_path('data/projectdetails.json'));
      return view('projects.bootstrap',compact('datas'));
   }





   public function projects(){
   $datas= File::json(storage_path('data/portfolio.json'));
  // dd($data);

   return view('portfolio.project',compact('datas'));
   }

    
     public function HomePage(){
      $datas= File::json(storage_path('data/services.json'));
      // dd($data);
    
       return view('welcome',compact('datas'));
     }

   
}
