<?php

use Illuminate\Database\Seeder;

class User_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ["name"=> "Valmir",
            "email"=> "valmir@gmail.com", 
            "password"=> bcrypt("123456789"),
            "city" => "guarapuava" ,
            "state"=>"Paraná" ,
            "postalcode"=>"84430000" , 
            "address"=>"julio de castilho" , 
            "number"=>2497 , 
            "complement"=>"casa fundos" , 
            "district"=>"Brasil" ]);
        DB::table('users')->insert(
            ["name"=> "Ariana",
            "email"=>"pede@consequatnec.edu",
            "password"=> bcrypt("123456789"),
            "city" =>"Niterói",
            "state"=>"RJ",
            "postalcode"=>"34742900",
            "address"=>"Ap #193-102 Nullam Avenue",
            "number"=>6,
            "complement"=>"Massa Integer Vitae Foundation",
            "district"=>"Uganda"]);
        DB::table('users')->insert(
            ["name"=> "Blythe",
            "email"=>"tincidunt@mollisDuissit.edu",
            "password"=> bcrypt("123456789"),
            "city" =>"Santa Inês",
            "state"=>"MA",
            "postalcode"=>"65106-676",
            "address"=>"431-7146 Nulla Rd.",
            "number"=>5,
            "complement"=>"Nunc Ullamcorper Eu Industries",
            "district"=>"Kiribati"]);
        DB::table('users')->insert(
            ["name"=> "Martha",
            "email"=>"Donec.egestas@Nunclectus.net",
            "password"=> bcrypt("123456789"),
            "city" =>"Caxias do Sul",
            "state"=>"RS",
            "postalcode"=>"03731-000",
            "address"=>"7137 Nulla Rd.",
            "number"=>7,
            "complement"=>"Habitant Morbi Tristique Company",
            "district"=>"Afghanistan"]);
        DB::table('users')->insert(
            ["name"=> "Jasmine",
            "email"=>"nec.urna.suscipit@mifringillami.com",
            "password"=> bcrypt("123456789"),
            "city" =>"São José dos Pinhais",
            "state"=>"PR",
            "postalcode"=>"39810-000",
            "address"=>"4783 Non, Ave",
            "number"=>7,
            "complement"=>"Habitant Morbi Foundation",
            "district"=>"Ethiopia"]);
        DB::table('users')->insert(
            ["name"=> "April",
            "email"=>"Donec@adipiscing.edu",
            "password"=> bcrypt("123456789"),
            "city" =>"Ananindeua",
            "state"=>"PA",
            "postalcode"=>"01120-000",
            "address"=>"451-1965 Condimentum St.",
            "number"=>1,
            "complement"=>"Tellus Consulting",
            "district"=>"Marshall Islands"]);
        DB::table('users')->insert(
            ["name"=> "Latifah",
            "email"=>"dolor.dapibus.gravida@consectetueradipiscingelit.com",
            "password"=> bcrypt("123456789"),
            "city" =>"Mogi das Cruzes",
            "state"=>"São Paulo",
            "postalcode"=>"18290-000",
            "address"=>"Ap #526-5857 Augue St.",
            "number"=>5,
            "complement"=>"Et Ltd",
            "district"=>"Saint Martin"]);
        DB::table('users')->insert(
            ["name"=> "Kerry",
            "email"=>"lorem.ac.risus@congueIn.ca",
            "password"=> bcrypt("123456789"),
            "city" =>"Guarapuava",
            "state"=>"Paraná",
            "postalcode"=>"95630-000",
            "address"=>"Ap #587-6519 Accumsan Street",
            "number"=>2,
            "complement"=>"Ac Mattis Semper LLP",
            "district"=>"Bahrain"]);
        DB::table('users')->insert(
            ["name"=> "Ivana",
            "email"=>"quis.tristique.ac@auctorodioa.org",
            "password"=> bcrypt("123456789"),
            "city" =>"São Gonçalo",
            "state"=>"Rio de Janeiro",
            "postalcode"=>"76510-000",
            "address"=>"P.O. Box 829, 9283 Cum Rd.",
            "number"=>1,
            "complement"=>"Aliquam Erat Volutpat Inc.",
            "district"=>"Suriname"]);
        DB::table('users')->insert(
            ["name"=> "Marah",
            "email"=>"tellus@enim.net",
            "password"=> bcrypt("123456789"),
            "city" =>"Olinda",
            "state"=>"PE",
            "postalcode"=>"23795-000",
            "address"=>"292-9635 Felis Rd.",
            "number"=>9,
            "complement"=>"Adipiscing LLC",
            "district"=>"Lithuania"]);
        DB::table('users')->insert(
            ["name"=> "Xandra",
            "email"=>"scelerisque@Pellentesque.org",
            "password"=> bcrypt("123456789"),
            "city" =>"Parauapebas",
            "state"=>"PA",
            "postalcode"=>"84747-000",
            "address"=>"P.O. Box 524, 8216 Pellentesque Av.",
            "number"=>4,
            "complement"=>"Nunc Ut Industries",
            "district"=>"Taiwan"]);
        DB::table('users')->insert(
            ["name"=> "Brianna",
            "email"=>"Phasellus.fermentum.convallis@ullamcorperviverraMaecenas.com",
            "password"=> bcrypt("123456789"),
            "city" =>"Ribeirão das Neves",
            "state"=>"MG",
            "postalcode"=>"72260-000",
            "address"=>"468-5637 Sed Rd.",
            "number"=>8,
            "complement"=>"Fusce Dolor Quam LLP",
            "district"=>"Saint Helena"]);
        DB::table('users')->insert(
            ["name"=> "Lavinia",
            "email"=>"Maecenas@urnajustofaucibus.com",
            "password"=> bcrypt("123456789"),
            "city" =>"Juazeiro",
            "state"=>"BA",
            "postalcode"=>"54507700",
            "address"=>"Ap #217-8873 Fusce Avenue",
            "number"=>1,
            "complement"=>"Quam Pellentesque Company",
            "district"=>"Samoa"]);
        DB::table('users')->insert(
            ["name"=> "Claudia",
            "email"=>"gravida.sit@sed.ca",
            "password"=> bcrypt("123456789"),
            "city" =>"Fortaleza",
            "state"=>"CE",
            "postalcode"=>"78940-000",
            "address"=>"6134 Ligula. Rd.",
            "number"=>2,
            "complement"=>"Non Enim Company",
            "district"=>"Germany"]);
        DB::table('users')->insert(
            ["name"=> "Maile",
            "email"=>"Proin.velit.Sed@Inatpede.com",
            "password"=> bcrypt("123456789"),
            "city" =>"Itajaí",
            "state"=>"SC",
            "postalcode"=>"79027-001",
            "address"=>"730-9710 Enim. Av.",
            "number"=>4,
            "complement"=>"Pede Et Risus Limited",
            "district"=>"Djibouti"]);
        DB::table('users')->insert(
            ["name"=> "Chava",
            "email"=>"vel@nuncrisusvarius.edu",
            "password"=> bcrypt("123456789"),
            "city" =>"Valparaíso de Goiás",
            "state"=>"Goiás",
            "postalcode"=>"47858-000",
            "address"=>"P.O. Box 639, 6100 Amet, Rd.",
            "number"=>4,
            "complement"=>"Vel Venenatis Vel Incorporated",
            "district"=>"Cameroon"]);
        DB::table('users')->insert(
            ["name"=> "Rose",
            "email"=>"nibh.Phasellus.nulla@sem.net",
            "password"=> bcrypt("123456789"),
            "city" =>"Itapipoca",
            "state"=>"CE",
            "postalcode"=>"48985-000",
            "address"=>"Ap #378-4910 Mauris. Rd.",
            "number"=>2,
            "complement"=>"Elit Pellentesque A Company",
            "district"=>"Gabon"]);
        DB::table('users')->insert(
            ["name"=> "Glenna",
            "email"=>"lorem.ut.aliquam@famesac.org",
            "password"=> bcrypt("123456789"),
            "city" =>"Paulista",
            "state"=>"PE",
            "postalcode"=>"72830-000",
            "address"=>"P.O. Box 369, 3657 Vehicula Avenue",
            "number"=>7,
            "complement"=>"Rhoncus LLP",
            "district"=>"Macao"]);
        DB::table('users')->insert(
            ["name"=> "Kevyn",
            "email"=>"morbi.tristique.senectus@arcuVivamus.ca",
            "password"=> bcrypt("123456789"),
            "city" =>"Cametá",
            "state"=>"PA",
            "postalcode"=>"58965-000",
            "address"=>"590-3403 Integer St.",
            "number"=>6,
            "complement"=>"Mauris Eu Corporation",
            "district"=>"Netherlands"]);
        DB::table('users')->insert(
            ["name"=> "Summer",
            "email"=>"Nullam@convallis.com",
            "password"=> bcrypt("123456789"),
            "city" =>"Mogi das Cruzes",
            "state"=>"São Paulo",
            "postalcode"=>"80480-000",
            "address"=>"347-2711 Varius Street",
            "number"=>5,
            "complement"=>"Metus Corp.",
            "district"=>"Solomon Islands"]);
        DB::table('users')->insert(
            ["name"=> "Veronica",
            "email"=>"dolor@maurisid.ca",
            "password"=> bcrypt("123456789"),
            "city" =>"Itapipoca",
            "state"=>"Ceará",
            "postalcode"=>"59860-093",
            "address"=>"P.O. Box 946, 8798 Dapibus Av.",
            "number"=>10,
            "complement"=>"Sit Amet LLC",
            "district"=>"Bolivia"]);
        DB::table('users')->insert(
            ["name"=> "Kimberley",
            "email"=>"metus.In@lacus.co.uk",
            "password"=> bcrypt("123456789"),
            "city" =>"Cabo de Santo Agostinho",
            "state"=>"PE",
            "postalcode"=>"38409-000",
            "address"=>"9626 Id Rd.",
            "number"=>2,
            "complement"=>"Suspendisse Non Limited",
            "district"=>"Gabon"]);
        DB::table('users')->insert(
            ["name"=> "Lois",
            "email"=>"Sed.dictum.Proin@elitfermentumrisus.com",
            "password"=> bcrypt("123456789"),
            "city" =>"Piracicaba",
            "state"=>"São Paulo",
            "postalcode"=>"16222-176",
            "address"=>"Ap #448-4608 Ut St.",
            "number"=>3,
            "complement"=>"Magna A Neque Ltd",
            "district"=>"Kyrgyzstan"]);
        DB::table('users')->insert(
            ["name"=> "Ursa",
            "email"=>"hendrerit@Integervulputate.edu",
            "password"=> bcrypt("123456789"),
            "city" =>"Balsas",
            "state"=>"Maranhão",
            "postalcode"=>"45384-000",
            "address"=>"112-8015 Mattis Rd.",
            "number"=>6,
            "complement"=>"Cras Consulting",
           "district"=>"Antigua and Barbuda" ]);
        DB::table('users')->insert(
            ["name"=> "Dahlia",
            "email"=>"Phasellus.ornare@dapibusligulaAliquam.net",
            "password"=> bcrypt("123456789"),
            "city" =>"Castanhal",
            "state"=>"PA",
            "postalcode"=>"99410-000",
            "address"=>"P.O. Box 465, 4812 Adipiscing Rd.",
            "number"=>3,
            "complement"=>"Et Nunc Quisque Industries",
            "district"=>"South Sudan" ]);
        DB::table('users')->insert(
            ["name"=> "Karly",
            "email"=>"Nunc.ac.sem@temporerat.co.uk",
            "password"=> bcrypt("123456789"),
            "city" =>"Camaragibe",
            "state"=>"PE",
            "postalcode"=>"53748-128",
            "address"=>"Ap #697-6728 Fermentum Road",
            "number"=>10,
            "complement"=>"Justo Proin Non Industries",
            "district"=>"Kenya"]);
        }
    }