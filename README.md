
## ACTIVE PQRS



## APP para gestion de PQRS

cuenta con panel Admin, Asesor Y Cliente.
La instalacion es muy sencillo ejecutar los comandos segun el orden dado en esta guía.

una vez descargado, entramos a  la carpeta descargada y ejecutamos 
## composer install

creamos el archivo .env con el siguiente comando
## cp .env.example .env

generamos la key del proyecto para poder utilizar la DB
## php artisan key:generate

Creamos la DB
## Accedos a nuestro servidor local sea XAPMM o cualquie otro y creamos una DB

Realizar la conexión con la DB.
## en el archivo .env que creamos en el segundo paso especificamos el nombre de la DB que recien creamos.

Ejecutar la migración.
## php artisan serve --seed
importante hacer la migracion con --seed, asi cargamos los datos basicos para la tabla roles, tipo de PQRS y el admin por defecto, para poder ingresar luego.

y listo, ya se puede poner el funcionamiento el servidor
ejecutamos
## php artisan serve
y ingresamos por la ruta dada po lo general es : http://127.0.0.1:8000/

para la creación de este proyecto de utilizó 
## base de datos MySQL
## Laravel V 7.0
## livewire V 2.0
## alpine 2.8.0


