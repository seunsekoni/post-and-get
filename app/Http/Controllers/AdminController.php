<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\RequestLineName;
use Storage;

class AdminController extends Controller
{

    // protected $user;

    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }


    public function login()
    {
        return view('admin.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexRequest()
    {

        $requestNames = RequestLineName::all();
        return view('admin.request.index', compact('requestNames'));
    }

    public function createRequest()
    {


        return view('admin.request.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRequest(Request $request)
    {
        $requestName = new RequestLineName;
        $requestName->name = $request->name;
        $requestName->line_category_id = $request->line_category;
        $requestName->provider_category_id = $request->provider_category;
        $requestName->status = $request->status;
        $requestName->duration = $request->duration;
        $requestName->description = $request->description;
        
        if($request->hasfile('uploads'))
        {
            
            // save each file in the specified folder
            foreach($request->file('uploads') as $file){
                $date = date('Y-m-d');
                $name=$file->getClientOriginalName();
                // create a folder according to dates
                if (!Storage::exists('/public/files/$date')) {
                    Storage::makeDirectory('/public/files/$date');
                } 
                $file->move(public_path().'/files/'.$date, $name); 
                $data[] = $name; 
            }
        }
            $requestName->image = json_encode($data);
        // dd($requestName);
        $requestName->save();

        return redirect()->route('admin.request.index');
    }

    public function pricing($id)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
