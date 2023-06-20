String phrase = "ma phrase de tset pour. compter  ... les mots .. je met plein d'  espaces";
String[] monTableau = splitTokens(phrase);
// Affichage du tableau
for (int i = 0; i < monTableau.length; i++) {
  println(monTableau[i]);
}
int nbW=0;
for (int i=0; i < monTableau.length; i++) { //<>//
  if (!monTableau[i].isEmpty() && monTableau[i].equals(".") == false && monTableau[i].equals("..") == false&& monTableau[i].equals("...")==false)
  nbW++;
}

  println (nbW);
