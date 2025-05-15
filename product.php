<?php

include './products.data.php';
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if (!isset($products[$id])) {
    echo "Izdelek ni najden.";
    exit;
}

$product = $products[$id];
?>

<!DOCTYPE html>
<html lang="sl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['naslov']; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <?php require './navigation.php' ?>
        <div class="product-page">
            <img src="../assets/imgProduct.png" alt="">
            <div class="product-page-data">
                <h1><?php echo $product['naslov']; ?></h1>
                <h3><?php echo $product['podnaslov']; ?></h3>
                <?php foreach ($product['opis'] as $odstavek): ?>
                    <p><?php echo $odstavek; ?></p>
                <?php endforeach; ?>
                <a href="./index.php" class="return-button">< NAZAJ NA SEZNAM</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="./script.js"></script>
</body>

</html>