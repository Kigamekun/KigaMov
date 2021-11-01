<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Movie_Model;

class Movie extends Controller
{
    public function __construct()
    {
        session();
       
       
    }

    public function index()
    {
        $model = new Movie_Model;
       $models = $model->findAll();
    
        
        return view("dashboard",['movie'=> $models]);
    }
    public function createPage()
    {
        
        return view("createPage",['validation'=>\Config\Services::validation()]);
    }

    public function createPost()
    {
        $model = new Movie_Model;


        if (!$this->validate([
            'title' => 'required',
            'shortDesc'  => 'required',
            'rate'  => 'required',
            'price'  => 'required',
           
        ])) {
           $validation = \Config\Services::validation();
          
           return redirect()->to(base_url('/createPage'))->withInput()->with('validation',$validation);
        }

     
        $file = $this->request->getFile('thumb');
        
        $namefile = time().$file->getName();

        $file->move('img',$namefile);
       
            $model->save([
                'title' => $this->request->getPost('title'),
                'shortdesc' => $this->request->getPost('shortDesc'),
                'rate' => $this->request->getPost('rate'),
                'price' => $this->request->getPost('price'),
                
                'thumb'  =>$namefile,
            ]);
    

           
                return redirect()->to(base_url('/console'))->with('success', 'Pesan '.'success');
            
          
    }

    public function delete($id)
    {
        $model = new Movie_Model;

        

        $model->where('id', $id)->delete();
            
    
        return redirect()->to(base_url('/console'))->with('success', 'Pesan '.'success');
    }

    public function updatePage($id)
    {
        $model = new Movie_Model;
        $validation = \Config\Services::validation();
        $movie = $model->where('id', $id)->first();
        return view("updatePage",['movie'=>$movie,'validation'=>$validation]);
    }

    public function console()
    {
        session();
        $model = new Movie_Model;
        $models = $model->findAll();
    
        
        return view("admin/console",['movie'=> $models,'validation'=>\Config\Services::validation()]);
     
    }

    public function detail($id)
    {
        $model = new Movie_Model;
       $models = $model->where('id', $id)->first();
    
        
        return view("detail",['movie'=> $models]);
    }


    public function updatePost($id)
    {
        $model = new Movie_Model;


        if (!$this->validate([
            'title' => 'required',
            'shortDesc'  => 'required',
            'rate'  => 'required',
            'price'  => 'required',
           
        ])) {
           $validation = \Config\Services::validation();
          
           return redirect()->to(base_url('/updatePage'))->withInput()->with('validation',$validation);
        }

     
        if ($this->request->getFile('thumb')->getName() == "") {
            
      
            $model->update($id,[
                'title' => $this->request->getPost('title'),
                'shortdesc' => $this->request->getPost('shortDesc'),
                'rate' => $this->request->getPost('rate'),
                'price' => $this->request->getPost('price'),
         
            ]);
    
        }else {

        $file = $this->request->getFile('thumb');
        
        $namefile = time().$file->getName();

        $file->move('img',$namefile);
       
            $model->update($id,[
                'title' => $this->request->getPost('title'),
                'shortdesc' => $this->request->getPost('shortDesc'),
                'rate' => $this->request->getPost('rate'),
                'price' => $this->request->getPost('price'),
                
                'thumb'  =>$namefile,
            ]);
    
        }


           
                return redirect()->to(base_url('/console'))->with('success', 'Pesan '.'success');
            
          
    }

}
