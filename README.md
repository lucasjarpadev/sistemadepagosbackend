
## About Sistema de Pagos

Es un sistema de administracion de pagos donde un usuario encargado de realizar los pagos administra grupos de usuarios a su cargo distribuyendo suscripciones a servicios.


## stack used it
Laravel 8 Jetstream para uso de usuarios ,autenticacion con Google Authenticator y manejo de grupos.




## Funcionalidades u objetivos

Un usuario esta a cargo a traves de un grupo de otro usuarios.
Un usuario realiza el pago de una serie de suscripciones , el valor total es calculado dependiendo de la cantidad
de usuarios que tenga un grupo.

Un grupo esta asociado a un determinado usuario y los usuarios, pertenecientes a un grupo,acceden a las suscripciones del usuario a cargo (el usuario que paga).





## Instalacion


Configurar archivo .env 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sistemapagos
DB_USERNAME=root
DB_PASSWORD=xxxxxxx



Ejecutar 

composer install

php artisan migrate 

(Se genera automaticamente en la base de datos la estructura de la misma)



php artisan db:seed 

(se genera automaticamente servicios de ejemplos para suscribirse)
















