<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Booking[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Booking::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Booking[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function create()
    {
        return Booking::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Booking::create([
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
     * @param  \App\Models\Booking  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return Booking::where('id',$id)->with('customer','vehicle','driver','agencyStart','agencyEnd')->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $reservation)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Booking::where('id',$id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $reservation)
    {
        //
    }

    public function getReservationsWithCustomerId($customerId){

        $reservations = Booking::where('customer_id',$customerId)->with('customer','vehicle','driver','agencyStart','agencyEnd')->get();
        return $reservations;
    }

    public function delete($id){

        $booking = Booking::where('id',$id);

        return $booking->delete();
    }
}
