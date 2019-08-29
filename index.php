GitHub - GitLab

ouvrir powershell ou GitBash ou Visual Code Studio qui propose des lignes de commandes directement integrés dans le logiciel de code


pour crer la commande : Git init
c'est un dossier caché donc il faut dans affichage, selectionné "Extensions de noms de fichiers" 
et "Elements masqués"
Mieux vaut toujours copié le dossier parent, celi a la racine car certain dossier caché pourrai 
ne pas etre copié
La nature du fichier n'est pas importante

commande git status : donne le statut du dossier git pui git add qui permet d'ajouter le fichier créer au git

des que l'on fait des modifications importantes : git add

Pour faire un comit (mettre en ligne la version de son travail, permet de faire des backup) :
/!\ Il faut absolument documenter son commit A CHAQUE COMMIT sinon ca bug /!\ donc faire git commit -m"blablabla" 
S'il faut ajouter plusieurs fichiers sur un staging 


GitHub est une plasteforme qui travaille avec Git et apporte des fonctionnalité que ce dernier n'a pas
Pour créer un nouveau repertoire : 
- "New repository" avec le plus en haut a droite.
- Donner un nom au dossier et créer
- choisir la fonction "push an existing repository..." c'est pour faire le remote des bakcup --> git remote add origin https://github.com//nomProjet
git push -u origin master