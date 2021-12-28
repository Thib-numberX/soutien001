# SOUTIEN 001 CSS

Depuis déjà deux saisons nous sommes en apprentisage de nouveaux concepts : HTML, CSS et plus récemment PHP. 
Certains se sentent largués, nous nous pensons que vous avez les connaissances en vous et qu'il suffira de les utiliser pour mieux les assimiler. Toutefois, une nouvelle façon de vous les expliquer peut donner le déclique.

C'est pourquoi nous avons mis en place ces temps de soutiens

Pour ce premier soutien nous traiterons un peu du HTML et beaucoup de CSS. Notamment du box Model, du flexbox, des images en background et les positions

<img src="Capture d’écran 2021-12-26 171654.png">

## Préambule

### Objectif

Revoir les notions fondamentales du CSS afin de modeler la page selon ses désirs. 

### Comment faire ?


-   Bien lire toute l'énoncé pour voir l'étendu du projet/challenge/atelier (OUI même les bonus.)
-   Parcourir le dossier de travail ainsi que les documents fournis pour comprendre ce qu'on nous demande.
-   Analyser les images de la maquette pour en sortir une structure initiale
-   relire le cours avant l'exercice suivant les points qui vous semblent pas correctement assimilés.

## Étape 1 - Structurer notre projet

### Objectif

Établir les dossiers/fichiers nécessaires à la réalisation de notre projet
Pourquoi c'est important ?

Cette préparation permet de s'organiser et de mettre à plat notre plan d'action
Cela permet aussi d'appliquer l'analyse de la maquette et de revenir dessus si besoin est
Une bonne structure de projet permet d'éviter de nombreux problèmes plus tard dans la réalisation de celui-ci.

## Étape 2 - Faire tout le HTML

Dans un premier temps il faut bien analyser la maquette transmise pour comprendre quelle structure nous allons décider de mettre en place. D'où commence le header, où vais-je mettre des sections (si nécessaire), où va être le footer, etc.

Puis créer les différents dossiers et fichiers.

S'attaquer au HTML

## Étape 3 - Mise en forme CSS

Rendre le site joli.

### Pourquoi seulement maintenant ?

Il est plus simple de peintre une peinture si la toile est déjà faite ? C'est pareil avec un site. Plus le HTML sera propre et réfléchi plus le css sera simple à écrire.

## Deuxième jour : Etape 4 - le PHP

## Les bases

relecture des bases à travers des fiches de révisions

## Index.php

Création de la page index.php, depuis la page index.html

### Include

En PHP il est possible de créer des pages en incluant des "templates" via la fonction Include ou Required. Nous ferons comment créer les templates dans un fichiers inc.
Templates :
- header.php
- footer.php

### Réception de données du formulaire

Nous allons voir comment récupérer les données du formulaire (transmisent sous la forme d'un tableau généré automatiquement).
Ils nous serviront à les intégrer dans nos deux pages seulement avec ce simple bout de code --> include "header.php"; et include "footer.php";

Nous utiliserons $_method['key'];.
Nous verrons filter_input et les conditons. 
