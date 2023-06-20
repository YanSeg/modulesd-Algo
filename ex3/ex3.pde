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
