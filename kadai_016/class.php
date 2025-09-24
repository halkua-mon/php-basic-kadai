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
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // インスタンス化する
    $food = new Food('potato', 250);

    // インスタンス$foodの各プロパティの値を出力する
    print_r($food);

   
    class Animal {
      private $name;
      private $height;
      private $weight;

      //コンストラクタ
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    // インスタンス化
    $Animal = new Animal('dog', 60, 5000);
    // インスタンス$Animalの各プロパティを出力する
    print_r($Animal);

    // プロパティにアクセスし、値を出力する
    echo $food->price;
    echo $Animal->height;

    ?>
   </p>
</body>
</html>