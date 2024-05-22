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

1. **Cloner le dépôt ou télécharger le code source**
   ```bash
   git clone https://github.com/A2blackMZ/Internship
   cd projet-supervision-backend
   ```

2. **Renommer le fichier `.env.example` en `.env`**
   ```bash
   cp .env.example .env
   ```
      Configurer la section de la connexion BD en complètant les informations que voici dans le fichier `.env`
   ```
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=laravel
      DB_USERNAME=root
      DB_PASSWORD=
   ```
   

4. **Exécuter les commandes suivantes pour installer les dépendances et configurer l'application**
   ```bash
   composer install
   php artisan key:generate
   php artisan passport:install
   php artisan migrate
   php artisan storage:link
   ```

5. **Démarrer le serveur Laravel**
   ```bash
   php artisan serve
   ```

6. **L'API sera accessible à l'adresse**
   ```
   http://127.0.0.1:8000/api
   ```

### Frontend (Angular)

1. **Cloner le dépôt ou télécharger le code source**
   ```bash
   cd projet-supervision-frontend
   ```

2. **Assurez-vous d'avoir Node.js et Angular CLI version 16.1 ou supérieure installés**

3. **Exécuter la commande suivante pour installer les dépendances**
   ```bash
   npm install
   ```

4. **Démarrer le serveur de développement Angular**
   ```bash
   ng serve
   ```

5. **L'application sera accessible à l'adresse**
   ```
   http://localhost:4200/
   ```

## Structure du Projet

### Backend (Laravel)
- **Controllers** : Gère la logique de l'application et les interactions avec les modèles.
- **Models** : Représente les entités de la base de données.
- **Migrations** : Définit la structure des tables de la base de données.
- **Routes** : Définit les routes API pour l'application.

### Frontend (Angular)
- **Components** : Composants Angular pour la construction de l'interface utilisateur.
- **Services** : Services pour interagir avec les API du backend.
- **Modules** : Modules Angular pour organiser l'application.
- **Routing** : Configuration des routes de l'application.

## Utilisation des Commandes

### Angular CLI
- **Démarrer le serveur de développement**
  ```bash
  ng serve
  ```

- **Générer un nouveau composant**
  ```bash
  ng generate component component-name
  ```

- **Compiler l'application pour la production**
  ```bash
  ng build
  ```

- **Exécuter les tests unitaires**
  ```bash
  ng test
  ```

- **Exécuter les tests end-to-end**
  ```bash
  ng e2e
  ```

### Laravel Artisan
- **Générer une clé d'application**
  ```bash
  php artisan key:generate
  ```

- **Installer Passport pour l'authentification API**
  ```bash
  php artisan passport:install
  ```

- **Exécuter les migrations de la base de données**
  ```bash
  php artisan migrate
  ```

- **Créer un lien symbolique pour le stockage**
  ```bash
  php artisan storage:link
  ```

- **Démarrer le serveur de développement**
  ```bash
  php artisan serve
  ```

---

En suivant ces instructions, vous serez en mesure de configurer et de démarrer le système de supervision des projets. Assurez-vous de vérifier que toutes les dépendances sont installées et que votre environnement de développement est correctement configuré.
