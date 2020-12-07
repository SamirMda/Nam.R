# API

## Pré-requis

Pour faire fonctionnerl'API veuillez ne pas changer l'architecture des dossiers contenue dans le git. La présence du dossier database ainsi que le fichier `database.json` sont nécessaire au bon déroulement du projet. 

Environnement technique nécessaire :
* NodeJS
* Npm

## Installation

Installer le projet:  

    $ npm init 

Lancer par la suite la commande:

    $ node app.js
    
Le serveur est maintenant en route et disponible à l'adresse suivante: `localhost:8080`

Les données sont disponibles sur l'adresses suivantes: `localhost:8080/list`

## Test

Les tests unitaire sont dans le dossier `test`

Mise en place de l'environnement de test:

    $ sudo apt-get install mocha

Lancement du test:

    $ mocha
