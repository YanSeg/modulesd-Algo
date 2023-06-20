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

 println(compteCar(monmot,o));
}
