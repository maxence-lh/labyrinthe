# 
Enoncé
Dans cet exercice, vous devrez programmer un jeu de labyrinthe en PHP. Le labyrinthe doit
faire 15 lignes sur 15 colonnes. Pour le représenter, vous devrez faire un fichier “.txt”, dans
lequel vous allez “dessiner” un labyrinthe avec des caractères.
Vous devrez ensuite ouvrir ce fichier “.txt” en PHP, pour pouvoir exploiter ce dernier et
transcrire le labyrinthe de caractères en un tableau.
Vous devrez ensuite être capable d’afficher ce tableau dans une page web.
Lorsque le jeu commence, vous devrez demander le pseudo du joueur, et le garder en
mémoire jusqu’à la fin du jeu (en l’affichant à l’écran).
La prochaine étape consistera à créer plusieurs liens :
● “gauche” : devra déplacer votre personnage à gauche
● “droite” : devra déplacer votre personnage à droite
● “haut” : devra déplacer votre personnage en haut
● “bas” : devra déplacer votre personnage en bas
● “recommencer” : devra relancer le jeu depuis le début
● “changer de pseudo” : devra permettre au joueur de changer de pseudo
A chaque clic sur un bouton, la page se rechargera et affichera le nouveau labyrinthe si vous
avez cliqué sur un bouton de déplacement.
Si vous cliquez sur “recommencer”, le jeu devra se recharger depuis le début.
Si vous cliquez sur “changer de pseudo”, le pseudo devra être changé via un champ input
que vous aurez mis à disposition.
N’hésitez pas à abuser des fonctions et / ou de la POO pour la réalisation de cet exercice.
Utilisez les sessions et / ou cookies et / ou BDD pour enregistrer l’état d’avancement du jeu,
de telle sorte que si l’on ferme la page, et la rouvre, le jeu reprenne où l’on en était.
Le fichier .txt du labyrinth devra pouvoir être changé (pas au milieu d’une partie), et votre
programme devra toujours fonctionner
Une fois votre personnage arrivé à la sortie, vous devrez afficher un message “gagné”, en
proposant de recommencer le jeu.
Bonus
Si vous vous sentez l’âme d’un guerrier n’ayant peur de rien, voici quelques petites
fonctionnalités que vous pouvez ajouter :
● proposer plusieurs niveaux de labyrinthe (plusieurs fichiers .txt) et permettre à
l’utilisateur de choisir son labyrinthe avant de commencer à jouer.
● ajouter des objets, se plaçant aléatoirement dans le labyrinthe, si la personne arrive
au bout sans les objets, il a perdu. Dès lors, afficher un message “perdu” et proposer
de recommencer.
● Ajoutez des cases “pièges” qui peuvent apparaître ou disparaître aléatoirement
durant la partie.
● Mettez votre code sur github, et ajoutez le lien du github dans vos livrables.
Livrables :
Les livrables devront être envoyés par mail à l'adresse k.niel.pro@gmail.com avant le 18
Mai à 16h. Ils doivent contenir l’ensemble de vos fichiers dans un dossier .zip. Merci d’y
joindre votre nom + prénom. Pas de nom & de prénom = 0. Pas de mail reçu de votre part :
0.
Critères de notation :
● Propreté du code (indentation, nom des variables, etc…) : 5pts
● Structure du code (l’architecture des fichiers) : 3pts
● Optimisation du code : 2 pts
● Fonctionnalité du programme (si cela marche ou non) : 30pts
● Délai de livraison par jour de retard = -5pts
● Point par fonctionnalité bonus : 2 pts
● Points pour utilisation POO bonus : 5pts
Le travail est à faire de manière individuelle, cependant rien ne vous empêche de vous
entraider sur la réflexion !
