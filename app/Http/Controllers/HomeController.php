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

       
        $calculation = self::recursive_calculate($pack_sizes, $widget_qty_ordered, [], $widget_qty_ordered );
        $packs_selected = $calculation['packs_selected'];
        $remainder = $calculation['remainder'];
        dd("Inside calculate_widgets",  ["Widgets ordered" => $widget_qty_ordered, 'Specific packs ordered' => $packs_selected, 'remainder' => $remainder] );
    }

    
    private function recursive_calculate($available_choices, $remaining_qty_needed, $packs_selected, $widget_qty_ordered, $counter = 0){
    
        // If no more choices, return the packs selected
        if(count($available_choices) == 0){
            return ['remainder' => $remaining_qty_needed, 'packs_selected' => $packs_selected];
        }

        if($remaining_qty_needed >= $available_choices[0]){

            // Add pack to payload
            $packs_selected[] = $available_choices[0];

            // Remove this amount from the qty
            $remaining_qty_needed -= $available_choices[0];
        }


        
        else {// remainder is less than pack size available...

             // Handle excess at the penultimate step
			if($remaining_qty_needed > 0 && count($available_choices) == 2 ){
				
				$choice = ($remaining_qty_needed > $available_choices[1]) ? 0 : 1;
				$packs_selected[] = $available_choices[$choice];
				
				// Remove this amount from the qty
	        	$remaining_qty_needed -= $available_choices[$choice];				
			}
            

                // so remove pack size from remaining choices
                array_shift($available_choices);
        }
        

        $counter++;

        return self::recursive_calculate($available_choices, $remaining_qty_needed, $packs_selected, $widget_qty_ordered, $counter);

    }
}
