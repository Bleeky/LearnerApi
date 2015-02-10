<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use LearnerApi\Module;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('ModuleTableSeeder');
		$this->command->info('Database seeded.');
	}
}

class ModuleTableSeeder extends Seeder {

	public function run()
	{
		DB::table('modules')->delete();

		Module::create(['title'       => 'JE SUIS UN TITRE DE TEST',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
						'img'         => 'https://lh5.googleusercontent.com/-dAe2v_8abKQ/VNnxJIEqFRI/AAAAAAAACcE/7KxoTvM-37w/s1338-no/2015-02-10.jpg'
		]);

		Module::create(['title'       => 'JE SUIS UN AUTRE TITRE DE TEST',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
						'img'         => 'https://lh5.googleusercontent.com/-dAe2v_8abKQ/VNnxJIEqFRI/AAAAAAAACcE/7KxoTvM-37w/s1338-no/2015-02-10.jpg'
		]);

		Module::create(['title'       => 'Ma grosse bite en platre',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
						'img'         => 'https://lh5.googleusercontent.com/-dAe2v_8abKQ/VNnxJIEqFRI/AAAAAAAACcE/7KxoTvM-37w/s1338-no/2015-02-10.jpg'
		]);

		Module::create(['title'       => 'Baguette',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
						'img'         => 'https://lh5.googleusercontent.com/-dAe2v_8abKQ/VNnxJIEqFRI/AAAAAAAACcE/7KxoTvM-37w/s1338-no/2015-02-10.jpg'
		]);
	}

}