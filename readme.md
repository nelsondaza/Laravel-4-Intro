# Laravel 4 Intro & PHPStorm :smiley:
I Will start developing Web Applications by using **Laravel 4** (Actual: [![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)) and then I'll go for **5.x**. 
My IDE will be **PHPStorm 10** and the Web App will be really simple just to know the basics on how the framework works.


## Console
Creating the project.

1. [Ensure Composer is initialized](https://getcomposer.org/)
```shell
> ./composer self-update
> ./composer create-project laravel/laravel Laravel-4-Intro --prefer-dist 4.2
```


## PHPStorm
See [PHPStorm site :muscle:](https://www.jetbrains.com/phpstorm/). 
Open the project using PHPStorm, then...

### Other Settings > Laravel Plugin 
Activate plugin for Laravel

1. [Install and enable the Laravel Plugin](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-4.InstallandenabletheLaravelPlugin)
2. Path to views folder: **app/views**

### Languages & Frameworks > PHP
Set the right version of PHP

1. PHP Languaje level: 5.6
2. Interpreter: 
  * If not exist, have to create it:
    * PHP 5.6 _(I'll use laravel 5.x later)_
    * /Applications/AMPPS/php/bin/php _(My system path to php 5.6)_


### Languages & Frameworks > PHP > Composer

1. [Ensure Composer is initialized](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-1.EnsureComposerisinitialized)

  * Path to PHP interpreter: **/Applications/AMPPS/php/bin/php**  _(My system path to php 5.6)_
  * Path to composer.phar: **/usr/local/bin/composer**  _(My system path)_
  * Path to composer.json: **_{PROJECT}_/composer.json**
  
2. [Install the Laravel IDE Helper](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-2.InstalltheLaravelIDEHelper)

  * _Installed version **v1.11.6** because of the Laravel **4.2**_
  * It shows 43 commands added...
  * In the app/config/app.php file, add 'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider' under the providers element.


### Command Line Tool Support for Artisan and Composer

1. [Add command line support](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-CommandLineToolSupportforArtisanandComposer)
2. [Generate the PHPDoc Helper File using Artisan](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-3.GeneratethePHPDocHelperFileusingArtisan)

  * Tools | Run Command... menu (Ctrl+Shift+X or CMD+Shift+X on Mac OS X)
  ```shell 
  > artisan clear-compiled
  > artisan ide-helper:generate
  ```
  * It shows some errors trying to connect to DB but it is ok.


### Start the server application using artisan serve
PHPStorm has its own terminal that opens directly in the project folder.
    
```shell
> php artisan serve
**Laravel development server started on http://localhost:8000**
```

______________________________________________________________

### _This ones wont be used but always good to know :smirk:_

#### Debugging Laravel Applications with PhpStorm

1. [Basic Debug](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-DebuggingLaravelApplicationswithPhpStorm)

#### Laravel Unit Testing with PhpStorm

1. [PHPUnit Tests](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-LaravelUnitTestingwithPhpStorm)

#### Database Support in PhpStorm

1. [Data Sources & Drivers](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm#LaravelDevelopmentusingPhpStorm-DatabaseSupportinPhpStorm)
