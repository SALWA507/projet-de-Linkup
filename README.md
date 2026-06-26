# LinkUp - LinkedIn Clone

## Description

LinkUp est une application web développée avec **Laravel** qui reproduit les fonctionnalités de base d'un réseau social professionnel comme LinkedIn.

Ce projet permet d'afficher un fil d'actualité contenant les publications des utilisateurs avec leurs informations professionnelles.

---

## Objectifs

* Mettre en place les migrations avec Laravel.
* Utiliser les relations Eloquent entre les modèles.
* Afficher les publications dans un fil d'actualité.
* Respecter une architecture MVC propre.

---

## Fonctionnalités

* Affichage du fil d'actualité (`/feed`)
* Affichage des informations de l'auteur :

  * Nom
  * Photo de profil
  * Headline
  * Entreprise
* Relations Eloquent :

  * Un utilisateur possède plusieurs publications.
  * Une publication appartient à un utilisateur.
* Interface réalisée avec Blade et Tailwind CSS.

---

## Technologies utilisées

* Laravel 12
* PHP 8.4
* MySQL
* Blade
* Tailwind CSS
* Eloquent ORM

---

## Installation

### 1. Cloner le projet

```bash
git clone <repository-url>
```

### 2. Accéder au projet

```bash
cd linkup
```

### 3. Installer les dépendances

```bash
composer install
```

### 4. Configurer le fichier .env

Créer le fichier `.env` puis configurer :

```env
DB_DATABASE=linkup
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Générer la clé

```bash
php artisan key:generate
```

### 6. Exécuter les migrations

```bash
php artisan migrate
```

### 7. Lancer le serveur

```bash
php artisan serve
```

---

## Structure du projet

```
app/
 ├── Http/
 │    └── Controllers/
 │          └── PostController.php
 │
 └── Models/
      ├── User.php
      └── Post.php

database/
 └── migrations/

resources/
 └── views/
      ├── layouts/
      │      └── app.blade.php
      └── feed.blade.php

routes/
 └── web.php
```

---

## Base de données

### users

* id
* name
* email
* password
* headline
* company
* image_url
* timestamps

### posts

* id
* user_id
* content
* timestamps

---

## Relations

### User

```php
public function posts()
{
    return $this->hasMany(Post::class);
}
```

### Post

```php
public function user()
{
    return $this->belongsTo(User::class);
}
```

---

## Auteur

Projet réalisé par **Salwa Amzane** dans le cadre du brief **LinkUp - LinkedIn Clone**.
