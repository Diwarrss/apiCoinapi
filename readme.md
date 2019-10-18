# apiCoinapi
Prueba basada en consumir api de [https://www.coinapi.io/](https://www.coinapi.io/) con Laravel 5.8 y a su vez creamos una SPA vuejs para consumir esta api de Laravel.

## Características

- Guzzle, PHP HTTP client
- Vuejs 2.x
-  vue-router
- Axios
- Laravel 5.8
- SPA

## Navegadores Soportados

![Chrome](https://raw.github.com/alrra/browser-logos/master/src/chrome/chrome_48x48.png) | ![Firefox](https://raw.github.com/alrra/browser-logos/master/src/firefox/firefox_48x48.png) | ![Safari](https://raw.github.com/alrra/browser-logos/master/src/safari/safari_48x48.png) | ![Opera](https://raw.github.com/alrra/browser-logos/master/src/opera/opera_48x48.png) | ![Edge](https://raw.github.com/alrra/browser-logos/master/src/edge/edge_48x48.png) | ![IE](https://raw.github.com/alrra/browser-logos/master/src/archive/internet-explorer_9-11/internet-explorer_9-11_48x48.png) |
--- | --- | --- | --- | --- | --- |
Latest ✔ | Latest ✔ | Latest ✔ | Latest ✔ | Latest ✔ | 11 ✔ |

[![Browser Matrix](https://saucelabs.com/open_sauce/build_matrix/axios.svg)](https://saucelabs.com/u/axios)

## Instalación

Clonar en nuestro PC:

```bash
git clone https://github.com/Diwarrss/apiCoinapi.git
```

Nos dirigimos a la ruta del proyecto:

```bash
$ cd apiCoinapi
```

Modificamos el nombre del archivo **.env.example.** por **.env** y agregamos nuestras credenciales.

Ejecutamos los siguientes comandos dentro del directorio del proyecto:

```bash
$ composer install

$ npm install
```
Generamos una key para nuestra API:

```html
$ php artisan key:generate
```
Ejecutamos finalmente:

```bash
$ npm run watch
-------O-------
$ npm run dev
----------------
```
Recomendación usar SSL para no tener conflicto y poder consumir la API:

- Uso Laragon para la gestión de proyectos de laravel
