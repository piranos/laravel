<?php

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
    	Eloquent::unguard();
    	
    	$this->call('PageAppSeeder');
    	$this->command->info('Page app seeds finished.'); // show information in the command line after everything is run
    	   }
 }
class PageAppSeeder extends Seeder {

	public function run() {

		// clear our database ------------------------------------------
		DB::table('Pages')->delete();
		$pageIndex = App\Models\Page::create(array(
				'title'         => 'index',
				'content'         => 'index text'
		));
		$pageContact = App\Models\Page::create(array(
				'title'         => 'contact',
				'content'         => 'contact content'
		));


		$this->command->info('The pages are created!');



	}
}
