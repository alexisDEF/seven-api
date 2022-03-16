<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Reservation[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Reservation::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Reservation[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function create()
    {
        return Reservation::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request;

        return Reservation::create([
            'startDate'=>$input['startDate'],
            'endDate'=>$input['endDate'],
            'startAgency_id'=>1,
            'endAgency_id'=>1,
            'customer_id'=>$input['customer_id'],
            'vehicle_id'=>$input['selectVehicle'],
            'driver_id'=>$input['selectDriver'],
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::where('id',$id)->with('customer','vehicle','driver')->get();
//
//        $reservation->customer_id = $reservation->customer;
//        $reservation->vehicle_id = $reservation->vehicle;
//        $reservation->driver_id = $reservation->driver;

        return $reservation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    public function getReservationsWithCustomerId($customerId){

        $reservations = Reservation::where('customer_id',$customerId)->with('customer','vehicle','driver')->get();

//        foreach($reservations as $reservation){
//            $reservation->customer_id = $reservation->customer;
//            $reservation->vehicle_id = $reservation->vehicle;
//            $reservation->driver_id = $reservation->driver;
//        }

        return $reservations;
    }
}
