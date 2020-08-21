<?php

use Illuminate\Database\Seeder;
use App\Assets;
//use DB;
class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$asset = [
    		['asset' => 'Mehsana'],
    		['asset' => 'Ahmedabad'],
    		['asset' => 'Cambay'],
    		['asset' => 'Ankleshwar'],
    		['asset' => 'Hazira'],
    		['asset' => 'Jodhpur'],
    		['asset' => 'MH'],
    		['asset' => 'B&S'],
    		['asset' => 'N&H'],
    		['asset' => 'Uran & Trombay'],
    		['asset' => 'Assam'],
    		['asset' => 'Jorhat'],
    		['asset' => 'Silchar'],
    		['asset' => 'Agartala'],
    		['asset' => 'Kakinada'],
    		['asset' => 'Rajahmundry'],
    		['asset' => 'Karaikal'],
    		['asset' => 'Frontier basin'],
    		['asset' => 'MBA basin'],

    	];
    	//DB::table('assets')->delete();
    	array_multisort($asset);

    	foreach ($asset as $value) {
    		Assets::insert($value);
    	}
        	
    }
}
