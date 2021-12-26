<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Intrucciones de instalacion
Instalar Xampp
Descomentar los drivers de MySQL del archivo php.ini
Instalar composer
iniciar servicios PHP y MySQL en XAMPP
crear base de datos en Mysql con el nombre "sofka"
Descargar repositorio https://github.com/DaKa22/sofka.git
Duplicar el archivo .env.example y cambiar el nombre a .env
abrir terminal
artisan key:generate
ingresar el comando: composer install
ingresar el comando: php artisan migrate:fresh --seed
ingresar el comando: php artisan serve
abrir en el navegalor el localhost:8000


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
