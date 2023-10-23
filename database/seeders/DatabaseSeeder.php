<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Dutatama Rosewika',
        //     'email' => '222111997@stis.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Post Pertama',
        //     // 'author' => 'Dutatama Taufiq',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam, quibusdam cupiditate odio quae aut, sint aliquid sequi voluptatibus similique nobis accusamus eius porro?</p><p>Consequuntur numquam, assumenda consequatur labore maxime ullam culpa dolor eius accusantium sunt fuga placeat exercitationem ducimus quia nam id sit impedit autem dolorem quisquam at. Nisi, quod tempora rerum natus porro tenetur, totam molestias asperiores animi aperiam sint nesciunt tempore eligendi, quaerat quasi. Praesentium iusto esse laborum sit sed sunt exercitationem iure incidunt labore dolorem aspernatur, voluptas reprehenderit ab atque velit reiciendis eligendi porro illo voluptatibus molestias. </p><p>Tempore tempora corrupti consequuntur sit veritatis maiores repellendus porro iste nihil illo natus minima enim ipsum, veniam totam voluptas dolores earum sapiente placeat eveniet facere assumenda? Ipsa beatae sequi perspiciatis omnis? Delectus, nisi expedita hic eligendi magni magnam est voluptatum inventore eaque, numquam ullam modi, minima laborum!</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Kedua',
        //     // 'author' => 'Rosewika Hadihardaya',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam, quibusdam cupiditate odio quae aut, sint aliquid sequi voluptatibus similique nobis accusamus eius porro?</p><p>Consequuntur numquam, assumenda consequatur labore maxime ullam culpa dolor eius accusantium sunt fuga placeat exercitationem ducimus quia nam id sit impedit autem dolorem quisquam at. Nisi, quod tempora rerum natus porro tenetur, totam molestias asperiores animi aperiam sint nesciunt tempore eligendi, quaerat quasi. Praesentium iusto esse laborum sit sed sunt exercitationem iure incidunt labore dolorem aspernatur, voluptas reprehenderit ab atque velit reiciendis eligendi porro illo voluptatibus molestias. </p><p>Tempore tempora corrupti consequuntur sit veritatis maiores repellendus porro iste nihil illo natus minima enim ipsum, veniam totam voluptas dolores earum sapiente placeat eveniet facere assumenda? Ipsa beatae sequi perspiciatis omnis? Delectus, nisi expedita hic eligendi magni magnam est voluptatum inventore eaque, numquam ullam modi, minima laborum!</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Ketiga',
        //     // 'author' => 'Dutatama Rosewika',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam, quibusdam cupiditate odio quae aut, sint aliquid sequi voluptatibus similique nobis accusamus eius porro?</p><p>Consequuntur numquam, assumenda consequatur labore maxime ullam culpa dolor eius accusantium sunt fuga placeat exercitationem ducimus quia nam id sit impedit autem dolorem quisquam at. Nisi, quod tempora rerum natus porro tenetur, totam molestias asperiores animi aperiam sint nesciunt tempore eligendi, quaerat quasi. Praesentium iusto esse laborum sit sed sunt exercitationem iure incidunt labore dolorem aspernatur, voluptas reprehenderit ab atque velit reiciendis eligendi porro illo voluptatibus molestias. </p><p>Tempore tempora corrupti consequuntur sit veritatis maiores repellendus porro iste nihil illo natus minima enim ipsum, veniam totam voluptas dolores earum sapiente placeat eveniet facere assumenda? Ipsa beatae sequi perspiciatis omnis? Delectus, nisi expedita hic eligendi magni magnam est voluptatum inventore eaque, numquam ullam modi, minima laborum!</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Post Keempat',
        //     // 'author' => 'Dutatama Rosewika',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-post-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam,',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam, quibusdam cupiditate odio quae aut, sint aliquid sequi voluptatibus similique nobis accusamus eius porro?</p><p>Consequuntur numquam, assumenda consequatur labore maxime ullam culpa dolor eius accusantium sunt fuga placeat exercitationem ducimus quia nam id sit impedit autem dolorem quisquam at. Nisi, quod tempora rerum natus porro tenetur, totam molestias asperiores animi aperiam sint nesciunt tempore eligendi, quaerat quasi. Praesentium iusto esse laborum sit sed sunt exercitationem iure incidunt labore dolorem aspernatur, voluptas reprehenderit ab atque velit reiciendis eligendi porro illo voluptatibus molestias. </p><p>Tempore tempora corrupti consequuntur sit veritatis maiores repellendus porro iste nihil illo natus minima enim ipsum, veniam totam voluptas dolores earum sapiente placeat eveniet facere assumenda? Ipsa beatae sequi perspiciatis omnis? Delectus, nisi expedita hic eligendi magni magnam est voluptatum inventore eaque, numquam ullam modi, minima laborum!</p>'
        // ]);

        Post::factory(20)->create();
    }
}
