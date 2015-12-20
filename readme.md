# Laravel 4 Intro & PHPStorm :smiley:
I Will start developing Web Applications by using Laravel 4 and then I'll go for 5.x. 
My IDE will be PHPStorm and the Web App will be really simple just to know the basics on how the framework works.


## Console
Creating the project.
1. [Ensure Composer is initialized](https://getcomposer.org/)
2. ./composer self-update
3. ./composer create-project laravel/laravel Laravel-4-Intro --prefer-dist **4.2**


## PHPStorm
See PHPStorm [site](https://www.jetbrains.com/phpstorm/) :muscle:.

### Other Settings > Laravel Plugin 
Activate plugin for Laravel
1. [Install and enable the Laravel Plugin](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-4.InstallandenabletheLaravelPlugin)
2. Path to views folder: **app/views**

### Languages & Frameworks > PHP
Set the right version of PHP
1. PHP Languaje level: 5.6
2. Interpreter: 
  2.1 If not exist, have to create:
    2.1.1 PHP 5.6
    2.1.2 /Applications/AMPPS/php/bin/php *(My system path to php 5.6)*
	

### Languages & Frameworks > PHP > Composer
1. [Ensure Composer is initialized](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-1.EnsureComposerisinitialized)
  * Path to composer.phar: /usr/local/bin/composer
  * Path to composer.json: {PROJECT}/composer.json

2. [Install the Laravel IDE Helper](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-2.InstalltheLaravelIDEHelper)
3. [Generate the PHPDoc Helper File using Artisan](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-3.GeneratethePHPDocHelperFileusingArtisan)


### Command Line Tool Support for Artisan and Composer
1. [Add command line support](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-CommandLineToolSupportforArtisanandComposer)

### Debugging Laravel Applications with PhpStorm
1. [Basic Debug](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-DebuggingLaravelApplicationswithPhpStorm)

### Laravel Unit Testing with PhpStorm
1. [PHPUnit Tests](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-LaravelUnitTestingwithPhpStorm)

### Database Support in PhpStorm
1. [Data Sources & Drivers](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-DatabaseSupportinPhpStorm)


