<?php
require_once('../controller/products_controller.php');

$product_arr = get_products();
?>

<html>
    <head>
        <title>Week4 PA -Tyler Follis</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>

        <h1>Current Products:</h1>

        <table>

            <tr style="font-size:large;">
                <th>Product #</th>
                <th>Name</th>
                <th>Type</th>
            </tr>

            <?php foreach($product_arr as $product): ?>

            <tr>
                <td><?php echo $product["ProductNo"]; ?></td>
                <td><?php echo $product["Name"]; ?></td>
                <td><?php echo $product["Type"]; ?></td>
            </tr>

            <?php endforeach; ?>

        </table>

    </body>

</html>