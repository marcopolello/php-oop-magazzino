<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <?php
      // Definire la classe Magazzino e la classe Prodotto nel seguente modo:

      // Magazzino: definire gli attributi per nome, location e prodotti contenuti (array);
      // definire inoltre costruttore con solo nome e location obbligatori

      // Prodotto: definire gli attributi per nome, peso e prezzo
    ?>
  </head>
  <body>

    <div class="container">

      <?php

        class WareHouse {
          public $name;
          public $location;
          public $products;

          public function __construct($name, $location){
            $this->name = $name;
            $this->location = $location;
          }
          function set_warehouse() {
            echo "<h1>Nome Magazzino: {$this->name} <br>
            situato in {$this->location} <br>
            e contiene i seguenti prodotti: {$this->products}</h1>";
          }
        }

        class Product {
          public $name;
          public $weight;
          public $price;

            function set_prod($name, $weight, $price) {
              $this->name = $name;
              $this->weight = $weight;
              $this->price = $price;
            }
            function get_prod() {
              echo "The product name is: {$this->name}, <br>
              the weight is: {$this->weight} <br>
              and this is the price: {$this->price}";
            }
        }

        $warehouse = new WareHouse("Magazzino#1", "Saonara(Ve)");
        $warehouse -> set_warehouse();
        $product1 = new Product();
        $product1 -> set_prod("frigo", "45kg", "350€");
        $product2 = new Product();
        $product2 -> set_prod("playstation", "4kg", "250€");
        $product3 = new Product();
        $product3 -> set_prod("notebook", "3kg", "880€");
        $warehouse -> products[] = $product1;
        $warehouse -> products[] = $product2;
        $warehouse -> products[] = $product3;


        var_dump($warehouse);
        // var_dump($product1);

        ?>
          <h4 class="">
            <?php echo $product1->get_prod()?>
          </h4>
          <h4 class="">
            <?php echo $product2->get_prod()?>
          </h4>
          <h4 class="">
            <?php echo $product3->get_prod()?>
          </h4><?php






      ?>

    </div>




  </body>
</html>
