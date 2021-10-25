<?php

namespace App\Http\Controllers;

use App\Models\developers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // *------------Checking if user is logged in before accessing site------------
        if(session()->has('loguser')){
            $devs = developers::where('created_by',"=",session('loguser'))->get();
            $list = developers::select('projects')->where('created_by',"=",session('loguser'))->distinct()->get();
            return view('developer',['devs'=>$devs,'list'=>$list,'layout'=>'index']);
        }else{
            return redirect('land');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $devs = developers::where('created_by',"=",session('loguser'))->get();
        $list = developers::select('projects')->where('created_by',"=",session('loguser'))->distinct()->get();
        return view('developer',['devs'=>$devs,'list'=>$list,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// ? --------- Adding new dev to database ----------
        $devs = new developers();
        $devs->cne = $request->input('cne');
        $devs->firstname = $request->input('firstname');
        $devs->lastname = $request->input('lastname');
        $devs->dateofbirth = $request->input('dateofbirth');
        $devs->profession = $request->input('profession');
        $devs->where_am_i = $request->input('where_am_i');
        $devs->projects = $request->input('projects');
        $devs->created_by = session('loguser');
        $devs->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dev = developers::where('projects',$id)->where('created_by',"=",session('loguser'))->get();
        $devs = developers::where('created_by',"=",session('loguser'))->get();
        $list = developers::select('projects')->where('created_by',"=",session('loguser'))->distinct()->get();
        return view('project',['devs'=>$devs,'dev'=>$dev,'list'=>$list,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dev = developers::find($id);
        $devs = developers::where('created_by',"=",session('loguser'))->get();
        $list = developers::select('projects')->where('created_by',"=",session('loguser'))->distinct()->get();
        return view('developer',['devs'=>$devs,'dev'=>$dev,'list'=>$list,'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $devs = developers::find($id);
        $devs->cne = $request->input('cne');
        $devs->firstname = $request->input('firstname');
        $devs->lastname = $request->input('lastname');
        $devs->dateofbirth = $request->input('dateofbirth');
        $devs->profession = $request->input('profession');
        $devs->where_am_i = $request->input('where_am_i');
        $devs->projects = $request->input('projects');
        $devs->save();
        return redirect('/');
    }

    public function list($id){
        print "Your project tag is " . $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $devs = developers::find($id);
        $devs->delete();
        return redirect('/');
    }
}
