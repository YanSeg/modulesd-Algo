String X = "a  a   dfdf ddf  vxcvxcvc    jdsjqf sd ddzdz ds ";
char o =' ';

int nb = 0;
for (int i=0; i < X.length(); i++) {
  if (i==0 &&  X.charAt(i)!=o || X.charAt(i-1)==o && X.charAt(i)!=o) {
    nb++;
  }
}
println (nb);
