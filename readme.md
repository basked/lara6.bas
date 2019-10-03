## Create Auth 
<ul><b>В Larvel 6 убрали artisan команду, которая до этой версии была умалчанию. Чтобы включить авторизацию необходимо проделать следующие действия:</b>
 <li><p>Добавить в Comand Line Tool Support два алиаса: <b>с - composer(Composer), a - artisan(Tool based on Symfony console)</b></p></li> 
 <li><p>Выполнить команду <b>c require laravel/ui</b></p></li>
 <li><p>Выполнить команду <b>a uui vue --auth</b></p></li>
 <li><p>Выполнить команду <b>npm install</b></b></p></li>
 <li><p>Выполнить команду <b>npm run dev</b>(станут доступными стили css для форм)</p></li>
 <li><p>Выполнить команду <b>a migrate</b></b></p></li>
</ul>

## Установка пакета spatie/laravel-permission
<ul><b>Пакет require spatie/laravel-permission используется для управления ролями и правами:</b>
 <li><p>Добаить в провайдер  <b> config/app.php</b>
                                
       'providers' => [
            // ...
             Spatie\Permission\PermissionServiceProvider::class,
       ]
 </li>
 <li><p>Опубликовать миграцию:
        
        a vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
 </p></li> 
 <li>Если после выполнения предыдущей команды не добавляется миграция create_permission_table в каталог migrations нужно выполнить команду <br><b>a vendor:publish</b> и выбрать <br> Which provider or tag's files would you like to publish?:<br>
 <li><p>Выполнить команду <b>a migrate</b></p></li>
 <li><p>После этой команды появятся следующие таблицы в БД <b><br>role_has_permissions<br>
                             model_has_roles<br>
                             model_has_permissions<br>
                             roles<br>
                             permissions<br>
 </b></p></li>
</ul>

## Регистрируем пользователя и надаем ему роли и права

<ul> Регистрируем пользователя на главной странице
 <li>В модели User добавляем HasRoles (class User extends Authenticatable
                                             {
                                              use Notifiable, <b>HasRoles</b>; 
                                              )</li>
 <li><p>В контроллере HomeController созадем новую роль: <b>Role::create(['name'=>'writer']);</b></li>
 <li><p>В контроллере HomeController созадем новое  правило: <b>Permission::create(['name'=>'write post']);</b></li>
 
 
 
 <li><p>Наделяем роли правило, затем удаляем: <br>
              <b>$role = Role::findById(1); <br>
                $permission = Permission::findById(1);<br>
                $role->givePermissionTo($permission);<br>
                $role->revokePermissionTo($permission);<br>
                </b></li>
 <li><p>Добаить в провайдер  <b> config/app.php</b></li>


<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
