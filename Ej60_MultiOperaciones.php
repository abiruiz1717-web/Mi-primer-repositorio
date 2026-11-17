

:(

<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
     <title>Operaciones</title>
</head>
<body>
     <h2>Capturar 3 números en un vector</h2>
     <form method="POST">
          <label>Introduce un número:</label>
          <input type="number" name="numero" id="ct">
          <br><br>

          <button type="button" onclick="agregar()">Agregar</button>
          <input type="hidden" name="datosN" id="datosN">
          <br><br>
          <p id="mensaje">Números registrados: 0 de 3</p>
          <button type="submit" name="guardar" id="guardar" disabled>Guardar datos</button>
     </form>
     <script>
          let numeros=[];
          function agregar() {
               let numeros=document.getElementById("numeros").value;
               if (pxp=="") {
                    alert("Introduce un número");
                    return;
               }
               if (numeros.length<3) {
                    numeros.push(nmp);
                    document.getElementById("datosN").value=JSON.stringify(numeros);
                    document.getElementById("numeros").value="";
                    document.getElementById("mensaje").innerHTML="numeros registrados: "+numeros.length+" de 3";
                    if (numeros.length==3) {
                         document.getElementById("guardar").disabled=false;
                         document.getElementById("mensaje").innerHTML="¡Ya capturaste los 3 numeros!";
                    }
               }
          }
     </script>
(Estaba copiando el código del Ej58 y lo estaba editando)

No llevo nada de avance del 61, recién estoy empezando a hacer el ejercio 60.
Estos últimos programas he tenido muchas dificultades, no he entendido mucho a estos programas y me he atrasado mucho.