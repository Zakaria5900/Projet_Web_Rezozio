## Projet Web
# nom: projet Rézozio
# realisée par: Salah Zakaria OUAICHOUCHE
			   

## Comment lancer le projet
- Taper dans l'url de votre navigateur pour accéder à la page d'accueil
```sh
http://webtp.fil.univ-lille1.fr/~ouaichouche/ProjetWeb2
```
en local
```sh
http://localhost/Projet_Web_Rezozio
```

## Thème du projet
Rézozio est un site de publication de messages. Un utilisateur enregistré sur le site peut publier des messages. Il peut aussi s'abonner aux publications d'un ou plusieurs autres utilisateurs («suivre» d'autres utilisateurs). Tous les messages publiés sur Rézozio sont publics et peuvent être consultés par tous, sans identification.

## Quelques informations liées au travail :
- La page d’accueil affiche la liste de tous les messages publiés sur le réseau et dispose aussi de deux boutons « s’inscrire » et « se connecter ».

- Un formulaire de recherche des utilisateurs est mis à disposition « Trier Message par ». Dans le cas d’une recherche fructueuse la liste des utilisateurs correspondants à la recherche est affichée en dessous du formulaire.

- Un clic sur un pseudo d’utilisateur (sur les mentions ou sur la liste des utilisateurs recherchés) affiche des détails sur l’utilisateur ainsi qu’une photo de profil de taille 256x256(que je n’ai pas réussi à afficher).

- Un clic sur le bouton « s’inscrire » permet d’afficher un formulaire d’inscription dont les champs à remplir par l’utilisateur sont : Login, Pseudo, Mot de passe, l’envoi de ce formulaire enregistrera toutes ces coordonnées dans la base de données.

- Le mot de passe est crypté avant d’être enregistré sur la base de données.

- Le bouton « se connecter » permet d’afficher un formulaire dont les champs à remplir par l’utilisateur sont : Login et Mot de passe qui permet à l’utilisateur se connecter afin de pouvoir envoyer des messages.

- Quand l’utilisateur est connecté les boutons « s’inscrire » et « se connecter » ne s’affichent plus. Des nouveaux boutons s’afficheront « Fil des Message » « Mon Profil » « Mes Abonnements » « Mes Abonnés » et « se déconnecter ».

- Le bouton « Mon profil » permet d’afficher un formulaire permettant à l’utilisateur de modifier les informations de son profil sauf son pseudo et mètre a jour l’avatar.

- Le bouton « Fil des Message » permet à l’utilisateur de poster un message ou de trier les messages déjà publier.

- Le bouton « Mes Abonnements » permet à l’utilisateur de voir ses abonnements et de pouvoir se désabonner.

- Le bouton « Mes Abonnés » permet à l’utilisateur de voir ses abonnés.

- le bouton « se déconnecter » permet quant à lui à l’utilisateur de se déconnecter du profil, lui rediriger vers la page principale et de pouvoir toujours faire un tri sur les messages publiés sur le réseau même en mode déconnecté.

## Structuration du travail

ProjetWeb2
----------
### index.php
### credits.php
### images
### style
- homeStyle.css

### lib
- common_service php
- DataLayer.class.php
- db_params.php
- RequestParameters.class.php
- watchdog.php

### views
- formMessage.php
- formUserProfil.php
- pageComplet.php
- pageUpdateProfile.php

### js
- accueil.js
- fetchUtils.js
- gestion_abonne.js
- gestion_abonnement.js
- gestion_poste.js
- gestionUpdate.js
- getprofile.js
- help.js
- log.js

### services
- createUser.php
- findUsers.php
- findMessages.php
- getAvatar.php
- getMessage.php
- getUser.php
- login.php
- logout.php
- postMessage.php
- setProfil.php
- uploadAvatar.php
- findFollowedMessages.php
- follow.php
- getFollowers.php
- getProfile.php
- getSubscriptions.php
- unfollow.php

## Description des services réalisés

### services/getUser.php :
- Envoie les informations de profil (sauf l'image).

### services/getMessage.php :
- Donne le descriptif complet d'un message.

### services/getAvatar.php :
- Envoie l'image de profil.
- En cas de succès, ce service renvoie une image (et non un objet JSON). La réponse JSON standard n'est renvoyée qu'en cas d'échec.

### services/findMessages.php :
- Liste de messages correspondant aux critères passés en argument. Les critères sont cumulatifs. Un critère absent ou vide n'est pas appliqué.

### services/findUsers.php :
- Donne la Liste d'utilisateurs après une recherche.

### services/postMessage.php :
- Service accessible en mode POST uniquement. Il permet l’envoi d'un message.

### services/createUser.php :
- Service accessible en mode POST uniquement. Il permet la création d'un nouvel utilisateur.

### services/setProfile.php :
- Service accessible en mode POST uniquement qui permet la mise à jour du profil.

### services/uploadAvatar.php :
- Service accessible en mode POST uniquement. Il permet l’enregistrement ou la mise à jour de l'image de profil. Ce service ne fonctionne que si une session est ouverte pour un utilisateur authentifié.

### services/findFollowedMessages.php :
- Donne la Liste des messages après une recherche.

### services/follow.php :
- Service accessible en mode POST uniquement. Il permet de s’abonner à un autre utilisateur.

### services/getFollowers.php :
- Donne la Liste des abonnés.

### services/getProfile.php :
- Donne les informations de profil

### services/getSubscriptions.php : 
- Donne la Liste des abonnements.

### services/unfollow.php : Permet de se désabonner. services/getAvatar.php:
- Permet de récupérer un avatar de la base de données.

### services/uploadAvatar.php:
- Permet de charger une photo de profil.


## Pour accéder à la page de crédit
Le lien vers la page de crédit se trouve sur la page d'accueil (CRÉDIT).
Ou bien en rentrant comme url
```sh
http://webtp.fil.univ-lille1.fr/~ouaichouche/ProjetWeb2/credits.php
```
en local
```sh
http://localhost/credit.php
```
Pour revenir à la page d'accueil cliquez sur sur "Accueil"