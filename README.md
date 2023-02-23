

## Pasos que yo segui para crear la aplicacion

- **[01]-Cree el proyecto en Laravel: V 4.2.17 + PHP: V 8.1.10**
- **[02]-Cree la Base de Datos**
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
- **[15]-Complete el Controlador (ProductController)**
- **[16]-Cree el archivo layout.blade.php**
- **[17]-Cree el archivo products.blade.php**
- **[18]-Cree el archivo cart.blade.php**
- **[19]-Cree los estilos**


## Pasos que usted debe seguir para instalar la aplicacion en su local

- **[01]-Hacer un git clone de la aplicacion desde mi usuario: https://github.com/OmarAleua/CarritoLaravel**
- **[02]-Ejecutar el comando composer install o composer update**
- **[03]-configurar el archivo .env colocando los datos de su DataBase**
- **[04]-Crear la Base de Datos en su http://localhost/phpmyadmin/**
- **[05]-Ejecutar el comando php artisan db:seed --class=ProductSeeder (esto hace que se complete la tabla con productos)**
- **[06]-Activar el server Apache con el comando: php artisan serve**
- **[07]-Abrir la aplicacion en el navegador**
