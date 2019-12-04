<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Query Builder
        DB::table('authors')->insert([
            'name' => 'Olaf',
            'date_of_birth' => 'Sometimes',
            'gender' => 'male'
        ]);

        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'title' => 'Random book ' . $i,
                'author_id' => 1,
                'price' => 2.5
            ]);
        }
        for ($i = 0; $i < 10; $i++) {
            DB::table('comments')->insert([
                'message' => 'message ' . $i,
                'book_id' => $i,
                'username' => 'user '.$i
            ]);
        }
    }
}
