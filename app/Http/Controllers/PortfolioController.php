<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 

class PortfolioController extends Controller
{ 
    public function home(){     
        return view('home');    
    }
    public function workExperience(){     
        return view('work');     
    }
    public function projects(){ 
    $projects = json_decode(file_get_contents(storage_path('data/portfolio.json')), true);
    return view('projects', compact('projects'));  
    }    
    public function projectDetails($id){
    $projects = json_decode(file_get_contents(storage_path('data/portfolio.json')), true);
 
    if (isset($projects[$id])) {       
        $project = $projects[$id];    
        return view('details', compact('project'));
    } else {  
        return redirect()->route('projects');
    }
}   

}
