<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\city;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function espaceAdmin() {
        if (Auth::user()->role_id != 1) {
            abort(404);
        }
       // list cars for dashboard
        $cars = Car::orderBy('created_at', 'DESC')->paginate(10);
        $carList = Car::orderBy('created_at', 'DESC')->take(5)->get();



        $dates = collect();
        foreach( range( -6, 0 ) AS $i ) {
            $date = Carbon::now()->addDays( $i )->format( 'Y-m-d' );
            $dates->put( $date, 0);
        }

        $weeks = collect();
        foreach( range( -6, 0 ) AS $i ) {
            $date = Carbon::now()->addWeeks( $i )->format( 'Y-m-d' );
            $weeks->put( $date, 0);
        }



        // Get the post counts
        $usersDates = User::where( 'created_at', '>=', $dates->keys()->first() )
                     ->groupBy( 'date' )
                     ->whereIn('role_id',['2','3'])
                     ->orderBy( 'date' ,'ASC')
                     ->get( [
                         DB::raw( 'DATE( created_at ) as date' ),
                         DB::raw( 'COUNT( * ) as "count"' )
                     ] )
                     ->pluck( 'count', 'date' );

        $usersWeeks = User::where( 'created_at', '>=', $dates->keys()->first() )
                     ->groupBy( 'date' )
                     ->whereIn('role_id',['2','3'])
                    //  ->orderBy( 'date' ,'ASC')
                     ->get( [
                         DB::raw( 'DATE( created_at ) as date' ),
                         DB::raw( 'COUNT( * ) as "count"' )
                     ] )
                     ->pluck( 'count', 'date' );

        $months = collect();


        foreach( range( 0, 4 ) AS $i ) {
            $date = Carbon::now()->addMonthNoOverflow( $i )->format( 'Y-m' );
            $months->put( $date, 0);
        }
                     $usersMonths = User::where( 'created_at', '>=', $dates->keys()->first() )
                     ->groupBy( 'date' )
                     ->whereIn('role_id',['2','3'])
                    //  ->orderBy( 'date' ,'ASC')
                     ->get( [
                         DB::raw( 'DATE( created_at ) as date' ),
                         DB::raw( 'COUNT( * ) as "count"' )
                     ] )
                     ->pluck( 'count', 'date' );

                     $months = $months->merge( $usersMonths );


        // Merge the two collections; any results in `$posts` will overwrite the zero-value in `$dates`
        $weeks = $weeks->merge( $usersWeeks );
        $dates = $dates->merge( $usersDates );






        $record = Car::select(DB::raw("COUNT(*) as count"),
                DB::raw("DAYNAME(created_at) as day_name"),
                DB::raw("DAY(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subDay(30))
            ->groupBy('day_name','day')
            // ->orderBy('created_at', 'ASC')
            ->get();

     $data = [];

     foreach($record as $row) {
        $data['label'][] = $row->day_name;
        $data['data'][] = (int) $row->count;
      }

    $data['chart_data'] = json_encode($data);




//end

// $year = Carbon::now()->year;
//     //variable to store each order count as array.
//     $years = [];
//     //Looping through the month array to get count for each month in the provided year
//     for($i = 1; $i <= 12; $i++){
//         $years[] = User::whereYear('created_at', $year)
//             ->whereMonth('created_at', $i)
//             ->where(function ($query) {
//                 $query->whereIn('role_id', [2, 3]);
//             })->count();
//     }

//   dd($weeks);

    // dd(array('dates' => $dates));

         return view ('dashboard', compact('weeks' , 'dates' , 'months' ,'cars', 'carList'))
         ->with($data , 'data');

    }

    public function espaceVendeur() {
        if (Auth::user()->role_id != 2) {
            abort(404);
        }
        $car = Auth::user()->cars()->first();
        return view('complet-car-information.step1', [
            'car' => $car,
        ]);
    }

    public function espaceAcheteur() {
        if (Auth::user()->role_id != 3) {
            abort(404);
        }
        abort(404);
    }
}
