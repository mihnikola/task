<?php

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
          $this->call('CategoryTableSeeder');
          $this->call('ArticleTableSeeder');

          $this->call('UserTableSeeder');

       }

}
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Category::class, 3)->create();

    }
}
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Article::class, 5)->create();

    }
}
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\User::class, 5)->create();

    }
}
