<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="formulario_cesar.css">
  </head>
  <body>
    <center>
      <form id="frase" class="header" action="codCesar.php" method="post"> <!-- formulario que registra a un usuario -->
        <h1>CODIFICAR MENSAJE</h1>
        <div id="registro">
          <table>
            <tr>
              <td><input type="text"  readonly name="Frase_codificada" placeholder="Frase codificada" value="" /><?php echo $imprimirvariable ?></td>
            </tr>
            <tr>
              <td><input type="text" name="Frase_descodificada" placeholder="Introduce aquí la frase descodificada" required/></td>
            </tr>
          </table>
        </div>
        <br>
        <button type="submit">Codificar</button>
      </form>
    </center>
  </body>
  <!--<script type="text/javascript" src="transformacion.js"></script>-->
</html>
