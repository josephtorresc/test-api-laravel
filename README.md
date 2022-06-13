# Test de conomientos - Analista Desarrollador PHP

Este es una prueba para postular al cargo de analista desarrollador PHP en la empresa Contempora.
Lo que se solicitó fue la creación de un servicio web (API Rest), haciendo uso de la API pública Go REST. 

## Comenzando 🚀

Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para x propósitos.

### Pre-requisitos 📋

Para poder ejecutar correctamente este código necesitas tener instalado:

* PHP (Puede instalar en este caso algun software como XAMPP o MAMP, los cuales ya incluyen PHP, Apache, entre otros más)
* Composer
* Postman (Para poder probar la API)

### Configuración ⚙️

Completar la url y token de la API Go Rest en el archivo .env.
Para obtener estos datos, ingresar a esta [url](https://gorest.co.in/)

### Instalación 🔧

Ejecutar el siguiente comando en la raíz del proyecto

```
php artisan serve
```

### Ejecución 📦

_Para la realización de las pruebas, se ocupará la herramienta postman_

#### GET

Ej. Para obtener todos los usuarios por su nombre, necesita la siguiente url:

```
http://127.0.0.1:8000/usuarios/nombre=exampleName
```

En caso de no obtener resultados, retornará un mensaje de error.

#### POST

Ej. Para poder crear un usuario, necesita configurar el Body de postman con los siguientes valores, eligiendo la opción _form-data_

```
KEY VALUE
name nameValue
email emailValue
gender genderValue
status statusValue
```

En caso de que el usuario de haya creado correctamente, este retornará un json con los datos y id del usuario creado.

#### PUT/PATCH

Ej. Para poder actualizar un usuario segun su id, necesita configurar el Body de postman con los mismos valores ocupados para cerar un usuario, eligiendo la opción _x-www-form-urlencoded_

```
http://127.0.0.1:8000/usuarios/19021
```


## Construido con 🛠️

* [Laravel](https://laravel.com/) - Framework web usado

## Autores ✒️

* **Joseph Torres** - *Proyecto completo* - [josephtorresc](https://github.com/josephtorresc)