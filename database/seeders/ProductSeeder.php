<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use BenSampo\Enum\Enum;

class ProductSeeder extends Seeder
{

    public function run()
    {
        $Skol = 1;
        $Brahma = 2;
        $Bohemia = 3;
        $Itaipava = 4;
        $Heineken = 5;
        $Colorado = 6;
        $CocaCola = 7;
        $Pepsico = 8;
        $GuaranaAntartica = 9;
        $Itubaina = 10;
        $JackDaniels = 11;
        $JohnnieWalker = 12;
        $Pergola = 13;
        $Santome = 14;
        $SantaHelena = 15;
        $CantinhodoVale = 16;
        $Sminorff = 17;
        $Askov = 18;
        $Absolut = 19;
        $Corote = 20;
        $Gordons = 21;
        $cinquentaeUm = 22;
        $Ypioca = 23;
        $VelhoBarreiro = 24;
        $Cabare = 25;
        $Monster = 26;
        $RedBull = 27;

        $Cerveja = 1;
        $Vinho = 2;
        $Destilados = 3;
        $Cachaça = 4;
        $Whisky = 5;
        $NAlcoolicos = 7;

        $beers = [
            [
                'name' => 'Brahma 269ml',
                'price' => 2,
                'old_price' => 2,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/e3546c5b-b29b-439d-85a0-6968794be808/brahma_latinha_2.jpg',
                'brand_id' => $Brahma,
                'description' => 'Cerveja Brahma 269ml',
                'category_id' => $Cerveja
            ],
            [
                'name' => 'Brahma 350ml',
                'price' => 2.7,
                'old_price' => 2.7,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/f441355f-830f-4173-ada8-a8b638f8e075/brahma_latinha.jpg',
                'brand_id' => $Brahma,
                'description' => 'Cerveja Brahma 350ml',
                'category_id' => $Cerveja
            ],
            [
                'name' => 'Itaipava 269ml',
                'price' => 1.70,
                'old_price' => 1.70,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/5d82c11c-dba2-4152-927a-3141846bedf1/itaipava_latinha_2.png',
                'brand_id' => $Itaipava,
                'description' => 'Cerveja ITAIPAVA Lata 269ml',
                'category_id' => $Cerveja
            ],
            [
                'name' => 'Itaipava 350ml',
                'price' => 2.20,
                'old_price' => 2.20,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/fc21db93-4199-4b48-8e5c-235199e3f899/itaipava_latinha.png',
                'brand_id' => $Itaipava,
                'description' => 'Cerveja ITAIPAVA Lata 350ml',
                'category_id' => $Cerveja
            ],
            [
                'name' => 'Colorado Indica 350ml',
                'price' => 7.50,
                'old_price' => 7.50,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/56412385-8014-4583-9b7a-5497e0ff7b3e/colorado_latinha_3.png',
                'brand_id' => $Colorado,
                'description' => 'Cerveja Colorado Indica India Pale Ale Lata 350ml',
                'category_id' => $Cerveja
            ],
            [
                'name' => 'Colorado Appia 350ml',
                'price' => 7.50,
                'old_price' => 7.50,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/7d858e29-770f-4785-bcb9-d6adb48f9dda/colorado_latinha_2.png',
                'brand_id' => $Colorado,
                'description' => 'Cerveja Colorado Appia Lata 350ml',
                'category_id' => $Cerveja
            ],
            [
                'name' => 'Colorado Ribeirão 350ml',
                'price' => 7,
                'old_price' => 7,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/08b60545-c34a-4ad1-9f39-84e91b658892/colorado_latinha.png',
                'brand_id' => $Colorado,
                'description' => 'Cerveja Colorado Ribeirão Lager 350ml',
                'category_id' => $Cerveja
            ],
            [
                'name' => 'Skol 269ml',
                'price' => 2.2,
                'old_price' => 2.2,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/8c172e1e-2dea-4df6-a349-ae643e9106bf/skol_latinha_2.png',
                'brand_id' => $Skol,
                'description' => 'Cerveja Skol Pilsen 269ml',
                'category_id' => $Cerveja
            ],
            [
                'name' => 'Skol 275ml',
                'price' => 2.4,
                'old_price' => 2.4,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/39af3104-8b42-41a6-903d-13f2e86fc3fd/skol_garrafa_2.jpeg',
                'brand_id' => $Skol,
                'description' => 'Cerveja Skol Pilsen Garrafa 275ml',
                'category_id' => $Cerveja
            ],
        ];

        $juiceAndOthers = [
            [
                'name' => 'Kero Coco 1L',
                'price' => 7.20,
                'old_price' => 7.20,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/9b1f37f8-2470-40c8-b550-e5fc7e9a5274/kero_coco_1lt.jpg',
                'brand_id' => $Pepsico,
                'description' => 'Kero Coco trouxe a naturalidade da água de coco com a praticidade da caixinha. Kero Coco é feita com água de coco verde cultivada e colhida manualmente, rica em sais minerais e nutrientes importantes para manter o equilíbrio do organismo.',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Kero Coco 330ml',
                'price' => 3.00,
                'old_price' => 3.00,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/7772f441-d96a-4c5c-a667-f30d0229e08b/kerococo_330ml.jpg',
                'brand_id' => $Pepsico,
                'description' => 'Caixinha Kero Coco 330ml',
                'category_id' => $NAlcoolicos
            ],

            [
                'name' => 'Monster Ultra 473ml',
                'price' => 7.69,
                'old_price' => 7.69,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/4d13cd0b-d415-4904-b4d3-e74208475795/monster2.png',
                'brand_id' => $Monster,
                'description' => 'Energético Monster Ultra Lata 473ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Monster Energy 473ml',
                'price' => 7.69,
                'old_price' => 7.69,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/254e2613-33a7-4ac0-9f51-581bb9d7d15c/monster.png',
                'brand_id' => $Monster,
                'description' => 'Energético Monster Energy Lata 473ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Itubaina 2L',
                'price' => 5,
                'old_price' => 5,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/cf88fdb9-2f85-4657-bf9e-9989b35fefc3/itubaina.jpg',
                'brand_id' => $Itubaina,
                'description' => 'Refrigerante Itubaina 2L',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'H20H 500ml',
                'price' => 4,
                'old_price' => 4,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/648bcec5-6eb3-4ff1-87c8-d3b6579c0601/h2o_garrafa.jpg',
                'brand_id' => $Pepsico,
                'description' => 'Bebida levemente gaseificada 500ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Fanta uva 350ml',
                'price' => 3.5,
                'old_price' => 3.5,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/7f16be01-8b59-4c0a-8c47-c711a4a3605f/fanta_latinha_uva.png',
                'brand_id' => $CocaCola,
                'description' => 'Refrigerante Fanta uva 350ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Fanta uva 2L',
                'price' => 6,
                'old_price' => 6,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/ba3399d7-bb10-4604-a0d8-754b62f39c15/fanta_garrava_uva.png',
                'brand_id' => $CocaCola,
                'description' => 'Refrigerante Fanta uva 2L',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Del Vale uva 1,5L',
                'price' => 4.5,
                'old_price' => 4.5,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/74f88787-8759-4cc6-8379-70be0743de4d/dellvale_uva.jpg',
                'brand_id' => $CocaCola,
                'description' => 'Suco Del Vale uva garrafa 1,5L',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Del Vale laranja 1,5L',
                'price' => 4.5,
                'old_price' => 4.5,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/596abaf3-5a5a-4be5-ad65-f7fbc9d9e38c/dellvale_laranja.jpg',
                'brand_id' => $CocaCola,
                'description' => 'Suco Del Vale laranja garrafa 1,5L',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Fanta laranja 350ml',
                'price' => 3.5,
                'old_price' => 3.5,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/112c1fbc-90e9-4876-8975-95884be3a83b/fanta_latinha_2.jpg',
                'brand_id' => $CocaCola,
                'description' => 'Refrigerante Fanta laranja lata 350ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Coca Cola Zero 350ml',
                'price' => 4,
                'old_price' => 4,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/fdf39858-5261-4705-8d7c-244e67d890e2/cocacola_zero_latinha.png',
                'brand_id' => $CocaCola,
                'description' => 'Refrigerante Coca Cola Zero lata 350ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Coca Cola 350ml',
                'price' => 4,
                'old_price' => 4,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/91cc7bd7-33a1-4dcd-8d9e-1ad1d9a23884/cocacola_latinha.jpg',
                'brand_id' => $CocaCola,
                'description' => 'Refrigerante Coca Cola lata 350ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Água Mineral sem gás 500ml',
                'price' => 2.2,
                'old_price' => 2.2,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/72ea28f0-5e5c-4aaa-89de-2a3e9e7ac2b0/agua_sgas.jpg',
                'brand_id' => $CocaCola,
                'description' => 'Água Mineral sem gás 500ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Água Mineral com gás 500ml',
                'price' => 2.75,
                'old_price' => 2.75,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/fb880f5a-9faf-4ab7-9b92-8cceda64e2d5/agua_gas.jpg',
                'brand_id' => $CocaCola,
                'description' => 'Água Mineral com gás 500ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Sprite 350ml',
                'price' => 3.5,
                'old_price' => 3.5,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/dfe25817-d5f4-46c9-b0da-15cd17042878/sprite_latinha.webp',
                'brand_id' => $CocaCola,
                'description' => 'Refrigerante Sprite lata 350ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Sprite 2L',
                'price' => 6.5,
                'old_price' => 6.5,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/349ddfdd-47ec-4fa9-ac33-9887751bf6f9/sprite_garrafa.jpg',
                'brand_id' => $CocaCola,
                'description' => 'Refrigerante Sprite garrafa 2L',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Redbull Sem Açúcar 355ml',
                'price' => 9,
                'old_price' => 9,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/f1670f7d-d14e-4b13-9ef5-26a27cad7763/redbull6.png',
                'brand_id' => $RedBull,
                'description' => 'Energético Redbull Sem Açúcar 355ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Redbull Coco 355ml',
                'price' => 9,
                'old_price' => 9,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/61b79e9a-566a-4d3d-9ec8-c16b164d8405/redbull5.jpg',
                'brand_id' => $RedBull,
                'description' => 'Energético Redbull Coco 355ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Redbull Summer 355ml',
                'price' => 9,
                'old_price' => 9,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/0d681c3b-e1ad-47a1-a935-f598176ec413/redbull3.jpg',
                'brand_id' => $RedBull,
                'description' => 'Energético Redbull Summer 355ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Redbull Açaí 355ml',
                'price' => 9,
                'old_price' => 9,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/3a58cca2-a781-4bde-9794-65530d8c9ee0/redbull4.jpg',
                'brand_id' => $RedBull,
                'description' => 'Energético Redbull Açaí 355ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Redbull Tropical 355ml',
                'price' => 9,
                'old_price' => 9,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/fae28c3c-f458-4bc7-af7d-d48cc0d97d49/redbull2.jpg',
                'brand_id' => $RedBull,
                'description' => 'Energético Redbull Tropical 355ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Pepsi Black 350ml',
                'price' => 3.7,
                'old_price' => 3.7,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/ffc8f004-8fdc-4877-95a7-236e8ebb0927/pepsi_black_latinha.jpg',
                'brand_id' => $Pepsico,
                'description' => 'Refrigerante Pespi Black 350ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Pepsi 350ml',
                'price' => 3.7,
                'old_price' => 3.7,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/3f383750-9664-495a-a11b-c288da6f187f/pepsi_latinha.jpg',
                'brand_id' => $Pepsico,
                'description' => 'Refrigerante Pespi 350ml',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Pepsi 2L',
                'price' => 6,
                'old_price' => 6,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/eae0abfd-ee00-410d-8de2-556244525be2/pepsi_garaffa2.jpg',
                'brand_id' => $Pepsico,
                'description' => 'Refrigerante Pespi 2L',
                'category_id' => $NAlcoolicos
            ],
            [
                'name' => 'Pepsi Black 2L',
                'price' => 6,
                'old_price' => 6,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/9f1228f3-d01d-434f-b84f-93582e015cfc/pepsi_black_garaffa.jpg',
                'brand_id' => $Pepsico,
                'description' => 'Refrigerante Pespi Black 2L',
                'category_id' => $NAlcoolicos
            ],
        ];

        $distilled = [
            [
                'name' => 'Askov Frutas Vermelhas 900ml',
                'price' => 12,
                'old_price' => 12,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/8232ccb6-be92-4058-8fa7-e4642dfc342f/askov1.png',
                'brand_id' => $Askov,
                'description' => 'Vodka Askov Frutas Vermelhas 900ml',
                'category_id' => $Destilados
            ],
            [
                'name' => 'Askov Premium 900ml',
                'price' => 12,
                'old_price' => 12,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/8d37c3d3-1883-477f-a631-3ee39e73babe/askov.png',
                'brand_id' => $Askov,
                'description' => 'Vodka Askov Pemium 900ml',
                'category_id' => $Destilados
            ],
            [
                'name' => 'Sminorff Ice 275ml',
                'price' => 6.5,
                'old_price' => 6.5,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/032e7b23-0771-4956-82f5-17e36a3a266e/sminorff_ice.png',
                'brand_id' => $Sminorff,
                'description' => 'Sminorff Ice 275ml',
                'category_id' => $Destilados
            ],
        ];

        $wine = [
            [
                'name' => 'Santa Helena Carmenere Meia Garrafa 375ml',
                'price' => 23,
                'old_price' => 23,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/48284090-ad04-4086-b9d2-7dfce40569d7/santa_helena_carmenere_375.webp',
                'brand_id' => $SantaHelena,
                'description' => 'Vinho Chileno Santa Helena Carmenere 375ml',
                'category_id' => $Vinho
            ],
            [
                'name' => 'Santa Helena Merlot 750ml',
                'price' => 33,
                'old_price' => 33,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/5e45ca40-45cc-46bd-9fa8-7555c207e247/santa_helena_merlot.webp',
                'brand_id' => $SantaHelena,
                'description' => 'Vinho Santa Helena Merlot 750ml',
                'category_id' => $Vinho
            ],
            [
                'name' => 'Santa Helena Carbenet 750ml',
                'price' => 33,
                'old_price' => 33,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/27c26d68-3188-4bc7-a585-0d71cfbbd475/santa_helena_cabernet.webp',
                'brand_id' => $SantaHelena,
                'description' => 'Vinho Santa Helena Carbenet 750ml',
                'category_id' => $Vinho
            ],
            [
                'name' => 'Santomé Suave 750ml',
                'price' => 18,
                'old_price' => 18,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/0b05ae22-422f-4a7a-a503-95aa1a50acb9/santome_750_suave.webp',
                'brand_id' => $Santome,
                'description' => 'Vinho Santomé Suave 750ml',
                'category_id' => $Vinho
            ],
            [
                'name' => 'Santomé Seco 750ml',
                'price' => 20,
                'old_price' => 20,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/462d7544-fd2f-48d7-9bf9-10f673f81776/santome_750_seco.webp',
                'brand_id' => $Santome,
                'description' => 'Vinho Santomé Seco 750ml',
                'category_id' => $Vinho
            ],
            [
                'name' => 'Santomé Bordo Suave 1L',
                'price' => 23,
                'old_price' => 23,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/34b0b804-e462-4085-954f-30770351c89c/santome_1l_bordo.webp',
                'brand_id' => $Santome,
                'description' => 'Vinho Santomé Bordo Suave 1L',
                'category_id' => $Vinho
            ],
            [
                'name' => 'Cantinho do Vale 880ml',
                'price' => 3.80,
                'old_price' => 3.80,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/b240d0a3-90ed-43b6-8bf8-41057bb680a9/cantinho_vale_880.jpg',
                'brand_id' => $CantinhodoVale,
                'description' => 'Vinho Cantinho do Vale 880ml',
                'category_id' => $Vinho
            ],
            [
                'name' => 'Pérgola Seco 1L',
                'price' => 20,
                'old_price' => 20,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/9ffadb59-64fa-4314-b212-5991974c00c2/pergola_1l_seco.webp',
                'brand_id' => $Pergola,
                'description' => 'Vinho Pérgola Seco 1L',
                'category_id' => $Vinho
            ],
            [
                'name' => 'Pérgola Suave 1L',
                'price' => 20,
                'old_price' => 20,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/78568723-1318-4f04-bb68-40031f4df916/pergola_2l_suave.webp',
                'brand_id' => $Pergola,
                'description' => 'Vinho Pérgola Suave 1L',
                'category_id' => $Vinho
            ],
            [
                'name' => 'Pérgola Suave 2L',
                'price' => 38.90,
                'old_price' => 38.90,
                'promotion' => false,
                'img_id' => 'https://ucarecdn.com/78568723-1318-4f04-bb68-40031f4df916/pergola_2l_suave.webp',
                'brand_id' => $Pergola,
                'description' => 'Vinho Pérgola Suave 2L',
                'category_id' => $Vinho
            ],
        ];

        $this->createListProduct($beers);
        $this->createListProduct($juiceAndOthers);
        $this->createListProduct($distilled);
        $this->createListProduct($wine);
    }

    public function createListProduct($products)
    {
        foreach ($products as $product) {
            Product::create(
                [
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'old_price' => $product['old_price'],
                    'promotion' => $product['promotion'],
                    'img_id' => $product['img_id'],
                    'brand_id' => $product['brand_id'],
                    'description' => $product['description'],
                    'category_id' => $product['category_id'],
                ]
            );
        }
    }
}
