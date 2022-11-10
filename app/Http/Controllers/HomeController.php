<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HomeController
{
    static function load_home(){
           
      return view('welcome');
    }

    static function calculate_widgets(Request $request){      

        // You'd usually query these from the db as a collection, convert it to an array with Laravel's toArray (or adjust the function to expect a collection)
        $pack_sizes = [
          250, 500, 1000, 2000, 5000,
        ];

        // Reverse sort to use as few as poss. (you also dont know what order they're gonna come in from db)
        rsort($pack_sizes, SORT_NUMERIC );


        $widget_qty_ordered = $request->input('qty') ?? 0;        

         // Not needed for this test, just use frontend validation, quicker
        // $validatedData = $request->validate([
        //   'qty' => 'min:1',
        // ]);

       

        $test = self::recursive_calculate($pack_sizes, $widget_qty_ordered, [], $widget_qty_ordered );
        
        dd("Inside calculate_widgets",  ["Widgets ordered" => $widget_qty_ordered, 'Specific packs ordered' => $test] );
    }

    
    private function recursive_calculate($available_choices, $remaining_qty_needed, $packs_selected, $widget_qty_ordered, $counter = 0){
    
        // If no more choices, return the packs selected
        if(count($available_choices) <= 0){
            dd(
                "Last iteration", 
                ['available_choices' => $available_choices,
                'remaining quantity needed' => $remaining_qty_needed,
                'packs required' => $packs_selected,
                'num widgets ordered' => $widget_qty_ordered,
                'counter' => $counter
                ]
            );
            return "bruh";
        }


        // Everything above here works as intended

        if($remaining_qty_needed >= $available_choices[0]){

            // Add pack to payload
            $packs_selected[] = $available_choices[0];

            // Remove this amount from the qty
            $remaining_qty_needed -= $available_choices[0];
        }
        // Everything below here works as intended
        else {// remainder is less than pack size available...
                // so remove pack size from remaining choices
                array_shift($available_choices);
        }
        

        $counter++;

        self::recursive_calculate($available_choices, $remaining_qty_needed, $packs_selected, $widget_qty_ordered, $counter);

    }
}
