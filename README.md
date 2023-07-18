# Backend
## Descripción
Se crea la logica y mandamos los datos los endpoint para ser consumidos en un frontend

## Requisitos
- PHP 7.3 o superior
- Node.js y npm para compilar los archivos front-end (opcional)

## Instalación
1. Clona el repositorio: `git clone https://github.com/laravel/laravel.git`
2. Instala las dependencias de PHP: `composer install`
3. Copia el archivo de entorno: `cp .env.example .env`
4. Genera la clave de la aplicación: `php artisan key:generate`
5. Configura la base de datos en el archivo `.env`
6. Ejecuta las migraciones y los seeders: `php artisan migrate --seed`
7. (Opcional) Compila los activos front-end: `npm install && npm run dev`

## Uso
- Ejecuta el servidor de desarrollo: `php artisan serve`
- Accede al sitio web en tu navegador: `http://localhost:8000`

## Testing
Para ejecutar las pruebas, usa el siguiente comando: `php artisan test`

## Contribución
Si quieres contribuir a este proyecto, por favor, sigue las directrices de contribución en [CONTRIBUTING.md](CONTRIBUTING.md).

## Licencia
Este proyecto se encuentra bajo la licencia MIT. Para más detalles, consulta el archivo [LICENSE.md](LICENSE.md).
