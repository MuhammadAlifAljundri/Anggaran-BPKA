<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\News;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();





    //     User::create([
    //         "name" => "Mohd. Alif Al jundri",
    //         "email" => "m.alifaljundri@gmail.com",
    //         "password" => bcrypt('123456')
    //     ]);

    //     User::create([
    //         "name" => "Ariza Saputri",
    //         "email" => "arizasaputri@gmail.com",
    //         "password" => bcrypt('123456')
    //     ]);

    //     Category::create([
    //         "name" => "Umum",
    //         'slug' => 'umum'
    //     ]);

    //     Category::create([
    //         "name" => "Khusus",
    //         'slug' => 'khusus'
    //     ]);

    //     Category::create([
    //         "name" => "Pemerintah Aceh",
    //         'slug' => 'pemerintah-aceh'
    //     ]);

    //     News::create([
    //        'title' => 'Judul Berita Pertama',
    //        'category_id' => 1,
    //        'user_id' => 1,
    //        'slug' => 'judul-berita-pertama',
    //        'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro?',
    //        'body' => '<p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p><p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p>'

    //     ]);

    //     News::create([
    //         'title' => 'Judul Berita Kedua',
    //         'category_id' => 1,
    //         'user_id' => 1,
    //         'slug' => 'judul-berita-Kedua',
    //         'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro?',
    //         'body' => '<p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p><p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p>'
 
    //      ]);


    //      News::create([
    //         'title' => 'Judul Berita Ketiga',
    //         'category_id' => 2,
    //         'user_id' => 1,
    //         'slug' => 'judul-berita-ketiga',
    //         'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro?',
    //         'body' => '<p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p><p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p>'
 
    //      ]);

    //      News::create([
    //         'title' => 'Judul Berita Keempat',
    //         'category_id' => 3,
    //         'user_id' => 1,
    //         'slug' => 'judul-berita-keempat',
    //         'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro?',
    //         'body' => '<p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p><p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p>'
 
    //      ]);

    //      News::create([
    //         'title' => 'Judul Berita Kelima',
    //         'category_id' => 2,
    //         'user_id' => 2,
    //         'slug' => 'judul-berita-kelima',
    //         'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro?',
    //         'body' => '<p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p><p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p>'
 
    //      ]);

    //      News::create([
    //         'title' => 'Judul Berita Keenam',
    //         'category_id' => 3,
    //         'user_id' => 2,
    //         'slug' => 'judul-berita-keenam',
    //         'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro?',
    //         'body' => '<p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p><p>ipsum dolor sit amet consectetur adipisicing elit. Et ex itaque tenetur quo omnis. Eaque in laboriosam dolore blanditiis perspiciatis porro? Aperiam quam non veritatis ipsum atque! Temporibus consectetur id expedita aliquid saepe autem odio. Voluptas veritatis ipsam, expedita doloribus cum accusamus officiis cumque praesentium neque error eos nulla provident dolores illum tempore, iusto, quibusdam aperiam atque enim! Nihil tempore doloribus rerum sunt dicta ipsum ipsa, accusantium exercitationem vitae. </p> <p> Provident vel suscipit maxime, nulla obcaecati consequuntur facilis accusantium ratione porro, atque nihil pariatur repellat quae nesciunt aut magni libero dolorum a? Recusandae, rem velit nobis quisquam mollitia, ex dolor nulla temporibus facere, modi consectetur natus odit. Deserunt molestiae alias dolore ad recusandae quis repudiandae veniam? Animi quia voluptates harum dolore asperiores quis tempore velit dolorem. Doloribus ipsam accusantium eos quod soluta fugiat voluptatem! Dolor voluptatem animi, </p> <p> consectetur provident error corrupti, labore doloribus perspiciatis, molestiae quasi perferendis eaque. Ipsum illum cupiditate adipisci tempora non? Et, dolor asperiores. Sunt excepturi repellendus laborum eius impedit provident reprehenderit, cupiditate adipisci quas. Deserunt temporibus asperiores sapiente ea, nesciunt vel aperiam amet quasi magni enim harum voluptas nam molestias mollitia modi</p>  <p> placeat qui alias dolore vitae quas? Veniam accusantium consequuntur porro quod commodi distinctio repellat qui iste eveniet incidunt, corporis architecto atque ab error, esse perspiciatis soluta quibusdam, tenetur eligendi odit. Tempora magnam nulla corrupti amet aspernatur. Modi qui hic repudiandae nam quidem dolorem ratione reprehenderit delectus amet alias quo accusamus quam maxime atque incidunt, aliquid expedita voluptatibus dolore vel! Voluptates amet expedita placeat beatae quis?</p>'
 
    //      ]);



        
    User::factory(6)->create();
    News::factory(40)->create();

         Category::create([
            "name" => "Umum",
            'slug' => 'umum'
        ]);

        Category::create([
            "name" => "Khusus",
            'slug' => 'khusus'
        ]);

        Category::create([
            "name" => "Pemerintah Aceh",
            'slug' => 'pemerintah-aceh'
        ]);



    }
}
