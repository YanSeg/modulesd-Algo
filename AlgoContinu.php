
1/ Créer une fonction compteMots qui permet de compter le nombre de mots au sein
d’une chaîne de caractères. Cette fonction prend 1 paramètres en entrée (String) et
retourne un entier.


int compteCar  (String monmot, char o)
{
 int nb = 0;
 for (int i=0; i < monmot.length(); i++)
 {
 if (monmot.charAt(i) == o)
 nb++;
 }
 return nb;
}


void setup (){
  String  monmot = "monmot";
  char o = 'o';
  
 println(compteCar(monmot,o ));
  
}


______________________________________________________________________________________________________________________________________________________________________________
______________________________________________________________________________________________________________________________________________________________________________


2/Créer une fonction compteMots qui permet de compter le nombre de mots au sein
d’une chaîne de caractères. Cette fonction prend 1 paramètres en entrée (String) et
retourne un entier.


String phrase = "ma phrase de tset pour. compter  ... les mots .. je met plein d'  espaces";
String[] monTableau = splitTokens(phrase);
// Affichage du tableau
for (int i = 0; i < monTableau.length; i++) {
  println(monTableau[i]);
}
int nbW=0;
for (int i=0; i < monTableau.length; i++) {
  if (!monTableau[i].isEmpty() && monTableau[i].equals(".") == false && monTableau[i].equals("..") == false&& monTableau[i].equals("...")==false)
  nbW++;
}

  println (nbW);




Transformer une chaîne de caractères (string) -> fonction split().

https://processing.org/reference/split_.html


split()
Description
La fonction split() divise une chaîne de caractères en morceaux en utilisant un caractère ou une chaîne de caractères comme délimiteur. Le paramètre delim spécifie le caractère ou les caractères qui marquent les limites entre chaque morceau. Un tableau String[] est renvoyé, contenant chacun des morceaux.

Si le résultat est un ensemble de nombres, vous pouvez convertir le tableau String[] en un tableau float[] ou int[] en utilisant les fonctions de conversion de types int() et float(). (Voir le deuxième exemple ci-dessus.)

La fonction splitTokens() fonctionne de manière similaire, à la différence qu'elle effectue la division en utilisant une plage de caractères plutôt qu'un caractère ou une séquence spécifique.
Exemples
Copie
String men = "Chernenko,Andropov,Brezhnev";
String[] list = split(men, ',');
// list[0] est maintenant "Chernenko", list[1] est "Andropov"...
Copie
String numbers = "8 67 5 309";
int[] nums = int(split(numbers, ' '));
// nums[0] est maintenant 8, nums[1] est maintenant 67...

Dans le contexte de la condition !monTableau[i].isEmpty(), le symbole ! est appelé opérateur de négation. Il est utilisé pour inverser le résultat d'une expression booléenne.

Ainsi, !monTableau[i].isEmpty() signifie que nous vérifions si l'élément à l'index i du tableau monTableau n'est pas vide. Si l'élément est vide, la fonction isEmpty() renverra true, mais l'opérateur ! inversera cette valeur en false. Si l'élément n'est pas vide, la fonction isEmpty() renverra false, et l'opérateur ! inversera cette valeur en true.

En résumé, !monTableau[i].isEmpty() évalue à true si l'élément à l'index i du tableau monTableau n'est pas vide, et à false sinon.


______________________________________________________________________________________________________________________________________________________________________________
______________________________________________________________________________________________________________________________________________________________________________


3/Créer une fonction compteMot qui permet de compter le nombre d’occurrences d’un
mot au sein d’une chaîne de caractères. Cette fonction prend 2 paramètres en entrée
(String et String) et retourne un entier.

int compteMot (String phrase, String mot) {
  String[] monTableau = splitTokens(phrase);
  int nbW=0;

  println ("le mot rechercher est " + mot);
  println ("");
  for (int i=0; i < monTableau.length; i++) {
    println(monTableau[i]);

    if (monTableau[i].equals(mot)) {
      nbW++;
    }
  }
  return nbW++;
}


void setup () {
  String phrase = "Titouan Titouan titouan Titiouan tititouen titeiru titouan titouan";
  String mot ="titouan";
  println (compteMot( phrase, mot));
}

