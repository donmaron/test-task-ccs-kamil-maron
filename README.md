<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Important information

Database table and Model name is Clients, consists of:<br />
name(char, 30), lastname(char, 30), email(char, 30), phone(char, 30) and issue(char, 30); <br /><br />
Use this command to fill the database with dummy content. <br />
<code>$ php artisan db:seed --class=ClientsTableSeeder</code><br /><br />
API endpoint is under <code>/api/clients</code>.
<ul>                            
    <li>to get the list of all clients use <code>GET /api/clients</code></li>
    <li>to get the specific client use <code>GET /api/clients/{id}</code></li>
    <li>to create a new client use <code>POST /api/clients</code></li>
    <li>to update a client use <code>PUT /api/clients/{id}</code></li>
    <li>to delete a client use <code>DELETE /api/clients/{id}</code></li>
</ul>
