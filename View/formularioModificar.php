<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../View/css/estilo.css" rel="stylesheet" type="text/css" />
        <link href="../View/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div id="header">
            <h1>Modificación de artículo</h1>
        </div>



        <form action="../Controller/grabaModificacion.php"  enctype="multipart/form-data" method="POST">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>Título</h3>
                    <input type="text" size="40" placeholder="Titulo" name="titulo" value="<?= $datosArticulo->getTitulo() ?>" >
                </div>

                <div class="panel-body text-center">
                    <h3>Imagen</h3>
                    <input type="file" id="imagen" name="imagen" placeholder="Imagen" value="<?= $datosArticulo->getImagen() ?>">
                    <h3>Contenido</h3>
                    <textarea type="text"cols="60" rows="6" name="contenido" placeholder="Contenido"><?= $datosArticulo->getContenido() ?></textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="<?= $datosArticulo->getId() ?>">    
            <button type="submit" class="btn btn-success center-block" name="accion" value="Aceptar">
                <span class="glyphicon glyphicon-ok"></span>Modificar
            </button><br>
            <a class="btn btn-danger center-block" href="../index.php" role="button">
                <span class="glyphicon glyphicon-remove"></span>Cancelar
            </a>

        </form>


        <div id="footer">
            © Belén Gutierrez
        </div>
    </body>
</html>
