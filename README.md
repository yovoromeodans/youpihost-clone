# YoupiHost Clone

## Présentation

Ce projet est une reproduction des pages publiques du site **YoupiHost**, réalisée dans le cadre d'un test technique.

L'objectif est de reproduire fidèlement l'interface, la navigation et le comportement responsive des différentes pages du site, en utilisant Laravel 12.

## Technologies utilisées

* **Laravel 12**
* **PHP**
* **Blade**
* **Tailwind CSS**
* **JavaScript**
* **MySQL**
* **Vite**
* **Git / GitHub**
* **Lucide**

## Pages réalisées

* Accueil
* Hébergement Mutualisé
* VPS Server
* Email Professionnel
* Certificat SSL
* Enregistrer un domaine
* Transfert de domaine
* Tarifs des domaines
* Panier
* Contact
* Knowledgebase
* Téléchargements
* Soumettre un ticket
* Annonces / News
* Conditions d'utilisation
* Politique de confidentialité

## Prérequis

Avant l'installation, assurez-vous d'avoir :

* PHP 8.2 ou supérieur
* Composer
* Node.js et npm
* MySQL

## Installation

Cloner le dépôt :

```bash
git clone <URL_DU_DEPOT>
cd youpihost-clone
```

Installer les dépendances PHP :

```bash
composer install
```

Installer les dépendances JavaScript :

```bash
npm install
```

Copier le fichier d'environnement :

```bash
cp .env.example .env
```

Générer la clé de l'application :

```bash
php artisan key:generate
```

Configurer les informations de connexion à la base de données dans le fichier `.env`.

Exécuter les migrations :

```bash
php artisan migrate
```

## Lancement du projet

Lancer le serveur Laravel :

```bash
php artisan serve
```

Dans un autre terminal, lancer Vite :

```bash
npm run dev
```

Le projet est ensuite accessible à l'adresse indiquée par Laravel.
