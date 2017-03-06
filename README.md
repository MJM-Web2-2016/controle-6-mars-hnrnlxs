# Behance Redesign

## Introduction

Adobe a décidé d'acquérir les droits d'utilisation d'une nouvelle interface pour Behance designée par [Rahul Patil](https://www.behance.net/Raj8984)

Dans un premier temps, et afin de présenter l'outil en interne, vous êtes en charge de mettre en place une plateforme Wordpress qui gère uniquement la partie galerie.

La galerie est une simple grille présentant les différents travaux avec un visuel et une série d'informations diverses dont vous trouverez le détail sur les 3 écrans suivants :

- [Grille générale](https://mir-s3-cdn-cf.behance.net/project_modules/1400/8da00f41483331.57a85021ca157.png)
- [Description de la carte](https://mir-s3-cdn-cf.behance.net/project_modules/1400/9ac9f941483331.57a85021ca58e.png)
- [Etats de la carte](https://mir-s3-cdn-cf.behance.net/project_modules/1400/48a8c641483331.57a85021cabda.png)

## Travail demandé

Afin de présenter cette maquette en interne vous devez réaliser le travail suivant :

1. Procéder à une installation de Wordpress (dernière version en date) - En utilisant MAMP, vous installerez Wordpress sur l'URL par défaut (http://localhost:8888/www.behance.net)
2. La base de données à créer doit être nommée "adobe"
3. Vous baserez vos travaux sur la dernière version en date de ["Foundation Press"](https://github.com/olefredrik/FoundationPress) la version 2.9.0 dernière version à jour actuellement
4. Pour le travail d'intégration, dans un premier temps, la grille doit être mise en place sur la page d'accueil de Wordpress
ATTENTION : c'est une liste d'article qui est utilisée pour la page d'accueil du site.
5. La gestion des portraits utilisateurs / nombre de vues / likes sera mise en place avec l'aide de "champs personnalisés"
6. Pour les vignettes, il est nécessaire d'ajouter une format d'image spécifique que vous nommerez "visuel-listing" au format 450x450
7. ATTENTION : nous travaillons avec foundation, la page doit donc être responsive

## Resources à disposition

Si besoin, vous trouverez une archive contenant des visuels à l'adresse suivante :
<http://www.tisseur-de-toile.fr/_comicspics.zip>

## Rendu attendu

Le rendu sera effectué sur le dépôt qui vous est fourni avec les recommendantions suivantes :

1. Tous les codes sources de Wordpress seront à placer sur le dépôt fourni
2. A la racine, vous placerez un dossier "__bdd" qui contiendra l'export SQL de votre base de données
3. Un fichier ".gitignore" est déjà présent, vous pouvez le modifier en fonction de vos besoins en conservant toutefois l'intégralité des informations déjà présentes dans le fichier

## Bareme de notation

1. utilisation cohérente du versioning (3pts)
2. compilation du thème proposé (5pts)
3. intégration responsive (4pts)
4. pertinence du paramétrage de wordpress (5pts)
5. structuration des fichiers et lisibilité du code (3pts)
