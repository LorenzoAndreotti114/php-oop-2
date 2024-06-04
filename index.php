<?php 

    require_once __DIR__ . "/Models/category.php";
    require_once __DIR__ . "/Models/food.php";
    require_once __DIR__ . "/Models/toys.php";

    $catCategory = new Category("cat");
    $catCategory->setIcon("fa-solid fa-cat");

    $dogCategory = new Category("dog");
    $dogCategory->setIcon("fa-solid fa-dog");

    $catFood = new Food("Better Cat", 2.99, 500, "manzo");
    $catFood->category = $catCategory;
    $catFood->setImage("https://www.google.com/imgres?q=catimg&imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F4%2F44%2FCat_img.jpg%2F1280px-Cat_img.jpg&imgrefurl=https%3A%2F%2Fcommons.wikimedia.org%2Fwiki%2FFile%3ACat_img.jpg&docid=j_uzA5Al-edUOM&tbnid=YbYN6PT8sRwovM&vet=12ahUKEwi1ieuwxsGGAxUXg_0HHaD_AWsQM3oECBMQAA..i&w=1280&h=853&hcb=2&ved=2ahUKEwi1ieuwxsGGAxUXg_0HHaD_AWsQM3oECBMQAA");
    var_dump($catFood);

    $dogFood = new Food("better Dog", 5.00, 1000, "pollo");
    $dogFood->category = $dogCategory;
    $dogFood->setImage("https://www.google.com/imgres?q=dog&imgurl=https%3A%2F%2Fi.natgeofe.com%2Fn%2F4f5aaece-3300-41a4-b2a8-ed2708a0a27c%2Fdomestic-dog_thumb_square.jpg&imgrefurl=https%3A%2F%2Fwww.nationalgeographic.com%2Fanimals%2Fmammals%2Ffacts%2Fdomestic-dog&docid=VGirYKV8sLnrzM&tbnid=V_rIzURDXXmHDM&vet=12ahUKEwjl0orsxsGGAxX-gv0HHYPqBk0QM3oECBsQAA..i&w=3072&h=3072&hcb=2&itg=1&ved=2ahUKEwjl0orsxsGGAxX-gv0HHYPqBk0QM3oECBsQAA");
    var_dump($dogFood);

    $mouse = new toys("topo meccanico", 5);
    $mouse->category = $catCategory;
    $mouse->setImage("data:image/jpeg;base64,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");
    var_dump($mouse);

    $catalogue = [$catFood, $dogFood, $mouse];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">

        <div class="row">

            <h2>CATALOGO</h2>

            <?php foreach ($catalogue as $products) { ?>
                <div class="col-4">
                    <div class="card">

                        <img src="<?php echo $products->getImage(); ?>" class="card-img-top" alt="...">
                        
                        <div class="card-body">

                            <h4><?php echo $products->getName(); ?></h4>

                            <div><?php echo $products->getPrice(); ?>€</div>
                            <?php if (get_class($products) === "Food") { ?>
                                <div><?php echo $products->getWeightGr(); ?></div>
                            <?php } ?>

                        </div>

                    </div>
                </div>
            <?php } ?>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>