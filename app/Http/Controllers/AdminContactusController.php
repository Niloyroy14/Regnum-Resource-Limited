<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;

class AdminContactusController extends Controller
{
      public function manage_contactus()
    {
      
      $contactus = Contactus::orderBy('id','asc')->get();
      return view('backend.pages.contactus.index')->with('contactus', $contactus); 
    }

    
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactus_store(Request $request)
    {
        


     $request->validate(
     [
    'name' => 'required|max:150',
    'email'=>'required',
    'subject'=>'required',
    'message'=>'required',
     ],
     [
      'name.required'=>'please provide a Name',
      'email.required'=>'please provide a valid Email',
      'subject.required'=>'please provide a  subject',
      'message.required'=>'please provide a  message',
      
     ]

     );

    
    $contactus = new Contactus();

    $contactus->name=$request->name;
    $contactus->email=$request->email;
    $contactus->subject=$request->subject;
    $contactus->message=$request->message;
   
    $contactus->save();


    session()->flash('success','Your Message Send Succesfully!!!');

    return back();


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactus_edit($id)
    {
        $contactus = Contactus::find($id);
        return view('backend.pages.contactus.edit')->with('contactus',$contactus);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactus_update(Request $request, $id)
    {
        $request->validate(
     [
    'name' => 'required|max:150',
    'email'=>'required',
    'subject'=>'required',
    'message'=>'required',
     ],
     [
      'name.required'=>'please provide a Name',
      'email.required'=>'please provide a valid Email',
      'subject.required'=>'please provide a  subject',
      'message.required'=>'please provide a  message',
      
     ]
 );


    $contactus = Contactus::find($id);

    $contactus->name=$request->name;
    $contactus->email=$request->email;
    $contactus->subject=$request->subject;
    $contactus->message=$request->message;
       
    $contactus->save();

      
       session()->flash('success','A New Contactus Has Updated Succesfully!!!');

       return redirect()->route('admin.contactus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactus_delete($id)
    {
      
      $contactus = Contactus::find($id);
      if(!is_null($contactus)){

        $contactus->delete();
        session()->flash('success',' Contactus Has Deleted Succesfully!!!');

        return back();

      } 
    }
}
