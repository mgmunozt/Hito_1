<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap vs 4.6-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome 6.1.0 -->
    <script
      src="https://kit.fontawesome.com/6e8600afbc.js"
      crossorigin="anonymous"
    ></script>

    <title>Módulos</title>
    <!-- Clases CSS propias -->
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div class="container-fluid">
      <!-- Inicio Barra Navegador -->
      <nav class="navbar navbar-expand-lg navbar navbar-light fixed-top mx-4">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Inicio </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Productos">Productos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#Módulos">Módulos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#Ingreso">Ingreso</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Equipo">Equipo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Orden">Orden</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Fin Barra Navegador -->
      <!-- Inicio -->
      <header class="bg-primary">
        <br>
        <div>
          <h2 class="text-center pt-5 pb-3 text-white">Detalle Actividades Diarias</h2>
          <h2 class="text-center pb-3 text-white">Semana del 4 al 10 de julio 2022</h2>
          <hr class="opacity-100" />
        </div>
        <br>  
        <div class="table-responsive">
                    <table class="table table-striped bg-light">
            <thead>
              <tr>
                <th scope="col">Actividad</th>
                <th scope="col">Equipo</th>
                <th scope="col">Lunes</th>
                <th scope="col">Martes</th>
                <th scope="col">Miercoles</th>
                <th scope="col">Jueves</th>
                <th scope="col">Viernes</th>
                <th scope="col">Sábado</th>
                <th scope="col">Domingo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Tronadura 4.5 x 4.5</th>
                <td>3</td>
                <td>4</td>
                <td>3</td>
                <td>5</td>
                <td>8</td>
                <td>3</td>
                <td>2</td>
                <td>3</td>
              </tr>
              <tr>
                <th scope="row">Planta Chancado</th>
                <td>3</td>
                <td>3</td>
                <td>3</td>
                <td>6</td>
                <td>6</td>
                <td>3</td>
                <td>5</td>
                <td>3</td>
              </tr>
              <tr>
                <th scope="row">Montaje de estructuras</th>
                <td>10</td>
                <td>10</td>
                <td>8</td>
                <td>6</td>
                <td>3</td>
                <td>5</td>
                <td>3</td>
                <td>5</td>
              </tr>
            </tbody>
          </table>

        </div>
      </header>
      <!-- Fin -->
      <!-- Formulario Productos -->
      <section id="Productos" class="bg-primary text-white d-none d-sm-block">
        <div>
          <h3 class="text-center pt-5 pb-3">Productos</h3>
          <hr class="opacity-100" />
        </div>

        <form>
          <div class="form-group">
            <label for="codprod">Código Producto</label>
            <input type="text" id="codprod" class="form-control">
          </div>
          <div class="form-group">
            <label for="desprod">Descripción Producto</label>
            <input type="text" class="form-control" id="desprod">
          </div>
          <div class="form-group">
            <label for="costo">Precio de Costo</label>
            <input type="text" class="form-control" id="costo">
          </div>
          <button type="submit" class="btn btn-info">Submit</button>
        </form>

      </section>
      <!-- Fin Formulario Productos -->
      <!-- Inventario -->
      <section id="Módulos" class="container-fluid bg-primary text-white">
        <div>
          <h3 class="text-center pt-5 pb-3">Planificación Semanal</h3>
          <hr class="opacity-100" />
        </div>
        <form>
          <div class="form-group">
            <label for="codprod">Insumos</label>
            <input type="text" id="codprod" class="form-control">
          </div>
          <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="text" class="form-control" id="cantidad">
          </div>
          <div class="form-group">
            <label for="fechainv">Fecha Inventario</label>
            <input type="date" class="form-control" id="fechainv">
          </div>
          <button type="submit" class="btn btn-info">Enviar</button>
        </form>
      </section>
      <!-- Fin Inventario -->
      <!-- Ingreso Explosivos -->
      <section id="Ingreso" class="container-fluid bg-primary text-white pb-5">
        <div>
          <h3 class="text-center pt-5 pb-3">Ingreso Explosivos</h3>
          <hr class="opacity-100" />
        </div>

        <div class="container">
          <form>
            <div class="form-group">
              <label for="codprod">Código Producto</label>
              <input type="text" class="form-control" id="codprod" />
            </div>

            <div class="form-group">
              <label for="cantidad">Cantidad</label>
              <input type="text" class="form-control" id="cantidad" />
            </div>

            <div class="form-group">
              <label for="fechaing">Fecha Ingreso Explosivos</label>
              <input type="date" class="form-control" id="fechaing">
            </div>

            <button type="submit" class="btn btn-info">Enviar</button>
          </form>
        </div>
      </section>
      <!-- Fin Ingreso Explosivos -->
      <!-- Equipo -->
      <section id="Equipo" class="container-fluid bg-primary text-white pb-5">
        <div>
          <h3 class="text-center pt-5 pb-3">Equipo</h3>
          <hr class="opacity-100" />
        </div>

        <div class="container">
          <form>
            <div class="form-group">
              <label for="fono">Teléfono Interno</label>
              <input type="text" class="form-control" id="fono" />
            </div>

            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" />
            </div>

            <div class="form-group">
              <label for="cargo">Cargo</label>
              <input type="text" class="form-control" id="cargo">
            </div>

            <button type="submit" class="btn btn-info">Enviar</button>
          </form>
        </div>
      </section>
      <!-- Fin Equipo -->
      <!-- Despacho de planta -->
      <section id="Orden" class="container-fluid bg-primary text-white pb-5">
        <div>
          <h3 class="text-center pt-5 pb-3">Entregas</h3>
          <hr class="opacity-100" />
        </div>

        <div class="container">
          <form>
            <div class="form-group">
              <label for="fono">Teléfono Empresa</label>
              <input type="text" class="form-control" id="fono" />
            </div>

            <div class="form-group">
              <label for="codprod">Producto o subproducto</label>
              <input type="text" class="form-control" id="codprod" />
            </div>

            <div class="form-group">
              <label for="cantidad">Cantidad</label>
              <input type="text" class="form-control" id="cantidad">
            </div>

            <div class="form-group">
              <label for="fechapedido">Fecha Envío</label>
              <input type="date" class="form-control" id="fechapedido">
            </div>

            <button type="submit" class="btn btn-info">Enviar</button>
          </form>
        </div>
      </section>
      <!-- Fin Despacho de Planta -->
    </div>

    <!-- jQuery Core 3.6.0 -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap vs 4.6-->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
      integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
