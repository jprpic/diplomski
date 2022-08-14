<?php

namespace Database\Seeders;

use App\Models\Postcode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jayParsedAry = [
            [
                "code" => "10000",
                "name" => "Zagreb",
                "county" => "Zagreb"
            ],
            [
                "code" => "10010",
                "name" => "Zagreb-Sloboština",
                "county" => "Zagreb"
            ],
            [
                "code" => "10020",
                "name" => "Zagreb-Novi Zagreb",
                "county" => "Zagreb"
            ],
            [
                "code" => "10040",
                "name" => "Dubrava",
                "county" => "Zagreb"
            ],
            [
                "code" => "10090",
                "name" => "Zagreb-Susedgrad",
                "county" => "Zagreb"
            ],
            [
                "code" => "10110",
                "name" => "Zagreb",
                "county" => "Zagreb"
            ],
            [
                "code" => "10250",
                "name" => "Lučko",
                "county" => "Zagreb"
            ],
            [
                "code" => "10251",
                "name" => "Hrvatski Leskovac",
                "county" => "Zagreb"
            ],
            [
                "code" => "10253",
                "name" => "Donji Dragonožec",
                "county" => "Zagreb"
            ],
            [
                "code" => "10255",
                "name" => "Gornji Stupnik",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10257",
                "name" => "Brezovica",
                "county" => "Zagreb"
            ],
            [
                "code" => "10290",
                "name" => "Zaprešić",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10291",
                "name" => "Prigorje Brdovečko",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10292",
                "name" => "Šenkovec",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10293",
                "name" => "Dubravica",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10294",
                "name" => "Donja Pušća",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10295",
                "name" => "Kupljenovo",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10296",
                "name" => "Luka",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10297",
                "name" => "Jakovlje",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10298",
                "name" => "Donja Bistra",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10299",
                "name" => "Marija Gorica",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10310",
                "name" => "Ivanić-Grad",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10311",
                "name" => "Posavski Bregi",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10312",
                "name" => "Kloštar Ivanić",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10313",
                "name" => "Graberje Ivaničko",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10314",
                "name" => "Križ",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10315",
                "name" => "Novoselec",
                "county" => "Zagreb"
            ],
            [
                "code" => "10316",
                "name" => "Lijevi Dubrovčak",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10340",
                "name" => "Vrbovec",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10341",
                "name" => "Lonjica",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10342",
                "name" => "Dubrava",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10343",
                "name" => "Nova Kapela",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10344",
                "name" => "Farkaševac",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10345",
                "name" => "Gradec",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10346",
                "name" => "Preseka",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10347",
                "name" => "Rakovec",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10360",
                "name" => "Zagreb-Sesvete",
                "county" => "Zagreb"
            ],
            [
                "code" => "10361",
                "name" => "Sesvete-Kraljevec",
                "county" => "Zagreb"
            ],
            [
                "code" => "10362",
                "name" => "Zagreb-Kašina",
                "county" => "Zagreb"
            ],
            [
                "code" => "10363",
                "name" => "Belovar",
                "county" => "Zagreb"
            ],
            [
                "code" => "10370",
                "name" => "Dugo Selo",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10372",
                "name" => "Oborovo",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10373",
                "name" => "Ivanja Reka",
                "county" => "Zagreb"
            ],
            [
                "code" => "10380",
                "name" => "Sveti Ivan Zelina",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10381",
                "name" => "Bedenica",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10382",
                "name" => "Donja Zelina",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10383",
                "name" => "Komin",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10408",
                "name" => "Velika Mlaka",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10410",
                "name" => "Velika Gorica",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10411",
                "name" => "Orle",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10412",
                "name" => "Donja Lomnica",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10413",
                "name" => "Kravarsko",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10414",
                "name" => "Pokupsko",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10415",
                "name" => "Novo Čiče",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10417",
                "name" => "Buševec",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10418",
                "name" => "Dubranec",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10419",
                "name" => "Vukovina",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10430",
                "name" => "Samobor",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10431",
                "name" => "Sveta Nedjelja",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10432",
                "name" => "Bregana",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10434",
                "name" => "Strmec Samoborski",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10435",
                "name" => "Sveti Martin pod Okićem",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10436",
                "name" => "Rakov Potok",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10437",
                "name" => "Bestovje",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10450",
                "name" => "Jastrebarsko",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10451",
                "name" => "Pisarovina",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10453",
                "name" => "Gorica Svetojanska",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10454",
                "name" => "Krašić",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10455",
                "name" => "Kostanjevac",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10456",
                "name" => "Kalje",
                "county" => "Zagreb county"
            ],
            [
                "code" => "10457",
                "name" => "Sošice",
                "county" => "Zagreb county"
            ],
            [
                "code" => "20000",
                "name" => "Dubrovnik",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20205",
                "name" => "Topolo",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20207",
                "name" => "Mlini",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20210",
                "name" => "Cavtat",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20213",
                "name" => "Čilipi",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20215",
                "name" => "Gruda",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20216",
                "name" => "Dubravka",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20217",
                "name" => "Pridvorje",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20218",
                "name" => "Pločice",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20221",
                "name" => "Koločep",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20222",
                "name" => "Lopud",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20223",
                "name" => "Šipanjska Luka",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20224",
                "name" => "Maranovići",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20225",
                "name" => "Babino Polje",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20226",
                "name" => "Goveđari",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20230",
                "name" => "Ston",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20231",
                "name" => "Doli",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20232",
                "name" => "Slano",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20233",
                "name" => "Trsteno",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20234",
                "name" => "Orašac",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20235",
                "name" => "Zaton Veliki",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20236",
                "name" => "Mokošica",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20240",
                "name" => "Trpanj",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20242",
                "name" => "Oskorušno",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20243",
                "name" => "Kuna",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20244",
                "name" => "Potomje",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20245",
                "name" => "Trstenik",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20246",
                "name" => "Janjina",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20247",
                "name" => "Žuljana",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20248",
                "name" => "Putniković",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20250",
                "name" => "Orebić",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20260",
                "name" => "Korčula",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20263",
                "name" => "Lumbarda",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20264",
                "name" => "Račišće",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20267",
                "name" => "Kućište",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20269",
                "name" => "Lovište",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20270",
                "name" => "Vela Luka",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20271",
                "name" => "Blato",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20272",
                "name" => "Smokvica",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20273",
                "name" => "Čara",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20274",
                "name" => "Pupnat",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20275",
                "name" => "Žrnovo",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20278",
                "name" => "Nova Sela",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20290",
                "name" => "Lastovo",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20340",
                "name" => "Ploče",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20341",
                "name" => "Kula Norinska",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20342",
                "name" => "Otrić Seoci",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20343",
                "name" => "Rogotin",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20344",
                "name" => "Komin (Dalma)",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20345",
                "name" => "Staševica",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20350",
                "name" => "Metković",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20352",
                "name" => "Vid",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20353",
                "name" => "Mlinište",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20355",
                "name" => "Opuzen",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20356",
                "name" => "Klek",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "20357",
                "name" => "Blace",
                "county" => "Dubrovnik-Neretva county"
            ],
            [
                "code" => "21000",
                "name" => "Split",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21201",
                "name" => "Prgomet",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21202",
                "name" => "Lećevica",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21203",
                "name" => "Donji Muć",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21204",
                "name" => "Dugopolje",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21205",
                "name" => "Donji Dolac",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21206",
                "name" => "Donje Ogorje",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21207",
                "name" => "Kostanje",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21208",
                "name" => "Kučiće",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21209",
                "name" => "Mravince",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21210",
                "name" => "Solin",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21211",
                "name" => "Vranjic",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21212",
                "name" => "Kaštel Sućurac",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21213",
                "name" => "Kaštel Gomilica",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21214",
                "name" => "Kaštel Kambelovac",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21215",
                "name" => "Kaštel Lukšić",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21216",
                "name" => "Kaštel Stari",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21218",
                "name" => "Seget Donji",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21220",
                "name" => "Trogir",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21222",
                "name" => "Marina",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21223",
                "name" => "Okrug Gornji",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21224",
                "name" => "Slatine",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21225",
                "name" => "Drvenik Veliki",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21226",
                "name" => "Vinišće",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21227",
                "name" => "Primorski Dolac",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21228",
                "name" => "Blizna Donja",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21229",
                "name" => "Crivac",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21230",
                "name" => "Sinj",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21231",
                "name" => "Klis",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21232",
                "name" => "Dicmo",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21233",
                "name" => "Hrvace",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21236",
                "name" => "Vrlika",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21238",
                "name" => "Otok",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21240",
                "name" => "Trilj",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21241",
                "name" => "Obrovac Sinjski",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21242",
                "name" => "Grab",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21243",
                "name" => "Ugljane",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21244",
                "name" => "Cista Velika",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21245",
                "name" => "Tijarica",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21246",
                "name" => "Aržano",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21247",
                "name" => "Neorić",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21250",
                "name" => "Šestanovac",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21251",
                "name" => "Žrnovnica",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21252",
                "name" => "Tugare",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21253",
                "name" => "Gata",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21254",
                "name" => "Blato na Cetini",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21255",
                "name" => "Zadvarje",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21256",
                "name" => "Cista Provo",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21257",
                "name" => "Lovreć",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21260",
                "name" => "Imotski",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21261",
                "name" => "Runovići",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21262",
                "name" => "Kamenmost",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21263",
                "name" => "Krivodol",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21264",
                "name" => "Donji Proložac",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21265",
                "name" => "Studenci",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21266",
                "name" => "Zmijavci",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21267",
                "name" => "Ričice",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21270",
                "name" => "Zagvozd",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21271",
                "name" => "Grabovac",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21272",
                "name" => "Slivno",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21273",
                "name" => "Župa",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21275",
                "name" => "Dragljane",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21276",
                "name" => "Vrgorac",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21277",
                "name" => "Veliki Prolog",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21292",
                "name" => "Srinjine",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21300",
                "name" => "Makarska",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21310",
                "name" => "Omiš",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21311",
                "name" => "Stobreč",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21312",
                "name" => "Podstrana",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21314",
                "name" => "Jesenice",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21315",
                "name" => "Dugi Rat",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21317",
                "name" => "Lokva Rogoznica",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21318",
                "name" => "Mimice",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21320",
                "name" => "Baška Voda",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21322",
                "name" => "Brela",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21325",
                "name" => "Tučepi",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21327",
                "name" => "Podgora",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21328",
                "name" => "Drašnice",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21329",
                "name" => "Igrane",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21330",
                "name" => "Gradac",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21333",
                "name" => "Drvenik",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21334",
                "name" => "Zaostrog",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21335",
                "name" => "Podaca",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21400",
                "name" => "Supetar",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21403",
                "name" => "Sutivan",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21404",
                "name" => "Ložišća",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21405",
                "name" => "Milna",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21410",
                "name" => "Postira",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21412",
                "name" => "Pučišća",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21413",
                "name" => "Povlja",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21420",
                "name" => "Bol",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21423",
                "name" => "Nerežišća",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21424",
                "name" => "Pražnica",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21425",
                "name" => "Selca",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21426",
                "name" => "Sumartin",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21430",
                "name" => "Grohote",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21432",
                "name" => "Stomorska",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21450",
                "name" => "Hvar",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21454",
                "name" => "Brusje",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21460",
                "name" => "Stari Grad",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21462",
                "name" => "Vrbanj",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21463",
                "name" => "Vrboska",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21465",
                "name" => "Jelsa",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21466",
                "name" => "Zastražišće",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21467",
                "name" => "Gdinj",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21469",
                "name" => "Sućuraj",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21480",
                "name" => "Vis",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21483",
                "name" => "Podšpilje",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "21485",
                "name" => "Komiža",
                "county" => "Split-Dalmatia county"
            ],
            [
                "code" => "22000",
                "name" => "Šibenik",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22010",
                "name" => "Šibenik-Brodarica",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22020",
                "name" => "Šibenik-Ražine",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22030",
                "name" => "Šibenik-Zablaće",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22202",
                "name" => "Primošten",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22203",
                "name" => "Rogoznica",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22204",
                "name" => "Široke",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22205",
                "name" => "Perković",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22206",
                "name" => "Boraja",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22211",
                "name" => "Vodice",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22212",
                "name" => "Tribunj",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22213",
                "name" => "Pirovac",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22214",
                "name" => "Čista Velika",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22215",
                "name" => "Zaton",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22221",
                "name" => "Lozovac",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22222",
                "name" => "Skradin",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22232",
                "name" => "Zlarin",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22233",
                "name" => "Prvić Luka",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22234",
                "name" => "Prvić Šepurine",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22235",
                "name" => "Kaprije",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22236",
                "name" => "Žirje",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22240",
                "name" => "Tisno",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22242",
                "name" => "Jezera",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22243",
                "name" => "Murter",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22244",
                "name" => "Betina",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22300",
                "name" => "Knin",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22301",
                "name" => "Golubić",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22303",
                "name" => "Oklaj",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22305",
                "name" => "Kistanje",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22310",
                "name" => "Kijevo",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22320",
                "name" => "Drniš",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22323",
                "name" => "Unešić",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22321",
                "name" => "Siverić",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22322",
                "name" => "Ružić",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "22324",
                "name" => "Drinovci",
                "county" => "Šibenik-Knin county"
            ],
            [
                "code" => "23000",
                "name" => "Zadar",
                "county" => "Zadar county"
            ],
            [
                "code" => "23205",
                "name" => "Bibinje",
                "county" => "Zadar county"
            ],
            [
                "code" => "23206",
                "name" => "Sukošan",
                "county" => "Zadar county"
            ],
            [
                "code" => "23207",
                "name" => "Sveti Filip i Jakov",
                "county" => "Zadar county"
            ],
            [
                "code" => "23210",
                "name" => "Biograd na moru",
                "county" => "Zadar county"
            ],
            [
                "code" => "23211",
                "name" => "Pakoštane",
                "county" => "Zadar county"
            ],
            [
                "code" => "23212",
                "name" => "Tkon",
                "county" => "Zadar county"
            ],
            [
                "code" => "23222",
                "name" => "Zemunik",
                "county" => "Zadar county"
            ],
            [
                "code" => "23223",
                "name" => "Škabrnja",
                "county" => "Zadar county"
            ],
            [
                "code" => "23226",
                "name" => "Pridraga",
                "county" => "Zadar county"
            ],
            [
                "code" => "23231",
                "name" => "Petrčane",
                "county" => "Zadar county"
            ],
            [
                "code" => "23232",
                "name" => "Nin",
                "county" => "Zadar county"
            ],
            [
                "code" => "23233",
                "name" => "Privlaka (Dalmacija)",
                "county" => "Zadar county"
            ],
            [
                "code" => "23234",
                "name" => "Vir",
                "county" => "Zadar county"
            ],
            [
                "code" => "23235",
                "name" => "Vrsi",
                "county" => "Zadar county"
            ],
            [
                "code" => "23241",
                "name" => "Poličnik",
                "county" => "Zadar county"
            ],
            [
                "code" => "23242",
                "name" => "Posedarje",
                "county" => "Zadar county"
            ],
            [
                "code" => "23243",
                "name" => "Jasenice",
                "county" => "Zadar county"
            ],
            [
                "code" => "23244",
                "name" => "Starigrad Paklenica",
                "county" => "Zadar county"
            ],
            [
                "code" => "23245",
                "name" => "Tribanj",
                "county" => "Zadar county"
            ],
            [
                "code" => "23247",
                "name" => "Vinjerac",
                "county" => "Zadar county"
            ],
            [
                "code" => "23248",
                "name" => "Ražanac",
                "county" => "Zadar county"
            ],
            [
                "code" => "23249",
                "name" => "Povljana",
                "county" => "Zadar county"
            ],
            [
                "code" => "23250",
                "name" => "Pag",
                "county" => "Zadar county"
            ],
            [
                "code" => "23251",
                "name" => "Kolan",
                "county" => "Zadar county"
            ],
            [
                "code" => "23262",
                "name" => "Pašman",
                "county" => "Zadar county"
            ],
            [
                "code" => "23263",
                "name" => "Ždrelac",
                "county" => "Zadar county"
            ],
            [
                "code" => "23264",
                "name" => "Neviđane",
                "county" => "Zadar county"
            ],
            [
                "code" => "23271",
                "name" => "Kukljica",
                "county" => "Zadar county"
            ],
            [
                "code" => "23272",
                "name" => "Kali",
                "county" => "Zadar county"
            ],
            [
                "code" => "23273",
                "name" => "Preko",
                "county" => "Zadar county"
            ],
            [
                "code" => "23274",
                "name" => "Lukoran",
                "county" => "Zadar county"
            ],
            [
                "code" => "23275",
                "name" => "Ugljan",
                "county" => "Zadar county"
            ],
            [
                "code" => "23281",
                "name" => "Sali",
                "county" => "Zadar county"
            ],
            [
                "code" => "23282",
                "name" => "Žman",
                "county" => "Zadar county"
            ],
            [
                "code" => "23283",
                "name" => "Rava",
                "county" => "Zadar county"
            ],
            [
                "code" => "23284",
                "name" => "Veli Iž",
                "county" => "Zadar county"
            ],
            [
                "code" => "23285",
                "name" => "Brbinj",
                "county" => "Zadar county"
            ],
            [
                "code" => "23286",
                "name" => "Božava",
                "county" => "Zadar county"
            ],
            [
                "code" => "23287",
                "name" => "Veli Rat",
                "county" => "Zadar county"
            ],
            [
                "code" => "23291",
                "name" => "Sestrunj",
                "county" => "Zadar county"
            ],
            [
                "code" => "23292",
                "name" => "Molat",
                "county" => "Zadar county"
            ],
            [
                "code" => "23293",
                "name" => "Ist",
                "county" => "Zadar county"
            ],
            [
                "code" => "23294",
                "name" => "Premuda",
                "county" => "Zadar county"
            ],
            [
                "code" => "23295",
                "name" => "Silba",
                "county" => "Zadar county"
            ],
            [
                "code" => "23296",
                "name" => "Olib",
                "county" => "Zadar county"
            ],
            [
                "code" => "23312",
                "name" => "Novigrad (Dalmacija)",
                "county" => "Zadar county"
            ],
            [
                "code" => "23420",
                "name" => "Benkovac",
                "county" => "Zadar county"
            ],
            [
                "code" => "23422",
                "name" => "Stankovci",
                "county" => "Zadar county"
            ],
            [
                "code" => "23423",
                "name" => "Polača",
                "county" => "Zadar county"
            ],
            [
                "code" => "23440",
                "name" => "Gračac",
                "county" => "Zadar county"
            ],
            [
                "code" => "23445",
                "name" => "Srb",
                "county" => "Zadar county"
            ],
            [
                "code" => "23450",
                "name" => "Obrovac",
                "county" => "Zadar county"
            ],
            [
                "code" => "23452",
                "name" => "Karin",
                "county" => "Zadar county"
            ],
            [
                "code" => "31000",
                "name" => "Osijek",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31204",
                "name" => "Bijelo Brdo",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31205",
                "name" => "Aljmaš",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31206",
                "name" => "Erdut",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31207",
                "name" => "Tenja",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31208",
                "name" => "Petrijevci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31214",
                "name" => "Laslovo",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31215",
                "name" => "Ernestinovo",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31216",
                "name" => "Antunovac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31220",
                "name" => "Višnjevac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31221",
                "name" => "Josipovac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31222",
                "name" => "Bizovac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31223",
                "name" => "Brođanci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31224",
                "name" => "Koška",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31225",
                "name" => "Breznica Našička",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31226",
                "name" => "Dalj",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31227",
                "name" => "Zelčin",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31300",
                "name" => "Beli Manastir",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31301",
                "name" => "Branjin Vrh",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31302",
                "name" => "Kneževo",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31303",
                "name" => "Popovac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31304",
                "name" => "Duboševica",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31305",
                "name" => "Draž",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31306",
                "name" => "Batina",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31307",
                "name" => "Zmajevac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31308",
                "name" => "Suza",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31309",
                "name" => "Kneževi Vinogradi",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31315",
                "name" => "Karanac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31321",
                "name" => "Petlovac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31322",
                "name" => "Baranjsko Petrovo Selo",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31323",
                "name" => "Bolman",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31324",
                "name" => "Jagodnjak",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31325",
                "name" => "Čeminac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31326",
                "name" => "Darda",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31327",
                "name" => "Bilje",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31328",
                "name" => "Lug",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31400",
                "name" => "Đakovo",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31401",
                "name" => "Viškovci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31402",
                "name" => "Semeljci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31403",
                "name" => "Vuka",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31404",
                "name" => "Vladislavci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31410",
                "name" => "Strizivojna",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31411",
                "name" => "Trnava",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31415",
                "name" => "Selci Đakovački",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31416",
                "name" => "Levanjska Varoš",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31417",
                "name" => "Piškorevci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31418",
                "name" => "Drenje",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31421",
                "name" => "Satnica Đakovačka",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31422",
                "name" => "Gorjani",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31423",
                "name" => "Bračevci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31424",
                "name" => "Punitovci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31431",
                "name" => "Čepin",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31432",
                "name" => "Budimci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31433",
                "name" => "Podgorač",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31500",
                "name" => "Našice",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31511",
                "name" => "Đurđenovac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31512",
                "name" => "Feričanci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31513",
                "name" => "Donja Motičina",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31530",
                "name" => "Podravska Moslavina",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31531",
                "name" => "Viljevo",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31540",
                "name" => "Donji Miholjac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31542",
                "name" => "Magadenovac",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31543",
                "name" => "Miholjački Poreč",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31550",
                "name" => "Valpovo",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31551",
                "name" => "Belišće",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31552",
                "name" => "Podgajci Podravski",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31553",
                "name" => "Črnkovci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31554",
                "name" => "Gat",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "31555",
                "name" => "Marijanci",
                "county" => "Osijek-Baranja county"
            ],
            [
                "code" => "32000",
                "name" => "Vukovar",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32010",
                "name" => "Vukovar",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32100",
                "name" => "Vinkovci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32211",
                "name" => "Ostrovo",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32212",
                "name" => "Gaboš",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32213",
                "name" => "Markušica",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32214",
                "name" => "Tordinci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32221",
                "name" => "Nuštar",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32222",
                "name" => "Bršadin",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32224",
                "name" => "Trpinja",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32225",
                "name" => "Bobota",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32227",
                "name" => "Borovo",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32229",
                "name" => "Petrovci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32232",
                "name" => "Sotin",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32233",
                "name" => "Opatovac",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32234",
                "name" => "Šarengrad",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32235",
                "name" => "Bapska",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32236",
                "name" => "Ilok",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32237",
                "name" => "Lovas",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32238",
                "name" => "Čakovci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32239",
                "name" => "Negoslavci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32241",
                "name" => "Stari Jankovci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32242",
                "name" => "Slakovci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32243",
                "name" => "Orolik",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32244",
                "name" => "Đeletovci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32245",
                "name" => "Nijemci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32246",
                "name" => "Lipovac",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32247",
                "name" => "Banovci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32248",
                "name" => "Ilača",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32249",
                "name" => "Tovarnik",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32251",
                "name" => "Privlaka",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32252",
                "name" => "Otok",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32253",
                "name" => "Komletinci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32254",
                "name" => "Vrbanja",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32255",
                "name" => "Soljani",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32256",
                "name" => "Strošinci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32257",
                "name" => "Drenovci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32258",
                "name" => "Posavski Podgajci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32260",
                "name" => "Gunja",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32261",
                "name" => "Rajevo Selo",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32262",
                "name" => "Račinovci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32263",
                "name" => "Đurići",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32270",
                "name" => "Županja",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32271",
                "name" => "Rokovci Andrijaševci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32272",
                "name" => "Cerna",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32273",
                "name" => "Gradište",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32274",
                "name" => "Štitar",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32275",
                "name" => "Bošnjaci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32276",
                "name" => "Babina Greda",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32280",
                "name" => "Jarmina",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32281",
                "name" => "Ivankovo",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32282",
                "name" => "Retkovci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32283",
                "name" => "Vođinci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "32284",
                "name" => "Stari Mikanovci",
                "county" => "Vukovar-Syrmia county"
            ],
            [
                "code" => "33000",
                "name" => "Virovitica",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33404",
                "name" => "Špišić Bukovica",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33405",
                "name" => "Pitomača",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33406",
                "name" => "Lukač",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33407",
                "name" => "Gornje Bazje",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33410",
                "name" => "Suhopolje",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33411",
                "name" => "Gradina",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33412",
                "name" => "Cabuna",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33507",
                "name" => "Crnac",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33513",
                "name" => "Zdenci",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33514",
                "name" => "Čačinci",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33515",
                "name" => "Orahovica",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33517",
                "name" => "Mikleuš",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33518",
                "name" => "Nova Bukovica",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33520",
                "name" => "Slatina",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33522",
                "name" => "Voćin",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33523",
                "name" => "Čađavica",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33525",
                "name" => "Sopje",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "33533",
                "name" => "Pivnica Slavonska",
                "county" => "Virovitica-Podravina county"
            ],
            [
                "code" => "34000",
                "name" => "Požega",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34308",
                "name" => "Jakšić",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34310",
                "name" => "Pleternica",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34311",
                "name" => "Kuzmica",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34312",
                "name" => "Sesvete (kod Požege)",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34315",
                "name" => "Ratkovica",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34322",
                "name" => "Brestovac",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34330",
                "name" => "Velika",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34334",
                "name" => "Kaptol",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34335",
                "name" => "Vetovo",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34340",
                "name" => "Kutjevo",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34343",
                "name" => "Bektež",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34350",
                "name" => "Čaglin",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34543",
                "name" => "Poljana",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34550",
                "name" => "Pakrac",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34551",
                "name" => "Lipik",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34552",
                "name" => "Badljevina",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "34553",
                "name" => "Bučje",
                "county" => "Požega-Slavonia county"
            ],
            [
                "code" => "35000",
                "name" => "Slavonski Brod",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35105",
                "name" => "Slavonski Brod",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35106",
                "name" => "Slavonski Brod",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35107",
                "name" => "Podvinje",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35201",
                "name" => "Podcrkavlje",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35207",
                "name" => "Gornja Vrba",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35208",
                "name" => "Ruščica",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35209",
                "name" => "Bukovlje",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35210",
                "name" => "Vrpolje",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35211",
                "name" => "Trnjani",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35212",
                "name" => "Garčin",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35213",
                "name" => "Oprisavci",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35214",
                "name" => "Donji Andrijevci",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35216",
                "name" => "Prnjavor",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35220",
                "name" => "Slavonski Šamac",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35221",
                "name" => "Velika Kopanica",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35222",
                "name" => "Gundinci",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35224",
                "name" => "Sikirevci",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35250",
                "name" => "Oriovac",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35252",
                "name" => "Sibinj",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35253",
                "name" => "Brodski Stupnik",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35254",
                "name" => "Bebrina",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35255",
                "name" => "Slavonski Kobaš",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35257",
                "name" => "Lužani",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35400",
                "name" => "Nova Gradiška",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35403",
                "name" => "Rešetari",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35404",
                "name" => "Cernik",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35410",
                "name" => "Nova Kapela",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35414",
                "name" => "Vrbova",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35420",
                "name" => "Staro Petrovo Selo",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35422",
                "name" => "Zapolje",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35423",
                "name" => "Vrbje",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35424",
                "name" => "Orubica",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35425",
                "name" => "Davor",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35428",
                "name" => "Dragalić",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35429",
                "name" => "Gornji Bogićevci",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35430",
                "name" => "Okučani",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "35435",
                "name" => "Stara Gradiška",
                "county" => "Brod-Posavina county"
            ],
            [
                "code" => "40000",
                "name" => "Čakovec",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40305",
                "name" => "Nedelišće",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40306",
                "name" => "Macinec",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40311",
                "name" => "Lopatinec",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40312",
                "name" => "Štrigova",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40313",
                "name" => "Sveti Martin na Muri",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40314",
                "name" => "Selnica",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40315",
                "name" => "Mursko Središče",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40316",
                "name" => "Vratišinec",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40317",
                "name" => "Podturen",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40318",
                "name" => "Dekanovec",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40319",
                "name" => "Belica",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40320",
                "name" => "Donji Kraljevec",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40321",
                "name" => "Mala Subotica",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40322",
                "name" => "Orehovica",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40323",
                "name" => "Prelog",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40324",
                "name" => "Goričan",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40325",
                "name" => "Draškovec",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40326",
                "name" => "Sveta Marija",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40327",
                "name" => "Donji Vidovec",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40328",
                "name" => "Donja Dubrava",
                "county" => "Međimurje county"
            ],
            [
                "code" => "40329",
                "name" => "Kotoriba",
                "county" => "Međimurje county"
            ],
            [
                "code" => "42000",
                "name" => "Varaždin",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42201",
                "name" => "Beretinec",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42202",
                "name" => "Trnovec Bartolovečki",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42203",
                "name" => "Jalžabet",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42204",
                "name" => "Turčin",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42205",
                "name" => "Vidovec",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42206",
                "name" => "Petrijanec",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42207",
                "name" => "Vinica",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42208",
                "name" => "Cestica",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42209",
                "name" => "Sračinec",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42214",
                "name" => "Sveti Ilija",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42220",
                "name" => "Novi Marof",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42222",
                "name" => "Ljubeščica",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42223",
                "name" => "Varaždinske Toplice",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42224",
                "name" => "Visoko",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42225",
                "name" => "Breznički Hum",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42226",
                "name" => "Bisag",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42230",
                "name" => "Ludbreg",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42231",
                "name" => "Mali Bukovec",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42232",
                "name" => "Donji Martijanec",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42233",
                "name" => "Sveti Đurđ",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42240",
                "name" => "Ivanec",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42242",
                "name" => "Radovan",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42243",
                "name" => "Maruševec",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42244",
                "name" => "Klenovnik",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42245",
                "name" => "Donja Voća",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42250",
                "name" => "Lepoglava",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42253",
                "name" => "Bednja",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42254",
                "name" => "Trakošćan",
                "county" => "Varaždin county"
            ],
            [
                "code" => "42255",
                "name" => "Donja Višnjica",
                "county" => "Varaždin county"
            ],
            [
                "code" => "43000",
                "name" => "Bjelovar",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43202",
                "name" => "Zrinski Topolovac",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43203",
                "name" => "Kapela",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43211",
                "name" => "Predavac",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43212",
                "name" => "Rovišće",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43226",
                "name" => "Veliko Trojstvo",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43227",
                "name" => "Šandrovac",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43231",
                "name" => "Ivanska",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43232",
                "name" => "Berek",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43233",
                "name" => "Trnovitički Popovac",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43240",
                "name" => "Čazma",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43245",
                "name" => "Gornji Draganec",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43246",
                "name" => "Štefanje",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43247",
                "name" => "Narta",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43251",
                "name" => "Gudovac",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43252",
                "name" => "Prgomelje",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43270",
                "name" => "Veliki Grđevac",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43271",
                "name" => "Velika Pisanica",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43272",
                "name" => "Nova Rača",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43273",
                "name" => "Bulinac",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43274",
                "name" => "Severin",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43280",
                "name" => "Garešnica",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43282",
                "name" => "Veliko Vukovje",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43283",
                "name" => "Kaniška Iva",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43284",
                "name" => "Hercegovac",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43285",
                "name" => "Velika Trnovitica",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43290",
                "name" => "Grubišno Polje",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43293",
                "name" => "Veliki Zdenci",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43500",
                "name" => "Daruvar",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43505",
                "name" => "Končanica (Končenice)",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43506",
                "name" => "Dežanovac",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43507",
                "name" => "Uljanik",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43531",
                "name" => "Veliki Bastaji",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43532",
                "name" => "Đulovac",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "43541",
                "name" => "Sirač",
                "county" => "Bjelovar-Bilogora county"
            ],
            [
                "code" => "44000",
                "name" => "Sisak",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44010",
                "name" => "Sisak-Caprag",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44201",
                "name" => "Martinska Ves",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44202",
                "name" => "Topolovac",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44203",
                "name" => "Gušće",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44213",
                "name" => "Kratečko",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44204",
                "name" => "Jabukovac",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44210",
                "name" => "Sunja",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44211",
                "name" => "Blinjski Kut",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44214",
                "name" => "Bobovac",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44222",
                "name" => "Šaš",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44250",
                "name" => "Petrinja",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44253",
                "name" => "Mošćenica",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44271",
                "name" => "Letovanić",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44272",
                "name" => "Lekenik",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44273",
                "name" => "Sela",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44316",
                "name" => "Velika Ludina",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44317",
                "name" => "Popovača",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44318",
                "name" => "Voloder",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44320",
                "name" => "Kutina",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44321",
                "name" => "Banova Jaruga",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44322",
                "name" => "Lipovljani",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44323",
                "name" => "Rajić",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44324",
                "name" => "Jasenovac",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44325",
                "name" => "Krapje",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44330",
                "name" => "Novska",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44400",
                "name" => "Glina",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44410",
                "name" => "Gvozd",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44415",
                "name" => "Topusko",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44430",
                "name" => "Hrvatska Kostajnica",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44431",
                "name" => "Donji Kukuruzari",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44435",
                "name" => "Divuša",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44440",
                "name" => "Dvor",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "44450",
                "name" => "Hrvatska Dubica",
                "county" => "Sisak-Moslavina county"
            ],
            [
                "code" => "47000",
                "name" => "Karlovac",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47201",
                "name" => "Draganići",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47203",
                "name" => "Rečica",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47204",
                "name" => "Šišljavić",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47206",
                "name" => "Lasinja",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47212",
                "name" => "Skakavac",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47220",
                "name" => "Vojnić",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47222",
                "name" => "Cetingrad",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47240",
                "name" => "Slunj",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47241",
                "name" => "Cerovac Vukmanički",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47242",
                "name" => "Krnjak",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47245",
                "name" => "Rakovica",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47246",
                "name" => "Drežnik Grad",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47250",
                "name" => "Duga Resa",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47251",
                "name" => "Bosiljevo",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47252",
                "name" => "Barilović",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47261",
                "name" => "Zvečaj",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47262",
                "name" => "Generalski Stol",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47264",
                "name" => "Tounj",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47271",
                "name" => "Netretić",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47272",
                "name" => "Ribnik",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47276",
                "name" => "Žakanje",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47280",
                "name" => "Ozalj",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47281",
                "name" => "Mali Erjavec",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47282",
                "name" => "Kamanje",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47283",
                "name" => "Vivodina",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47284",
                "name" => "Kašt",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47285",
                "name" => "Radatovići",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47286",
                "name" => "Mahično",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47300",
                "name" => "Ogulin",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47302",
                "name" => "Oštarije",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47303",
                "name" => "Josipdol",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47304",
                "name" => "Plaški",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47306",
                "name" => "Saborsko",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47307",
                "name" => "Gornje Zagorje",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47313",
                "name" => "Drežnica",
                "county" => "Karlovac county"
            ],
            [
                "code" => "47314",
                "name" => "Jasenak",
                "county" => "Karlovac county"
            ],
            [
                "code" => "48000",
                "name" => "Koprivnica",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48213",
                "name" => "Cirkvena",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48214",
                "name" => "Sveti Ivan Žabno",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48260",
                "name" => "Križevci",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48264",
                "name" => "Kloštar Vojakovački",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48265",
                "name" => "Raven",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48267",
                "name" => "Orehovec",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48268",
                "name" => "Gornja Rijeka",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48269",
                "name" => "Kalnik",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48306",
                "name" => "Sokolovac",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48311",
                "name" => "Kunovec",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48312",
                "name" => "Rasinja",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48314",
                "name" => "Koprivnički Ivanec",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48316",
                "name" => "Đelekovec",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48317",
                "name" => "Legrad",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48321",
                "name" => "Peteranec",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48322",
                "name" => "Drnje",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48323",
                "name" => "Hlebine",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48324",
                "name" => "Koprivnički Bregi",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48325",
                "name" => "Novigrad Podravski",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48326",
                "name" => "Virje",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48327",
                "name" => "Molve",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48331",
                "name" => "Gola",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48332",
                "name" => "Ždala",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48350",
                "name" => "Đurđevac",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48355",
                "name" => "Novo Virje",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48356",
                "name" => "Ferdinandovac",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48361",
                "name" => "Kalinovac",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48362",
                "name" => "Kloštar Podravski",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "48363",
                "name" => "Podravske Sesvete",
                "county" => "Koprivnica-Križevci county"
            ],
            [
                "code" => "49000",
                "name" => "Krapina",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49210",
                "name" => "Zabok",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49214",
                "name" => "Veliko Trgovišće",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49215",
                "name" => "Tuhelj",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49216",
                "name" => "Desinić",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49217",
                "name" => "Krapinske Toplice",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49218",
                "name" => "Pregrada",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49221",
                "name" => "Bedekovčina",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49222",
                "name" => "Poznanovec",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49223",
                "name" => "Sveti Križ Začretje",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49224",
                "name" => "Lepajci",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49225",
                "name" => "Đurmanec",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49228",
                "name" => "Brestovec Orehovički",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49231",
                "name" => "Hum na Sutli",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49232",
                "name" => "Radoboj",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49233",
                "name" => "Gornje Jesenje",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49234",
                "name" => "Petrovsko",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49240",
                "name" => "Donja Stubica",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49243",
                "name" => "Oroslavje",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49244",
                "name" => "Stubičke Toplice",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49245",
                "name" => "Gornja Stubica",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49246",
                "name" => "Marija Bistrica",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49247",
                "name" => "Zlatar Bistrica",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49250",
                "name" => "Zlatar",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49251",
                "name" => "Mače",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49252",
                "name" => "Mihovljan",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49253",
                "name" => "Lobor",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49254",
                "name" => "Belec",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49255",
                "name" => "Novi Golubovec",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49282",
                "name" => "Konjščina",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49283",
                "name" => "Hraščina-Trgovišće",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49284",
                "name" => "Budinšćina",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49290",
                "name" => "Klanjec",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49294",
                "name" => "Kraljevec na Sutli",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49295",
                "name" => "Kumrovec",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "49296",
                "name" => "Zagorska Sela",
                "county" => "Krapina-Zagorje county"
            ],
            [
                "code" => "51000",
                "name" => "Rijeka",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51211",
                "name" => "Matulji",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51212",
                "name" => "Vele Mune",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51213",
                "name" => "Jurdani",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51214",
                "name" => "Šapjane",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51215",
                "name" => "Kastav",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51216",
                "name" => "Viškovo",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51217",
                "name" => "Klana",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51218",
                "name" => "Dražice",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51219",
                "name" => "Čavle",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51221",
                "name" => "Kostrena",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51222",
                "name" => "Bakar",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51223",
                "name" => "Škrljevo",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51224",
                "name" => "Krasica",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51225",
                "name" => "Praputnjak",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51226",
                "name" => "Hreljin",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51241",
                "name" => "Križišće",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51242",
                "name" => "Drivenik",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51243",
                "name" => "Tribalj",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51244",
                "name" => "Grižane",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51250",
                "name" => "Novi Vinodolski",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51251",
                "name" => "Ledenice",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51252",
                "name" => "Klenovica",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51253",
                "name" => "Bribir",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51260",
                "name" => "Crikvenica",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51261",
                "name" => "Bakarac",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51262",
                "name" => "Kraljevica",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51263",
                "name" => "Šmrika",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51264",
                "name" => "Jadranovo",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51265",
                "name" => "Dramalj",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51266",
                "name" => "Selce",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51280",
                "name" => "Rab",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51281",
                "name" => "Lopar",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51300",
                "name" => "Delnice",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51301",
                "name" => "Brod na Kupi",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51302",
                "name" => "Kuželj",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51303",
                "name" => "Plešce",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51304",
                "name" => "Gerovo",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51305",
                "name" => "Tršće",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51306",
                "name" => "Čabar",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51307",
                "name" => "Prezid",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51311",
                "name" => "Skrad",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51312",
                "name" => "Brod Moravice",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51313",
                "name" => "Kupjak",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51314",
                "name" => "Ravna Gora",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51315",
                "name" => "Mrkopalj",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51316",
                "name" => "Lokve",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51317",
                "name" => "Crni Lug",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51321",
                "name" => "Vrata",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51322",
                "name" => "Fužine",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51323",
                "name" => "Lič",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51324",
                "name" => "Zlobin",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51325",
                "name" => "Moravice",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51326",
                "name" => "Vrbovsko",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51327",
                "name" => "Gomirje",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51328",
                "name" => "Lukovdol",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51329",
                "name" => "Severin na Kupi",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51410",
                "name" => "Opatija",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51414",
                "name" => "Ičići",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51415",
                "name" => "Lovran",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51417",
                "name" => "Mošćenička Draga",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51418",
                "name" => "Brseč",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51500",
                "name" => "Krk",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51511",
                "name" => "Malinska",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51512",
                "name" => "Njivice",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51513",
                "name" => "Omišalj",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51514",
                "name" => "Dobrinj",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51515",
                "name" => "Šilo",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51516",
                "name" => "Vrbnik",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51517",
                "name" => "Kornić",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51521",
                "name" => "Punat",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51522",
                "name" => "Draga Bašćanska",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51523",
                "name" => "Baška",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51550",
                "name" => "Mali Lošinj",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51551",
                "name" => "Veli Lošinj",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51552",
                "name" => "Ilovik",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51554",
                "name" => "Nerezine",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51555",
                "name" => "Belej",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51556",
                "name" => "Martinšćica",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51557",
                "name" => "Cres",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51559",
                "name" => "Beli",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51561",
                "name" => "Susak",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51562",
                "name" => "Unije",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "51564",
                "name" => "Ćunski",
                "county" => "Primorje-Gorski Kotar county"
            ],
            [
                "code" => "52000",
                "name" => "Pazin",
                "county" => "Istria county"
            ],
            [
                "code" => "52100",
                "name" => "Pula (Pola)",
                "county" => "Istria county"
            ],
            [
                "code" => "52104",
                "name" => "Pula (Pola)",
                "county" => "Istria county"
            ],
            [
                "code" => "52105",
                "name" => "Pula (Pola)",
                "county" => "Istria county"
            ],
            [
                "code" => "52106",
                "name" => "Pula (Pola)",
                "county" => "Istria county"
            ],
            [
                "code" => "52107",
                "name" => "Pula (Pola)",
                "county" => "Istria county"
            ],
            [
                "code" => "52203",
                "name" => "Medulin",
                "county" => "Istria county"
            ],
            [
                "code" => "52206",
                "name" => "Marčana",
                "county" => "Istria county"
            ],
            [
                "code" => "52207",
                "name" => "Barban",
                "county" => "Istria county"
            ],
            [
                "code" => "52208",
                "name" => "Krnica",
                "county" => "Istria county"
            ],
            [
                "code" => "52210",
                "name" => "Rovinj (Rovigno)",
                "county" => "Istria county"
            ],
            [
                "code" => "52211",
                "name" => "Bale (Valle)",
                "county" => "Istria county"
            ],
            [
                "code" => "52212",
                "name" => "Fažana (Fasana)",
                "county" => "Istria county"
            ],
            [
                "code" => "52215",
                "name" => "Vodnjan (Dignano)",
                "county" => "Istria county"
            ],
            [
                "code" => "52216",
                "name" => "Galižana (Gallesano)",
                "county" => "Istria county"
            ],
            [
                "code" => "52220",
                "name" => "Labin",
                "county" => "Istria county"
            ],
            [
                "code" => "52221",
                "name" => "Rabac",
                "county" => "Istria county"
            ],
            [
                "code" => "52222",
                "name" => "Koromačno",
                "county" => "Istria county"
            ],
            [
                "code" => "52223",
                "name" => "Raša",
                "county" => "Istria county"
            ],
            [
                "code" => "52224",
                "name" => "Trget",
                "county" => "Istria county"
            ],
            [
                "code" => "52231",
                "name" => "Nedešćina",
                "county" => "Istria county"
            ],
            [
                "code" => "52232",
                "name" => "Kršan",
                "county" => "Istria county"
            ],
            [
                "code" => "52233",
                "name" => "Šušnjevica",
                "county" => "Istria county"
            ],
            [
                "code" => "52234",
                "name" => "Plomin",
                "county" => "Istria county"
            ],
            [
                "code" => "52332",
                "name" => "Pićan",
                "county" => "Istria county"
            ],
            [
                "code" => "52333",
                "name" => "Podpićan",
                "county" => "Istria county"
            ],
            [
                "code" => "52341",
                "name" => "Žminj",
                "county" => "Istria county"
            ],
            [
                "code" => "52342",
                "name" => "Svetvinčenat",
                "county" => "Istria county"
            ],
            [
                "code" => "52352",
                "name" => "Kanfanar",
                "county" => "Istria county"
            ],
            [
                "code" => "52402",
                "name" => "Cerovlje",
                "county" => "Istria county"
            ],
            [
                "code" => "52403",
                "name" => "Gračišće",
                "county" => "Istria county"
            ],
            [
                "code" => "52404",
                "name" => "Sveti Petar u šumi",
                "county" => "Istria county"
            ],
            [
                "code" => "52420",
                "name" => "Buzet",
                "county" => "Istria county"
            ],
            [
                "code" => "52422",
                "name" => "Lanišće",
                "county" => "Istria county"
            ],
            [
                "code" => "52423",
                "name" => "Karojba",
                "county" => "Istria county"
            ],
            [
                "code" => "52424",
                "name" => "Motovun (Montana)",
                "county" => "Istria county"
            ],
            [
                "code" => "52425",
                "name" => "Roč",
                "county" => "Istria county"
            ],
            [
                "code" => "52426",
                "name" => "Lupoglav",
                "county" => "Istria county"
            ],
            [
                "code" => "52427",
                "name" => "Livade (Levade)",
                "county" => "Istria county"
            ],
            [
                "code" => "52428",
                "name" => "Oprtalj (Portole)",
                "county" => "Istria county"
            ],
            [
                "code" => "52429",
                "name" => "Grožnjan (Grisignana)",
                "county" => "Istria county"
            ],
            [
                "code" => "52434",
                "name" => "Boljun",
                "county" => "Istria county"
            ],
            [
                "code" => "52440",
                "name" => "Poreč (Parenzo)",
                "county" => "Istria county"
            ],
            [
                "code" => "52444",
                "name" => "Tinjan",
                "county" => "Istria county"
            ],
            [
                "code" => "52445",
                "name" => "Baderna",
                "county" => "Istria county"
            ],
            [
                "code" => "52446",
                "name" => "Nova Vas",
                "county" => "Istria county"
            ],
            [
                "code" => "52447",
                "name" => "Vižinada (Visinada)",
                "county" => "Istria county"
            ],
            [
                "code" => "52448",
                "name" => "Sveti Lovreč",
                "county" => "Istria county"
            ],
            [
                "code" => "52449",
                "name" => "Červar Porat",
                "county" => "Istria county"
            ],
            [
                "code" => "52450",
                "name" => "Vrsar (Orsera)",
                "county" => "Istria county"
            ],
            [
                "code" => "52452",
                "name" => "Funtana (Fontane)",
                "county" => "Istria county"
            ],
            [
                "code" => "52460",
                "name" => "Buje (Buie)",
                "county" => "Istria county"
            ],
            [
                "code" => "52462",
                "name" => "Momjan (Momiano)",
                "county" => "Istria county"
            ],
            [
                "code" => "52463",
                "name" => "Višnjan (Visignano)",
                "county" => "Istria county"
            ],
            [
                "code" => "52464",
                "name" => "Kaštelir (Castelliere)",
                "county" => "Istria county"
            ],
            [
                "code" => "52465",
                "name" => "Tar (Torre)",
                "county" => "Istria county"
            ],
            [
                "code" => "52466",
                "name" => "Novigrad (Cittanova)",
                "county" => "Istria county"
            ],
            [
                "code" => "52470",
                "name" => "Umag (Umago)",
                "county" => "Istria county"
            ],
            [
                "code" => "52474",
                "name" => "Brtonigla (Verteneglio)",
                "county" => "Istria county"
            ],
            [
                "code" => "52475",
                "name" => "Savudrija (Salvore)",
                "county" => "Istria county"
            ],
            [
                "code" => "53000",
                "name" => "Gospić",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53201",
                "name" => "Lički Osik",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53202",
                "name" => "Perušić",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53203",
                "name" => "Kosinj",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53206",
                "name" => "Brušane",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53211",
                "name" => "Smiljan",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53212",
                "name" => "Klanac",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53213",
                "name" => "Donje Pazarište",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53220",
                "name" => "Otočac",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53223",
                "name" => "Vrhovine",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53224",
                "name" => "Ličko Lešće",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53230",
                "name" => "Korenica",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53231",
                "name" => "Plitvička Jezera",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53233",
                "name" => "Ličko Petrovo Selo",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53234",
                "name" => "Udbina",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53236",
                "name" => "Podlapača",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53244",
                "name" => "Lovinac",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53250",
                "name" => "Donji Lapac",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53260",
                "name" => "Brinje",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53261",
                "name" => "Križpolje",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53262",
                "name" => "Jezerane",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53270",
                "name" => "Senj",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53271",
                "name" => "Krivi Put",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53273",
                "name" => "Vratnik",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53274",
                "name" => "Krasno",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53284",
                "name" => "Sveti Juraj",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53287",
                "name" => "Jablanac",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53288",
                "name" => "Karlobag",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53289",
                "name" => "Lukovo Šugarje",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53291",
                "name" => "Novalja",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53294",
                "name" => "Lun",
                "county" => "Lika-Senj county"
            ],
            [
                "code" => "53296",
                "name" => "Zubovići",
                "county" => "Lika-Senj county"
            ]
        ];

        foreach($jayParsedAry as $entry){
            $city = new Postcode;
            $city->code = $entry['code'];
            $city->name = $entry['name'];
            $city->county = $entry['county'];
            $city->save();
        }
    }
}
