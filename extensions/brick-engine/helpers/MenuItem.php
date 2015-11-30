<?php
/**
 * https://github.com/KnpLabs/KnpMenu
 * https://github.com/sleeping-owl/admin
 *
 * Генератор меню
 *
 * Создание элемента меню для действия контроллера
 * MenuItem::menu()->url('/')->label('Start Page')->icon('fa-dashboard')->uses('\App\HTTP\Controllers\AdminController@getIndex');
 * MenuItem::menu(\App\User::class)->icon('fa-user');
 *
 * Вложенное меню
 * MenuItem::menu()->label('Subitems')->icon('fa-book')->items(function ()
 *  {
 *      Menu::menu(\Acme\Models\Bar\User::class)->icon('fa-user');
 *      Menu::menu(\Acme\Models\Foo::class)->label('my label');
 * });
 *
 */
namespace brick\engine\helpers;


class MenuItem
{

}