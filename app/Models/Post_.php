<?php

namespace App\Models;
class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug"  => "judul-post-pertama",
            "author" => "Dutatama Rosewika",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, totam? Sit, non eligendi! Hic at omnis labore ratione et cumque, quis explicabo mollitia quasi illum ullam voluptate provident voluptas modi debitis architecto dicta accusamus sint accusantium dolore soluta distinctio, aliquam itaque in! Illum numquam, deleniti perferendis adipisci blanditiis iste accusamus dolorem odit tenetur natus harum! Praesentium pariatur aliquam, natus laboriosam modi similique. Incidunt non doloribus expedita repellendus quia maiores consequuntur cumque neque eveniet rem labore, error est odit natus placeat."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"   => "judul-post-kedua",
            "author" => "Faradilla Ninda",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non aliquid dolorum at recusandae ducimus autem maiores, ipsa earum iusto reiciendis cum ea possimus, quia architecto praesentium accusamus dicta! Eius expedita sint inventore consectetur eos! Sint repellat aliquam quibusdam quis tenetur voluptatibus a ab error distinctio veniam, perferendis laudantium consequuntur vero incidunt illo eaque labore voluptates tempore exercitationem sed magni recusandae ipsum pariatur. Labore modi quasi mollitia molestias eligendi itaque omnis, sed, amet ab impedit voluptas veniam! Nobis minima, vel dignissimos quaerat facilis, pariatur sit eius deserunt officiis unde officia alias similique delectus veritatis nisi nihil sequi eum itaque eaque provident!"
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug"   => "judul-post-ketiga",
            "author" => "Ninda Hadihardaya",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non aliquid dolorum at recusandae ducimus autem maiores, ipsa earum iusto reiciendis cum ea possimus, quia architecto praesentium accusamus dicta! Eius expedita sint inventore consectetur eos! Sint repellat aliquam quibusdam quis tenetur voluptatibus a ab error distinctio veniam, perferendis laudantium consequuntur vero incidunt illo eaque labore voluptates tempore exercitationem sed magni recusandae ipsum pariatur. Labore modi quasi mollitia molestias eligendi itaque omnis, sed, amet ab impedit voluptas veniam! Nobis minima, vel dignissimos quaerat facilis, pariatur sit eius deserunt officiis unde officia alias similique delectus veritatis nisi nihil sequi eum itaque eaque provident!"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if ($p["slug"] === $slug ){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}


// $post = new Post
// $post->title = 'Judul Pertama'
// $post->author = 'Dutatama Rosewika'
// $post->category_id = 1
// $post->slug = 'judul-pertama'
// $post->excerpt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
// $post->body = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus unde accusamus nam nihil laboriosam fugit harum soluta porro illo, itaque asperiores cumque dolore dolorem eveniet in tempora nobis libero quis veritatis ab quibusdam. Totam quas, nam veritatis suscipit, quis voluptates, explicabo a deleniti harum eveniet accusantium voluptas. Provident iusto id quaerat in ex asperiores fugit omnis accusamus, obcaecati suscipit necessitatibus voluptatem consequatur, ratione iure neque dolorum cumque mollitia sint voluptatum autem fuga dignissimos unde. Aspernatur quasi illum laudantium vero fugiat dolore soluta nostrum magni repellendus, ea a sapiente reiciendis? Animi vero modi voluptatem aliquam. Eos autem vitae dolores obcaecati placeat?'
// $post->save()

// $post = new Post
// $post->title = 'Judul Kedua'
// $post->author = 'Taufiq Hadihardaya'
// $post->category_id = 1
// $post->slug = 'judul-kedua'
// $post->excerpt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
// $post->body = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus unde accusamus nam nihil laboriosam fugit harum soluta porro illo, itaque asperiores cumque dolore dolorem eveniet in tempora nobis libero quis veritatis ab quibusdam. Totam quas, nam veritatis suscipit, quis voluptates, explicabo a deleniti harum eveniet accusantium voluptas. Provident iusto id quaerat in ex asperiores fugit omnis accusamus, obcaecati suscipit necessitatibus voluptatem consequatur, ratione iure neque dolorum cumque mollitia sint voluptatum autem fuga dignissimos unde. Aspernatur quasi illum laudantium vero fugiat dolore soluta nostrum magni repellendus, ea a sapiente reiciendis? Animi vero modi voluptatem aliquam. Eos autem vitae dolores obcaecati placeat?'
// $post->save()
// $post = new Post
// $post->title = 'Judul Post Ketiga'
// $post->author = 'Dutatama Hadihardaya'
// $post->category_id = 2
// $post->slug = 'judul-post-ketiga'
// $post->excerpt = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.'
// $post->body = '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe quidem recusandae culpa, dolorem nostrum facere corrupti libero sed esse natus ut accusantium ad veritatis iure cum impedit quos laborum enim nobis? Distinctio ipsa inventore iusto similique quasi debitis esse repellat iste sunt perferendis maiores illum voluptatem nihil laudantium, fugiat, accusamus neque, cupiditate voluptatum nobis dolores provident aspernatur doloribus omnis.</p>
// <p>Aliquid aperiam, numquam, quasi veritatis ducimus voluptas nihil accusamus architecto amet neque quod dolorem quo fuga, tempora ab voluptate non blanditiis voluptates culpa odio consequuntur ipsam. Incidunt nam amet voluptatem, delectus voluptates exercitationem provident corporis quibusdam, earum blanditiis sapiente laboriosam quo dolorem vitae! Illum voluptates possimus cumque necessitatibus dolor accusamus incidunt perferendis velit quisquam qui odio, autem fugiat quo tempora corporis.</p>'
// $post->save()

// Post::create([
//     'title' => 'Judul Post Keempat',
//     'author' => 'Rosewika Taufiq',
//     'category_id' => 3,
//     'slug' => 'judul-post-keempat',
//     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam,',
//     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam, quibusdam cupiditate odio quae aut, sint aliquid sequi voluptatibus similique nobis accusamus eius porro?</p><p>Consequuntur numquam, assumenda consequatur labore maxime ullam culpa dolor eius accusantium sunt fuga placeat exercitationem ducimus quia nam id sit impedit autem dolorem quisquam at. Nisi, quod tempora rerum natus porro tenetur, totam molestias asperiores animi aperiam sint nesciunt tempore eligendi, quaerat quasi. Praesentium iusto esse laborum sit sed sunt exercitationem iure incidunt labore dolorem aspernatur, voluptas reprehenderit ab atque velit reiciendis eligendi porro illo voluptatibus molestias. </p><p>Tempore tempora corrupti consequuntur sit veritatis maiores repellendus porro iste nihil illo natus minima enim ipsum, veniam totam voluptas dolores earum sapiente placeat eveniet facere assumenda? Ipsa beatae sequi perspiciatis omnis? Delectus, nisi expedita hic eligendi magni magnam est voluptatum inventore eaque, numquam ullam modi, minima laborum!</p>'
// ])
// Post::create([
//     'title' => 'Judul Post Kelima',
//     'author' => 'Rosewika Hadihardaya',
//     'category_id' => 2,
//     'slug' => 'judul-post-kelima',
//     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam,',
//     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt quidem fugiat optio iure magnam dolores accusantium labore enim corporis dicta temporibus ullam, quibusdam cupiditate odio quae aut, sint aliquid sequi voluptatibus similique nobis accusamus eius porro?</p><p>Consequuntur numquam, assumenda consequatur labore maxime ullam culpa dolor eius accusantium sunt fuga placeat exercitationem ducimus quia nam id sit impedit autem dolorem quisquam at. Nisi, quod tempora rerum natus porro tenetur, totam molestias asperiores animi aperiam sint nesciunt tempore eligendi, quaerat quasi. Praesentium iusto esse laborum sit sed sunt exercitationem iure incidunt labore dolorem aspernatur, voluptas reprehenderit ab atque velit reiciendis eligendi porro illo voluptatibus molestias. </p><p>Tempore tempora corrupti consequuntur sit veritatis maiores repellendus porro iste nihil illo natus minima enim ipsum, veniam totam voluptas dolores earum sapiente placeat eveniet facere assumenda? Ipsa beatae sequi perspiciatis omnis? Delectus, nisi expedita hic eligendi magni magnam est voluptatum inventore eaque, numquam ullam modi, minima laborum!</p>'
// ])

// Post::find(3)->update(['title' => 'Judul Post Ketiga Revisi'])

// Post::where('title', 'Judul Post Ketiga Revisi')->update(['excerpt' => 'exceprt post ketiga berubah'])


// $category = new Category
// $category->name = 'Programming'
// $category->slug = 'programming'
// $category->save()

// Category::create([
//     'name' => 'Web Design',
//     'slug' => 'web-design'
// ])

// Category::create([
//     'name' => 'Personal',
//     'slug' => 'personal'
// ])