<?php

namespace App\Http\Controllers\HallOwner;
use Illuminate\Support\Facades\Auth;
use App\Models\Hall;
use App\Models\Movie;
use App\Models\Theatre;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ShowBooking;
use App\Models\ShowTime;
use App\Models\Ticket;

class BookingController extends Controller
{



        public function showMovie()
        {
            $movies = Movie::all();
            return view('hallowner.movie.show',compact('movies'));
        }

        public function viewMovie($id)
        {
            $movie = Movie::find($id);
            return view('hallowner.movie.view',compact('movie'));
        }
        private function getHall()
        {
            $halls = Hall::where('user_id',Auth::user()->id)->get();
            return $halls;
        }
        public function getTheatre(Request $request)
        {
            $theater = Theatre::where('hall_id',$request->hall_id)->get();
            return $theater;
        }

        public function getMovie()
        {
            $movie = Movie::all();
            return $movie;
        }

        public function createBooking($id)
        {
            $halls = $this->getHall();
            $movie = Movie::find($id);
            $times = ShowTime::all();
           return view('hallowner.booking.create',compact('halls','movie','times'));
        }

        public function storeBooking(Request $request)
        {
            $booking = Booking::create($request->all());
            return view('hallowner.booking.date',compact('booking'));

        }


        public function saveBooking(Request $request,$id)
        {
            $dates = explode(",",$request->date);
            $booking = Booking::find($id);
            $capacity = $booking->theatre->capacity;
            foreach($dates as $date)
            {
                $show = new ShowBooking;
                $show->date = $date;
                $show->booking_id= $id;
                $show->save();

                for($i=1;$i<=$capacity/2;$i++)
                {
                    $ticket = new Ticket;
                    $ticket->number = $i;
                    $ticket->show_booking_id = $show->id;
                    $ticket->quality = "Regular";
                    $ticket->price = $booking->theatre->reg_price;
                    $ticket->status = "Available";
                    $ticket->save();

                }

                for($i=($capacity/2)+1;$i<=$capacity;$i++)
                {
                    $ticket = new Ticket;
                    $ticket->number = $i;
                    $ticket->show_booking_id = $show->id;
                    $ticket->quality = "Premium";
                    $ticket->price = $booking->theatre->prem_price;
                    $ticket->status = "Available";
                    $ticket->save();

                }
            }

              return redirect()->route('hallowner.index');
        }

        public function showBooking()
        {
            $booking = Booking::where('hall_id',Auth::user()->hall->id)->get();
            return view('hallowner.booking.show',compact('booking'));
        }

        public function showBookingEach($id)
        {
            $showbookings = ShowBooking::where('booking_id',$id)->get();
            return view('hallowner.booking.view',compact('showbookings'));
        }


}
