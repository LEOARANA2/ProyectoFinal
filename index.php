<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contenedores con Botones</title>
  <link rel="stylesheet" href="estilos.css">
  <style>
    body {
      background-color: #F3F5F9;
      font-family: 'Inter', sans-serif;
      color: #202427;
      text-align: center;
    }
    header {
      margin-top: 20px;
    }
    h1 {
      font-weight: bold;
    }
    h2 {
      font-weight: 500; /* Medium */
    }
    p {
      font-style: italic;
    }
    .warning {
      color: #3E39E5;
    }
  </style>
</head>
<body>
  <header>
    <h1>Bienvenido a la página de registros</h1>
    <h2>Mediante esta página lograrás registrar todo lo relacionado con tu escuela.</h2>
    <p class="warning"><i>Para realizar un registro completo, necesitas iniciar con el profesor, después la clase y por último el alumno.</i></p>
  </header>

  <div class="container">
    <div class="section" style="background-color: #202427;">
      <h2 style="color: #C8EF52;">Clases</h2>
      <div class="buttons">
        <button><a href="clases/create.php">Agregar clase</a></button>
        <button><a href="clases/read.php">Lista de clases</a></button>
        <button><a href="clases/update.php">Actualizar</a></button>
        <button><a href="clases/delete.php">Borrar</a></button>
      </div>
    </div>
    <div class="section" style="background-color: #202427;">
      <h2 style="color: #C8EF52;">Profesores</h2>
      <div class="buttons">
        <button><a href="profesores/create.php">Agregar profesor</a></button>
        <button><a href="profesores/read.php">Lista de profesores</a></button>
        <button><a href="profesores/update.php">Actualizar</a></button>
        <button><a href="profesores/delete.php">Borrar profesor</a></button>
      </div>
    </div>
    <div class="section" style="background-color: #202427;">
      <h2 style="color: #C8EF52;">Estudiantes</h2>
      <div class="buttons">
        <button><a href="estudiante/create.php">Agregar estudiante</a></button>
        <button><a href="estudiante/read.php">Lista de estudiantes</a></button>
        <button><a href="estudiante/update.php">Actualizar</a></button>
        <button><a href="estudiante/delete.php">Borrar alummno</a></button>
      </div>
    </div>
  </div>
</body>
</html>
