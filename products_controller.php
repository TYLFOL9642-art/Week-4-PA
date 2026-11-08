<?php

require_once('../model/products_db.php');

function get_products()
{
    $product_rows = get_all_products();
    $products = array();

    if ($product_rows)
    {
        $index = 0;

        while ($row = mysqli_fetch_array($product_rows))
        {
            $products[$index]["ProductNo"] = $row["ProductNo"];
            $products[$index]["Name"] = $row["Name"];
            $products[$index]["Type"] = $row["Type"];

            $index++;
        }
    }

    return $products;
}

?>