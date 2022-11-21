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
            $halls = Hall::where('owner_id',Auth::user()->id)->get();
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
            foreach($request->date as $date)
            {
                if($date)
                {
                $show = new ShowBooking;
                $show->date = $date;
                $show->booking_id= $id;
                $show->save();
                }
            }

            return redirect()->route('hallowner.index');
        }

        public function showBooking()
        {
            $booking = Booking::where('hall_id',Auth::user()->hall->id)->get();
            dd($booking);
        }


}
