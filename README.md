# minidwell-laravel-monolitico

## Estructura de los directorios
El repositorio contiene los siguientes directorios:

* docker: Este directorio contiene los archivos necesarios para ejecutar el proyecto en contenedores Docker.
* laravel: Este directorio contiene el código fuente de la aplicación Laravel.

## Extensiones recomendadas
* 1 [Auto Close Tag](https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-close-tag)
* 2 [Beautify css/sass/scss/less](https://marketplace.visualstudio.com/items?itemName=michelemelluso.code-beautifier)
* 3 [Bracket Pair Color DLW](https://marketplace.visualstudio.com/items?itemName=BracketPairColorDLW.bracket-pair-color-dlw)
* 4 [Docker](https://marketplace.visualstudio.com/items?itemName=ms-azuretools.vscode-docker)
* 5 [GitLens — Git supercharged](https://marketplace.visualstudio.com/items?itemName=eamodio.gitlens)
* 6 [JavaScript (ES6) code snippets](https://marketplace.visualstudio.com/items?itemName=xabikos.JavaScriptSnippets)
* 7 [Laravel Blade formatter](https://marketplace.visualstudio.com/items?itemName=shufo.vscode-blade-formatter)
* 8 [Laravel Blade Snippets](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-blade)
* 9 [Laravel Blade Spacer](https://marketplace.visualstudio.com/items?itemName=austenc.laravel-blade-spacer)
* 10 [Laravel Snippets](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel5-snippets)
* 11 [Material Icon Theme](https://marketplace.visualstudio.com/items?itemName=PKief.material-icon-theme)
* 12 [PHP Debug](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug)
* 13 [PHP IntelliSense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client)
* 14 [PHP Namespace Resolver](https://marketplace.visualstudio.com/items?itemName=MehediDracula.php-namespace-resolver)
* 15 [Prettier - Code formatter](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
* 16 [Dev Containers](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers)
* 17 [Panda Dark II](https://marketplace.visualstudio.com/items?itemName=PandaDigitalLLC.panda-dark-ii)


## Cómo ejecutar este proyecto
 Para ejecutar este proyecto, siga estos pasos:

* 1 Descargue el proyecto de GitHub.
* 2 Asegúrese de tener instalado Docker
* 3 Abra una terminal y navegue hasta la carpeta del proyecto.
* 4 Copiar los archivos .env example ```.env.example```
* 5 Ejecute el comando ```docker-compose up -d``` Esto levantará los contenedores necesarios para ejecutar el proyecto. 

* 6 Ejecute el comando ```docker exec -it minidwell-laravel-monolitico-app-1 /bin/bash```. esto permite entrar al container de docker, para poder ejecutar los siguientes comandos

* 7 Dentro del contenedor, ejecute el comando ```composer install```.
* 8 Dentro del contenedor, ejecute el comando ```composer update```.
* 9 Dentro del contenedor, ejecute el comando ```php artisan migrate:fresh --seed```. baja las tablas de las bdd, las vuelve a crear y crear las semillas
* 10 Dentro del contenedor, ejecute el comando ```php artisan key:generate```. 
* 11 Dentro del contenedor, ejecute el comando ```php artisan optimize```. actualiza rutas ( si encuentro error, tiro ese comando para ver si se soluciona XD)
* 12 Si no ha cambiado la dirección, utilice la siguiente URL para visualizar el proyecto: ```http://localhost```.
* 13 Una vez que se hayan completado estos pasos, la aplicación Laravel debería estar lista para su uso.

## comandos esenciales para programar en laravel
* esto no tiene nada que ver con comandos para leb¿vantar el proyecto

* 1 ```php artisan optimize```
* 2 ```php artisan make:controller```
* 3 ```php artisan make:controller -r```
* 4 ```php artisan migrate```
* 5 ```php artisan migrate:fresh``` 
* 6 ```php artisan migrate:fresh --seed```
* 7 ```php artisan make:model -m``` 
* 8 ```php artisan clear``` 
* 9 ```php artisan clear:cache``` 

