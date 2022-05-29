# Projet_Ecommerce
### Mehdi28630 & WiXxAr

Installation du projet :

Vous aurez besoin de télécharger git : https://git-scm.com/book/fr/v2/D%C3%A9marrage-rapide-Installation-de-Git

Php et composer seront nécessaires pour l'utilisation du site. https://windows.php.net/download/ , https://getcomposer.org/download/

De plus, prenez soin d'installer le bundle symfony au préalable : https://symfony.com/download

Ensuite, dans le dossier où vous souhaiterez placer votre projet vous effectuerez les commandes suivantes : 
```
$ git clone https://github.com/Mehdi28630/Projet_Ecommerce.git
$ cd Projet_Ecommerce
$ composer install
$ symfony server:start

```
Pour que le site soit fonctionnel, vous devrez importer le script fourni dans "/script_bdd" dans une nouvelle base appelée ecommerce.

### ATTENTION : le fichier .env pour la BDD servant ici d'exemple est configuré pour une base de données dont l'utilisateur est root, sans mot de passe.
