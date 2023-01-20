<?php

namespace Database\Seeders;
use DB;

use App\Models\Sub_Counties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SubCountiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         

        $counties_id = [1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 4, 4, 4, 5, 5, 6, 6, 6, 6, 7, 7, 7, 7, 7, 7, 7, 8, 8, 8, 8, 8, 8, 8, 8, 9, 9, 9, 9, 9, 9, 9, 10, 10, 10, 10, 10, 10, 10, 11, 11, 11, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 13, 13, 13, 13, 14, 14, 14, 14, 14, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 16, 16, 16, 16, 16, 16, 16, 16, 17, 17, 17, 17, 17, 17, 17, 17, 17, 18, 18, 18, 18, 18, 18, 18, 19, 19, 19, 19, 19, 19, 19, 19, 20, 20, 20, 20, 20, 21, 21, 21, 21, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 23, 23, 23, 23, 23, 23, 23, 24, 24, 24, 24, 24, 25, 25, 25, 26, 26, 26, 26, 26, 27, 27, 27, 27, 27, 27, 28, 28, 28, 28, 29, 29, 29, 29, 29, 29, 30, 30, 30, 30, 30, 30, 31, 31, 31, 31, 31, 32, 32, 32, 32, 32, 32, 32, 32, 32, 32, 32, 33, 33, 33, 33, 33, 33, 34, 34, 34, 34, 34, 34, 35, 35, 35, 35, 35, 35, 36, 36, 36, 36, 36, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 38, 38, 38, 38, 38, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39, 40, 40, 40, 40, 40, 40, 40, 41, 41, 41, 41, 41, 41, 42, 42, 42, 42, 42, 42, 42, 43, 43, 43, 43, 43, 43, 43, 43, 44, 44, 44, 44, 44, 44, 44, 44, 45, 45, 45, 45, 45, 45, 45, 45, 45, 45, 46, 46, 46, 46, 46, 47, 47, 47, 47, 47, 47, 47, 47, 47, 47, 47, 47, 47, 47, 47, 47, 47   
        ];

        $sub_counties = ["Likoni", "Mombasa", "Nyali", "Kisauni", "Changamwe", "Jomvu", "Matuga", "Kinango", "LungaLunga", "Msambweni", "Ganze", "Rabai", "Malindi", "Kaloleni", "Magarini", "Kilifi North", "Kilifi South", "Tana river", "Tana delta", "Tana North", "Lamu east", "Lamu west", "Voi", "Taita", "Taveta", "Mwatate", "Garissa", "Lagdera", "Fafi", "Dadaab", "Ijara", "Hulugho", "Balambala", "Wajir East", "Wajir North", "Wajir South", "Wajir West", "Eldas", "Buna", "Tarbaj", "Habaswein", "Mandera", "Lafey", "Mandera West", "Mandera Central", "Mandera North", "Banisa", "Kotulo", "Marsabit Central", "Marsabit South/Laisamis", "Sololo", "North Horr", "Loyangalani", "Moyale", "Marsabit North/Chalbi", "Garbatulla", "Isiolo", "Merti", "Imenti North", "Buuri", "Meru", "Imenti South", "Igembe North", "Igembi Cenral", "Igembe South", "Tigania East", "Tigania Central", "Tigania West", "Maara", "Meru South", "Tharaka North", "Tharaka South", "Embu West", "Embu East", "Embu North", "Mbeere North", "Mbeere South", "Kitui Central", "Kisasi", "Mutitu", "Nzambani", "Kitui West", "Matinyani", "Mutomo", "Ikutha", "Migwani/Mwingi West", "Mwingi East", "Mwingi Central", "Mumoni", "Tseikuru", "Kyuso", "Lower Yatta", "Katulani", "Machakos", "Athi River", "Kangundo", "Matungulu", "Kathiani", "Mwala", "Masinga", "Yatta", "Kibwezi", "Makindu", "Mbooni East", "Mbooni West", "Kilungu", "Mukaa", "Makueni", "Kathonzweni", "Nzaui", "Mirangine", "Nyandarua West", "Nyandarua South", "Kinangop", "Nyandarua Central", "Kipipiri", "Nyandarua North", "Kieni East", "Nyeri Central", "Nyeri South", "Mukurweini", "Mathira East", "Mathira West", "Tetu", "Kieni West", "Kirinyaga West", "Kirinyaga Central", "Kirinyaga East", "Mwea West", "Mwea East", "Kahuro", "Kigumo", "Muranga East", "Kandara", "Kangema", "Mathioya", "Gatanga", "Muranga South", "Githunguri", "Ruiru", "Juja", "Limuru", "Lari", "Kiambaa", "Kiambu", "Kikuyu", "Kabete", "Gatundu South", "Gatundu North", "Thika East", "Thika West", "Turkana Central", "Turkana West", "Turkana South", "Turkana East", "Turkana North", "Loima", "Kibish", "Pokot Central", "Pokot North", "Kipkomo", "Pokot South", "West Pokot", "Samburu Central", "Samburu East", "Samburu North", "Trans Zoia West", "Kiminini", "Kwanza", "Endebess", "Transzoia East", "Eldoret West/Turbo", "Soy", "Eldoret East/Ainabkoi", "Moiben", "Kesses", "Eldoret South/Wareng(Kapsaret)", "Keiro", "Keiyo", "Marakwet West", "Marakwet East", "Chesumei", "Nandi Central", "Tinderet", "Nandi East", "Nandi South(Aldai)", "Nandi North", "Marigat", "Baringo Central", "Pokot East", "Baringo North", "Koibatek", "Mogotio", "Laikipia North", "Laikipia West", "Laikipia Central", "Laikipia East", "Nyahururu", "Naivasha", "Gilgil", "Kerusoi South", "Kerusoi North", "Molo", "Subukia", "Nakuru North", "Njoro", "Nakuru East", "Nakuru West", "Rongai", "Narok North", "Narok East", "Narok South", "Narok West", "Transmara West", "Transmara East", "Kajiado Central", "Isinya", "Mashuru", "Kajiado North", "Kajiado West", "Loitoktok", "Kericho East", "Soin/Sigowet", "Kipkelion", "Belgut", "Bureti", "Londiani", "Bomet Central", "Bomet East", "Konoin", "Chepalungu", "Sotik", "Khwisero", "Kakamega South", "Kakamega Central", "Kakamega East", "Butere", "Mumias West", "Mumias East", "Kakamega North", "Lugari", "Matete", "Likuyani", "Matungu", "Navakholo", "Emuhaya", "Luanda", "Vihiga", "Sabatia", "Hamisi", "Bungoma South", "Bumula", "Kimilili", "Bungoma West", "Bungoma North", "Bungoma Central", "Cheptais", "Mt Elgon", "Bungoma East", "Webuye West", "Busia", "Nambale", "Bunyala", "Samia", "Teso North", "Teso South", "Butula", "Gem", "Siaya", "Bondo", "Rarieda", "Ugenya", "Ugunja", "Kisumu West", "Seme", "Kisumu East", "Kisumu Central", "Nyando", "Nyakach", "Muhoroni", "Homa Bay", "Rangwe", "Ndhiwa", "Suba", "Mbita", "Rachuonyo South", "Rachuonyo East", "Rachounyo North", "Rongo", "Uriri", "Kuria West", "Kuria East", "Suna East", "Suna West", "Nyatike", "Awendo", "Kisii Central", "Kitutu Central", "Marani", "Masaba South", "Nyamache", "Kenyenya", "Gucha", "Kisii South", "Gucha South", "Sameta", "Nyamira South", "Nyamira North", "Borabu", "Manga", "Masaba North", "Langata", "Kibra", "Westlands", "Starehe", "Mathare", "Kasarani", "Makadara", "Roysambu", "Kamkunji", "Ruaraka", "Dagoretti North", "Dagoretti South", "Embakasi South", "Embakasi North", "Embakasi Central", "Embakasi East", "Embakasi West"

     
    
    
    ];


        for($i=0; $i<count($sub_counties); $i++){
            sub_counties::create(['counties_id' => $counties_id[$i], 'name' => $sub_counties[$i]]);
        }

    }
}
