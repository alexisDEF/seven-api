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
        return Reservation::create([
            'startDate'=>$request['startDate'],
            'endDate'=>$request['endDate'],
            'startAgency_id'=>$request['startAgency'],
            'endAgency_id'=>$request['endAgency'],
            'customer_id'=>$request['customer_id'],
            'vehicle_id'=>$request['selectVehicle'],
            'driver_id'=>$request['selectDriver'],
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

        return Reservation::where('id',$id)->with('customer','vehicle','driver','agencyStart','agencyEnd')->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $reservation->updateOrFail([''],[]);
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

        $reservations = Reservation::where('customer_id',$customerId)->with('customer','vehicle','driver','agencyStart','agencyEnd')->get();
        return $reservations;
    }

    public function delete($id){

        $booking = Reservation::where('id',$id);

        return $booking->delete();
    }
}
