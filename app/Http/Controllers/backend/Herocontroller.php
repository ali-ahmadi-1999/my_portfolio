<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class Herocontroller extends Controller
{
    

    public function HeroSection(){

         $hero = Hero::find(1);

        return view('backend.hero.hero_section', compact('hero') );


    }//end method


}
