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

## ################################### GIT 2ND RENDU ##########################################


## Transparents # 3 ##

Mes Manipulations :

Pour celui-ci, j'ai fait :
  
  - git checkout main
  - git git merge nouvelle_branche
  - git log
  - git branch -d nouvelle_branche ou -D pour forcer la suppression en cas de non-fusion
  


  
Les commmits de la branche main sont toujours présents
Si la branche alternative = branche main et n'apporte plus de modifications, ont peut la supprimer
  
code : 

```
commit 74d7aea5662645aad85c8d22bc240db17ce57dd2 (origin/nouvelle_branche, nouvelle_branche)
Author: Thomas <thomas.fuchs6@etu.univ-lorraine.fr>
Date:   Tue Jan 21 13:24:57 2025 +0100

    màj readme

commit 17f9113d07c7a8a9b74b72ffa95a789e057b18c8
Author: Thomas <thomas.fuchs6@etu.univ-lorraine.fr>
Date:   Tue Jan 21 13:20:40 2025 +0100

    màj readme

commit 3955ccf01c052d7145b4625cd9fca4f77953cc2c
Author: Thomas <thomas.fuchs6@etu.univ-lorraine.fr>
Date:   Tue Jan 21 13:15:07 2025 +0100

    màj readme

commit 5c610a66172b2d1a8a368e51703b3c10c611cf09
Author: Thomas <thomas.fuchs6@etu.univ-lorraine.fr>
Date:   Tue Jan 21 13:09:47 2025 +0100

    modifications

commit b01a36e91b2ae228f70a745e5ca94ec9de5a7dfe
Author: Thomas <thomas.fuchs6@etu.univ-lorraine.fr>
Date:   Tue Jan 21 11:10:26 2025 +0100

    màj readme

commit 4b54b59cb97fe96b7f5ca860b4afecdfb839a8f5
Author: Thomas <thomas.fuchs6@etu.univ-lorraine.fr>
Date:   Tue Jan 21 11:06:30 2025 +0100

    ajouter dossier du programme

commit 077b0bfdeea8ebdc954f897ad3fb934593e3699e
Author: Thomas <147412616+ColettesCorvette@users.noreply.github.com>
Date:   Mon Jan 20 15:41:56 2025 +0100

    Initial
    
(END)

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


## Transparents #5 ##

Mes Manipulations :

Pour celui-ci, j'ai fait :
  
  - git commit --amend -m "Oops" //test
  - git checkout rename-to-charlebin
  - git log
  - make start
  - git bisect bad
  - git bisect good 065f28cb677c36f7a8054a27c8983a1b6d65b1ae
  - git bisect next
  - git bisect reset //pour terminer la bissection

code : 



```
commit f4eb0662a4778e192d9689dada5b347688e257dd
Author: Florian Ferbach <florian.ferbach@univ-lorraine.fr>
Date:   Sat Jan 21 11:00:03 2023 +0100

    Rename page title to CharleBin
    
  
    
thomas@fedora:~/Qdev-S4/PrivateBin$ git bisect good 9409db7cdc3069e0f6d4b62e17d40c8c9a96f7f2
Bissection : 0 révision à tester après ceci (à peu près 0 étape)
[f4eb0662a4778e192d9689dada5b347688e257dd] 
  
    Rename page title to CharleBin


commit 14c21d953f4752340fbd506ca95cdec92a1b6f0b (HEAD)
Author: Florian Ferbach <florian.ferbach@univ-lorraine.fr>
Date:   Sat Jan 21 10:50:29 2023 +0100

    Replace android icon



thomas@fedora:~/Qdev-S4/PrivateBin$ git bisect good 065f28cb677c36f7a8054a27c8983a1b6d65b1ae
Bissection : 3 révisions à tester après ceci (à peu près 2 étapes)
[e43cc820431e81ea43c1830b05f98730f64ce9ee] 

    Replace osx icon
    
```

Le mauvais commit était "Replace android icon"

## Transparents #6 ##

Mes manipulations :


Pour celui-ci, j'ai fait :
  
  - git bisect run make test

code : 


```
thomas@fedora:~/Qdev-S4/PrivateBin$ git bisect run make test
Lancement de 'make' 'test'
curl -s localhost:8080 | grep -q "<title>PrivateBin</title>"
make: *** [makefile:8: test] Error 1
Bissection : 1 révision à tester après ceci (à peu près 1 étape)
[522f5852eb78eeb3fef370d703446c612893d1f1] Replace iOS icon
Lancement de 'make' 'test'
curl -s localhost:8080 | grep -q "<title>PrivateBin</title>"
make: *** [makefile:8: test] Error 1
Bissection : 0 révision à tester après ceci (à peu près 0 étape)
[14c21d953f4752340fbd506ca95cdec92a1b6f0b] Replace android icon
Lancement de 'make' 'test'
curl -s localhost:8080 | grep -q "<title>PrivateBin</title>"
make: *** [makefile:8: test] Error 1
14c21d953f4752340fbd506ca95cdec92a1b6f0b is the first bad commit
commit 14c21d953f4752340fbd506ca95cdec92a1b6f0b
Author: Florian Ferbach <florian.ferbach@univ-lorraine.fr>
Date:   Sat Jan 21 10:50:29 2023 +0100

    Replace android icon

 img/android-chrome-192x192.png | Bin 5557 -> 14554 bytes
 1 file changed, 0 insertions(+), 0 deletions(-)
la bissection a trouvé le premier mauvais commit


```

la méthode suivante a trouvé le même mauvais commit
  
