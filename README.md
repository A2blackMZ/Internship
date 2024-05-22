# Système de Supervision des Projets

Dans le but d'améliorer l'efficacité du processus de supervision des projets de l'entreprise, nous avons décidé de digitaliser ce processus en mettant en place un système de supervision des projets pour augmenter la productivité et la qualité de réalisation des projets.

## Prérequis

### Frontend (Angular)

- Angular CLI version 16.1.7
- Node.js

### Backend (Laravel)

- Laravel 10
- PHP 8.2 minimum
- Composer
- Serveur web (Apache, Nginx, etc.)
- Base de données (MySQL, PostgreSQL, etc.)

### Commandes Angular CLI

- `ng serve` : Démarrer le serveur de développement
- `ng generate component component-name` : Générer un nouveau composant
- `ng build` : Compiler l'application pour la production
- `ng test` : Exécuter les tests unitaires
- `ng e2e` : Exécuter les tests end-to-end

## Installation

### Backend (Laravel)

1. Cloner le dépôt ou télécharger le code source
2. Renommer le fichier `.env.example` en `.env`
3. Exécuter les commandes suivantes :
   
   composer install
   php artisan key:generate
   php artisan passport:install
   php artisan migrate
   php artisan storage:link
   ```
4. Démarrer le serveur Laravel avec la commande php artisan serve
5. L'API sera accessible à l'adresse http://127.0.0.1:8000/api

### Frontend (Angular)

1. Cloner le dépôt ou télécharger le code source
2. Assurez-vous d'avoir Node.js et Angular CLI version 16.1 ou supérieure installés
3. Exécuter la commande npm install pour installer les dépendances
4. Démarrer le serveur de développement avec la commande ng serve
5. L'application sera accessible à l'adresse http://localhost:4200/

``
