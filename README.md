
## APP para gestion de PQRS

cuenta con panel Admin, Asesor Y Cliente.
La instalacion es muy sencillo.

una vez descargado ejecutamos 
$ composer install

creamos el archivo .env 
$ cp .env.example .env

generamos la key
$ php artisan key:generate

Creamos la DB.

Realizar la conexión con la DB.

Ejecutar la migración.

y listo, ya se puede eecutar php artisan

Por comodidad en el formulario de resgitro el usuario puede seleccionar su rol, esto ya que es solo ulistrativo, sabemos que esto no es viable para sitios en producción.

se utilizó MySQL, para la creación de la DB.

tambien se subira el proyecto a un link de prueba



"# app-pqrs" 
