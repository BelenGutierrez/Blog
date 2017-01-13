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
            <h1>Alta de artículo</h1>
        </div>

        <form action="../Controller/grabaArticulo.php"  enctype="multipart/form-data" method="POST">

            <h3>Título</h3>
            <input type="text" size="40" name="titulo">
            <h3>Imagen</h3>
            <input type="file" id="imagen" name="imagen">
            <br><h3>Contenido</h3>
            <textarea name="contenido" cols="60" rows="6">
            </textarea><hr>
            <input type="submit" value="Aceptar">
        </form>

        <div id="footer">
            © Belén Gutierrez
        </div>
    </body>
</html>
