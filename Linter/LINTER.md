


## Transparent 1 : 


php -l test.php

find . - type f -name 'test.php' -exec php -l {} \;

```
PHP Parse error:  syntax error, unexpected end of file, expecting variable or "${" or "{$" in test.php on line 42
Errors parsing test.php
```


composer require --dev "squizlabs/php_codesniffer=3.*"
```
./composer.json has been created
Running composer update squizlabs/php_codesniffer
Loading composer repositories with package information
Updating dependencies
Lock file operations: 1 install, 0 updates, 0 removals
  - Locking squizlabs/php_codesniffer (3.11.3)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Downloading squizlabs/php_codesniffer (3.11.3)
  - Installing squizlabs/php_codesniffer (3.11.3): Extracting archive
Generating autoload files
1 package you are using is looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
```

composer require --dev "phpmd/phpmd=@stable"
```
./composer.json has been updated
Running composer update phpmd/phpmd
Loading composer repositories with package information
Updating dependencies
Lock file operations: 14 installs, 0 updates, 0 removals
  - Locking composer/pcre (3.3.2)
  - Locking composer/xdebug-handler (3.0.5)
  - Locking pdepend/pdepend (2.16.2)
  - Locking phpmd/phpmd (2.15.0)
  - Locking psr/container (2.0.2)
  - Locking psr/log (3.0.2)
  - Locking symfony/config (v7.2.3)
  - Locking symfony/dependency-injection (v7.2.3)
  - Locking symfony/deprecation-contracts (v3.5.1)
  - Locking symfony/filesystem (v7.2.0)
  - Locking symfony/polyfill-ctype (v1.31.0)
  - Locking symfony/polyfill-mbstring (v1.31.0)
  - Locking symfony/service-contracts (v3.5.1)
  - Locking symfony/var-exporter (v7.2.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 14 installs, 0 updates, 0 removals
  - Downloading composer/pcre (3.3.2)
  - Downloading symfony/polyfill-mbstring (v1.31.0)
  - Downloading symfony/polyfill-ctype (v1.31.0)
  - Downloading symfony/filesystem (v7.2.0)
  - Downloading symfony/var-exporter (v7.2.0)
  - Downloading symfony/deprecation-contracts (v3.5.1)
  - Downloading psr/container (2.0.2)
  - Downloading symfony/service-contracts (v3.5.1)
  - Downloading symfony/dependency-injection (v7.2.3)
  - Downloading symfony/config (v7.2.3)
  - Downloading pdepend/pdepend (2.16.2)
  - Downloading psr/log (3.0.2)
  - Downloading composer/xdebug-handler (3.0.5)
  - Downloading phpmd/phpmd (2.15.0)
  - Installing composer/pcre (3.3.2): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.31.0): Extracting archive
  - Installing symfony/polyfill-ctype (v1.31.0): Extracting archive
  - Installing symfony/filesystem (v7.2.0): Extracting archive
  - Installing symfony/var-exporter (v7.2.0): Extracting archive
  - Installing symfony/deprecation-contracts (v3.5.1): Extracting archive
  - Installing psr/container (2.0.2): Extracting archive
  - Installing symfony/service-contracts (v3.5.1): Extracting archive
  - Installing symfony/dependency-injection (v7.2.3): Extracting archive
  - Installing symfony/config (v7.2.3): Extracting archive
  - Installing pdepend/pdepend (2.16.2): Extracting archive
  - Installing psr/log (3.0.2): Extracting archive
  - Installing composer/xdebug-handler (3.0.5): Extracting archive
  - Installing phpmd/phpmd (2.15.0): Extracting archive
Generating autoload files
13 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
```

./vendor/bin/phpcs --config-set default_standard PSR12

```
Using config file: /home/thomas/Qdev-S4/QDev-R4.02/Linter/vendor/squizlabs/php_codesniffer/CodeSniffer.conf

Config value "default_standard" added successfully
```

make lint 

```
PHP Parse error:  syntax error, unexpected end of file, expecting variable or "${" or "{$" in ./test.php on line 42
Errors parsing ./test.php
No syntax errors detected in ./vendor/squizlabs/php_codesniffer/autoload.php
No syntax errors detected in ./vendor/squizlabs/php_codesniffer/src/Config.php
No syntax errors detected in ./vendor/squizlabs/php_codesniffer/src/Exceptions/DeepExitException.php
No syntax errors detected in ./vendor/squizlabs/php_codesniffer/src/Exceptions/RuntimeException.php

.....

```

création makefile et ruleset.xml

## Transparent 2 :

composer require --dev "friendsofphp/php-cs-fixer"

```
./composer.json has been updated
Running composer update friendsofphp/php-cs-fixer
Loading composer repositories with package information
Updating dependencies
Lock file operations: 26 installs, 0 updates, 0 removals
  - Locking clue/ndjson-react (v1.3.0)
  - Locking composer/semver (3.4.3)
  - Locking evenement/evenement (v3.0.2)
  - Locking fidry/cpu-core-counter (1.2.0)
  - Locking friendsofphp/php-cs-fixer (v3.68.5)
  - Locking psr/event-dispatcher (1.0.0)
  - Locking react/cache (v1.2.0)
  - Locking react/child-process (v0.6.6)
  - Locking react/dns (v1.13.0)
  - Locking react/event-loop (v1.5.0)
  - Locking react/promise (v3.2.0)
  - Locking react/socket (v1.16.0)
  - Locking react/stream (v1.4.0)
  - Locking sebastian/diff (6.0.2)
  - Locking symfony/console (v7.2.1)
  - Locking symfony/event-dispatcher (v7.2.0)
  - Locking symfony/event-dispatcher-contracts (v3.5.1)
  - Locking symfony/finder (v7.2.2)
  
  ... etc
  
```


chmod 644 .php-cs-fixer.dist.php
chmod +x .git/hooks/pre-commit
rm -rf .php-cs-fixer.cache
./vendor/bin/php-cs-fixer fix


```
PHP CS Fixer 3.68.5 Persian Successor by Fabien Potencier, Dariusz Ruminski and contributors.
PHP runtime: 8.3.16
Running analysis on 1 core sequentially.
You can enable parallel runner and speed up the analysis! Please see usage docs for more information.
Loaded config default from "/home/thomas/Qdev-S4/QDev-R4.02/Linter/.php-cs-fixer.dist.php".
 1/1 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

   1) test.php

Fixed 1 of 1 files in 0.006 seconds, 14.00 MB memory used

```

Est-il possible de commit en ignorant le pre-commit hook ?

git commit --no-verify -m "message"








