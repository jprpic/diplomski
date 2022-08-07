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
                "PostCode" => "10000",
                "Name" => "Zagreb",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10010",
                "Name" => "Zagreb-Sloboština",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10020",
                "Name" => "Zagreb-Novi Zagreb",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10040",
                "Name" => "Dubrava",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10090",
                "Name" => "Zagreb-Susedgrad",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10110",
                "Name" => "Zagreb",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10250",
                "Name" => "Lučko",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10251",
                "Name" => "Hrvatski Leskovac",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10253",
                "Name" => "Donji Dragonožec",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10255",
                "Name" => "Gornji Stupnik",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10257",
                "Name" => "Brezovica",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10290",
                "Name" => "Zaprešić",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10291",
                "Name" => "Prigorje Brdovečko",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10292",
                "Name" => "Šenkovec",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10293",
                "Name" => "Dubravica",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10294",
                "Name" => "Donja Pušća",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10295",
                "Name" => "Kupljenovo",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10296",
                "Name" => "Luka",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10297",
                "Name" => "Jakovlje",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10298",
                "Name" => "Donja Bistra",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10299",
                "Name" => "Marija Gorica",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10310",
                "Name" => "Ivanić-Grad",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10311",
                "Name" => "Posavski Bregi",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10312",
                "Name" => "Kloštar Ivanić",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10313",
                "Name" => "Graberje Ivaničko",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10314",
                "Name" => "Križ",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10315",
                "Name" => "Novoselec",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10316",
                "Name" => "Lijevi Dubrovčak",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10340",
                "Name" => "Vrbovec",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10341",
                "Name" => "Lonjica",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10342",
                "Name" => "Dubrava",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10343",
                "Name" => "Nova Kapela",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10344",
                "Name" => "Farkaševac",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10345",
                "Name" => "Gradec",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10346",
                "Name" => "Preseka",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10347",
                "Name" => "Rakovec",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10360",
                "Name" => "Zagreb-Sesvete",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10361",
                "Name" => "Sesvete-Kraljevec",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10362",
                "Name" => "Zagreb-Kašina",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10363",
                "Name" => "Belovar",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10370",
                "Name" => "Dugo Selo",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10372",
                "Name" => "Oborovo",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10373",
                "Name" => "Ivanja Reka",
                "County" => "Zagreb"
            ],
            [
                "PostCode" => "10380",
                "Name" => "Sveti Ivan Zelina",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10381",
                "Name" => "Bedenica",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10382",
                "Name" => "Donja Zelina",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10383",
                "Name" => "Komin",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10408",
                "Name" => "Velika Mlaka",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10410",
                "Name" => "Velika Gorica",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10411",
                "Name" => "Orle",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10412",
                "Name" => "Donja Lomnica",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10413",
                "Name" => "Kravarsko",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10414",
                "Name" => "Pokupsko",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10415",
                "Name" => "Novo Čiče",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10417",
                "Name" => "Buševec",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10418",
                "Name" => "Dubranec",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10419",
                "Name" => "Vukovina",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10430",
                "Name" => "Samobor",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10431",
                "Name" => "Sveta Nedjelja",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10432",
                "Name" => "Bregana",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10434",
                "Name" => "Strmec Samoborski",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10435",
                "Name" => "Sveti Martin pod Okićem",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10436",
                "Name" => "Rakov Potok",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10437",
                "Name" => "Bestovje",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10450",
                "Name" => "Jastrebarsko",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10451",
                "Name" => "Pisarovina",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10453",
                "Name" => "Gorica Svetojanska",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10454",
                "Name" => "Krašić",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10455",
                "Name" => "Kostanjevac",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10456",
                "Name" => "Kalje",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "10457",
                "Name" => "Sošice",
                "County" => "Zagreb County"
            ],
            [
                "PostCode" => "20000",
                "Name" => "Dubrovnik",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20205",
                "Name" => "Topolo",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20207",
                "Name" => "Mlini",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20210",
                "Name" => "Cavtat",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20213",
                "Name" => "Čilipi",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20215",
                "Name" => "Gruda",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20216",
                "Name" => "Dubravka",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20217",
                "Name" => "Pridvorje",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20218",
                "Name" => "Pločice",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20221",
                "Name" => "Koločep",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20222",
                "Name" => "Lopud",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20223",
                "Name" => "Šipanjska Luka",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20224",
                "Name" => "Maranovići",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20225",
                "Name" => "Babino Polje",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20226",
                "Name" => "Goveđari",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20230",
                "Name" => "Ston",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20231",
                "Name" => "Doli",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20232",
                "Name" => "Slano",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20233",
                "Name" => "Trsteno",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20234",
                "Name" => "Orašac",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20235",
                "Name" => "Zaton Veliki",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20236",
                "Name" => "Mokošica",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20240",
                "Name" => "Trpanj",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20242",
                "Name" => "Oskorušno",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20243",
                "Name" => "Kuna",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20244",
                "Name" => "Potomje",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20245",
                "Name" => "Trstenik",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20246",
                "Name" => "Janjina",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20247",
                "Name" => "Žuljana",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20248",
                "Name" => "Putniković",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20250",
                "Name" => "Orebić",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20260",
                "Name" => "Korčula",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20263",
                "Name" => "Lumbarda",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20264",
                "Name" => "Račišće",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20267",
                "Name" => "Kućište",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20269",
                "Name" => "Lovište",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20270",
                "Name" => "Vela Luka",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20271",
                "Name" => "Blato",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20272",
                "Name" => "Smokvica",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20273",
                "Name" => "Čara",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20274",
                "Name" => "Pupnat",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20275",
                "Name" => "Žrnovo",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20278",
                "Name" => "Nova Sela",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20290",
                "Name" => "Lastovo",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20340",
                "Name" => "Ploče",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20341",
                "Name" => "Kula Norinska",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20342",
                "Name" => "Otrić Seoci",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20343",
                "Name" => "Rogotin",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20344",
                "Name" => "Komin (Dalma)",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20345",
                "Name" => "Staševica",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20350",
                "Name" => "Metković",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20352",
                "Name" => "Vid",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20353",
                "Name" => "Mlinište",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20355",
                "Name" => "Opuzen",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20356",
                "Name" => "Klek",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "20357",
                "Name" => "Blace",
                "County" => "Dubrovnik-Neretva County"
            ],
            [
                "PostCode" => "21000",
                "Name" => "Split",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21201",
                "Name" => "Prgomet",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21202",
                "Name" => "Lećevica",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21203",
                "Name" => "Donji Muć",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21204",
                "Name" => "Dugopolje",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21205",
                "Name" => "Donji Dolac",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21206",
                "Name" => "Donje Ogorje",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21207",
                "Name" => "Kostanje",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21208",
                "Name" => "Kučiće",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21209",
                "Name" => "Mravince",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21210",
                "Name" => "Solin",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21211",
                "Name" => "Vranjic",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21212",
                "Name" => "Kaštel Sućurac",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21213",
                "Name" => "Kaštel Gomilica",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21214",
                "Name" => "Kaštel Kambelovac",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21215",
                "Name" => "Kaštel Lukšić",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21216",
                "Name" => "Kaštel Stari",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21218",
                "Name" => "Seget Donji",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21220",
                "Name" => "Trogir",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21222",
                "Name" => "Marina",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21223",
                "Name" => "Okrug Gornji",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21224",
                "Name" => "Slatine",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21225",
                "Name" => "Drvenik Veliki",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21226",
                "Name" => "Vinišće",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21227",
                "Name" => "Primorski Dolac",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21228",
                "Name" => "Blizna Donja",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21229",
                "Name" => "Crivac",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21230",
                "Name" => "Sinj",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21231",
                "Name" => "Klis",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21232",
                "Name" => "Dicmo",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21233",
                "Name" => "Hrvace",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21236",
                "Name" => "Vrlika",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21238",
                "Name" => "Otok",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21240",
                "Name" => "Trilj",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21241",
                "Name" => "Obrovac Sinjski",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21242",
                "Name" => "Grab",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21243",
                "Name" => "Ugljane",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21244",
                "Name" => "Cista Velika",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21245",
                "Name" => "Tijarica",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21246",
                "Name" => "Aržano",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21247",
                "Name" => "Neorić",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21250",
                "Name" => "Šestanovac",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21251",
                "Name" => "Žrnovnica",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21252",
                "Name" => "Tugare",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21253",
                "Name" => "Gata",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21254",
                "Name" => "Blato na Cetini",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21255",
                "Name" => "Zadvarje",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21256",
                "Name" => "Cista Provo",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21257",
                "Name" => "Lovreć",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21260",
                "Name" => "Imotski",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21261",
                "Name" => "Runovići",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21262",
                "Name" => "Kamenmost",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21263",
                "Name" => "Krivodol",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21264",
                "Name" => "Donji Proložac",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21265",
                "Name" => "Studenci",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21266",
                "Name" => "Zmijavci",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21267",
                "Name" => "Ričice",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21270",
                "Name" => "Zagvozd",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21271",
                "Name" => "Grabovac",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21272",
                "Name" => "Slivno",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21273",
                "Name" => "Župa",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21275",
                "Name" => "Dragljane",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21276",
                "Name" => "Vrgorac",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21277",
                "Name" => "Veliki Prolog",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21292",
                "Name" => "Srinjine",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21300",
                "Name" => "Makarska",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21310",
                "Name" => "Omiš",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21311",
                "Name" => "Stobreč",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21312",
                "Name" => "Podstrana",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21314",
                "Name" => "Jesenice",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21315",
                "Name" => "Dugi Rat",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21317",
                "Name" => "Lokva Rogoznica",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21318",
                "Name" => "Mimice",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21320",
                "Name" => "Baška Voda",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21322",
                "Name" => "Brela",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21325",
                "Name" => "Tučepi",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21327",
                "Name" => "Podgora",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21328",
                "Name" => "Drašnice",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21329",
                "Name" => "Igrane",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21330",
                "Name" => "Gradac",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21333",
                "Name" => "Drvenik",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21334",
                "Name" => "Zaostrog",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21335",
                "Name" => "Podaca",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21400",
                "Name" => "Supetar",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21403",
                "Name" => "Sutivan",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21404",
                "Name" => "Ložišća",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21405",
                "Name" => "Milna",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21410",
                "Name" => "Postira",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21412",
                "Name" => "Pučišća",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21413",
                "Name" => "Povlja",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21420",
                "Name" => "Bol",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21423",
                "Name" => "Nerežišća",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21424",
                "Name" => "Pražnica",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21425",
                "Name" => "Selca",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21426",
                "Name" => "Sumartin",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21430",
                "Name" => "Grohote",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21432",
                "Name" => "Stomorska",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21450",
                "Name" => "Hvar",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21454",
                "Name" => "Brusje",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21460",
                "Name" => "Stari Grad",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21462",
                "Name" => "Vrbanj",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21463",
                "Name" => "Vrboska",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21465",
                "Name" => "Jelsa",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21466",
                "Name" => "Zastražišće",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21467",
                "Name" => "Gdinj",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21469",
                "Name" => "Sućuraj",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21480",
                "Name" => "Vis",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21483",
                "Name" => "Podšpilje",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "21485",
                "Name" => "Komiža",
                "County" => "Split-Dalmatia County"
            ],
            [
                "PostCode" => "22000",
                "Name" => "Šibenik",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22010",
                "Name" => "Šibenik-Brodarica",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22020",
                "Name" => "Šibenik-Ražine",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22030",
                "Name" => "Šibenik-Zablaće",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22202",
                "Name" => "Primošten",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22203",
                "Name" => "Rogoznica",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22204",
                "Name" => "Široke",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22205",
                "Name" => "Perković",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22206",
                "Name" => "Boraja",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22211",
                "Name" => "Vodice",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22212",
                "Name" => "Tribunj",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22213",
                "Name" => "Pirovac",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22214",
                "Name" => "Čista Velika",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22215",
                "Name" => "Zaton",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22221",
                "Name" => "Lozovac",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22222",
                "Name" => "Skradin",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22232",
                "Name" => "Zlarin",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22233",
                "Name" => "Prvić Luka",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22234",
                "Name" => "Prvić Šepurine",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22235",
                "Name" => "Kaprije",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22236",
                "Name" => "Žirje",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22240",
                "Name" => "Tisno",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22242",
                "Name" => "Jezera",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22243",
                "Name" => "Murter",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22244",
                "Name" => "Betina",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22300",
                "Name" => "Knin",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22301",
                "Name" => "Golubić",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22303",
                "Name" => "Oklaj",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22305",
                "Name" => "Kistanje",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22310",
                "Name" => "Kijevo",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22320",
                "Name" => "Drniš",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22323",
                "Name" => "Unešić",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22321",
                "Name" => "Siverić",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22322",
                "Name" => "Ružić",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "22324",
                "Name" => "Drinovci",
                "County" => "Šibenik-Knin County"
            ],
            [
                "PostCode" => "23000",
                "Name" => "Zadar",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23205",
                "Name" => "Bibinje",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23206",
                "Name" => "Sukošan",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23207",
                "Name" => "Sveti Filip i Jakov",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23210",
                "Name" => "Biograd na moru",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23211",
                "Name" => "Pakoštane",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23212",
                "Name" => "Tkon",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23222",
                "Name" => "Zemunik",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23223",
                "Name" => "Škabrnja",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23226",
                "Name" => "Pridraga",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23231",
                "Name" => "Petrčane",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23232",
                "Name" => "Nin",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23233",
                "Name" => "Privlaka (Dalmacija)",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23234",
                "Name" => "Vir",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23235",
                "Name" => "Vrsi",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23241",
                "Name" => "Poličnik",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23242",
                "Name" => "Posedarje",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23243",
                "Name" => "Jasenice",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23244",
                "Name" => "Starigrad Paklenica",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23245",
                "Name" => "Tribanj",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23247",
                "Name" => "Vinjerac",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23248",
                "Name" => "Ražanac",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23249",
                "Name" => "Povljana",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23250",
                "Name" => "Pag",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23251",
                "Name" => "Kolan",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23262",
                "Name" => "Pašman",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23263",
                "Name" => "Ždrelac",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23264",
                "Name" => "Neviđane",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23271",
                "Name" => "Kukljica",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23272",
                "Name" => "Kali",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23273",
                "Name" => "Preko",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23274",
                "Name" => "Lukoran",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23275",
                "Name" => "Ugljan",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23281",
                "Name" => "Sali",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23282",
                "Name" => "Žman",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23283",
                "Name" => "Rava",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23284",
                "Name" => "Veli Iž",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23285",
                "Name" => "Brbinj",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23286",
                "Name" => "Božava",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23287",
                "Name" => "Veli Rat",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23291",
                "Name" => "Sestrunj",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23292",
                "Name" => "Molat",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23293",
                "Name" => "Ist",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23294",
                "Name" => "Premuda",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23295",
                "Name" => "Silba",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23296",
                "Name" => "Olib",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23312",
                "Name" => "Novigrad (Dalmacija)",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23420",
                "Name" => "Benkovac",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23422",
                "Name" => "Stankovci",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23423",
                "Name" => "Polača",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23440",
                "Name" => "Gračac",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23445",
                "Name" => "Srb",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23450",
                "Name" => "Obrovac",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "23452",
                "Name" => "Karin",
                "County" => "Zadar County"
            ],
            [
                "PostCode" => "31000",
                "Name" => "Osijek",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31204",
                "Name" => "Bijelo Brdo",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31205",
                "Name" => "Aljmaš",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31206",
                "Name" => "Erdut",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31207",
                "Name" => "Tenja",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31208",
                "Name" => "Petrijevci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31214",
                "Name" => "Laslovo",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31215",
                "Name" => "Ernestinovo",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31216",
                "Name" => "Antunovac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31220",
                "Name" => "Višnjevac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31221",
                "Name" => "Josipovac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31222",
                "Name" => "Bizovac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31223",
                "Name" => "Brođanci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31224",
                "Name" => "Koška",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31225",
                "Name" => "Breznica Našička",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31226",
                "Name" => "Dalj",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31227",
                "Name" => "Zelčin",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31300",
                "Name" => "Beli Manastir",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31301",
                "Name" => "Branjin Vrh",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31302",
                "Name" => "Kneževo",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31303",
                "Name" => "Popovac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31304",
                "Name" => "Duboševica",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31305",
                "Name" => "Draž",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31306",
                "Name" => "Batina",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31307",
                "Name" => "Zmajevac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31308",
                "Name" => "Suza",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31309",
                "Name" => "Kneževi Vinogradi",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31315",
                "Name" => "Karanac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31321",
                "Name" => "Petlovac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31322",
                "Name" => "Baranjsko Petrovo Selo",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31323",
                "Name" => "Bolman",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31324",
                "Name" => "Jagodnjak",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31325",
                "Name" => "Čeminac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31326",
                "Name" => "Darda",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31327",
                "Name" => "Bilje",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31328",
                "Name" => "Lug",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31400",
                "Name" => "Đakovo",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31401",
                "Name" => "Viškovci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31402",
                "Name" => "Semeljci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31403",
                "Name" => "Vuka",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31404",
                "Name" => "Vladislavci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31410",
                "Name" => "Strizivojna",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31411",
                "Name" => "Trnava",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31415",
                "Name" => "Selci Đakovački",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31416",
                "Name" => "Levanjska Varoš",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31417",
                "Name" => "Piškorevci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31418",
                "Name" => "Drenje",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31421",
                "Name" => "Satnica Đakovačka",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31422",
                "Name" => "Gorjani",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31423",
                "Name" => "Bračevci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31424",
                "Name" => "Punitovci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31431",
                "Name" => "Čepin",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31432",
                "Name" => "Budimci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31433",
                "Name" => "Podgorač",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31500",
                "Name" => "Našice",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31511",
                "Name" => "Đurđenovac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31512",
                "Name" => "Feričanci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31513",
                "Name" => "Donja Motičina",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31530",
                "Name" => "Podravska Moslavina",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31531",
                "Name" => "Viljevo",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31540",
                "Name" => "Donji Miholjac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31542",
                "Name" => "Magadenovac",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31543",
                "Name" => "Miholjački Poreč",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31550",
                "Name" => "Valpovo",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31551",
                "Name" => "Belišće",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31552",
                "Name" => "Podgajci Podravski",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31553",
                "Name" => "Črnkovci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31554",
                "Name" => "Gat",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "31555",
                "Name" => "Marijanci",
                "County" => "Osijek-Baranja County"
            ],
            [
                "PostCode" => "32000",
                "Name" => "Vukovar",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32010",
                "Name" => "Vukovar",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32100",
                "Name" => "Vinkovci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32211",
                "Name" => "Ostrovo",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32212",
                "Name" => "Gaboš",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32213",
                "Name" => "Markušica",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32214",
                "Name" => "Tordinci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32221",
                "Name" => "Nuštar",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32222",
                "Name" => "Bršadin",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32224",
                "Name" => "Trpinja",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32225",
                "Name" => "Bobota",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32227",
                "Name" => "Borovo",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32229",
                "Name" => "Petrovci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32232",
                "Name" => "Sotin",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32233",
                "Name" => "Opatovac",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32234",
                "Name" => "Šarengrad",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32235",
                "Name" => "Bapska",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32236",
                "Name" => "Ilok",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32237",
                "Name" => "Lovas",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32238",
                "Name" => "Čakovci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32239",
                "Name" => "Negoslavci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32241",
                "Name" => "Stari Jankovci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32242",
                "Name" => "Slakovci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32243",
                "Name" => "Orolik",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32244",
                "Name" => "Đeletovci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32245",
                "Name" => "Nijemci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32246",
                "Name" => "Lipovac",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32247",
                "Name" => "Banovci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32248",
                "Name" => "Ilača",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32249",
                "Name" => "Tovarnik",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32251",
                "Name" => "Privlaka",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32252",
                "Name" => "Otok",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32253",
                "Name" => "Komletinci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32254",
                "Name" => "Vrbanja",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32255",
                "Name" => "Soljani",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32256",
                "Name" => "Strošinci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32257",
                "Name" => "Drenovci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32258",
                "Name" => "Posavski Podgajci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32260",
                "Name" => "Gunja",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32261",
                "Name" => "Rajevo Selo",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32262",
                "Name" => "Račinovci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32263",
                "Name" => "Đurići",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32270",
                "Name" => "Županja",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32271",
                "Name" => "Rokovci Andrijaševci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32272",
                "Name" => "Cerna",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32273",
                "Name" => "Gradište",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32274",
                "Name" => "Štitar",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32275",
                "Name" => "Bošnjaci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32276",
                "Name" => "Babina Greda",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32280",
                "Name" => "Jarmina",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32281",
                "Name" => "Ivankovo",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32282",
                "Name" => "Retkovci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32283",
                "Name" => "Vođinci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "32284",
                "Name" => "Stari Mikanovci",
                "County" => "Vukovar-Syrmia County"
            ],
            [
                "PostCode" => "33000",
                "Name" => "Virovitica",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33404",
                "Name" => "Špišić Bukovica",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33405",
                "Name" => "Pitomača",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33406",
                "Name" => "Lukač",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33407",
                "Name" => "Gornje Bazje",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33410",
                "Name" => "Suhopolje",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33411",
                "Name" => "Gradina",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33412",
                "Name" => "Cabuna",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33507",
                "Name" => "Crnac",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33513",
                "Name" => "Zdenci",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33514",
                "Name" => "Čačinci",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33515",
                "Name" => "Orahovica",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33517",
                "Name" => "Mikleuš",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33518",
                "Name" => "Nova Bukovica",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33520",
                "Name" => "Slatina",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33522",
                "Name" => "Voćin",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33523",
                "Name" => "Čađavica",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33525",
                "Name" => "Sopje",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "33533",
                "Name" => "Pivnica Slavonska",
                "County" => "Virovitica-Podravina County"
            ],
            [
                "PostCode" => "34000",
                "Name" => "Požega",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34308",
                "Name" => "Jakšić",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34310",
                "Name" => "Pleternica",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34311",
                "Name" => "Kuzmica",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34312",
                "Name" => "Sesvete (kod Požege)",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34315",
                "Name" => "Ratkovica",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34322",
                "Name" => "Brestovac",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34330",
                "Name" => "Velika",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34334",
                "Name" => "Kaptol",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34335",
                "Name" => "Vetovo",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34340",
                "Name" => "Kutjevo",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34343",
                "Name" => "Bektež",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34350",
                "Name" => "Čaglin",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34543",
                "Name" => "Poljana",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34550",
                "Name" => "Pakrac",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34551",
                "Name" => "Lipik",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34552",
                "Name" => "Badljevina",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "34553",
                "Name" => "Bučje",
                "County" => "Požega-Slavonia County"
            ],
            [
                "PostCode" => "35000",
                "Name" => "Slavonski Brod",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35105",
                "Name" => "Slavonski Brod",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35106",
                "Name" => "Slavonski Brod",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35107",
                "Name" => "Podvinje",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35201",
                "Name" => "Podcrkavlje",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35207",
                "Name" => "Gornja Vrba",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35208",
                "Name" => "Ruščica",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35209",
                "Name" => "Bukovlje",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35210",
                "Name" => "Vrpolje",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35211",
                "Name" => "Trnjani",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35212",
                "Name" => "Garčin",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35213",
                "Name" => "Oprisavci",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35214",
                "Name" => "Donji Andrijevci",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35216",
                "Name" => "Prnjavor",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35220",
                "Name" => "Slavonski Šamac",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35221",
                "Name" => "Velika Kopanica",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35222",
                "Name" => "Gundinci",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35224",
                "Name" => "Sikirevci",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35250",
                "Name" => "Oriovac",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35252",
                "Name" => "Sibinj",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35253",
                "Name" => "Brodski Stupnik",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35254",
                "Name" => "Bebrina",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35255",
                "Name" => "Slavonski Kobaš",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35257",
                "Name" => "Lužani",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35400",
                "Name" => "Nova Gradiška",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35403",
                "Name" => "Rešetari",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35404",
                "Name" => "Cernik",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35410",
                "Name" => "Nova Kapela",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35414",
                "Name" => "Vrbova",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35420",
                "Name" => "Staro Petrovo Selo",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35422",
                "Name" => "Zapolje",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35423",
                "Name" => "Vrbje",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35424",
                "Name" => "Orubica",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35425",
                "Name" => "Davor",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35428",
                "Name" => "Dragalić",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35429",
                "Name" => "Gornji Bogićevci",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35430",
                "Name" => "Okučani",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "35435",
                "Name" => "Stara Gradiška",
                "County" => "Brod-Posavina County"
            ],
            [
                "PostCode" => "40000",
                "Name" => "Čakovec",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40305",
                "Name" => "Nedelišće",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40306",
                "Name" => "Macinec",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40311",
                "Name" => "Lopatinec",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40312",
                "Name" => "Štrigova",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40313",
                "Name" => "Sveti Martin na Muri",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40314",
                "Name" => "Selnica",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40315",
                "Name" => "Mursko Središče",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40316",
                "Name" => "Vratišinec",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40317",
                "Name" => "Podturen",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40318",
                "Name" => "Dekanovec",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40319",
                "Name" => "Belica",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40320",
                "Name" => "Donji Kraljevec",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40321",
                "Name" => "Mala Subotica",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40322",
                "Name" => "Orehovica",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40323",
                "Name" => "Prelog",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40324",
                "Name" => "Goričan",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40325",
                "Name" => "Draškovec",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40326",
                "Name" => "Sveta Marija",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40327",
                "Name" => "Donji Vidovec",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40328",
                "Name" => "Donja Dubrava",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "40329",
                "Name" => "Kotoriba",
                "County" => "Međimurje County"
            ],
            [
                "PostCode" => "42000",
                "Name" => "Varaždin",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42201",
                "Name" => "Beretinec",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42202",
                "Name" => "Trnovec Bartolovečki",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42203",
                "Name" => "Jalžabet",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42204",
                "Name" => "Turčin",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42205",
                "Name" => "Vidovec",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42206",
                "Name" => "Petrijanec",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42207",
                "Name" => "Vinica",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42208",
                "Name" => "Cestica",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42209",
                "Name" => "Sračinec",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42214",
                "Name" => "Sveti Ilija",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42220",
                "Name" => "Novi Marof",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42222",
                "Name" => "Ljubeščica",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42223",
                "Name" => "Varaždinske Toplice",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42224",
                "Name" => "Visoko",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42225",
                "Name" => "Breznički Hum",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42226",
                "Name" => "Bisag",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42230",
                "Name" => "Ludbreg",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42231",
                "Name" => "Mali Bukovec",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42232",
                "Name" => "Donji Martijanec",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42233",
                "Name" => "Sveti Đurđ",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42240",
                "Name" => "Ivanec",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42242",
                "Name" => "Radovan",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42243",
                "Name" => "Maruševec",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42244",
                "Name" => "Klenovnik",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42245",
                "Name" => "Donja Voća",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42250",
                "Name" => "Lepoglava",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42253",
                "Name" => "Bednja",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42254",
                "Name" => "Trakošćan",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "42255",
                "Name" => "Donja Višnjica",
                "County" => "Varaždin County"
            ],
            [
                "PostCode" => "43000",
                "Name" => "Bjelovar",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43202",
                "Name" => "Zrinski Topolovac",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43203",
                "Name" => "Kapela",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43211",
                "Name" => "Predavac",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43212",
                "Name" => "Rovišće",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43226",
                "Name" => "Veliko Trojstvo",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43227",
                "Name" => "Šandrovac",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43231",
                "Name" => "Ivanska",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43232",
                "Name" => "Berek",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43233",
                "Name" => "Trnovitički Popovac",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43240",
                "Name" => "Čazma",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43245",
                "Name" => "Gornji Draganec",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43246",
                "Name" => "Štefanje",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43247",
                "Name" => "Narta",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43251",
                "Name" => "Gudovac",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43252",
                "Name" => "Prgomelje",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43270",
                "Name" => "Veliki Grđevac",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43271",
                "Name" => "Velika Pisanica",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43272",
                "Name" => "Nova Rača",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43273",
                "Name" => "Bulinac",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43274",
                "Name" => "Severin",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43280",
                "Name" => "Garešnica",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43282",
                "Name" => "Veliko Vukovje",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43283",
                "Name" => "Kaniška Iva",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43284",
                "Name" => "Hercegovac",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43285",
                "Name" => "Velika Trnovitica",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43290",
                "Name" => "Grubišno Polje",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43293",
                "Name" => "Veliki Zdenci",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43500",
                "Name" => "Daruvar",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43505",
                "Name" => "Končanica (Končenice)",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43506",
                "Name" => "Dežanovac",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43507",
                "Name" => "Uljanik",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43531",
                "Name" => "Veliki Bastaji",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43532",
                "Name" => "Đulovac",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "43541",
                "Name" => "Sirač",
                "County" => "Bjelovar-Bilogora County"
            ],
            [
                "PostCode" => "44000",
                "Name" => "Sisak",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44010",
                "Name" => "Sisak-Caprag",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44201",
                "Name" => "Martinska Ves",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44202",
                "Name" => "Topolovac",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44203",
                "Name" => "Gušće",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44213",
                "Name" => "Kratečko",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44204",
                "Name" => "Jabukovac",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44210",
                "Name" => "Sunja",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44211",
                "Name" => "Blinjski Kut",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44214",
                "Name" => "Bobovac",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44222",
                "Name" => "Šaš",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44250",
                "Name" => "Petrinja",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44253",
                "Name" => "Mošćenica",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44271",
                "Name" => "Letovanić",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44272",
                "Name" => "Lekenik",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44273",
                "Name" => "Sela",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44316",
                "Name" => "Velika Ludina",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44317",
                "Name" => "Popovača",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44318",
                "Name" => "Voloder",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44320",
                "Name" => "Kutina",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44321",
                "Name" => "Banova Jaruga",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44322",
                "Name" => "Lipovljani",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44323",
                "Name" => "Rajić",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44324",
                "Name" => "Jasenovac",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44325",
                "Name" => "Krapje",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44330",
                "Name" => "Novska",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44400",
                "Name" => "Glina",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44410",
                "Name" => "Gvozd",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44415",
                "Name" => "Topusko",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44430",
                "Name" => "Hrvatska Kostajnica",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44431",
                "Name" => "Donji Kukuruzari",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44435",
                "Name" => "Divuša",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44440",
                "Name" => "Dvor",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "44450",
                "Name" => "Hrvatska Dubica",
                "County" => "Sisak-Moslavina County"
            ],
            [
                "PostCode" => "47000",
                "Name" => "Karlovac",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47201",
                "Name" => "Draganići",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47203",
                "Name" => "Rečica",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47204",
                "Name" => "Šišljavić",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47206",
                "Name" => "Lasinja",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47212",
                "Name" => "Skakavac",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47220",
                "Name" => "Vojnić",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47222",
                "Name" => "Cetingrad",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47240",
                "Name" => "Slunj",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47241",
                "Name" => "Cerovac Vukmanički",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47242",
                "Name" => "Krnjak",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47245",
                "Name" => "Rakovica",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47246",
                "Name" => "Drežnik Grad",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47250",
                "Name" => "Duga Resa",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47251",
                "Name" => "Bosiljevo",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47252",
                "Name" => "Barilović",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47261",
                "Name" => "Zvečaj",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47262",
                "Name" => "Generalski Stol",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47264",
                "Name" => "Tounj",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47271",
                "Name" => "Netretić",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47272",
                "Name" => "Ribnik",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47276",
                "Name" => "Žakanje",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47280",
                "Name" => "Ozalj",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47281",
                "Name" => "Mali Erjavec",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47282",
                "Name" => "Kamanje",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47283",
                "Name" => "Vivodina",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47284",
                "Name" => "Kašt",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47285",
                "Name" => "Radatovići",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47286",
                "Name" => "Mahično",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47300",
                "Name" => "Ogulin",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47302",
                "Name" => "Oštarije",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47303",
                "Name" => "Josipdol",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47304",
                "Name" => "Plaški",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47306",
                "Name" => "Saborsko",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47307",
                "Name" => "Gornje Zagorje",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47313",
                "Name" => "Drežnica",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "47314",
                "Name" => "Jasenak",
                "County" => "Karlovac County"
            ],
            [
                "PostCode" => "48000",
                "Name" => "Koprivnica",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48213",
                "Name" => "Cirkvena",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48214",
                "Name" => "Sveti Ivan Žabno",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48260",
                "Name" => "Križevci",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48264",
                "Name" => "Kloštar Vojakovački",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48265",
                "Name" => "Raven",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48267",
                "Name" => "Orehovec",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48268",
                "Name" => "Gornja Rijeka",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48269",
                "Name" => "Kalnik",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48306",
                "Name" => "Sokolovac",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48311",
                "Name" => "Kunovec",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48312",
                "Name" => "Rasinja",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48314",
                "Name" => "Koprivnički Ivanec",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48316",
                "Name" => "Đelekovec",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48317",
                "Name" => "Legrad",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48321",
                "Name" => "Peteranec",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48322",
                "Name" => "Drnje",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48323",
                "Name" => "Hlebine",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48324",
                "Name" => "Koprivnički Bregi",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48325",
                "Name" => "Novigrad Podravski",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48326",
                "Name" => "Virje",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48327",
                "Name" => "Molve",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48331",
                "Name" => "Gola",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48332",
                "Name" => "Ždala",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48350",
                "Name" => "Đurđevac",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48355",
                "Name" => "Novo Virje",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48356",
                "Name" => "Ferdinandovac",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48361",
                "Name" => "Kalinovac",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48362",
                "Name" => "Kloštar Podravski",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "48363",
                "Name" => "Podravske Sesvete",
                "County" => "Koprivnica-Križevci County"
            ],
            [
                "PostCode" => "49000",
                "Name" => "Krapina",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49210",
                "Name" => "Zabok",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49214",
                "Name" => "Veliko Trgovišće",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49215",
                "Name" => "Tuhelj",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49216",
                "Name" => "Desinić",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49217",
                "Name" => "Krapinske Toplice",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49218",
                "Name" => "Pregrada",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49221",
                "Name" => "Bedekovčina",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49222",
                "Name" => "Poznanovec",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49223",
                "Name" => "Sveti Križ Začretje",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49224",
                "Name" => "Lepajci",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49225",
                "Name" => "Đurmanec",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49228",
                "Name" => "Brestovec Orehovički",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49231",
                "Name" => "Hum na Sutli",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49232",
                "Name" => "Radoboj",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49233",
                "Name" => "Gornje Jesenje",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49234",
                "Name" => "Petrovsko",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49240",
                "Name" => "Donja Stubica",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49243",
                "Name" => "Oroslavje",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49244",
                "Name" => "Stubičke Toplice",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49245",
                "Name" => "Gornja Stubica",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49246",
                "Name" => "Marija Bistrica",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49247",
                "Name" => "Zlatar Bistrica",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49250",
                "Name" => "Zlatar",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49251",
                "Name" => "Mače",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49252",
                "Name" => "Mihovljan",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49253",
                "Name" => "Lobor",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49254",
                "Name" => "Belec",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49255",
                "Name" => "Novi Golubovec",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49282",
                "Name" => "Konjščina",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49283",
                "Name" => "Hraščina-Trgovišće",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49284",
                "Name" => "Budinšćina",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49290",
                "Name" => "Klanjec",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49294",
                "Name" => "Kraljevec na Sutli",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49295",
                "Name" => "Kumrovec",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "49296",
                "Name" => "Zagorska Sela",
                "County" => "Krapina-Zagorje County"
            ],
            [
                "PostCode" => "51000",
                "Name" => "Rijeka",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51211",
                "Name" => "Matulji",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51212",
                "Name" => "Vele Mune",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51213",
                "Name" => "Jurdani",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51214",
                "Name" => "Šapjane",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51215",
                "Name" => "Kastav",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51216",
                "Name" => "Viškovo",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51217",
                "Name" => "Klana",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51218",
                "Name" => "Dražice",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51219",
                "Name" => "Čavle",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51221",
                "Name" => "Kostrena",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51222",
                "Name" => "Bakar",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51223",
                "Name" => "Škrljevo",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51224",
                "Name" => "Krasica",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51225",
                "Name" => "Praputnjak",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51226",
                "Name" => "Hreljin",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51241",
                "Name" => "Križišće",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51242",
                "Name" => "Drivenik",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51243",
                "Name" => "Tribalj",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51244",
                "Name" => "Grižane",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51250",
                "Name" => "Novi Vinodolski",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51251",
                "Name" => "Ledenice",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51252",
                "Name" => "Klenovica",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51253",
                "Name" => "Bribir",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51260",
                "Name" => "Crikvenica",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51261",
                "Name" => "Bakarac",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51262",
                "Name" => "Kraljevica",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51263",
                "Name" => "Šmrika",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51264",
                "Name" => "Jadranovo",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51265",
                "Name" => "Dramalj",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51266",
                "Name" => "Selce",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51280",
                "Name" => "Rab",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51281",
                "Name" => "Lopar",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51300",
                "Name" => "Delnice",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51301",
                "Name" => "Brod na Kupi",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51302",
                "Name" => "Kuželj",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51303",
                "Name" => "Plešce",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51304",
                "Name" => "Gerovo",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51305",
                "Name" => "Tršće",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51306",
                "Name" => "Čabar",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51307",
                "Name" => "Prezid",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51311",
                "Name" => "Skrad",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51312",
                "Name" => "Brod Moravice",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51313",
                "Name" => "Kupjak",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51314",
                "Name" => "Ravna Gora",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51315",
                "Name" => "Mrkopalj",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51316",
                "Name" => "Lokve",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51317",
                "Name" => "Crni Lug",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51321",
                "Name" => "Vrata",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51322",
                "Name" => "Fužine",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51323",
                "Name" => "Lič",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51324",
                "Name" => "Zlobin",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51325",
                "Name" => "Moravice",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51326",
                "Name" => "Vrbovsko",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51327",
                "Name" => "Gomirje",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51328",
                "Name" => "Lukovdol",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51329",
                "Name" => "Severin na Kupi",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51410",
                "Name" => "Opatija",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51414",
                "Name" => "Ičići",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51415",
                "Name" => "Lovran",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51417",
                "Name" => "Mošćenička Draga",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51418",
                "Name" => "Brseč",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51500",
                "Name" => "Krk",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51511",
                "Name" => "Malinska",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51512",
                "Name" => "Njivice",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51513",
                "Name" => "Omišalj",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51514",
                "Name" => "Dobrinj",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51515",
                "Name" => "Šilo",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51516",
                "Name" => "Vrbnik",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51517",
                "Name" => "Kornić",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51521",
                "Name" => "Punat",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51522",
                "Name" => "Draga Bašćanska",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51523",
                "Name" => "Baška",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51550",
                "Name" => "Mali Lošinj",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51551",
                "Name" => "Veli Lošinj",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51552",
                "Name" => "Ilovik",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51554",
                "Name" => "Nerezine",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51555",
                "Name" => "Belej",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51556",
                "Name" => "Martinšćica",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51557",
                "Name" => "Cres",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51559",
                "Name" => "Beli",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51561",
                "Name" => "Susak",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51562",
                "Name" => "Unije",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "51564",
                "Name" => "Ćunski",
                "County" => "Primorje-Gorski Kotar County"
            ],
            [
                "PostCode" => "52000",
                "Name" => "Pazin",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52100",
                "Name" => "Pula (Pola)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52104",
                "Name" => "Pula (Pola)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52105",
                "Name" => "Pula (Pola)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52106",
                "Name" => "Pula (Pola)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52107",
                "Name" => "Pula (Pola)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52203",
                "Name" => "Medulin",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52206",
                "Name" => "Marčana",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52207",
                "Name" => "Barban",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52208",
                "Name" => "Krnica",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52210",
                "Name" => "Rovinj (Rovigno)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52211",
                "Name" => "Bale (Valle)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52212",
                "Name" => "Fažana (Fasana)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52215",
                "Name" => "Vodnjan (Dignano)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52216",
                "Name" => "Galižana (Gallesano)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52220",
                "Name" => "Labin",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52221",
                "Name" => "Rabac",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52222",
                "Name" => "Koromačno",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52223",
                "Name" => "Raša",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52224",
                "Name" => "Trget",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52231",
                "Name" => "Nedešćina",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52232",
                "Name" => "Kršan",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52233",
                "Name" => "Šušnjevica",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52234",
                "Name" => "Plomin",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52332",
                "Name" => "Pićan",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52333",
                "Name" => "Podpićan",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52341",
                "Name" => "Žminj",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52342",
                "Name" => "Svetvinčenat",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52352",
                "Name" => "Kanfanar",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52402",
                "Name" => "Cerovlje",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52403",
                "Name" => "Gračišće",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52404",
                "Name" => "Sveti Petar u šumi",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52420",
                "Name" => "Buzet",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52422",
                "Name" => "Lanišće",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52423",
                "Name" => "Karojba",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52424",
                "Name" => "Motovun (Montana)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52425",
                "Name" => "Roč",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52426",
                "Name" => "Lupoglav",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52427",
                "Name" => "Livade (Levade)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52428",
                "Name" => "Oprtalj (Portole)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52429",
                "Name" => "Grožnjan (Grisignana)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52434",
                "Name" => "Boljun",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52440",
                "Name" => "Poreč (Parenzo)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52444",
                "Name" => "Tinjan",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52445",
                "Name" => "Baderna",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52446",
                "Name" => "Nova Vas",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52447",
                "Name" => "Vižinada (Visinada)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52448",
                "Name" => "Sveti Lovreč",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52449",
                "Name" => "Červar Porat",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52450",
                "Name" => "Vrsar (Orsera)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52452",
                "Name" => "Funtana (Fontane)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52460",
                "Name" => "Buje (Buie)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52462",
                "Name" => "Momjan (Momiano)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52463",
                "Name" => "Višnjan (Visignano)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52464",
                "Name" => "Kaštelir (Castelliere)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52465",
                "Name" => "Tar (Torre)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52466",
                "Name" => "Novigrad (Cittanova)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52470",
                "Name" => "Umag (Umago)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52474",
                "Name" => "Brtonigla (Verteneglio)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "52475",
                "Name" => "Savudrija (Salvore)",
                "County" => "Istria County"
            ],
            [
                "PostCode" => "53000",
                "Name" => "Gospić",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53201",
                "Name" => "Lički Osik",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53202",
                "Name" => "Perušić",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53203",
                "Name" => "Kosinj",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53206",
                "Name" => "Brušane",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53211",
                "Name" => "Smiljan",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53212",
                "Name" => "Klanac",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53213",
                "Name" => "Donje Pazarište",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53220",
                "Name" => "Otočac",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53223",
                "Name" => "Vrhovine",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53224",
                "Name" => "Ličko Lešće",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53230",
                "Name" => "Korenica",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53231",
                "Name" => "Plitvička Jezera",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53233",
                "Name" => "Ličko Petrovo Selo",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53234",
                "Name" => "Udbina",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53236",
                "Name" => "Podlapača",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53244",
                "Name" => "Lovinac",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53250",
                "Name" => "Donji Lapac",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53260",
                "Name" => "Brinje",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53261",
                "Name" => "Križpolje",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53262",
                "Name" => "Jezerane",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53270",
                "Name" => "Senj",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53271",
                "Name" => "Krivi Put",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53273",
                "Name" => "Vratnik",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53274",
                "Name" => "Krasno",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53284",
                "Name" => "Sveti Juraj",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53287",
                "Name" => "Jablanac",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53288",
                "Name" => "Karlobag",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53289",
                "Name" => "Lukovo Šugarje",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53291",
                "Name" => "Novalja",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53294",
                "Name" => "Lun",
                "County" => "Lika-Senj County"
            ],
            [
                "PostCode" => "53296",
                "Name" => "Zubovići",
                "County" => "Lika-Senj County"
            ]
        ];

        foreach($jayParsedAry as $entry){
            $city = new Postcode;
            $city->code = $entry['PostCode'];
            $city->name = $entry['Name'];
            $city->county = $entry['County'];
            $city->save();
        }
    }
}
