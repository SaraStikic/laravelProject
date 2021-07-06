<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Sportske crno-bele helanke',
                "price"=>"1200",
                "description"=>"Sportske helanke, super elasticne, udobne i namenjene svim vrstama spotova.",
                "category"=>"helanke",
                "gallery"=>"https://msgajic.rs/wp-content/uploads/2020/03/88241871_635004743930858_3868622067372916736_n-600x600.jpg"
            ],
            [
                'name'=>'Sportske plave helanke',
                "price"=>"1500",
                "description"=>"Sportske helanke, super elasticne, udobne i namenjene svim vrstama spotova.",
                "category"=>"helanke",
                "gallery"=>"https://helanke.me/wp-content/uploads/2020/03/78768679_771268743340880_7220618414383955968_n-500x500.jpg"
            ],
            [
                'name'=>'Sportske sarene helanke',
                "price"=>"1700",
                "description"=>"Sportske helanke, super elasticne, udobne i namenjene svim vrstama spotova.",
                "category"=>"helanke",
                "gallery"=>"https://msgajic.rs/wp-content/uploads/2020/08/Gajic-510.jpg"
            ],
            [
                'name'=>'Zenska sportska majica',
                "price"=>"2000",
                "description"=>"Zenska majica za sve vrste sportova. Velika moc upijanja i prijatnog osecaja i nakon visecasovnog treniranja.",
                "category"=>"majica",
                "gallery"=>"https://www.dsport.mk/image.aspx?imageId=112868"
             ],
             [
                 'name'=>'Muska sportska majica',
                 "price"=>"2300",
                 "description"=>"Muska majica za sve vrste sportova. Velika moc upijanja i prijatnog osecaja i nakon visecasovnog treniranja.",
                 "category"=>"majica",
                 "gallery"=>"https://www.sportvision.rs/files/thumbs/files/images/slike_proizvoda/thumbs_350/FL4367_350_350px.webp"
              ],
              [
                  'name'=>'Zenska sportska majica',
                  "price"=>"2500",
                  "description"=>"Zenska majica za sve vrste sportova. Velika moc upijanja i prijatnog osecaja i nakon visecasovnog treniranja.",
                  "category"=>"majica",
                  "gallery"=>"https://www.dsport.mk/image.aspx?imageId=153242"
               ],
               [
                   'name'=>'Univerzalna sportska torba',
                   "price"=>"3000",
                   "description"=>"Multifunkcionalna torba. Sadrzi veliki broj pregrada. Uradjena je sa ojacanjem kako bi obezbedila vecu sigurnost i otpornost.",
                   "category"=>"torba",
                   "gallery"=>"https://www.djaksport.me/image.aspx?imageId=148193"
                ],
                [
                    'name'=>'Zenska sportska torba',
                    "price"=>"3200",
                    "description"=>"Multifunkcionalna torba. Sadrzi veliki broj pregrada. Uradjena je sa ojacanjem kako bi obezbedila vecu sigurnost i otpornost.",
                    "category"=>"torba",
                    "gallery"=>"https://www.djaksport.com/image.aspx?imageId=140971"
                 ],
                 [
                     'name'=>'Muska sportska torba',
                     "price"=>"3200",
                     "description"=>"Multifunkcionalna torba. Sadrzi veliki broj pregrada. Uradjena je sa ojacanjem kako bi obezbedila vecu sigurnost i otpornost.",
                     "category"=>"torba",
                     "gallery"=>"https://www.djaksport.ba/image.aspx?imageId=141623"
                  ],
                  [
                      'name'=>'Fudbalska lopta',
                      "price"=>"4000",
                      "description"=>"Fudbalska lopta, izradjena od najkvalitetnijeg materijala, i tako je obezbedjena izuzetna cvrstina i izdrzljivost na udarce.",
                      "category"=>"lopta",
                      "gallery"=>"https://www.sporteh.rs/Upload/Shops/1/Products/4033/0/7d1c1b85-57ce-4c58-8c93-986e3dc39655-s12241_main.jpg"
                   ],
                   [
                       'name'=>'Kosarkaska lopta',
                       "price"=>"4000",
                       "description"=>"Kosarkaska lopta, izradjena od najkvalitetnijeg materijala, i tako je obezbedjena izuzetna cvrstina i izdrzljivost na udarce.",
                       "category"=>"lopta",
                       "gallery"=>"https://www.djaksport.com/image.aspx?imageId=140904"
                    ],
                    [
                        'name'=>'Ragbi lopta',
                        "price"=>"4500",
                        "description"=>"Ragbi lopta, izradjena od najkvalitetnijeg materijala, i tako je obezbedjena izuzetna cvrstina i izdrzljivost na udarce.",
                        "category"=>"lopta",
                        "gallery"=>"https://contents.mediadecathlon.com/p1571515/k0a6f6cfa2ccc14e094713766e2b468ff/1571515_default.jpg?format=auto&quality=60&f=800x0"
                     ],
                     [
                         'name'=>'Odbojkaska lopta',
                         "price"=>"35000",
                         "description"=>"Odbojkska lopta, izradjena od najkvalitetnijeg materijala, i tako je obezbedjena izuzetna cvrstina i izdrzljivost na udarce.",
                         "category"=>"lopta",
                         "gallery"=>"https://www.extrasports.com/files/thumbs/files/images/slike_proizvoda/thumbs_350/MVA390_350_350px.jpg"
                      ],
                      [
                          'name'=>'Maratonci trče počasni krug',
                          "price"=>"1000",
                          "description"=>"Radnja je smeštena 1935. godine, posle atentata na kralja Aleksandra u Marseju, u maloj srpskoj palanci. ",
                          "category"=>"film",
                          "gallery"=>"https://upload.wikimedia.org/wikipedia/sr/7/7b/Maratonci.jpg"
                       ]
                       





        ]);
    }
}
