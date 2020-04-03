<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //roles
        DB::table('rol')->insert([
            'naam' => 'administrator',
            'beschrijving' => 'Een beheerder van NiksVoorNiks'
        ]);
        DB::table('rol')->insert([
            'naam' => 'deelnemer',
            'beschrijving' => 'Een standaard deelnemer van NiksVoorNiks'
        ]);

        //activities
        DB::table('activiteit')->insert([
            'naam' => 'Spelletjes avond',
            'beschrijving' => 'Spelletjes avond met bordspellen',
            'datum' => '2020-4-1'
        ]);
        DB::table('activiteit')->insert([
            'naam' => 'Bakpartij',
            'beschrijving' => 'Samen gezellig bakken #taartjes',
            'datum' => '2020-05-12'
        ]);
        DB::table('activiteit')->insert([
            'naam' => 'Schilderen',
            'beschrijving' => 'Wees de kunstenaar die je altijd al wilde zijn! Leuk!',
            'datum' => '2020-05-12'
        ]);
        DB::table('activiteit')->insert([
            'naam' => 'Pannenkoeken bakken',
            'beschrijving' => 'Oom berend en zuster Suzan maken samen met jou de lekkerste Pfannkuchen',
            'datum' => '2021-01-05'
        ]);
        DB::table('activiteit')->insert([
            'naam' => 'Skypen',
            'beschrijving' => 'Gezellig met de meiden',
            'datum' => '2021-01-05'
        ]);
        DB::table('activiteit')->insert([
            'naam' => 'Boswandeling',
            'beschrijving' => 'Wandeling om het Sint Pieters bos',
            'datum' => '2021-01-05'
        ]);

        //categories
        DB::table('categorie')->insert([
            'naam' => 'Koken',
            'beschrijving' => 'Alles in de keuke ',
        ]);
        DB::table('categorie')->insert([
            'naam' => 'Technologie',
            'beschrijving' => 'Alles met telefoontjes en computers',
        ]);
        DB::table('categorie')->insert([
            'naam' => 'Kunst',
            'beschrijving' => 'Alles met schilderen, tekenen en knutselen ',
        ]);
        DB::table('categorie')->insert([
            'naam' => 'Sport',
            'beschrijving' => 'Alles met beweging',
        ]);

        //groups
        DB::table('groep')->insert([
            'naam' => 'De Ijzeren vrouw',
            'beschrijving' => 'Voor leden die zich vaak bevinden bij de Ijzeren vrouw',
        ]);
        DB::table('groep')->insert([
            'naam' => 'Knutselaars',
            'beschrijving' => 'Voor alle creatieve leden onder ons',
        ]);
        DB::table('groep')->insert([
            'naam' => 'Gamers',
            'beschrijving' => 'Voor de fanatieke woordzoekers en puzzelaars',
        ]);
        DB::table('groep')->insert([
            'naam' => 'Filmfanaten',
            'beschrijving' => 'Voor alle Marvel en DC fans!',
        ]);
        DB::table('groep')->insert([
            'naam' => 'Boschenaren',
            'beschrijving' => 'De echte Boschenaren!',
        ]);

        //participants
        DB::table('deelnemer')->insert([
            'email' => 'fhendrik1@avans.nl',
            'wachtwoord' => 'ferran1234',
            'voornaam' => 'Ferran',
            'achternaam' => 'Hendriks',
            'geboortedatum' => '1999-08-15',
            'telefoonnummer' => '066666666',
            'postcode' => '5211AC',
            'huisnummer' => '473G',
            'foto' => 'https://townsquare.media/site/366/files/2012/01/adamgontier.jpg?w=980&q=75',
            'niksen' => '66',
            'beschrijving' => 'Student Avans Hogeschool',
            'rol_naam' => 'administrator',
        ]);

        DB::table('deelnemer')->insert([
            'email' => 'jonah@avans.nl',
            'wachtwoord' => 'jonah1234',
            'voornaam' => 'Jonah',
            'achternaam' => 'Dirksen',
            'geboortedatum' => '1998-1-1',
            'telefoonnummer' => '06777777',
            'postcode' => '3584LA',
            'huisnummer' => '55',
            'niksen' => '55',
            'beschrijving' => 'Student Avans Hogeschool',
            'rol_naam' => 'administrator',
        ]);

        DB::table('deelnemer')->insert([
            'email' => 'admin@niksvoorniks.nl',
            'wachtwoord' => 'admin1234',
            'voornaam' => 'Admin',
            'achternaam' => 'Admin',
            'geboortedatum' => '2020-04-01',
            'telefoonnummer' => '069876543',
            'postcode' => '5111AE',
            'huisnummer' => '69',
            'foto' => 'https://yt3.ggpht.com/a/AGF-l7_pLghJ9ZjJzCRmPlw512Ytx_eeIhNChP2jWw=s900-c-k-c0xffffffff-no-rj-mo',
            'niksen' => '66',
            'beschrijving' => 'Admin',
            'rol_naam' => 'administrator',
        ]);

        DB::table('deelnemer')->insert([
            'email' => 'deelnemer@niksvoorniks.nl',
            'wachtwoord' => 'deelnemer1234',
            'voornaam' => 'Deelnemer',
            'tussenvoegsel' => '',
            'achternaam' => 'Deelnemer',
            'geboortedatum' => '2020-04-01',
            'telefoonnummer' => '061234567',
            'postcode' => '5061PA',
            'huisnummer' => '69',
            'foto' => 'https://yt3.ggpht.com/a/AGF-l79nrvVuCiaaTdlZrxnAX6RTFKyXI1idCMUp5A=s900-c-k-c0xffffffff-no-rj-mo',
            'niksen' => '66',
            'beschrijving' => 'Deelnemer',
            'rol_naam' => 'deelnemer',
        ]);

        DB::table('deelnemer')->insert([
            'email' => 'nick@avans.nl',
            'wachtwoord' => 'nick1234',
            'voornaam' => 'Nick',
            'tussenvoegsel' => 'van',
            'achternaam' => 'Hoesel',
            'geboortedatum' => '1998-04-01',
            'telefoonnummer' => '06115569',
            'postcode' => '4817LL',
            'huisnummer' => '69',
            'niksen' => '180',
            'beschrijving' => 'Heeft veel niksen',
            'rol_naam' => 'deelnemer',
        ]);

        //advertisements
        DB::table('advertentie')->insert([
            'deelnemer_email' => 'nick@avans.nl',
            'titel' => 'Koken met Nick',
            'vraag' => 0,
            'bieden' => 1,
            'beschrijving' => 'Wie wil er met mij koken?',
            'aanmaakdatum' => '2020-04-01',
            'foto' => 'https://pbs.twimg.com/media/DdqYozVX4AA9PjC.jpg',
            'prijs' => '2',
            'postcode' => '3011AD',
            'huisnummer' => '180',
            'categorie' => 'Koken',
        ]);

        DB::table('advertentie')->insert([
            'deelnemer_email' => 'jonah@avans.nl',
            'titel' => 'Skypen met Jonah',
            'vraag' => 1,
            'bieden' => 0,
            'beschrijving' => 'Wie wil er met mij skypen?',
            'aanmaakdatum' => '2020-04-01',
            'foto' => 'https://www.mt.nl/wp-content/uploads/2011/05/3f595bded5d9c2387b9c6f61809d96ff-1305036995-780x448.jpg',
            'prijs' => '0',
            'postcode' => '4817LL',
            'huisnummer' => '180',
            'categorie' => 'Technologie',
        ]);

        DB::table('advertentie')->insert([
            'deelnemer_email' => 'nick@avans.nl',
            'titel' => 'Eten met Nick',
            'vraag' => 1,
            'bieden' => 0,
            'beschrijving' => 'Wie wil er met mij samen eten?',
            'aanmaakdatum' => '2020-04-01',
            'prijs' => '0',
            'postcode' => '3011AD',
            'huisnummer' => '55',
            'categorie' => 'Koken',
        ]);

        DB::table('advertentie')->insert([
            'deelnemer_email' => 'jonah@avans.nl',
            'titel' => 'Fietsenmaker in den Bosch',
            'vraag' => 0,
            'bieden' => 0,
            'beschrijving' => 'Ik maak je fiets voor bijna niks',
            'aanmaakdatum' => '2020-04-01',
            'foto' => 'https://i.ytimg.com/vi/iD3kyTxf9Fk/hqdefault.jpg',
            'prijs' => '4',
            'postcode' => '4817LL',
            'huisnummer' => '180',
            'categorie' => 'Sport',
        ]);

        //messages
        DB::table('bericht')->insert([
            'inhoud' => 'Hoi, dit is het eerste bericht',
            'onderwerp' => 'Test bericht',
            'datum' => '2020-04-01 14:35:44',
            'zender_email' => 'jonah@avans.nl',
            'ontvanger_email' => 'nick@avans.nl',
        ]);

        DB::table('bericht')->insert([
            'inhoud' => 'Hey Jonah, dit is het tweede bericht',
            'onderwerp' => 'Test bericht',
            'datum' => '2020-04-01 21:36:44',
            'zender_email' => 'nick@avans.nl',
            'ontvanger_email' => 'jonah@avans.nl',
        ]);

        //participant has group
        DB::table('deelnemer_heeft_groep')->insert([
            'deelnemer_email' => 'jonah@avans.nl',
            'groep_naam' => 'Knutselaars',
        ]);
        DB::table('deelnemer_heeft_groep')->insert([
            'deelnemer_email' => 'nick@avans.nl',
            'groep_naam' => 'Knutselaars',
        ]);
        DB::table('deelnemer_heeft_groep')->insert([
            'deelnemer_email' => 'jonah@avans.nl',
            'groep_naam' => 'Gamers',
        ]);
        DB::table('deelnemer_heeft_groep')->insert([
            'deelnemer_email' => 'jonah@avans.nl',
            'groep_naam' => 'Filmfanaten',
        ]);

        //advertisement has group
        DB::table('advertentie_heeft_groep')->insert([
            'groep_naam' => 'Boschenaren',
            'advertentie_id' => 1,
        ]);
        DB::table('advertentie_heeft_groep')->insert([
            'groep_naam' => 'Boschenaren',
            'advertentie_id' => 2,
        ]);
        DB::table('advertentie_heeft_groep')->insert([
            'groep_naam' => 'Boschenaren',
            'advertentie_id' => 3,
        ]);

        //activity has participant
        DB::table('activiteit_heeft_deelnemer')->insert([
            'deelnemer_email' => 'nick@avans.nl',
            'activiteit_id' => 1,
        ]);
        DB::table('activiteit_heeft_deelnemer')->insert([
            'deelnemer_email' => 'jonah@avans.nl',
            'activiteit_id' => 1,
        ]);
        DB::table('activiteit_heeft_deelnemer')->insert([
            'deelnemer_email' => 'nick@avans.nl',
            'activiteit_id' => 2,
        ]);
        DB::table('activiteit_heeft_deelnemer')->insert([
            'deelnemer_email' => 'nick@avans.nl',
            'activiteit_id' => 3,
        ]);
        DB::table('activiteit_heeft_deelnemer')->insert([
            'deelnemer_email' => 'jonah@avans.nl',
            'activiteit_id' => 2,
        ]);
        DB::table('activiteit_heeft_deelnemer')->insert([
            'deelnemer_email' => 'nick@avans.nl',
            'activiteit_id' => 4,
        ]);

    }
}
