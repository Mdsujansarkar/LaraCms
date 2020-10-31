<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index(Request $request)
    {
        $theme = new Admin();

        // if($request->exampleRadios == 'option1'){

        //     $theme->exampleRadios = 'option1';
        // }
        // elseif ($request->exampleRadios == 'option2'){

        //     $theme->exampleRadios = 'option2';
        // }
        // elseif($request->exampleRadios == 'option3'){
        //     $theme->exampleRadios = 'option3';
        // }
        $theme        ->exampleRadios         =     $request    ->exampleRadios;

        $theme->save();
        return redirect()->back();
    }
    public function front()
    {
        $themeOnes       =  Admin::where('exampleRadios', 2)->get();
            return view('frontend.master',[
            'themeOnes' => $themeOnes
        ]);
     
        
    }
}
