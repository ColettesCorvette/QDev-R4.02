# QDev-R4.02

# Comptes-rendus de Thomas Fuchs, ressource R4.02 - Qualité de développement #

## Transparents #1 ##
Mes manipulations :

 - cloner le dépôt PrivateBin 
 - utiliser la commande make pour compiler avec les dépendences 
 - démarrage du serveur php
 
Il y avait du code que voilà :
```
git clone git@github.com:floo51/PrivateBin.git

make

make start

```
make :

```
bin/composer install
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Nothing to install, update or remove
Package yzalis/identicon is abandoned, you should avoid using it. No replacement was suggested.
Generating optimized autoload files
33 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
```

make start :

```
php -S localhost:8080
        PHP 8.3.16 Development Server (http://localhost:8080) started
```



## Transparents #2 ##

Mes Manipulations :

Pour celui-ci, j'ai fait :
 - créer une nouvelle branche nommée nouvelle_branche
 - modification du fichier Configuration.php
 - git add -p
 
 Lorsqu'on change de branche, le working direcory se remet au niveau de la branche d'avant, donc les modifications effectuées ne sont plus présentes.
 
code : 


```
git branch nouvelle_branche
git add -p
git commit -m ""
git push
git checkout main
```


```

thomas@fedora:~/Qdev/QDev-R4.02$ git branch
  main
* nouvelle_branche

thomas@fedora:~/Qdev/QDev-R4.02/PrivateBin/lib$ git status
Sur la branche nouvelle_branche
Modifications qui ne seront pas validées :
  (utilisez "git add <fichier>..." pour mettre à jour ce qui sera validé)
  (utilisez "git restore <fichier>..." pour annuler les modifications dans le répertoire de travail)
        modifié :         Configuration.php
        modifié :         ../../README.md

aucune modification n'a été ajoutée à la validation (utilisez "git add" ou "git commit -a")

```

```
thomas@fedora:~/Qdev/QDev-R4.02/PrivateBin/lib$ git add -p
diff --git a/PrivateBin/lib/Configuration.php b/PrivateBin/lib/Configuration.php
index 452e561..91078e9 100644
--- a/PrivateBin/lib/Configuration.php
+++ b/PrivateBin/lib/Configuration.php
@@ -50,7 +50,7 @@ class Configuration
             'info'                     => 'More information on the <a href=\'https://privatebin.info/\'>project page</a>.',
             'notice'                   => '',
             'languageselection'        => false,
-            'languagedefault'          => '',
+            'languagedefault'          => 'fr',
             'urlshortener'             => '',
             'qrcode'                   => true,
             'icon'                     => 'identicon',

```

```
@@ -65,6 +65,7 @@ class Configuration
         'expire_options' => array(
             '5min'   => 300,
             '10min'  => 600,
+            '30min' => 1800,   
             '1hour'  => 3600,
             '1day'   => 86400,
             '1week'  => 604800,
(2/2) Indexer cette section [y,n,q,a,d,K,g,/,e,p,?] ? y
```


## Transparents #4 ##

Mes Manipulations :

Pour celui-ci, j'ai fait :
  
  - création d'une branche nommée "change-default-expiration" depuis le main
  - modification du fichier de Configuration.php, et commit sur cette branche
  - basculer sur la branche main
  - modification du fichier Configuration.php
  
code : 

```
git branch change-default-expiration
git commit
git checkout main
git commit
git merge change-default-expiration

```


resolution des conflits :


modification à la main

```
git add PrivateBin/lib/Configuration.php
git status
git commit et git merge --continue sont équivalents dans ce contexte
```


```
thomas@fedora:~/Qdev/QDev-R4.02$ git merge change-default-expiration 
Fusion automatique de PrivateBin/lib/Configuration.php
CONFLIT (contenu) : Conflit de fusion dans PrivateBin/lib/Configuration.php
La fusion automatique a échoué ; réglez les conflits et validez le résultat.
```


```
Sur la branche main
Votre branche est à jour avec 'origin/main'.

Vous avez des chemins non fusionnés.
  (réglez les conflits puis lancez "git commit")
  (utilisez "git merge --abort" pour annuler la fusion)

Modifications qui seront validées :
        modifié :         README.md

Chemins non fusionnés :
  (utilisez "git add <fichier>..." pour marquer comme résolu)
        modifié des deux côtés :  PrivateBin/lib/Configuration.php
```


```
        'expire' => array(
<<<<<<< HEAD
            'default' => '1day',
=======
            'default' => '1month',
>>>>>>> change-default-expiration
        ),
```

```
thomas@fedora:~/Qdev/QDev-R4.02$ git status
Sur la branche main
Votre branche est à jour avec 'origin/main'.

Tous les conflits sont réglés mais la fusion n'est pas terminée.
  (utilisez "git commit" pour terminer la fusion)

Modifications qui seront validées :
        modifié :         PrivateBin/lib/Configuration.php
        modifié :         README.md

```





  
