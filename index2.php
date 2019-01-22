<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite.
Avremo poi sempre per ogni array i punti fatti dalla squadra di casa e i
punti fatti dalla squadra in trasferta. Stampiamo a schermo tutte le
partite con questo schema, tenendo conto che il punteggio potrebbe non
essere disponibile
Olimpia Milano - Cantù | 55-60 -->


<?php
$matchday = [
  [
    "locali" => "Armani Exchange Milano",
    "ospiti"=> "Umana Reyer Venezia",
    "score_locali"=> 110,
    "score_ospiti"=> 90,
  ],
  [
    "locali" => "Sidigas Avellino",
    "ospiti"=> "Vanoli Cremona",
    "score_locali"=> 101,
    "score_ospiti"=> 97,
  ],
  [
    "locali" => "Banco di Sardegna Sassari",
    "ospiti"=> "Openjobmetis Varese",
  ],
]
?>


<?php
foreach ($matchday as $match) {
?>
<?php
?>
<li>
  <?php echo $match["locali"]; ?>
  -
  <?php echo $match["ospiti"]; ?>
  |
  <?php if(
      !empty($match["score_locali"]) &&
      !empty($match["score_ospiti"])){
        ?>
       <?php echo $match["score_locali"]; ?>
       -
       <?php echo $match["score_ospiti"];
     }
     else{
       ?>
       Partita ancora da disputare
       <?php
     }?>
   </li>
<?php
}
?>
