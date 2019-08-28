# Sweat More

- [TODO](TODO.md)

## Pour participer au projet

- Forker,
- Creer une branche avec le nom de votre fonctionalité,
- Faites vos Commit,
- Push sur origin (votre fork),
- Pull-Request depuis votre github de votre branch,
- Resoudre les conflits,
- Merge
- Attendre que je valide

## Mise à jour avec le depot commun

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

# A lire

- https://freefrontend.com/css-forms
- https://freefrontend.com/css-sliders
- https://freefrontend.com/css-tables
- https://freefrontend.com/css-headers-footers
- https://mdbootstrap.com/docs/jquery/components/cards
