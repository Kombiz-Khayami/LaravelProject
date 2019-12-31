<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;
use App\Cards;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("resources/files/scryfall-default-cards.json");
        $data = json_decode($json);
        foreach ($data as $card){
            Cards::create(array(
                'Cid' => Uuid::generate()->string,
                'APIid' => $card->id,
                'Name' => $card->name,
                'CMC' => $card->cmc,
                'Foil' => $card->foil,
                'Promo' => $card->promo,
                'Image' =>$card->image_uris->normal
            ));

        }
    }
}
