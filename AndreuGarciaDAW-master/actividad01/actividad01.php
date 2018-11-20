<html>
  <head>
    <title>Hola</title>
      <style TYPE="text/css">
        div{
          width: 157px;;
          height: 150px;
          padding: 5px;
          margin: 5px;
          background-color: rgb(0,0,0);
          display:inline-block;
        }
      </style>
      </head>
        <body>
          <?php
          $i=0;
          for ($i=0; $i < 255; $i++) {
            echo '<div style="background-color: rgb(0,'.$i.',0)">holaa</div>';
          }
          ?>
        </body>
</html>
