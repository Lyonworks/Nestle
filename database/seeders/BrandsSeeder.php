<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandsSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            // Family nutrition
            ['name' => 'Bear Brand', 'image' => 'brands/Bear Brand.jpg', 'category_id' => 1],
            ['name' => 'Cerelac', 'image' => 'brands/Cerelac.jpg', 'category_id' => 1],
            ['name' => 'Cerevita', 'image' => 'brands/Cerevita.jpg', 'category_id' => 1],
            ['name' => 'Gerber', 'image' => 'brands/Gerber.jpg', 'category_id' => 1],
            ['name' => 'Golden Morn', 'image' => 'brands/Golden Morn.jpg', 'category_id' => 1],
            ['name' => 'Materna', 'image' => 'brands/Materna.jpg', 'category_id' => 1],
            ['name' => 'Milo', 'image' => 'brands/Milo.jpg', 'category_id' => 1],
            ['name' => 'Molico', 'image' => 'brands/Molico.jpg', 'category_id' => 1],
            ['name' => "Nancare", 'image' => "brands/Nancare.jpg", 'category_id' => 1],
            ['name' => 'Nescau', 'image' => 'brands/Nescau.jpg', 'category_id' => 1],
            ['name' => 'Nesquik', 'image' => 'brands/Nesquik.jpg', 'category_id' => 1],
            ['name' => 'Nestum', 'image' => 'brands/Nestum.jpg', 'category_id' => 1],
            ['name' => 'Nido', 'image' => 'brands/Nido.jpg', 'category_id' => 1],
            ['name' => "Yiyang", 'image' => "brands/Yiyang.jpg", 'category_id' => 1],

            // Waters
            ['name' => 'Acqua Panna', 'image' => 'brands/Acqua Panna.jpg', 'category_id' => 2],
            ['name' => 'Buxton', 'image' => 'brands/Buxton.jpg', 'category_id' => 2],
            ['name' => 'Contrex', 'image' => 'brands/Contrex.jpg', 'category_id' => 2],
            ['name' => 'Erikli', 'image' => 'brands/Erikli.jpg', 'category_id' => 2],
            ['name' => 'Essentia', 'image' => 'brands/Essentia.jpg', 'category_id' => 2],
            ['name' => 'HENNIEZ', 'image' => 'brands/HENNIEZ.jpg', 'category_id' => 2],
            ['name' => 'Hépar', 'image' => 'brands/Hépar.jpg', 'category_id' => 2],
            ['name' => 'La Vie', 'image' => 'brands/La Vie.jpg', 'category_id' => 2],
            ['name' => 'Levissima', 'image' => 'brands/Levissima.jpg', 'category_id' => 2],
            ['name' => 'Nałęczowianka', 'image' => 'brands/Nałęczowianka.jpg', 'category_id' => 2],
            ['name' => 'Nestlé Pure Life', 'image' => 'brands/Nestlé Pure Life.jpg', 'category_id' => 2],
            ['name' => 'Perrier', 'image' => 'brands/Perrier.jpg', 'category_id' => 2],
            ['name' => 'S.Pellegrino', 'image' => 'brands/S.Pellegrino.jpg', 'category_id' => 2],
            ['name' => 'Sanpellegrino', 'image' => 'brands/Sanpellegrino.jpg', 'category_id' => 2],
            ['name' => 'Vittel', 'image' => 'brands/Vittel.jpg', 'category_id' => 2],

            // Cereals
            ['name' => 'Cheerios', 'image' => 'brands/Cheerios.jpg', 'category_id' => 3],
            ['name' => 'Chocapic', 'image' => 'brands/Chocapic.jpg', 'category_id' => 3],
            ['name' => 'Cini Minis', 'image' => 'brands/Cini Minis.jpg', 'category_id' => 3],
            ['name' => 'Corn Flakes', 'image' => 'brands/Corn Flakes.jpg', 'category_id' => 3],
            ['name' => 'Fitness', 'image' => 'brands/Fitness.jpg', 'category_id' => 3],
            ['name' => 'KitKat Cereal', 'image' => 'brands/KitKat Cereal.jpg', 'category_id' => 3],
            ['name' => 'Koko Krunch', 'image' => 'brands/Koko Krunch.jpg', 'category_id' => 3],
            ['name' => 'Lion Cereals', 'image' => 'brands/Lion Cereals.jpg', 'category_id' => 3],
            ['name' => 'Nesquik Cereal', 'image' => 'brands/Nesquik Cereal.jpg', 'category_id' => 3],
            ['name' => 'Shredded Wheat Original', 'image' => 'brands/Shredded Wheat Original.jpg', 'category_id' => 3],
            ['name' => 'Shreddies', 'image' => 'brands/Shreddies.jpg', 'category_id' => 3],
            ['name' => 'Trix Cereal', 'image' => 'brands/Trix Cereal.jpg', 'category_id' => 3],

            // Chocolate & confectionery
            ['name' => 'Aero', 'image' => 'brands/Aero.jpg', 'category_id' => 4],
            ['name' => 'Baci Perugina', 'image' => 'brands/Baci Perugina.jpg', 'category_id' => 4],
            ['name' => 'Cailler', 'image' => 'brands/Cailler.jpg', 'category_id' => 4],
            ['name' => 'Damak', 'image' => 'brands/Damak.jpg', 'category_id' => 4],
            ['name' => 'Garoto', 'image' => 'brands/Garoto.jpg', 'category_id' => 4],
            ['name' => 'Hsu Fu Chi', 'image' => 'brands/Hsu Fu Chi.jpg', 'category_id' => 4],
            ['name' => 'KitKat', 'image' => 'brands/KitKat.jpg', 'category_id' => 4],
            ['name' => 'Milkybar', 'image' => 'brands/Milkybar.jpg', 'category_id' => 4],
            ['name' => 'Munch', 'image' => 'brands/Munch.jpg', 'category_id' => 4],
            ['name' => 'Nestlé Sustainably Sourced Cocoa', 'image' => 'brands/Nestlé Sustainably Sourced Cocoa.jpg', 'category_id' => 4],
            ['name' => 'Quality Street', 'image' => 'brands/Quality Street.jpg', 'category_id' => 4],
            ['name' => 'Sahne Nuss', 'image' => 'brands/Sahne Nuss.jpg', 'category_id' => 4],
            ['name' => 'Smarties', 'image' => 'brands/Smarties.jpg', 'category_id' => 4],
            ['name' => 'Toll House', 'image' => 'brands/Toll House.jpg', 'category_id' => 4],

            // Coffee
            ['name' => 'Blue Bottle Coffee', 'image' => 'brands/Blue Bottle Coffee.jpg', 'category_id' =>5],
            ['name' => 'Nescafé', 'image' => 'brands/Nescafé.jpg', 'category_id' => 5],
            ['name' => 'Nescafé Dolce Gusto', 'image' => 'brands/Nescafé Dolce Gusto.jpg', 'category_id' => 5],
            ['name' => 'Nespresso', 'image' => 'brands/Nespresso.jpg', 'category_id' => 5],
            ['name' => 'Starbucks Coffee At Home', 'image' => 'brands/Starbucks Coffee At Home.jpg', 'category_id' => 5],

            // Culinary, chilled & frozen food
            ['name' => 'Buitoni', 'image' => 'brands/Buitoni.jpg', 'category_id' => 6],
            ['name' => 'DiGiorno', 'image' => 'brands/DiGiorno.jpg', 'category_id' => 6],
            ['name' => 'Garden Gourmet', 'image' => 'brands/Garden Gourmet.jpg', 'category_id' => 6],
            ['name' => 'Hot Pockets', 'image' => 'brands/Hot Pockets.jpg', 'category_id' => 6],
            ['name' => 'Lean Cuisine', 'image' => 'brands/Lean Cuisine.jpg', 'category_id' => 6],
            ['name' => 'Life Cuisine', 'image' => 'brands/Life Cuisine.jpg', 'category_id' => 6],
            ['name' => 'Maggi', 'image' => 'brands/Maggi.jpg', 'category_id' => 6],
            ['name' => 'Stouffer\'s', 'image' => 'brands/Stouffer\'s.jpg', 'category_id' => 6],
            ['name' => 'Thomy', 'image' => 'brands/Thomy.jpg', 'category_id' => 6],

            // Dairy
            ['name' => 'Carnation', 'image' => 'brands/Carnation.jpg', 'category_id' => 7],
            ['name' => 'Coffee mate', 'image' => 'brands/Coffee mate.jpg', 'category_id' => 7],
            ['name' => 'La Laitière', 'image' => 'brands/La Laitière.jpg', 'category_id' => 7],

            //Drinks
            ['name' => 'Nestea', 'image' => 'brands/Nestea.jpg', 'category_id' => 8],

            //Food service
            ['name' => 'Carnation', 'image' => 'brands/Carnation.jpg', 'category_id' => 9],
            ['name' => 'Chef', 'image' => 'brands/Chef.jpg', 'category_id' => 9],
            ['name' => 'Coffee mate', 'image' => 'brands/Coffee mate.jpg', 'category_id' => 9],
            ['name' => 'Garden Gourmet', 'image' => 'brands/Garden Gourmett.jpg', 'category_id' => 9],
            ['name' => 'KitKat', 'image' => 'brands/KitKat.jpg', 'category_id' => 9],
            ['name' => 'La Lechera', 'image' => 'brands/La Lechera.jpg', 'category_id' => 9],
            ['name' => 'Maggi Professional', 'image' => 'brands/Maggi Professional.jpg', 'category_id' => 9],
            ['name' => 'Milo', 'image' => 'brands/Milo.jpg', 'category_id' => 9],
            ['name' => "Minor's", 'image' => "brands/Minor's.jpg", 'category_id' => 9],
            ['name' => 'Nescafé', 'image' => 'brands/Nescafé.jpg', 'category_id' => 9],
            ['name' => 'Nestea', 'image' => 'brands/Nestea.jpg', 'category_id' => 9],
            ['name' => 'Plant-based and so good!', 'image' => 'brands/Plant-based and so good!.jpg', 'category_id' => 9],
            ['name' => 'Roastelier by Nescafé', 'image' => 'brands/Roastelier by Nescafé.jpg', 'category_id' => 9],
            ['name' => "Stouffer's", 'image' => "brands/Stouffer's.jpg", 'category_id' => 9],
            ['name' => 'We Proudly Serve Starbucks Coffee Program', 'image' => 'brands/We Proudly Serve Starbucks Coffee Program.jpg', 'category_id' => 9],

            //Healthcare nutrition
            ['name' => 'BOOST', 'image' => 'brands/BOOST.jpg', 'category_id' => 10],
            ['name' => 'Compleat', 'image' => 'brands/Compleat.jpg', 'category_id' => 10],
            ['name' => 'Garden of Life', 'image' => 'brands/Garden of Life.jpg', 'category_id' => 10],
            ['name' => 'Impact', 'image' => 'brands/Impact.jpg', 'category_id' => 10],
            ['name' => 'Nature\'s Bounty', 'image' => 'brands/Nature\'s Bounty.jpg', 'category_id' => 10],
            ['name' => 'Peptamen', 'image' => 'brands/Peptamen.jpg', 'category_id' => 10],
            ['name' => 'Resource', 'image' => 'brands/Resource.jpg', 'category_id' => 10],
            ['name' => 'Solgar', 'image' => 'brands/Solgar.jpg', 'category_id' => 10],
            ['name' => 'Vitaflo', 'image' => 'brands/Vitaflo.jpg', 'category_id' => 10],
            ['name' => 'Vital Proteins', 'image' => 'brands/Vital Proteins.jpg', 'category_id' => 10],

            //Ice cream
            ['name' => 'Antica Gelateria Del Corso', 'image' => 'brands/Antica Gelateria Del Corso.jpg', 'category_id' => 11],
            ['name' => 'Drumstick', 'image' => 'brands/Drumstick.jpg', 'category_id' => 11],
            ['name' => 'Extrême', 'image' => 'brands/Extrême.jpg', 'category_id' => 11],
            ['name' => 'Häagen-Dazs', 'image' => 'brands/Häagen-Dazs.jpg', 'category_id' => 11],
            ['name' => 'Maxibon', 'image' => 'brands/Maxibon.jpg', 'category_id' => 11],
            ['name' => 'Mövenpick', 'image' => 'brands/Mövenpick.jpg', 'category_id' => 11],

            //Petcare
            ['name' => 'Alpo', 'image' => 'brands/Alpo.jpg', 'category_id' => 12],
            ['name' => 'Bakers', 'image' => 'brands/Bakers.jpg', 'category_id' => 12],
            ['name' => 'Beggin\'', 'image' => 'brands/Beggin\'.jpg', 'category_id' => 12],
            ['name' => 'Beneful', 'image' => 'brands/Beneful.jpg', 'category_id' => 12],
            ['name' => 'Beyond', 'image' => 'brands/Beyond.jpg', 'category_id' => 12],
            ['name' => 'Busy Bone', 'image' => 'brands/Busy Bone.jpg', 'category_id' => 12],
            ['name' => 'Cat Chow', 'image' => 'brands/Cat Chow.jpg', 'category_id' => 12],
            ['name' => 'Dentalife', 'image' => 'brands/Dentalife.jpg', 'category_id' => 12],
            ['name' => 'Dog Chow', 'image' => 'brands/Dog Chow.jpg', 'category_id' => 12],
            ['name' => 'Fancy Feast', 'image' => 'brands/Fancy Feast.jpg', 'category_id' => 12],
            ['name' => 'Felix', 'image' => 'brands/Felix.jpg', 'category_id' => 12],
            ['name' => 'Friskies', 'image' => 'brands/Friskies.jpg', 'category_id' => 12],
            ['name' => 'Gourmet', 'image' => 'brands/Gourmet.jpg', 'category_id' => 12],
            ['name' => 'Lily\'s Kitchen', 'image' => 'brands/Lily\'s Kitchen.jpg', 'category_id' => 12],
            ['name' => 'Merrick', 'image' => 'brands/Merrick.jpg', 'category_id' => 12],
            ['name' => 'Pro Plan Veterinary Diets', 'image' => 'brands/Pro Plan Veterinary Diets.jpg', 'category_id' => 12],
            ['name' => 'PURINA', 'image' => 'brands/PURINA.jpg', 'category_id' => 12],
            ['name' => 'PURINA ONE', 'image' => 'brands/PURINA ONE.jpg', 'category_id' => 12],
            ['name' => 'PURINA Pro Plan', 'image' => 'brands/PURINA Pro Plan.jpg', 'category_id' => 12],
            ['name' => 'Supercoat', 'image' => 'brands/Supercoat.jpg', 'category_id' => 12],
            ['name' => 'Terra Canis', 'image' => 'brands/Terra Canis.jpg', 'category_id' => 12],
            ['name' => 'Tidy Cats', 'image' => 'brands/Tidy Cats.jpg', 'category_id' => 12],
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->insert([
                'category_id' => $brand['category_id'],
                'name' => $brand['name'],
                'slug' => Str::slug($brand['name']),
                'image' => $brand['image'],
                'category_id' => $brand['category_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
