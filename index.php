<?php include './products.data.php'; ?>

<!DOCTYPE html>
<html lang="sl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabi Test</title>
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
        <?php require './navigation.php'?>
        <div class="products">
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <img src="./assets/imgProduct.png" alt="">
                    <div class="product-data">
                        <h1><?php echo $product['naslov']; ?></h1>
                        <h3><?php echo $product['podnaslov']; ?></h3>
                        <?php foreach ($product['opis'] as $desc): ?>
                            <p><?php echo $desc; ?></p>
                        <?php endforeach; ?>
                        <a href="product.php?id=<?php echo $product['id']; ?>.php" class="more-info-btn">+ VEČ O
                            IZDELKU
                            <?php echo $product['id']+1 ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>