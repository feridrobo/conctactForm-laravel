## Para iniciar los contenedores de Docker, utiliza el siguiente comando:

```
docker compose up -d
```
## Para verificar si los contenedores están activos y ejecutándose, utiliza el siguiente comando:
```
docker ps
```

## Copia el ID del contenedor de Laravel que deseas acceder.

Para ingresar al contenedor de Laravel, utiliza el siguiente comando, reemplazando `<id-copiado>` con el ID que copiaste anteriormente:



```
docker exec -it <id-copiado> sh
```

## Una vez dentro del contenedor, dirígete a la carpeta de tu aplicación  
```
docker exec -it add6d1dda8b5 sh
```
```
cd myapp
```

## El primer paso es instalar las dependencias
```
composer install
```
```
verificar si existe .env
ls -all 
```


## Si el archivo `.env` no existe, cambia el nombre del archivo `.env.example` por `.env` 
```
mv .env.example .env
```
## limpiar cache
```
php artisan cache:clear
```
```
composer dump-autoload
```
## y por último generar el key
```
php artisan key:generate
```
## por algo de la configuracion de permisos que no entiendo 
```
chmod  -R 777 storage/
```# conctactForm-laravel
