# Principe final
Deux personnages qui se tapent via du PHP en POO.

## Exo 1 : initialisation des personnages
Créer une classe ```Character```, dans lequel les personnages auront les attributs suivant :
- des points de vie;
- des points de magie;
- un nom
- des points de dégats;

Et une méthode :
- Attaquer : qui enlève des points de vie à l'adversaire.

## Exo 2 : mise en place du combat
Dans l'index.php, mettre en place une logique pour que le combat continue jusqu'à ce qu'un des deux joueur soit KO (healthPoints = 0).

## Exo 3 : patcher les points de vie
Faire en sorte que les points de vie ne peuvent pas descendre en dessous de 0.

## Exo 4 : les sous-classes de personnages
Créer un système avec des sous-classes.
Mettre en place deux sous-classes : Warrior et Mage.

## Exo 5 : améliorer le système d'appel des classes.
Trouver une solution plus performante pour require les classes dont on a besoin.

## Exo 6 : caractéristiques du Mage
- Il a 5 fois plus de points de magie que les autres.
- Il a une attaque (damage) de 5.
- Son attaque : Boule de feu. 
    - Utilise des poins de magie, aléatoirement entre 1 et 20.
    - Les dégâts de la boule de feu sont égaux au coût en point de magie * nombre aléatoire entre 1 et 3.
- 3 possibilités à l'attaque :
    - Il a assez de points de magie : sort normal.
    - Il n'a plus assez de points de magie : sort lancé avec les points de magie restant.
    - Si plus de points de magie : il donne un coup de bâton.

## Exo 7 : Bouclier magique du Mage
Le Mage à maintenant 2 choix d'action :
- 70% de chance de faire sa boule de feu.
- 30% de chance de faire son bouclier magique.

Caractéristiques du bouclier magique :
- Absorber la prochaine attaque dirigée sur le Mage.
- Une fois qu'il a absorbé une attaque, il disparait.
- Tant que le bouclier magique est actif, le Mage ne le relance pas.

## Exo 8 : Attaque personnalisée
Faire en sorte que chaque classe est sa propre méthode de base pour attaquer.

## Exo 9 : la rage du Warrior
Ajout d'une nouvelle action au Warrior : sa rage
Caractéristiques :
- Il a 2/10 chance de lancer sa rage.
- Si rage active, alors les dégats de son attaque suivante sont multipliés par un nombre aléatoire entre 1.5 et 3.
- Comme le bouclier, si la rage est active, il ne la relance pas.

## Exo 10 : formalisation de l'HTML
Intégrer notre code dans un doctype.