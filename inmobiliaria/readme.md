# Proyecto Inmobiliaria

## Descripción

Este proyecto es una página web para una inmobiliaria en Buenos Aires, Argentina. Está desarrollado en PHP nativo orientado a objetos utilizando el patrón MVC.

## Estructura del Proyecto

- **controllers/**: Contiene los controladores.
- **models/**: Contiene los modelos.
- **views/**: Contiene las vistas.
- **config/**: Contiene la configuración de la base de datos.
- **index.php**: Punto de entrada de la aplicación.
- **routes.php**: Define las rutas.
- **.htaccess**: Configuración de URL amigables.
- **readme.md**: Documentación del proyecto.

## Configuración

1. **Base de Datos**

   Crea una base de datos en MySQL y usa el archivo `donantueno_marcelo.sql` para importar la estructura y los datos iniciales.

2. **Configuración de Conexión**

   Edita `config/database.php` con los detalles de tu base de datos.

3. **Iniciar Sesión**

   Usa el usuario `admin` y la contraseña `admin` para acceder al panel de administración.

## Uso

- **Página Inicial**: `index.php`
- **Ver Propiedades**: `index.php?url=propiedades`
- **Iniciar Sesión**: `index.php?url=login`

## Notas

- Este proyecto es una implementación simple para fines educativos.
