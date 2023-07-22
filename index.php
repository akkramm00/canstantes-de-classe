<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
class Facture{
  const TVA = 20 ; //instancier une constante de classe 
  public function montantTTC($ht) {
  return $ht*(1+20/100);
  }
}
$facture1 = new Facture();
echo $facture1 ->montantTTC(1000);
echo "<br>";
echo Facture::TVA ;// "::" s'appelle l'operateur de resolution de porté.
?> 

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>