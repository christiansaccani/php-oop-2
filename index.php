<?php

require './db.php';
require './Models/Guest.php';
require './Models/User.php';


// utenti standard
$guest = new Guest("1234567890");
$user = new User("1234567890", "premiumMario", "m@mail.com");

$client = $guest;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP 2</title>

     <!-- fontawesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        h1 {
            text-align: center;
        }
        .card-img-top {
            width: 100%;
            height: 300px;

            object-fit: cover;
        }
    </style>

</head>
<body>
    
<div class="container py-5">
    <h1 class=" pb-3">PET SHOP</h1>

    <div class="row row-cols-3">

        <?php
        foreach($items as $item) {
        ?>
            <div class="col d-flex justify-content-center">
                <div class="card my_card" style="width: 18rem;">
                    <img src="<?= $item->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="item-title"><?= $item->title ?></h5>
                        <h6 class="item-price text-info "><?= $item->price?></h6>
                        <p class="item-category text-info "><?= $item->category?></p>
                        <p class="item-type text-info "><?= $item->type?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>

</div>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>