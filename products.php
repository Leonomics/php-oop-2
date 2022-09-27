<?php
        include __DIR__ . '/db/products.php';

        $res = [
            'success' => true,
            'response' => $products,
        ];

        header('Content-Type: application/json');

        echo json_encode($res);

    ?>