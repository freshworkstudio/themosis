# Meat Project
by [Freshwork Studio](http://freshworkstudio.com/)

- [Instalación](#Installation)
- [Vistas del tema](#views)
- [Ambientes](#environments)

<a name="installation"></a>
## Installation  

#### Development / Local Environment
```bash
git clone git@bitbucket.org:digitalmeatdev/project-name.git
cd project-name
npm install # ó yarn
composer install --prefer-dist
cp .env.example .env
vim .env  
npm run watch
```

#### Production Environments
```bash
git clone git@bitbucket.org:digitalmeatdev/project-name.git
cd project-name
npm install
composer install --prefer-dist --no-dev
npm run production
cp .env.example .env
vim .env  
```

<a name="views"></a>
## Vistas del tema
Las vistas del tema están localizadas en `htdocs/content/themes/freshwork-theme/resources/views`

Esta carpeta está ordenada de la siguiente forma: 

- **components**
Componentes del sitio. Ejemplo: sidebar, widgets, botones, etc. 

- **sections**
Secciones del sitio. En el home, podríamos dividirlo en Hero (banner), FeaturedContent, FeaturedProducts, HomeContact (sección de contacto del home) 

- **errors** 
En esta carpeta alojamos las vistas asociadas a pantallas de error, como el 404. 

- **helpers**
En esta carpeta encontraremos vistas que tienen elementos que tienen más reglas de negocio, como tags que aparecen solo bajo ciertas circunstancias o elementos que cargan datos desde variables de entorno, que no queremos repetir en todas nuestras vistas.  

- **archives**
Vistas asociadas a *Archives* de Wordpress, como el listado de noticias de un blog, o el listado de tiendas de la empresa. 

- **single**
Vistas asociadas a *Singles* de Wordpress, como detalles de un producto, o el detalle de una noticia. 

- **pages**
Vistas asociadas a páginas del sitio que no estén en ninguna de las categorías anteriores, como el Home, la página de contacto, etc. 

<a name="environments"></a>
## Environments
#### Staging: 
    URL: https://project-name.dmeat.cl
    
#### Producción:
    URL: https://project-name.cl
