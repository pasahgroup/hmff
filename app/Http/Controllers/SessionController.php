<?php

namespace App\Http\Controllers;

use App\Models\tsession;
use App\Models\classg;

use App\Http\Requests\StoresessionRequest;
use App\Http\Requests\UpdatesessionRequest;

use Illuminate\Http\Request;
class SessionController extends Controller
{

    public function index()
    {
         $sessions = tsession::orderBy('session', 'asc')->get();
        return view('admins.sessions.session-list',compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addsession(){
       // dd('print');
         $classes = classg::orderBy('class', 'asc')->get();
         return view('admins.sessions.addsession',compact('classes'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreclassgRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if (request('session')) {
        $class = tsession::UpdateOrCreate([
        'class_name'=>request('class_name'),
        'session'=>request('session_name')
           ]);

           return redirect()->back()->with('success','Session recorded successfully');
        }

    }




     public function editSession ($id){

       $sessions = tsession::where('id',$id)
       ->first();

         $classes = classg::orderBy('class', 'asc')->get();
//dd($classes);
         return view('admins.sessions.edit-session',compact('sessions','classes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */
    public function show(session $classg)
        {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */
    public function edit(classg $classg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclassgRequest  $request
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */

  public function update(Request $request,$id)
    {

      $toupdate = tsession::where('id',$id)
               ->update([
           'class_name'=>request('class_name'),
            'session'=>request('session_name')
        ]);
    return redirect()->route('session.index')->with('success','Session created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\classg  $classg
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
    {
     $delete = tsession::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->route('session.index')->with('success','Session removed successfully');
        }
        else{
            return redirect()->route('session.index')->with('error','Session not exists');
        }
    }
}
