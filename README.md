# Test de conomientos - Analista Desarrollador PHP

Este es una prueba para postular al cargo de analista desarrollador PHP en la empresa Contempora.
Lo que se solicit贸 fue la creaci贸n de un servicio web (API Rest), haciendo uso de la API p煤blica Go REST. 

## Comenzando 馃殌

Estas instrucciones te permitir谩n obtener una copia del proyecto en funcionamiento en tu m谩quina local para x prop贸sitos.

### Pre-requisitos 馃搵

Para poder ejecutar correctamente este c贸digo necesitas tener instalado:

* PHP (Puede instalar en este caso algun software como XAMPP o MAMP, los cuales ya incluyen PHP, Apache, entre otros m谩s)
* Composer
* Postman (Para poder probar la API)

### Configuraci贸n 鈿欙笍

Completar la url y token de la API Go Rest en el archivo .env.
Para obtener estos datos, ingresar a esta [url](https://gorest.co.in/)

### Instalaci贸n 馃敡

Ejecutar el siguiente comando en la ra铆z del proyecto

```
php artisan serve
```

### Ejecuci贸n 馃摝

_Para la realizaci贸n de las pruebas, se ocupar谩 la herramienta postman_

#### GET

Ej. Para obtener todos los usuarios por su nombre, necesita la siguiente url:

```
http://127.0.0.1:8000/usuarios/nombre=exampleName
```

En caso de no obtener resultados, retornar谩 un mensaje de error.

#### POST

Ej. Para poder crear un usuario, necesita configurar el Body de postman con los siguientes valores, eligiendo la opci贸n _form-data_

```
KEY VALUE
name nameValue
email emailValue
gender genderValue
status statusValue
```

En caso de que el usuario de haya creado correctamente, este retornar谩 un json con los datos y id del usuario creado.

#### PUT/PATCH

Ej. Para poder actualizar un usuario segun su id, necesita configurar el Body de postman con los mismos valores ocupados para cerar un usuario, eligiendo la opci贸n _x-www-form-urlencoded_

```
http://127.0.0.1:8000/usuarios/19021
```


## Construido con 馃洜锔?

* [Laravel](https://laravel.com/) - Framework web usado

## Autores 鉁掞笍

* **Joseph Torres** - *Proyecto completo* - [josephtorresc](https://github.com/josephtorresc)