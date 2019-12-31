<?php

use Illuminate\Database\Seeder;

class UserCardCollectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card collection')->insert([
            [
                'CardID' => "2ef52bd0-1bcd-11ea-9ca4-e110e0fa9fb3",
                'UserID' => "1",
                'Quantity' => "15",
            ],
            [
                'CardID' => "2f179040-1bcd-11ea-80d2-ab8cac1dca16",
                'UserID' => "1",
                'Quantity' => "15",
            ],
            [
                'CardID' => "2f4335d0-1bcd-11ea-9e2f-63daf2af5abe",
                'UserID' => "1",
                'Quantity' => "6",
            ],            
            [
                'CardID' => "2f45dee0-1bcd-11ea-b0bd-a562a01b546d",
                'UserID' => "1",
                'Quantity' => "6",
            ],
            [
                'CardID' => "37641900-1bcd-11ea-9287-fdc913c95963",
                'UserID' => "2",
                'Quantity' => "2",
            ],
            [
                'CardID' => "376399e0-1bcd-11ea-8805-79c24243d509",
                'UserID' => "2",
                'Quantity' => "2",
            ],
            [
                'CardID' => "2f1b8a60-1bcd-11ea-aa3b-55d139abc5ab",
                'UserID' => "2",
                'Quantity' => "15",
            ],
            [
                'CardID' => "2f1ab170-1bcd-11ea-92c1-45b3d19ff384",
                'UserID' => "2",
                'Quantity' => "15",
            ],
        ]);
    }
}
