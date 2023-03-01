<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\city;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function dashboard() {

        // $data = User::where('role_id', '=', 3)
        // ->whereDate('created_at', '<=', date('Y-m-d H:i:s',strtotime('-7 days')) )->count();
    
       
        $cars = Car::orderBy('created_at', 'DESC')->paginate(10);

        $carList = Car::orderBy('created_at', 'DESC')->take(5)->get();


    
        $dates = collect();
        foreach( range( -6, 0 ) AS $i ) {
            $date = Carbon::now()->addDays( $i )->format( 'Y-m-d' );
            $dates->put( $date, 0);
        }
    
        $weeks = collect();
        foreach( range( -6, 0 ) AS $i ) {
            $date = Carbon::now()->subWeek( $i )->format( 'Y-m' );
            $weeks->put( $date, 0);
        }
    
        $years = collect();
        foreach( range( -6, 0 ) AS $i ) {
            $date = Carbon::now()->addMonth( $i )->format( 'Y-m' );
            $years->put( $date, 0);
        }
    
        
        // Get the post counts
        $users = User::where( 'created_at', '>=', $weeks->keys()->first() )
                     ->groupBy( 'date' )
                     ->where('role_id', '=', 3)
                     ->orderBy( 'date' )
                     ->get( [
                         DB::raw( 'DATE( created_at ) as date' ),
                         DB::raw( 'COUNT( * ) as "count"' )
                     ] )
                     ->pluck( 'count', 'date' );
        
        // Merge the two collections; any results in `$posts` will overwrite the zero-value in `$dates`
        $weeks = $weeks->merge( $users );
        $dates = $dates->merge( $users );
        $years = $dates->merge( $users );


//start




        $record = User::select(DB::raw("COUNT(*) as count"), 
                DB::raw("DAYNAME(created_at) as day_name"),
                DB::raw("DAY(created_at) as day"))
            ->where('created_at', '>', Carbon::today()->subDay(30))
            ->groupBy('day_name','day')
            ->orderBy('day')
            ->get();
 
     $data = [];

     foreach($record as $row) {
        $data['label'][] = $row->day_name;
        $data['data'][] = (int) $row->count;
      }

    $data['chart_data'] = json_encode($data);

  
    
//end









        
    
    
    // dd(array('dates' => $dates));
    
         return view ('dashboard', compact('weeks' , 'dates' , 'years' ,'cars', 'carList'))
         ->with($data , 'data');
    
    }
}