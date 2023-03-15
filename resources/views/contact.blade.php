<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Contacto - Tienda de Bigotes</title>
  <style>
    /* Estilos CSS para la página de contacto */
    body {
      font-family: Arial, sans-serif;
      background-color: #2c2c2c;
      color:antiquewhite
    }
    form {
      max-width: 600px;
      margin: 0 auto;
      background-color: #000000;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    input, textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
      font-size: 16px;
    }
    input[type="submit"] {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #666;
    }
  </style>
</head>
<body>
<a href="/"><img style="width: 100px" src="https://www.elcorteingles.es/centroscomerciales/uploads/event/main_picture/4246/Imatge_presentaci__6_d_octubre_-_Ventura.png" alt=""></a>
  <h1 style="text-align: center">Grouxostacho</h1>
  <form action="#" method="post">
    <h2>Contacto</h2>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    
    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required>
    
    <label for="asunto">Asunto:</label>
    <input type="text" id="asunto" name="asunto" required>
    
    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
    
    <input type="submit" value="Enviar mensaje">
  </form>
</body>
</html>
