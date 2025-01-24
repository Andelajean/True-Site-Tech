<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('Page.about');
    }
    public function contact(){
        return view('Page.contact');
    }
public function service(){
    return view('Page.service');
}
public function actualite(){
    $actualites = Actualite::paginate(10);
    return view('Page.actualite', compact('actualites'));
    
}
public function stage(){
    return view('Page.stage');
}
public function formation()
{
    return view('Page.formation');
  
}
public function detail($id)
{
    $actualite = Actualite::findOrFail($id);
    return view('Page.actualite_detail', compact('actualite'));
}

}