<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="formulario_cesar.css">
  </head>
  <body>
    <center>
      <form class="header" action="codCesar.php" method="post"> <!-- formulario que codifica una palabra/frase introducida -->
        <h1>MENSAJE CODIFICADO</h1>
        <div id="registro">
          <table>
            <tr>
              <td><input type="text" readonly name="Frase_codificada" placeholder="Frase codificada"/></td>
            </tr>
            <tr>
              <td><input type="text" name="Frase_descodificada" placeholder="Introduce aquí la frase descodificada"/></td>
            </tr>
          </table>
        </div>
        <br>
        <button type="submit">Codificar</button>
      </form>
    </center>
    <script type="text/javascript" src="transformacion.js"></script>
  </body>
</html>
