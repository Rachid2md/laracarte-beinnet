<?php
use App\Mail\ContactMessageCreated;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
	'as'=>'root_path',
	'uses'=>'PagesController@home'
]);

//Route::name('root_path')->get('/', 'PagesController@home'); Equivaut à ce qui est de la ligne 14 à la ligne 17 mais très simpliste donc moins joli

Route::get('/test-email', function(){
	return new ContactMessageCreated('Moustapha Diagne', 'rachid2md@gmail.com', 'Merci pour BeInNet' );
});

Route::get('/about', [
	'as'=>'about_path',
	'uses'=>'PagesController@about'
]);

Route::get('/contact', [
	'as'=>'contact_path',
	'uses'=>'ContactController@create'
]);

Route::post('/contact', [
	'as'=>'contact_path',
	'uses'=>'ContactController@store'
]);

Route::get('/test-database', function(){
/*
	***Insertion dans la table info_contact***
	$phone = '123774129203';
	$address = '237 Cité Soprim 168A';
	$email = '734rachid2md@gmail.com';
	$contenu = '347 Je fais un test d\'insertion avec Laravel';
	DB::insert('INSERT INTO info_contact(address, phone, email, message) VALUES(?, ?, ?, ?)', [$address, $phone, $email, $contenu]);

	//Fluent Query Builder
	DB::table('info_contact')->insert([
		[
			'address'=>$address,
			'phone'=>$phone,
			'email'=>$email,
			'message'=>$contenu
		]
		//la suite a ommettre pour une seule insertion
		,
		[
			'address'=>$address,
			'phone'=>$phone,
			'email'=>$email,
			'message'=>$contenu
		]
	]);
	===================================================================

	***Selection dans la table info_contact***
	//dump(DB::select('SELECT * FROM info_contact ORDER BY ID DESC'));

	$select = DB::select('SELECT * FROM info_contact');
	dd($select);
	
	//Fluent Query Builder
	dump(DB::table('info_contact')->get();
	dump(DB::table('info_contact')->where('ID', 3)->get());
	dump(DB::table('info_contact')->where('ID', '>=', 3)->get(['ID', 'email']));
	//Where Dynamique
	dump(DB::table('info_contact')->whereAddressOrPhone('7 Cité Soprim 168A','774129203')->get());
	//Decompte
	return DB::table('info_contact')->count();
	===================================================================

	***Update des éléments de la table info_contact***
	$phone = '776623520';
	$address = '237 Cité Soprim 168A';
	$email = 'rachid2md@gmail.com';
	$contenu = '347 Je fais un test d\'insertion avec Laravel';
	dump(DB::table('info_contact')->where('ID', '<=', 3)->update([
		'phone'=>$phone,
		'email'=>$email
	]));
	===================================================================
		***Delete des éléments de la table info_contact***
	DB::table('info_contact')->where('ID', '<=', 3)->delete();
*/

	dump(DB::table('info_contact')->get());
});