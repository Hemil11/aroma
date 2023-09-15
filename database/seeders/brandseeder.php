<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class brandseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand =[
            [
                'name'=>'iQOO',
                'categroy_id'=>1
            ],
            [
                'name'=>'OnePlus',
                'categroy_id'=>1
            ],
            [
                'name'=>'realme',
                'categroy_id'=>1
            ],
            [
                'name'=>'Apple',
                'categroy_id'=>1
            ],
            [
                'name'=>'Ambrane',
                'categroy_id'=>1
                
            ],
            [
                'name'=>'Samsung',
                'categroy_id'=>1
            ],
            [
                'name'=>'Redmi',
                'categroy_id'=>1
            ],

            [
                'name'=>'Android',
                'categroy_id'=>2
            ],
            [
                'name'=>'Fire OS',
                'categroy_id'=>2
            ],
            [
                'name'=>'Google TV',
                'categroy_id'=>2
            ],
            [
                'name'=>'Tizen',
                'categroy_id'=>2
            ],
            [
                'name'=>'WebOS',
                'categroy_id'=>2
                
            ],
            [
                'name'=>'Adidas',
                'categroy_id'=>5
            ],
            [
                'name'=>'CREATURE',
                'categroy_id'=>5
            ],
            [
                'name'=>'SJeware',
                'categroy_id'=>5
            ],
            [
                'name'=>'Labnoft',
                'categroy_id'=>5
            ],
            [
                'name'=>'Nivia',
                'categroy_id'=>5
                
            ],
            [
                'name'=>'Fearless Tape',
                'categroy_id'=>6
            ],
            [
                'name'=>'FIMS - Fashion is my style',
                'categroy_id'=>6
            ],
            [
                'name'=>'Jockey',
                'categroy_id'=>6
            ],
            [
                'name'=>'rytras',
                'categroy_id'=>6
            ],
            [
                'name'=>'Sidhidata',
                'categroy_id'=>6
                
            ],
            [
                'name'=>'beatXP',
                'categroy_id'=>6
                
            ],
            [
                'name'=>'Pigeon',
                'categroy_id'=>7
                
            ],
            [
                'name'=>'MILTON',
                'categroy_id'=>7
                
            ],
            [
                'name'=>'CELLO',
                'categroy_id'=>7
                
            ],
            [
                'name'=>'Butterfly',
                'categroy_id'=>7
                
            ],
            [
                'name'=>'Spenfrone',
                'categroy_id'=>7
                
            ],
            [
                'name'=>'DDecora',
                'categroy_id'=>7
                
            ],
            [
                'name'=>'Sparx',
                'categroy_id'=>2
                
            ],
            [
                'name'=>'BATA',
                'categroy_id'=>2
                
            ],
            [
                'name'=>'ASIAN',
                'categroy_id'=>2
                
            ],
            [
                'name'=>'Campus',
                'categroy_id'=>2
                
            ],
            [
                'name'=>'Puma',
                'categroy_id'=>2
                
            ],
            [
                'name'=>'Ambrane',
                'categroy_id'=>3
                
            ],
            [
                'name'=>'Wayona',
                'categroy_id'=>3
                
            ],
            [
                'name'=>'Portronics',
                'categroy_id'=>3
                
            ],
            [
                'name'=>'Duracell',
                'categroy_id'=>3
                
            ],
            [
                'name'=>'Amazon',
                'categroy_id'=>3
                
            ],
            [
                'name'=>'ZEBRONICS',
                'categroy_id'=>3
                
            ],
            [
                'name'=>'MI',
                'categroy_id'=>3
                
            ],
            
            [
                'name'=>'Dettol',
                'categroy_id'=>8
                
            ],
            
            [
                'name'=>'Cetaphil',
                'categroy_id'=>8
                
            ],
            
            [
                'name'=>'XML',
                'categroy_id'=>8
                
            ],
            
            [
                'name'=>'Dove',
                'categroy_id'=>8
                
            ],
            
            [
                'name'=>'Minimalist',
                'categroy_id'=>8
                
            ],
            
            [
                'name'=>'Pampers',
                'categroy_id'=>8
                
            ],
            
            [
                'name'=>'simple',
                'categroy_id'=>8
                
            ],
            [
                'name'=>'Boldfit',
                'categroy_id'=>9    
                
            ],
            [
                'name'=>'SPIKE',
                'categroy_id'=>9    
                
            ],
            [
                'name'=>'Signoraware',
                'categroy_id'=>9    
                
            ],
            [
                'name'=>'Nivia',
                'categroy_id'=>9    
                
            ],
            [
                'name'=>'XTRIM',
                'categroy_id'=>9    
                
            ],
            [
                'name'=>'Nestle India Limited',
                'categroy_id'=>4    
                
            ],
            [
                'name'=>'ITC Limited',
                'categroy_id'=>4    
                
            ],
            [
                'name'=>'Amul',
                'categroy_id'=>4    
                
            ],
            [
                'name'=>'Coca-Cola India Limited',
                'categroy_id'=>4    
                
            ],
            [
                'name'=>'MTR Foods',
                'categroy_id'=>4    
                
            ],
            [
                'name'=>'McCain Foods',
                'categroy_id'=>4    
                
            ],
            [
                'name'=>'Tata Global Beverages Limited',
                'categroy_id'=>4    
                
            ],
            [
                'name'=>'United Breweries Limited',
                'categroy_id'=>4    
                
            ],
            [
                'name'=>'PepsiCo India Holdings Limited',
                'categroy_id'=>4    
                
            ],
            [
                'name'=>'Patanjali Ayurved Limited',
                'categroy_id'=>4    
                
            ],
            [
                'name'=>'Vadilal Industries',
                'categroy_id'=>4    
                
            ],
            
            
        ];
        Brand::insert($brand);
        

    }
}
