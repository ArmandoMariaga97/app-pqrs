
## ACTIVE PQRS



## APP para gestion de PQRS

cuenta con panel Admin, Asesor Y Cliente.
La instalacion es muy sencillo ejecutar los comandos segun el orden dado en esta guía.

una vez descargado, entramos a  la carpeta descargada y ejecutamos 
## composer install

creamos el archivo .env con el siguiente comando
## cp .env.example .env

generamos la key del proyecto para poder utilizar la DB con el siguiente comando
## php artisan key:generate

Creamos la DB, Accedos a nuestro servidor local sea XAPMM o cualquie otro y creamos una DB de nombre
## active_pqrs

Realizar la conexión con la DB.
En el archivo .env que creamos en el segundo paso especificamos el nombre de la DB que recien creamos, junto con su usuario (root) y el campo contraseña lo dejamos vacio como de muestra en el siguiente ejemplo
example
## DB_CONNECTION=mysql
## DB_HOST=127.0.0.1
## DB_PORT=3306
## DB_DATABASE=active_pqrs
## DB_USERNAME=root
## DB_PASSWORD=

Ejecutar la migración con el siguiente comando.
## php artisan migrate --seed
importante hacer la migracion con --seed, asi cargamos los datos basicos para la tabla roles, tipo de PQRS y el admin por defecto, para poder ingresar luego.

y listo, ya se puede poner el funcionamiento el servidor
ejecutamos
## php artisan serve
y ingresamos por la ruta dada po lo general es : http://127.0.0.1:8000/


si al momento del clent crear unnuevo PQRS o el Asesor responder un PQRS, nos muestra un error es porque no tenemos configurado el servicio de envío de correo, para solucionarlo nos ubicamos en el archivo .env y en la varible ( MAIL_MAILER=smtp ), la remplazamos con
( MAIL_MAILER=log )

para la creación de este proyecto de utilizó 
## base de datos MySQL
## Laravel V 7.0
## livewire V 2.0
## alpine 2.8.0


