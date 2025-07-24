<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       // クラスを定義する
       class Food {
        // プロパティを定義する
        public $name;
        public $price;

        //メソッドを定義する
        public function __construct($name, $price){
          $this->name = $name;
          $this->price = $price;
        }

        public function getPrice(){
          return $this->price;
        }
       }

       class Animal{
        private $name;
        private $height;
        private $weight;
      
        public function __construct($name, $height, $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        public function getHeight(){
          return $this->height;
        }
       }

       //インスタンス化する
      $potato = new Food("potato", 250);
      $animal = new Animal("dog", 60, 5000);

      print_r($potato);
      print_r($animal);

      //値の取得と出力
      echo $potato->getPrice() . "\n";
      echo $animal->getHeight() . "\n";

      ?>

   </p>

</body>

</html>