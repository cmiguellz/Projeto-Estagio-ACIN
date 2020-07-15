<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\User;
use DB;

class FlightsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::orderBy('created_at', 'desc')->paginate(9);
        return view ('flights.index')->with('flights', $flights);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        if ($user_id == '1') {
            return view ('flights.create');
        } else {
            return redirect('/flights')->with('error', 'Unauthorized page!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'numero_voo' => 'required',
            'data' => 'required',
            'origem' => 'required',
            'destino' => 'required'
        ]);

        $flight = new Flight;
        $flight->numero_voo = $request->input('numero_voo');
        $flight->data = $request->input('data');
        $flight->origem = $request->input('origem');
        $flight->destino = $request->input('destino');
        $flight->user_id = auth()->user()->id;
        $flight->save();

        return redirect('/flights')->with('success', 'Flight Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flight = Flight::find($id);
        return view('flights.show')->with('flight', $flight);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flight = Flight::find($id);

        // check for correct user
        if(auth()->user()->id !== $flight->user_id){
            return redirect('/flights')->with('error', 'Unauthorized page!');
        }

        return view('flights.edit')->with('flight', $flight);
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
        $this->validate($request, [
            'numero_voo' => 'required',
            'data' => 'required',
            'origem' => 'required',
            'destino' => 'required'
        ]);

        $flight = Flight::find($id);
        $flight->numero_voo = $request->input('numero_voo');
        $flight->data = $request->input('data');
        $flight->origem = $request->input('origem');
        $flight->destino = $request->input('destino');
        $flight->user_id = auth()->user()->id;
        $flight->save();
        return redirect('/flights')->with('success', 'Flight Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::find($id);

        // check for correct user
        if(auth()->user()->id !== $flight->user_id){
            return redirect('/flights')->with('error', 'Unauthorizedo page!');
        }
        
        $flight->delete();
        return redirect('/home')->with('success', 'Flight Removed!');
    }
}
