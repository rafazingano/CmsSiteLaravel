<?php
namespace ConfrariaWeb\CwSiteLaravel\Database\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\User::class, 3)->create();
        factory(\ConfrariaWeb\CwSiteLaravel\Models\PostType::class, 3)->create();
        factory(\ConfrariaWeb\CwSiteLaravel\Models\PostCategory::class, 9)->create();
        factory(\ConfrariaWeb\CwSiteLaravel\Models\Post::class, 30)->create();
    }
}
