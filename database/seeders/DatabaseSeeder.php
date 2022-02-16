<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint labore, aliquam qui voluptates deserunt delectus neque doloremque excepturi culpa accusamus?',
        //     'body' =>
        //     'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla et, fuga possimus tempora neque fugiat vitae facilis sunt nemo soluta qui maiores voluptatum. Hic molestias molestiae mollitia similique rerum id sed et totam. Ut velit ex provident nam ipsam vitae sed, quam iste laborum veritatis libero sapiente exercitationem earum sint quisquam recusandae eos nihil illo sequi eum! Numquam neque odio cumque necessitatibus enim sint inventore mollitia dignissimos, nostrum omnis fugiat quos dicta assumenda, dolore aliquid voluptate asperiores odit corporis quam ut autem nulla debitis provident? Autem reprehenderit saepe non minus explicabo necessitatibus laboriosam doloribus facilis. Dicta numquam dolorum quibusdam eligendi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint labore, aliquam qui voluptates deserunt delectus neque doloremque excepturi culpa accusamus?',
        //     'body' =>
        //     'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla et, fuga possimus tempora neque fugiat vitae facilis sunt nemo soluta qui maiores voluptatum. Hic molestias molestiae mollitia similique rerum id sed et totam. Ut velit ex provident nam ipsam vitae sed, quam iste laborum veritatis libero sapiente exercitationem earum sint quisquam recusandae eos nihil illo sequi eum! Numquam neque odio cumque necessitatibus enim sint inventore mollitia dignissimos, nostrum omnis fugiat quos dicta assumenda, dolore aliquid voluptate asperiores odit corporis quam ut autem nulla debitis provident? Autem reprehenderit saepe non minus explicabo necessitatibus laboriosam doloribus facilis. Dicta numquam dolorum quibusdam eligendi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint labore, aliquam qui voluptates deserunt delectus neque doloremque excepturi culpa accusamus?',
        //     'body' =>
        //     'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla et, fuga possimus tempora neque fugiat vitae facilis sunt nemo soluta qui maiores voluptatum. Hic molestias molestiae mollitia similique rerum id sed et totam. Ut velit ex provident nam ipsam vitae sed, quam iste laborum veritatis libero sapiente exercitationem earum sint quisquam recusandae eos nihil illo sequi eum! Numquam neque odio cumque necessitatibus enim sint inventore mollitia dignissimos, nostrum omnis fugiat quos dicta assumenda, dolore aliquid voluptate asperiores odit corporis quam ut autem nulla debitis provident? Autem reprehenderit saepe non minus explicabo necessitatibus laboriosam doloribus facilis. Dicta numquam dolorum quibusdam eligendi.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
