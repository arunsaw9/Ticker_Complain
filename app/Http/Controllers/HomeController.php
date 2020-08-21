<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complain;
use App\Resolution;
use Redirect;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {
         $complains = Complain::with('assets')->get();
        return view('complains.index', compact('complains'));
    }

    public function single($id)
    {
        $single = Complain::findOrFail($id);
        return view('complains.single', compact('single'));
    }

    public function resolution(Request $request)
    {

        $this->validate($request,[
            'resolution' =>'required',
            'status' =>'required',
        ]);

        $save = new Resolution;
        $save->user_id = Auth::user()->id;
        $save->complain_id = $request->complain_id;
        $save->complain_resolution = $request->resolution;
        $save->save();

        $complain = Complain::findOrFail($request->complain_id);
        $complain->status = $request->status;
        $complain->save();

        return redirect()->back()->with('success', 'Resolution submited succssfully.');   
         
    }

}
