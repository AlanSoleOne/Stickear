<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Regístrate</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Registrarse</h1>
      <label for="inputNombre" class='sr-only'>Nombre:</label>
      <input type="text" id="iniputNombre" class="form-control" placeholder="Ej.: Peter" required>
      <label for="inputApellido" class='sr-only'>Apellido:</label>
      <input type="text" id="inputApellido" class="form-control" placeholder="Ej.: Parker" required>
      <label for="inputFechaNacimiento" class='sr-only'>Fecha de Nacimiento:</label>
      <input type="date" id="inputFechaNacimiento" class='form-control'>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Ej.: mail@ecample.com" required>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>