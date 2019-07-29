<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RequestLine;
use App\State;
use App\RentProperty;
use Carbon\Carbon;

class GetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $requestLines = RequestLine::where('paid', 'paid')->where('user_id', $userId)->get();
        

        return view('get.index', compact('requestLines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRequest()
    {
        $userId = auth()->user()->id;
        $states = State::where('country_id', 160)->get();
        return view('get.property.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $requestId)
    {
        $userId = auth()->user()->id;
        $requestLines = RequestLine::where('user_id', $userId)->get();
        $states = State::where('country_id', 160)->get();

        $requestLine = RequestLine::where('user_id', $userId)->where('id', $requestId)->where('request_line_id', 1)->first();
        $rentProperty = RentProperty::where('user_id', $userId)->where('id', $requestLine->request_id)->first();

        // dd($rentProperty);

        $start = $rentProperty->duration;
        $now = Carbon::now();
        $duration = $now->diffInDays($start);
        // dd($rentProperty);
        
        return view('get.show', [$userId, $requestId], compact('requestLines', 'requestLine', 'states', 'rentProperty', 'duration'));
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
