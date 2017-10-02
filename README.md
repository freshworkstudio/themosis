# Meat Project
by [Digital Meat](http://meat.cl/)

- [Instalación](#Installation)
- [Ambientes](#environments)

<a name="installation"></a>
## Installation 
You can install the project-name using `meat-cli`
```bash
composer global require meat/meat-cli
``` 
```bash
cd ~/code/
meat install project-name-code
```

### Manual installation
#### Development / Local Environment
```bash
git clone git@bitbucket.org:digitalmeatdev/project-name.git
cd project-name
npm install
composer install --prefer-dist
cp .env.example .env
vim .env  
npm run watch
php artisan serve
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

<a name="environments"></a>
## Environments
#### Staging: 
    URL: https://project-name.dmeat.cl
    
#### Producción:
    URL: https://project-name.cl
