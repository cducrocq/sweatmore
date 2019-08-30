# Sweat More <!-- omit in toc -->

- [TODO](TODO.md)

## Contents <!-- omit in toc -->

- [Notre choix d'architecture](#notre-choix-darchitecture)
- [Pour participer au projet](#pour-participer-au-projet)
- [Mise à jour avec le dépôt commun](#mise-à-jour-avec-le-dépôt-commun)
- [A lire](#a-lire)

---

## Notre choix d'architecture

Modèle-vue-contrôleur ou MVC est un motif d'architecture logicielle destiné aux interfaces graphiques lancé en 1978 et très populaire pour les applications web. Le motif est composé de trois types de modules ayant trois responsabilités différentes : les modèles, les vues et les contrôleurs.

- Un modèle (Model) contient les données à afficher.
- Une vue (View) contient la présentation de l'interface graphique. Le dossier Templates
- Un contrôleur (Controller) contient la logique concernant les actions effectuées par l'utilisateur.

## Pour participer au projet

- Forker le dépôt,
- Créer une branche avec le nom de votre fonctionalité,
- Faites vos commit,
- Push sur origin (votre fork),
- Pull-Request de votre branche depuis le github de votre fork,
- Resoudre les conflits et merge si besoin
- Attendre la validation

## Mise à jour avec le dépôt commun

[Syncing a fork by Github](https://help.github.com/en/articles/syncing-a-fork)

```sh
# Afficher la liste des depots distant
git remote -v

# Ajoute le depot commun
git remote add upstream https://github.com/bastienrc/sweatmore

# Mise à jour
# Il faut se positionner sur master
$ git fetch upstream
$ git checkout master
$ git merge upstream/master
```

## A lire

- https://freefrontend.com/css-forms
- https://freefrontend.com/css-sliders
- https://freefrontend.com/css-tables
- https://freefrontend.com/css-headers-footers
- https://mdbootstrap.com/docs/jquery/components/cards
