<?php

use Illuminate\Database\Seeder;
use \App\City;
use \Illuminate\Support\Facades\DB;


class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('cities')->delete();

        $cities = [
            [ 'city' => 'Adana' ],
            [ 'city' => 'Adıyaman' ],
            [ 'city' => 'Afyonkarahisar' ],
            [ 'city' => 'Ağrı' ],
            [ 'city' => 'Aksaray' ],
            [ 'city' => 'Amasya' ],
            [ 'city' => 'Ankara' ],
            [ 'city' => 'Antalya' ],
            [ 'city' => 'Ardahan' ],
            [ 'city' => 'Artvin' ],
            [ 'city' => 'Aydın' ],
            [ 'city' => 'Balıkesir' ],
            [ 'city' => 'Bartın' ],
            [ 'city' => 'Batman' ],
            [ 'city' => 'Bayburt' ],
            [ 'city' => 'Bilecik' ],
            [ 'city' => 'Bingöl' ],
            [ 'city' => 'Bitlis' ],
            [ 'city' => 'Bolu' ],
            [ 'city' => 'Burdur' ],
            [ 'city' => 'Bursa' ],
            [ 'city' => 'Çanakkale' ],
            [ 'city' => 'Çankırı' ],
            [ 'city' => 'Çorum' ],
            [ 'city' => 'Denizli' ],
            [ 'city' => 'Diyarbakır' ],
            [ 'city' => 'Düzce' ],
            [ 'city' => 'Edirne' ],
            [ 'city' => 'Elazığ' ],
            [ 'city' => 'Erzincan' ],
            [ 'city' => 'Erzurum' ],
            [ 'city' => 'Eskişehir' ],
            [ 'city' => 'Gaziantep' ],
            [ 'city' => 'Giresun' ],
            [ 'city' => 'Gümüşhane' ],
            [ 'city' => 'Hakkari' ],
            [ 'city' => 'Hatay' ],
            [ 'city' => 'Iğdır' ],
            [ 'city' => 'Isparta' ],
            [ 'city' => 'İstanbul' ],
            [ 'city' => 'İzmir' ],
            [ 'city' => 'Kahramanmaraş' ],
            [ 'city' => 'Karabük' ],
            [ 'city' => 'Karaman' ],
            [ 'city' => 'Kars' ],
            [ 'city' => 'Kastamonu' ],
            [ 'city' => 'Kayseri' ],
            [ 'city' => 'Kırıkkale' ],
            [ 'city' => 'Kırklareli' ],
            [ 'city' => 'Kırşehir' ],
            [ 'city' => 'Kilis' ],
            [ 'city' => 'Kocaeli' ],
            [ 'city' => 'Konya' ],
            [ 'city' => 'Kütahya' ],
            [ 'city' => 'Malatya' ],
            [ 'city' => 'Manisa' ],
            [ 'city' => 'Mardin' ],
            [ 'city' => 'Mersin' ],
            [ 'city' => 'Muğla' ],
            [ 'city' => 'Muş' ],
            [ 'city' => 'Nevşehir' ],
            [ 'city' => 'Niğde' ],
            [ 'city' => 'Ordu' ],
            [ 'city' => 'Osmaniye' ],
            [ 'city' => 'Rize' ],
            [ 'city' => 'Sakarya' ],
            [ 'city' => 'Samsun' ],
            [ 'city' => 'Siirt' ],
            [ 'city' => 'Sinop' ],
            [ 'city' => 'Sivas' ],
            [ 'city' => 'Şanlıurfa' ],
            [ 'city' => 'Şırnak' ],
            [ 'city' => 'Tekirdağ' ],
            [ 'city' => 'Tokat' ],
            [ 'city' => 'Trabzon' ],
            [ 'city' => 'Tunceli' ],
            [ 'city' => 'Uşak' ],
            [ 'city' => 'Van' ],
            [ 'city' => 'Yalova' ],
            [ 'city' => 'Yozgat' ],
            [ 'city' => 'Zonguldak' ]
        ];

        foreach ($cities as $city)
        {
            City::create(
                $city
            );
        }

    }
}