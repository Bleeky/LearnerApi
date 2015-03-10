<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use LearnerApi\Module;
use LearnerApi\Diapo;
use Illuminate\Support\Facades\DB;
use LearnerApi\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {

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

		$m1 = Module::create(['title'       => 'Je suis un titre de module',
							  'description' => 'Ce module comprend des diapos ! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
							  'img'         => 'http://www.hickerphoto.com/images/1024/endangered-animal-list_5406.jpg'
		]);

		Module::create(['title'       => 'Un autre titre.',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
						'img'         => 'http://www.deshow.net/d/file/animal/2009-05/animal-pictures-pet-photography-557-4.jpg'
		]);

		Module::create(['title'       => 'Un module sans image',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
		]);

		Module::create(['title'       => 'Un autre module, je sais pas quoi.',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
						'img'         => 'https://cdn.urbantimes.co/wp-content/uploads/2014/02/p.jpg'
		]);

		Module::create(['title'       => 'Le dernier en date',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper erat egestas at. Integer vel lobortis velit, eget eleifend ex. Suspendisse vel mi fringilla tortor dictum pharetra. Curabitur lacinia vel libero a lacinia. Aliquam rhoncus tellus vitae est placerat, in commodo magna porta',
						'img'         => 'http://desktopbackgroundshq.com/backgrounds/animal-bird-animal-backgrounds-animal-bird-25907.jpg'
		]);

		$d1 = Diapo::create(['content'   => '[{"type":"2","title" : null,"img": "https://pbs.twimg.com/profile_images/378800000831249044/effb57c08b2f5783c686b589d84d2b92.jpeg", "data":""}]',
							 'module_id' => $m1->id,
		]);

		$d2 = Diapo::create(['content'   => '[{"type":"1","title" : null,"data":"Ceci est un petit test de texte qui doit etre affiche dans une diapo de type 1 qui comprend seulement du texte et un titre optionnel.", "img":""}]',
							 'module_id' => $m1->id,
							 'prev_id'   => $d1->id,
		]);
		$d1->next_id = $d2->id;
		$d1->save();

		$d3 = Diapo::create(['content'   => '[{"type":"3","title" : "Ceci est un titre optionel !","data":"Diapo de type 3, qui comprend une image et un petit texte, ici present.","img": "http://www.photosdanimaux.org/wp-content/uploads/2011/02/bebe-animaux-leblogdusniper-8.jpg"}]',
							 'module_id' => $m1->id,
							 'prev_id'   => $d2->id,
		]);
		$d2->next_id = $d3->id;
		$d2->save();

		$d4 = Diapo::create(['content'   => '[{"type": "6","img": "https://pbs.twimg.com/profile_images/378800000831249044/effb57c08b2f5783c686b589d84d2b92.jpeg", "question":"Combien de doigts avez-vous ?","responses" : [{"response": "2", "comment" : null,"valid": "false"}, {"response": "3","comment" : null, "valid": "false"}, {"response": "4","comment" : null, "valid": "false"}, {"response": "5","comment" : null, "valid": "true"}]}]',
							 'module_id' => $m1->id,
							 'prev_id'   => $d3->id,
		]);
		$d3->next_id = $d4->id;
		$d3->save();

		$d5 = Diapo::create(['content'   => '[{"type":"5","title" : null,"data":"L\'image doit etre a droite ! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper.","img": "http://images.fanpop.com/images/image_uploads/animals--the-animal-kingdom-248730_1024_768.jpg"}]',
							 'module_id' => $m1->id,
							 'prev_id'   => $d4->id,
		]);
		$d4->next_id = $d5->id;
		$d4->save();

		$d6 = Diapo::create(['content'   => '[{"type": "8", "question":"Combien de jours dans la semaine ?","range_begin" : "1", "range_end": "7", "range_step": "1", "response" : "7"}]',
							 'module_id' => $m1->id,
							 'prev_id'   => $d5->id,
		]);
		$d5->next_id = $d6->id;
		$d5->save();

		$d7 = Diapo::create(['content'   => '[{"type":"4","title" : null,"data":"L\'image doit etre a gauche ! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eleifend gravida arcu, et semper.","img": "http://i.telegraph.co.uk/multimedia/archive/02296/animal4c_2296997i.jpg"}]',
							 'module_id' => $m1->id,
							 'prev_id'   => $d6->id,
		]);
		$d6->next_id = $d7->id;
		$d6->save();

		$d8 = Diapo::create(['content'   => '[{"type": "7", "img": "https://pbs.twimg.com/profile_images/378800000831249044/effb57c08b2f5783c686b589d84d2b92.jpeg","question":"Qui est francais ?","responses" : [{"response": "Barack Obama", "comment" : null,"valid": "false"}, {"response": "Francois Hollande", "comment" : null,"valid": "true"}, {"response": "Sadam Hussein", "comment" : null,"valid": "false"}, {"response": "Jean-Claude Duss", "comment" : null,"valid": "true"}]}]',
							 'module_id' => $m1->id,
							 'prev_id'   => $d7->id,
		]);
		$d7->next_id = $d8->id;
		$d7->save();

		$d9 = Diapo::create(['content'   => '[{"type":"1","title" : null,"data":"Ceci est un petit test de texte qui doit etre affiche dans une diapo de type 1 qui comprend seulement du texte et un titre optionnel.", "img":""}]',
							 'module_id' => $m1->id,
							 'prev_id'   => $d8->id,
		]);
		$d8->next_id = $d9->id;
		$d8->save();

	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create(['username' => 'john', 'password' => Hash::make('test')]);
	}
}