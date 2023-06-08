<!DOCTYPE html>
<html>
<head>
    <title>Venta de Uñas Postizas - Catálogo</title>
    <link rel="stylesheet" type="text/css" href="estilos/minimalista.css">
</head>
<body>
    <?php include 'componentes/header.php'; ?>

    <?php include 'componentes/nav.php'; ?>

    <section>
        <h2>Catálogo de Uñas Postizas</h2>
        <div class="productos">
            <?php
            // Matriz de productos
            $productos = array(
                array(
                    'imagen' => 'https://i5.walmartimages.com/asr/ef9c854e-c6d6-40f3-9a06-261314baaba5.c6718fc6ce6665af8347f4f3fdd453db.jpeg',
                    'descripcion' => 'Uñas Postizas Elegance',
                    'precio' => '₡5,000'
                ),
                array(
                    'imagen' => 'https://i5.walmartimages.com/asr/ef9c854e-c6d6-40f3-9a06-261314baaba5.c6718fc6ce6665af8347f4f3fdd453db.jpeg',
                    'descripcion' => 'Uñas Postizas Glamour',
                    'precio' => '₡6,500'
                ),
                // Agrega más productos aquí
                array(
                    'imagen' => 'https://i5.walmartimages.com/asr/ef9c854e-c6d6-40f3-9a06-261314baaba5.c6718fc6ce6665af8347f4f3fdd453db.jpeg',
                    'descripcion' => 'Uñas Postizas Glamour',
                    'precio' => '₡6,500'
                ),
            );

            // Iterar sobre la matriz de productos
            foreach ($productos as $producto) {
                echo '<div class="producto">';
                echo '<img src="' . $producto['imagen'] . '" alt="' . $producto['descripcion'] . '">';
                echo '<h3>' . $producto['descripcion'] . '</h3>';
                echo '<p>Precio: ' . $producto['precio'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <?php include 'componentes/footer.php'; ?>
</body>
</html>
