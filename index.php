<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
class Facture{
  const TVA = 20 ; //instancier une constante de classe 
  public function montantTTC($ht) {
  return $ht*(1+self::TVA /100);// "self" fait reference a la classe courante.
  }
}
$facture1 = new Facture();
echo $facture1 ->montantTTC(1000);
echo "<br>";
// "::" s'appelle l'operateur de resolution de porté.
// la constante de classe sert à stoker une valeur inchangeable a l'interieur d'une classe , on y accède aasa valeur avec l'operateur de résolution de porté ::/ a l'interieur de la classe ,on utilise le terme "self" èsuivi de  "::" pour l'appeler.
?> 


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>