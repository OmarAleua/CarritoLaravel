

## Pasos que yo segui para crear la aplicacion

- **[01]-Cree el proyecto en Laravel: V 4.2.17 + PHP: V 8.1.10**
- **[02]-Cree la Base de Datos: laravel y la Base de Datos: testing**
- **[03]-git init**
- **[04]-Cree el Modelo, Controlador y Migracion**
- **[05]-Complete la tabla de la Migracion**
- **[06]-Ejecute la migracion**
- **[07]-Complete el Modelo ($fillable)**
- **[08]-Cree el Seeder (ProductSeeder)**
- **[09]-Complete el Seeder**
- **[10]-Importe el Modelo dentro del Seeder**
- **[11]-Complete el DatabaseSeeder**
- **[12]-Ejecute el Seed**
- **[13]-Cree las Rutas**
- **[14]-Importe el Controlador dentro de Rutas**
- **[15]-Complete el Controlador (ProductController) con los Metodos: index, cart, addToCart, update y remove**
- **[16]-Cree la vista layout.blade.php (Aqui es donde muestro los productos)**
- **[17]-Cree la vista products.blade.php (Aqui es donde genero la directiva @foreach la cual hace un ciclo mostrando todos los productos que estan en la DataBase)**
- **[18]-Cree la vista cart.blade.php (Aqui es donde muestro la lista de los productos agregados al carrito)**
- **[19]-Cree los estilos**
- **[20]-Cree el archivo CartTest y ProductControllerTest para realizar las pruebas unitarias, integrales y funcionales**


## Pasos que usted debe seguir para instalar la aplicacion en su local

- **[01]-Hacer un git clone de la aplicacion desde mi usuario: https://github.com/OmarAleua/CarritoLaravel**
- **[02]-Ejecutar el comando composer install o composer update**
- **[03]-configurar el archivo .env colocando los datos de su DataBase**
- **[04]-Crear la Base de Datos en su http://localhost/phpmyadmin/**
- **[05]-Ejecutar el comando > php artisan db:seed --class=ProductSeeder (esto hace que se complete la tabla con productos)**
- **[06]-Activar el server Apache con el comando: php artisan serve**
- **[07]-Abrir la aplicacion en el navegador**
- **[08]-Ejecutar el comando > vendor/bin/phpunit (esto ejecuta todos los tests)**

