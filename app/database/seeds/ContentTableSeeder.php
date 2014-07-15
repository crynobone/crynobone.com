<?php

use Orchestra\Story\Model\Content;

class ContentTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$contents = $this->getData();

		foreach ($contents as $content) {
			Content::insert($content);
		}
	}

	protected function getData()
	{
		return array(
array('id' => '1','user_id' => '1','slug' => '_page_/about','title' => 'About','content' => 'Mior Muhammad Zaki or better known on the Internet as crynobone is a PHP, MySQL & JavaScript Developer and the founder of Orchestra Platform, OneAuth and Javie Library. In the past, Zaki leads the development of a web application founded by [IProperty Group](http://iproperty-group.com) in Malaysia. Over the years of his profound experiences, Zaki had been involved in various projects for businesses, companies and government agencies including LHDNM, ITNM and UTM.','format' => 'markdown','type' => 'page','status' => 'publish','created_at' => '2013-08-13 21:56:58','updated_at' => '2013-08-14 04:25:20','published_at' => '2013-08-13 21:56:58','deleted_at' => NULL),
array('id' => '2','user_id' => '1','slug' => '_post_/hello-world','title' => 'Hello World','content' => '	{{ $hello_world }}

Okay, I was never been good with blog introduction nor have a good writing skill so if you\'re bored feel free to close this, now. I haven\'t really been blogging actively for awhile except for random pictures and quotes at [\Debug::dump($me);](http://fml.crynobone.com), so why this?

I been focusing a lot on Orchestra Platform development but I haven\'t really been testing it on a real application, so yes this website is powered by [Orchestra Platform 2](http://orchestraplatform.com) with Orchestra Story CMS Extension.','format' => 'markdown','type' => 'post','status' => 'publish','created_at' => '2013-08-14 01:20:06','updated_at' => '2013-08-14 02:54:22','published_at' => '2013-08-14 02:54:22','deleted_at' => NULL),
array('id' => '3','user_id' => '1','slug' => '_post_/laravel-4-in-shared-hosting','title' => 'Laravel 4 in Shared Hosting','content' => 'You might not know this but [crynobone.com](http://crynobone.com) is running on a DirectAdmin based shared hosting, with no SSH access. If you ask anyone in the Laravel community most would probably suggest that you should upgrade to VPS or cloud based hosting but I always wanted to keep [Orchestra Platform](http://orchestraplatform.com) available everywhere.

So how did I make this happen? With DirectAdmin (or most Shared Hosting) it just a matter of relocating the `public` folder.

	$ mv public/ public_html

Next you have to update `bootstrap/paths.php` to the the new path:

	\'public\' => __DIR__.\'/../public_html\',

Now you can simply upload it as you would before.

	/home/account/domains/yourwebsite.com/
	- app
	- bootstrap
	- public_html
	-- index.php
	- vendor
	- artisan
	- server.php

Any question?','format' => 'markdown','type' => 'post','status' => 'publish','created_at' => '2013-08-14 03:58:40','updated_at' => '2013-08-14 03:58:40','published_at' => '2013-08-14 03:58:40','deleted_at' => NULL),
array('id' => '4','user_id' => '1','slug' => '_post_/rest-api-response-with-orchestra-facile','title' => 'Rest API Response with Orchestra\Facile','content' => 'With Laravel 4, you can create easily create Rest API response using the following code.

	<?php

	Route::get(\'users.json\', function ()
	{
		return User::all();
	});

	Route::get(\'users\', function()
	{
		$users = User::all();
		return View::make(\'users\', compact(\'users\'));
	});

	/* End of app/routes.php */

That look simple, but what if Laravel can automatically detect the request `Accept` header and return the response *magically* for you? Here come [Orchestra Facile Component](http://orchestraplatform.com/docs/2.0/components/facile).

	<?php

	Route::get(\'users\', function ()
	{
		$users = User::all();
		return Facile::view(\'users\')->with(compact(\'users\'))->render();
	});

	/* End of app/routes.php */

Want to see it in real action?

	jQuery.getJSON(\'http://crynobone.com/posts/4/rest-api-response-with-orchestra-facile\', function (data) {
		var page = data.page;

		console.log(page.title);
	});

It know that if you hit the URL from a browser, return the `View`, and if you set `Accept: application/json` a json response is returned.','format' => 'markdown','type' => 'post','status' => 'publish','created_at' => '2013-08-14 05:18:35','updated_at' => '2013-08-14 18:52:45','published_at' => '2013-08-14 05:18:42','deleted_at' => NULL),
array('id' => '5','user_id' => '1','slug' => '_post_/alternative-environment-detection-for-laravel-4','title' => 'Alternative Environment Detection for Laravel 4','content' => 'While normally you could just use the HTTP hostname and machine name for environment detection but that isn\'t always great. For example what if you\'re sharing test environment and staging environment within the same instance? Sure you could set a different HTTP hostname for both but it still pointing to the same machine name.

Laravel 4 can be easily tweak and one method which I prefer is to add a single file that would be ignored via `.gitignore` such as `bootstrap/environment.php`, for example:

	<?php

	return \'local\';

	/* End of bootstrap/environment.php */

Add the file to `.gitignore`:

	/bootstrap/compiled.php
	/bootstrap/environment.php

Now under `bootstrap/start.php`:

	$env = $app->detectEnvironment(function ()
	{
		return require __DIR__.\'/environment.php\';
	});

And that it!','format' => 'markdown','type' => 'post','status' => 'publish','created_at' => '2013-08-20 16:59:13','updated_at' => '2013-08-20 17:22:14','published_at' => '2013-08-20 17:00:47','deleted_at' => NULL),
  array('id' => '6','user_id' => '1','slug' => '_post_/down-for-everyone-but-you','title' => 'Down for Everyone, but You','content' => 'I sure by now you might have been familiar with `php artisan down` but do you know that you can customize the configuration per requirement, for example:

* Say that you want to make it down, except from everyone using certain IP address
* Allow certain user to have access to the application, based on group for example.

All these feature is available directly from Laravel 4, all you need to do is edit `app/start/global.php`

	App::down(function()
	{
		if (Auth::is([\'Administrator\'])) return null;

		return Response::make("Be right back!", 503);
	});

> Do note `Auth::is()` is from [orchestra/auth](https://github.com/orchestral/auth) but what important is that only administrator can access the web application when it set under maintainance mode.','format' => 'markdown','type' => 'post','status' => 'publish','created_at' => '2013-09-23 12:06:57','updated_at' => '2013-10-02 03:44:55','published_at' => '2013-09-25 14:31:35','deleted_at' => NULL),
array('id' => '7','user_id' => '1','slug' => '_post_/crunching-laravel-4-for-production-server','title' => 'Crunching Laravel 4 for Production Server','content' => 'While this might be just a micro optimization but I would like to have Laravel 4 run with minimal running process. One easiest (or rather quickest) way is to shrink loaded service providers.

> Before we start I would like to note that most illuminate components are set as `protected $defer = true;` which is already good but still there are times that we can run the code without them. Also do note that `php artisan optimize` already shrunk most of Laravel and Symfony code into a single file in **bootstrap/compiled.php**.

## Turning off Workbench

If you don\'t know what a workbench, you\'re not using it and there no reason for it to be enabled on your live server, to disable it.

Remove `\'Illuminate\Workbench\WorkbenchServiceProvider\'` from **app/config/app.php** ("provide" section) and next open up **bootstrap/autoload.php** to remove the following line:

	/*
	|--------------------------------------------------------------------------
	| Register The Workbench Loaders
	|--------------------------------------------------------------------------
	|
	| The Laravel workbench provides a convenient place to develop packages
	| when working locally. However we will need to load in the Composer
	| auto-load files for the packages so that these can be used here.
	|
	*/

	if (is_dir($workbench = __DIR__.\'/../workbench\'))
	{
		Illuminate\Workbench\Starter::start($workbench);
	}

If you\'re not clear, see this commit <https://github.com/crynobone/crynobone.com/commit/264f2e70c84fd463d359ee32f9140048a09b6c34>.

## Artisan commands service providers

Artisan service providers are great, when running on command line. So why not move registering all related service providers to **app/global/artisan.php**.

	<?php

	$provides = array(
		\'Illuminate\Foundation\Providers\CommandCreatorServiceProvider\',
		\'Illuminate\Session\CommandsServiceProvider\',
		\'Illuminate\Foundation\Providers\ComposerServiceProvider\',
		\'Illuminate\Foundation\Providers\KeyGeneratorServiceProvider\',
		\'Illuminate\Foundation\Providers\MaintenanceServiceProvider\',
		\'Illuminate\Foundation\Providers\OptimizeServiceProvider\',
		\'Illuminate\Foundation\Providers\RouteListServiceProvider\',
		\'Illuminate\Foundation\Providers\ServerServiceProvider\',
		\'Illuminate\Foundation\Providers\TinkerServiceProvider\',
	);

	foreach ($provides as $provide)
	{
		App::register($provide);
	}

Once you done with that, remove the provides from **app/config/app.php** as demonstrated in <https://github.com/crynobone/crynobone.com/commit/570e9dfe5919c1b5862a3d751fb8ec627cb3de26>.

## What else?

At this point, it totally up to you. A simple app without a mail usage doesn\'t require `Illuminate\Mail\MailServiceProvider`, same could be for `Illuminate\Queue\QueueServiceProvider`. Give it a try and see for yourselves.','format' => 'markdown','type' => 'post','status' => 'publish','created_at' => '2013-10-10 14:45:23','updated_at' => '2013-10-10 15:01:23','published_at' => '2013-10-10 14:58:33','deleted_at' => NULL),
  array('id' => '8','user_id' => '1','slug' => '_post_/using-illuminate-config-outside-of-laravel-4','title' => 'Using Illuminate Config outside of Laravel 4','content' => 'I\'m sure that there are times when you just need to write some small project that would just be an overkill to have a full Laravel 4 installation. Today let\'s look at how we could use Laravel 4 Config component (or `illuminate/config`) on a simple one page app.

To get started just create **composer.json** on your project directory:

	{
		"require": {
			"illuminate/config": "4.0.*"
		}
	}

Run `php composer.phar install` and wait till the installation is finish. Now create **index.php** and write the following code:

	<?php

	include "vendor/autoload.php";

	// Configurations
	$configPath = __DIR__.\'/config\';
	$environment = \'production\';

	$file = new Illuminate\Filesystem\Filesystem;
	$loader = new Illuminate\Config\FileLoader($file, $configPath);
	$config = new Illuminate\Config\Repository($loader, $environment);

	$config->get(\'app.name\'); // this would look for /config/app.php with an array key "name".

Wasn\'t that hard right?','format' => 'markdown','type' => 'post','status' => 'publish','created_at' => '2013-10-10 15:16:55','updated_at' => '2013-10-10 15:18:16','published_at' => '2013-10-10 15:18:16','deleted_at' => NULL)
);
	}

}
