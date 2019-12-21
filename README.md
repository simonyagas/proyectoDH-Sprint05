# proyectoDH - Grupo 5 - Ecommerce de cuerdas.ba

## Sprint 05

### Integrantes del grupo

* [Juan Pablo](https://github.com/juampidalmo) :sunglasses:
* [Mica](https://github.com/micafreue) :raising_hand:
* [Nacho](https://github.com/hartoy) :grimacing:
* [Simón](https://github.com/simonyagas) :neckbeard:


#### Para ver la presentacion

http://bit.ly/dhsprint5

#### Para correr el proyecto:

*clonar el repo

*updatea dependencias
```
> composer update
```

*crear y configurar el .env
```
En especial estas cosas:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cuerdas_db
DB_USERNAME=root (o la que uses)
DB_PASSWORD=root (o la que uses)
```

*generar el key de artisan
```
> php artisan key:generate
```

*hacer la migracion de datos
```
> php artisan migrate:refresh --seed
```
*levantar el proyecto
```
> php artisan serve
```
Usuarios que ya trae pre-cargados:


Usuario: usuario@gmail.com

pass: usuario1234

Administrador: admin@gmail.com

pass: admin1234

