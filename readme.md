## Laravel PHP Framework

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

Para montar el proyecto basta con clonar el repo y seguir los siguientes pasos.

##Iniciar Laravel

Abrimos un terminal en la carpeta donde montamos los proyectos y empezamos clonando el repositorio.

```bash
git clone https://[tu-usuario-de-bitbucket]@bitbucket.org/thatzad/base-project.git
```

Si vamos a clonar el proyecto fuera de nuestra carpeta de usuario, es decir, si lo montamos en /var/www/... deberemos dar permisos totales a la carpeta clonada.

Luego, entramos a la carpeta del proyecto y ejecutamos el siguiente comando para descargar todas las dependencias del proyecto.

```bash
composer install
```

Creamos un fichero de configuración, con el comando.
```bash
sudo gedit /etc/apache2/sites-avaible/000-baseproject.conf
```
Rellenar el archivo de configuración
```bash
<VirtualHost *:80>
    ServerName baseproject.test
    DocumentRoot "/var/www/base-project/public"
    DirectoryIndex index.php
    <Directory "/var/www/base-project/public">
        AllowOverride All
        Allow from All
    </Directory>
</VirtualHost>
```

Reiniciaremos el servicio apache, tenemos dos posibles comandos para ello:
```bash
service apache2 reload
sudo /etc/init.d/apache2 restart
```

Editar archivo hosts, para apuntar el nuevo vhost a nuestro equipo.
```bash
sudo nano /etc/hosts
```
Añadir la siguiente línea y guardar el fichero.

```bash
127.0.0.1     baseproject.test
```

## Base de datos

En la raíz creamos un fichero llamado .env copiando los datos del ejemplo .env.example y editamos los datos de la BBDD:
```bash
DB_HOST=localhost
DB_DATABASE=baseproject
DB_USERNAME=root
DB_PASSWORD=
```

Una vez tenemos el .env configurado, generamos una nueva key exclusiva para ese proyecto:
```bash
php artisan key:generate
```

Ahora crearemos la BBDD. Para ello, entramos en el terminal y accedemos a MySQL.
```bash
mysql -u root
```
Dentro de MySQL crearemos la nueva base de datos y saldremos de vuelta a la consola.
```bash
create database baseproject;
exit;
```

Una vez hemos creado y configurado la base de datos junto con el entorno, ejecutaremos los migrates para cargar la BBDD.
```bash
php artisan migrate
```

#####Gestión de BBDD con Adminer [Opcional]

Por último podemos comprobar que la BBDD esté bien creada, para ello usaremos Adminer.

Para ello, descargamos el script adminer desde www.adminer.org, copiamos el archivo en la carpeta public y lo renombramos como adm.php.
Entramos a la nueva URL, introducimos los datos de usuario y ya podemos acceder.

http://baseproject.test/adm.php

Es importante que este fichero no se suba al servidor de producción, ya que es un acceso directo a la base de datos. 
Lo podemos subir temporalmente para pruebas, pero nunca se debe quedar publicado en entorno real.

## Listo
Ya podemos empezar a trabajar con el proyecto:

##### Frontend
- http://baseproject.test

##### Backend
- http://baseproject.test/administrador
- @: thatzad@gmail.com
- P: MM6665MM
