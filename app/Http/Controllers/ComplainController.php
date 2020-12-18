<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complain;
use App\Assets;
use App\Assetslocation;
use DB;
use Response;

class ComplainController extends Controller
{
    public function index(){

        //$assets = Assets::all();
        $assets = Assets::orderby('asset')->get();
    	return view('front', compact('assets'));
    }

    public function ajax(Request $request){
        return $data = Assetslocation::where('asset_id', $request->id1)->where('services_id', $request->id2)->get();
    }

    public function store(Request $request){
        //return $request->all();
    	$this->validate($request,[
            'name' =>'required',
            // 'email' =>'required',
            'Services' =>'required',
            'assets' =>'required',
            'sub_location' =>'required',
            'mobile' =>'required',
            'subject' =>'required',
            'description' =>'required',
        ]);

        $save = new Complain;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->mobile = $request->mobile;
        $save->cpf_no = $request->cpf_no;
        $save->location = $request->assets;

        if ($request->Services == 1) {
            $save->project_type = 'Production';
        }else{
            $save->project_type = 'Drilling';
        }
        
        $save->sub_location = $request->sub_location;
        
        $save->subject = $request->subject;
        $save->description = $request->description;
        $save->status = 'Pending';
    	$save->save();
        return redirect()->back()->with('success', 'Success!! Your complaint has been registered successfully');
    }

    public function status()
    {
        $assets = Assets::all();
        return view('complain_status', compact('assets'));
    }

    public function statusajax(Request $request){
        //return $request->all();
        return $data = Assetslocation::where('asset_id', $request->id1)->where('services_id', $request->id2)->get();
    }

    public function search(Request $request){

        $matchThese = ['location' => $request->id1, 'project_type' => $request->id2, 'sub_location' => $request->id3];
        $data = Complain::where($matchThese)->with('assets')->get();
        return Response::json($data);
    }
}
