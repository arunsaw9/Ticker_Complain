<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complain;
use App\Assets;
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
        $Assets = Assets::all();
        $complains = Complain::with('assets')->paginate(5);
        return view('complains.index', compact('complains', 'Assets'));
    }


    public function search(Request $request){

        $this->validate($request,[

            'asset' => 'required'
        ]);
        
        $complains = Complain::where('location', $request->asset)->with('assets')->get();
        return view('complains.search', compact('complains'));
    }

    public function single($id)
    {
         $resolution = Resolution::with('complains')->where('complain_id', $id)->get();
        
        $single = Complain::findOrFail($id);
        return view('complains.single', compact('single', 'resolution'));
    }

    public function resolution(Request $request)
    {

        $this->validate($request,[
            'resolution' =>'required',
            'status' =>'required',
        ]);

        $count = Resolution::where('complain_id', $request->complain_id)->get();
        if ($count->isEmpty()) {
            $count = '';
        }else{
            $count = $count[0]['id'];
        }
        if($count > 0 ) {
            $update = Resolution::find($count);
            $update->user_id = Auth::user()->id;
            $update->complain_id = $request->complain_id;
            $update->complain_resolution = $request->resolution;
            $update->save();
        }else{
            $save = new Resolution;
            $save->user_id = Auth::user()->id;
            $save->complain_id = $request->complain_id;
            $save->complain_resolution = $request->resolution;
            $save->save();
        }
        $complain = Complain::findOrFail($request->complain_id);
        $complain->status = $request->status;
        $complain->save();
        return redirect()->back()->with('success', 'Resolution submited succssfully.');   
    }

    public function changepassword($id){
        return  $id;
    }

}
