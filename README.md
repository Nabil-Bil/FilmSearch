FilmSearch

Une application web qui permet d'explorer et de rechercher des films en utilisant une API de films. Découvrez les dernières sorties, les notes globales, et les informations détaillées sur vos films préférés.

## Fonctionnalités

- Affichage des meilleurs films du moment
- Système de recherche de films
- Pour chaque film :
  - Note globale
  - Description détaillée
  - Date de sortie
  - Informations supplémentaires

## Installation

1. Cloner le dépôt :
```bash
git clone https://github.com/Nabil-Bil/FilmSearch.git
```

2. Installer les dépendances PHP :
```bash
composer install
```

3. Installer les dépendances Node :
```bash
npm install
```

4. Créer le fichier d'environnement :
```bash
cp .env.example .env
```

5. Générer la clé d'application :
```bash
php artisan key:generate
```

6. Configurer la base de données dans le fichier `.env` :
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=movies_db
DB_USERNAME=root
DB_PASSWORD=
```

## Configuration Requise

- PHP >= 8.1
- MySQL
- Node.js & NPM
- Composer

## Utilisation

1. Lancez l'application
2. Utilisez la barre de recherche pour trouver des films spécifiques
3. Parcourez les films populaires sur la page d'accueil

## Technologies Utilisées

- Laravel
- API de films (themoviedb.org)
- MySQL
- JavaScript/Node.js
