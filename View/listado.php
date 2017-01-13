<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../View/css/estilo.css" rel="stylesheet" type="text/css" />
        <link href="../View/css/bootstrap.min.css" rel="stylesheet">
        <title>Listado de articulos</title>
    </head>
    <body>
        <div id="header">
            <h1>Blog de Comidas Argentinas</h1>
            <a href="../Controller/nuevoArticulo.php">Nuevo artículo</a>
            <hr>
        </div>
        <div id="content">
            <?php
            foreach ($data['articulos'] as $articulo) {
                //print_r($articulo);
                ?>
                <h3><?= $articulo->getTitulo() ?></h3>
                <img src="../View/img/<?= $articulo->getImagen() ?>" width="400"><br>
                <p><?= $articulo->getContenido() ?></p><br>
                <p><?= $articulo->getFecha_publicacion()  ?></p><br>
                <a href="../Controller/borraArticulo.php?id=<?= $articulo->getId() ?>">Borrar</a>
                <a href="../Controller/modificaArticulo.php?id=<?= $articulo->getId() ?>">Modificar</a>
                <hr>
                    <?php
            }
            ?>
        </div>
        <div id="footer">
            © Belén Gutierrez
        </div>
    </body>
</html>