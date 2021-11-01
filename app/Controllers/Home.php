<?php

namespace App\Controllers;
use App\Models\Movie_Model;

class Home extends BaseController
{
    public function index()
    {
        $model = new Movie_Model;
        $models = $model->findAll();
     
         
         return view("dashboard",['movie'=> $models]);
    }
}
