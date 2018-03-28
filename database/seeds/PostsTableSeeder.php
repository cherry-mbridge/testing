<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
			[
		        'name' => 'Product One',
		        'created_at' => new DateTime,
                'updated_at' => new DateTime
		    ],
		    [
		        'name' => 'Product Two',
		        'created_at' => new DateTime,
                'updated_at' => new DateTime
		    ]
		]);
    }
}
