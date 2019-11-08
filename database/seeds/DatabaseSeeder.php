<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
            'name' => 'melissa',
            'email' => 'mellise@nan.ci',
            'password' => bcrypt('admin'),
            'role'=>'admin'
            
        
        ]);

        User::create([
            'name' => 'Dupont',
            'email' => 'dupont@chezlui.fr',
            'password' => bcrypt('user'),
            'role'=>'freelance'

        ]);
        User::create([
            'name' => 'Duras',
            'email' => 'dupont@chezlui.fr',
            'password' => bcrypt('user'),
            'role'=>'client'

        
        ]);

        // DB::table('regions')->insert([
        //     [
        //         'name' => 'Île-de-France',
        //         'code' => 11,
        //         'slug' => 'ile_de_france',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Centre-Val de Loire',
        //         'code' => 24,
        //         'slug' => 'centre',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Bourgogne-Franche-Comté',
        //         'code' => 27,
        //         'slug' => 'bourgogne',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Hauts-de-France',
        //         'code' => 32,
        //         'slug' => 'hauts_de_france',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Grand Est',
        //         'code' => 44,
        //         'slug' => 'grand_est',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Pays de la Loire',
        //         'code' => 52,
        //         'slug' => 'pays_de_la_loire',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Bretagne',
        //         'code' => 53,
        //         'slug' => 'bretagne',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Nouvelle-Aquitaine',
        //         'code' => 75,
        //         'slug' => 'aquitaine',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Occitanie',
        //         'code' => 76,
        //         'slug' => 'occitanie',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Auvergne-Rhône-Alpes',
        //         'code' => 84,
        //         'slug' => 'auvergne',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => "Provence-Alpes-Côte d'Azur",
        //         'code' => 93,
        //         'slug' => 'provence',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Corse',
        //         'code' => 94,
        //         'slug' => 'corse',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Normandie',
        //         'code' => 28,
        //         'slug' => 'normandie',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);


        DB::table('categories')->insert([
            ['name' => 'Véhicules', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Immobilier', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Animaux', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Services', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mobilier', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vêtements', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Multimédia', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Loisirs', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vacances', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Autres', 'created_at' => now(), 'updated_at' => now()]
        ]);

        factory(App\Models\projets::class, 40)->create();

        DB::table('medias')->insert([
            [
                'filename_image' => 'hQfmnrndF9sc4LyU863HOMRvjVfAcg.png',
                'projet_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'filename_image' => 'hQfmnrndF9sc4LyU863HOMRvjVfAcg.png',
                'projet_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'filename_image' => 'hQfmnrndF9sc4LyU863HOMRvjVfAcg.png',
                'projet_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'filename_image' => 'hQfmnrndF9sc4LyU863HOMRvjVfAcg.png',
                'projet_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'filename_image' => 'hQfmnrndF9sc4LyU863HOMRvjVfAcg.png',
                'projet_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'filename_image' => 'hQfmnrndF9sc4LyU863HOMRvjVfAcg.png',
                'projet_id' => rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        factory(App\Models\messages::class, 10)->create();
    }
}
