<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use LearnerApi\Module;
use LearnerApi\Diapo;
use Illuminate\Support\Facades\DB;
use LearnerApi\User;
use Illuminate\Support\Facades\Hash;

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
		$this->call('UserTableSeeder');
		$this->command->info('Database seeded.');
	}
}

class ModuleTableSeeder extends Seeder {

	public function run()
	{
		DB::table('modules')->delete();

		$module = Module::create(['title'       => 'JE SUIS UN TITRE DE TEST',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
						'img'         => 'https://lh5.googleusercontent.com/-dAe2v_8abKQ/VNnxJIEqFRI/AAAAAAAACcE/7KxoTvM-37w/s1338-no/2015-02-10.jpg'
		]);

		Module::create(['title'       => 'JE SUIS UN AUTRE TITRE DE TEST',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
						'img'         => 'https://lh5.googleusercontent.com/-dAe2v_8abKQ/VNnxJIEqFRI/AAAAAAAACcE/7KxoTvM-37w/s1338-no/2015-02-10.jpg'
		]);

		Module::create(['title'       => 'JAI PAS IMAGE.',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
		]);

		Module::create(['title'       => 'VIE EN ROSE',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
		]);

		Module::create(['title'       => 'Ma grosse bite en platre',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
						'img'         => 'https://lh5.googleusercontent.com/-dAe2v_8abKQ/VNnxJIEqFRI/AAAAAAAACcE/7KxoTvM-37w/s1338-no/2015-02-10.jpg'
		]);

		Module::create(['title'       => 'Baguette',
								  'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
								  'img'         => 'https://lh5.googleusercontent.com/-dAe2v_8abKQ/VNnxJIEqFRI/AAAAAAAACcE/7KxoTvM-37w/s1338-no/2015-02-10.jpg'
		]);

		$diapo1 = Diapo::create(['content'   => '[{"type":"2","data":"Diapo 1","img": "https://lh5.googleusercontent.com/-dAe2v_8abKQ/VNnxJIEqFRI/AAAAAAAACcE/7KxoTvM-37w/s1338-no/2015-02-10.jpg"}]',
								 'module_id' => $module->id,
		]);
		$diapo2 = Diapo::create(['content'   => '[{"type":"1","data":"Diapo 2","img": "https://lh5.googleusercontent.com/-dAe2v_8abKQ/VNnxJIEqFRI/AAAAAAAACcE/7KxoTvM-37w/s1338-no/2015-02-10.jpg"}]',
								 'module_id' => $module->id,
								 'prev_id'   => $diapo1->id,
		]);
		$diapo1->next_id = $diapo2->id;
		$diapo1->save();

		$diapo3 = Diapo::create(['content'   => '[{"type":"2","data":"Diapo 3","img": "https://lh5.googleusercontent.com/-dAe2v_8abKQ/VNnxJIEqFRI/AAAAAAAACcE/7KxoTvM-37w/s1338-no/2015-02-10.jpg"}]',
								 'module_id' => $module->id,
								 'prev_id'   => $diapo2->id,
		]);
		$diapo2->next_id = $diapo3->id;
		$diapo2->save();

	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create(['username' => 'john', 'password' => Hash::make('test')]);
	}
}