<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\regnumarchitecture;
use App\Models\portfolio;
use App\Models\OurProject;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                                                 
        return view('Home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function company_background()
    {
         return view('about.companybackground');
    }

    public function managing_director()
    {
         return view('about.managingdirector');
    }



    public function director_message()
    {
         return view('about.directormessage');
    }


   public function alex_load()
    {
        
         return view('ourproject.alexload');
    }
    

   public function toll_management()
    {    
        $ourproject = OurProject::orderBy('id','asc')->where('category','Toll Management System')->get();
         return view('ourproject.tollmanagement')->with('ourproject', $ourproject);
    }

    public function smart_marketing()
    {

         return view('ourproject.smartparking');
    }

       public function regnum_it()
    {
       
         return view('ourproduct.regnumit');
    }
    
       public function regnum_architecture()

      {
        
        $architectures = regnumarchitecture::orderBy('id','asc')->get();
        $portfolios = portfolio::orderBy('id','asc')->get();

        return view('ourproduct.regnumarchitecture',compact('architectures','portfolios'));
      }

 /*gallery*/ 

       public function gallery()
    {
         $gallerys = Gallery::orderBy('id','asc')->get();
         return view('gallery.gallery')->with('gallery', $gallerys);
    }
   
   /*gallery read more */ 

       public function mj_signing()
    {
         return view('gallery.mj_signing');
    }

    public function axleload_signing()
    {
         return view('gallery.axleload_signing');
    }

    public function sitakund_signing()
    {
         return view('gallery.sitakund_signing');
    }

    public function opening_signing()
    {
         return view('gallery.opening_signing');
    }



     public function contact_us()
    {
         return view('contactus.contact');
    }

  
    
}
