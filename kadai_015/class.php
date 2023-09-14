<!DOCTYPE HTML>
<head>
    <meta charset="UTF-8">
    <title>kadai015</title>
</head>
<body>
    <p>
        <?php
        class Food{
            private $name;
            private $price;

            public function show_price() {
                return $this->price;
            }

            public function __construct(string $name, int $price) { 
                $this->name = $name;
                $this->price = $price;      
            }
        } 

        $foodinfo = new Food('rice', 500);
        print_r($foodinfo);
        echo '<br>';
        
        ?>
    </p>

    <p>
        <?php
        class Animal{
            private $name;
            private $height;
            private $weight;

            public function show_height(){
                 return $this->height;
            }

            public function __construct(string $name, string $height, string $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        $Animalinfo = new Animal('cat', '35cm', '7000g');
        print_r($Animalinfo);
        echo '<br>';
        echo 'Height: ' . $Animalinfo->show_height() . '<br>';
        echo 'price: ' . $foodinfo->show_price() . '円<br>';
        ?>
    </p>
</body>
</html>

