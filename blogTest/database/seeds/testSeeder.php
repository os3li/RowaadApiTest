<?php

use Illuminate\Database\Seeder;
use App\test;
class testSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $imgArray=[
        	"http://farm4.staticflickr.com/3764/10438039923_2ef6f68348_c.jpg",
        	"http://www.officialpsds.com/images/stocks/ALLEY-stock1502.jpg",
        	"http://ladymanson.com/Goodies/PS%20Tutorials/stock2.jpg",
        	"http://fc01.deviantart.net/fs17/f/2007/129/7/4/Stock_032__by_enchanted_stock.jpg",
        	"http://www.gwp.co.uk/wp-content/uploads/2012/10/jit-case-delivery1.jpg",
        	"http://fc00.deviantart.net/fs70/i/2011/217/a/0/field_panorama_stock_5_by_f3rd4-d45kgfp.jpg"	
        ]; 
        for($i=0; $i < count($imgArray) ;$i++){
        $add = new test;
        $add->img = $imgArray[$i];
        $add->item = "Item".($i +1 ) ;
        $add->save() ;
        }
    }
}
