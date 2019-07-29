<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

use App\RequestLine;
use App\RentProperty;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $requestLines = RequestLine::where('user_id', $userId)->get();

        return view('cart.index', [$userId], compact('requestLines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $rent = RentProperty::where('id', $id)->first();
        $requestLine = new RequestLine;

        $userId = auth()->user()->id;
        // dd($userId);
        // $userId = $request->userId;
        // $rent->user_id = $userId;
        // $rent->rental_purpose= $request->purpose;
        // $rent->property_type= $request->property_type;
        // $rent->budget= $request->budget;
        // $rent->num_of_room = $request->room;
        // $rent->num_of_bath= $request->bath;
        // $rent->num_of_toilet= $request->toilet;
        // $rent->duration= $request->time_needed;
        // $rent->state_id = $request->state;
        // $rent->town_id = $request->town;
        // $rent->area = $request->area;
        // // dd($rent);
        // $rent->save();


        $requestLine->request_type = "Get Request";
        $requestLine->amount= $rent->budget;
        // dd($requestLine);
        $requestLine->request_line_id = null;
        $requestLine->request_line = "Rent a Property";
        $requestLine->request_id = $rent->id;
        $requestLine->line_category = null;
        $requestLine->provider_category = null;
        $requestLine->user_id = $userId;
        // dd($requestLine);

        $requestLine->save();

        $status = "Request has been successfully added to cart";
        Session::flash('status', $status);

        return redirect()->route('cart.index', [$userId]);
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

        $start = $rentProperty->duration;
        $now = Carbon::now();
        $duration = $now->diffInDays($start);
        // dd($rentProperty);

        return view('cart.show', [$userId, $requestId], compact('requestLines', 'requestLine', 'states', 'rentProperty', 'duration'));
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

    public function getValidateContact(Request $request, $id)
    {
        $countries = Country::all();
        return view('cart.validate', compact('countries'));
    }

    public function postValidateContact(Request $request, $id)
    {

        return view('cart.validate');
    }
}
