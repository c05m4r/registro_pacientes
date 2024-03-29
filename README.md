<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Registro de Pacientes

Un simple CRUD en Laravel 10 para comprender sus fundamentos con un sencillo monolito haciendo uso de Inertia y Vue 3

### ¿Qué se aprendió?

- El patrón MVC
- La sintaxis y estructura de Laravel 10
- Vite
- Tailwind
- Vue 3
- Inertia
- Jetstream
- Sail (herramienta para facilitar despliegues en docker)
- Migraciones, validaciones, Eloquent, Faker, Factorías, Seeders, rutas, Tinker

### ¿Cómo despliego la aplicación?

1. Clonar el repositorio

    ``` bash

    git clone https://github.com/c05m4r/registro_pacientes.git

    ```
2. Instalar dependencias con Composer

    ``` bash

    composer install

    ```
    
3. Configurar el archivo .env

    ``` bash

    cp .env.example .env

    ```
    
4. Instalar Sail seleccionado PostgreSQL

    ``` bash

    php artisan sail:install

    ```

5. Desplegar el proyecto con Sail (en el directorio raiz)

    ``` bash

    sail up

    ```

6. Instalar dependencias con NPM

    ``` bash

    npm install && npm run dev

    ```
7. Ejecutar migraciones (en el directorio raiz)

    ``` bash

    sail artisan migrate --seed

    ```

8. Si no hay conflicto en los puertos y la configuración [Acceder](http://localhost/)

### ToDo

* Tests Unitarios
* Filtros
* Ordenamientos
* Paginación
* Form Request Validation
* Relacionar pacientes con el usuario que lo cargó pero queda visible para todos
* Logout
* Notificaciones
* Manejo de errores
