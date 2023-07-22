<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
class Facture{
  public function montantTTC($ht) {
  return $ht*(1+20/100);
  }
}
$facture1 = new Facture();
echo $facture1 ->montantTTC(1000);
?> 

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>