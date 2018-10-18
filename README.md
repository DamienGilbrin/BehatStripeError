**Bug Stripe Element**

Le but de cette branche est de reproduite le bug de saisie de carte bancaire sous chrome 69.
Ici je lance un simple script Behat (voir le fichier tests/Behaviout/Feature/Interface/Stripe.feature et tests/Behaviour/Bootstrap/Context/StripeContext.php)
On constate ici que l'on doit saisir "4242424242424242" or à l'écran le résultat est très aléatoire "4424224242424..."
J'ai volontèrement figé la version de elgalu/selenium à 3.14.0-p10 dans le docker-compose pour garder la version 69 de Chrome.

Si on teste ce même code avec la version 3.14.0-p2 correspondant à Chrome 68, cela fonctionne !

Bonne change pour le bug !


**Installer et lancer le projet**

- Docker d'installé sur votre machine
- Récupérer les sources de ce repo (git clone)
- Lancer les container Docker via la commande `docker-compose up` (un peut long le premier lancement/build)
- Récupérer les vendor : Lancer la commande `docker-compose exec php composer install`


**Reprodurie le bug behat**

- Lancer le test (bug) behat : `docker-compose exec php php ./vendor/bin/behat`


**Pour me contacter**

Damien Gilbrin
contact@damiengilbrin.fr
https://www.damiengilbrin.fr
