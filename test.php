<?php 

$asset = [
    		['asset' => 'Mehsana'],
    		['asset' => 'Ahmedabad'],
    		['asset' => 'Cambay'],
    		['asset' => 'Ankleshwar'],
    		['asset' => 'Hazira'],
    		['asset' => 'Jodhpur'],

    	];

        array_multisort($asset);
        //print_r($asset);
        //$asset = array_multisort($asset);

    	foreach ($asset as  $value) {
           print_r($value);
    	}

 ?>