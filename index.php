GitHub - GitLab

ouvrir powershell ou GitBash ou Visual Code Studio qui propose des lignes de commandes directement integr�s dans le logiciel de code


pour crer la commande : Git init
c'est un dossier cach� donc il faut dans affichage, selectionn� "Extensions de noms de fichiers" 
et "Elements masqu�s"
Mieux vaut toujours copi� le dossier parent, celi a la racine car certain dossier cach� pourrai 
ne pas etre copi�
La nature du fichier n'est pas importante

commande git status : donne le statut du dossier git pui git add qui permet d'ajouter le fichier cr�er au git

des que l'on fait des modifications importantes : git add

Pour faire un comit (mettre en ligne la version de son travail, permet de faire des backup) :
/!\ Il faut absolument documenter son commit A CHAQUE COMMIT sinon ca bug /!\ donc faire git commit -m"blablabla" 
S'il faut ajouter plusieurs fichiers sur un staging 


GitHub est une plasteforme qui travaille avec Git et apporte des fonctionnalit� que ce dernier n'a pas
Pour cr�er un nouveau repertoire : 
- "New repository" avec le plus en haut a droite.
- Donner un nom au dossier et cr�er
- choisir la fonction "push an existing repository..." c'est pour faire le remote des bakcup --> git remote add origin https://github.com//nomProjet
git push -u origin master