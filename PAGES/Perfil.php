<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perfil</title>
    <link rel="stylesheet" href="/STYLES/Header.css" />
    <link rel="stylesheet" href="/STYLES/Perfil.css" />
    <link rel="icon" href="/IMG/logo_grande.png" />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <!-- Tipografía -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Audiowide&family=Pixelify+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <nav id="topNav" class="navbar navbar-expand-lg navbar-dark p-4">
      <div
        class="collapse"
        id="navbarToggleExternalContent"
        data-bs-theme="dark"
        id=""
      >
        <div class="p-4">
          <h5 class="text-body-emphasis h5">Perfil</h5>
          <h5 class="text-body-emphasis h5">Suporte</h5>
          <span class="text-body-secondary">Suporte</span>
        </div>
      </div>
      <nav class="navbar navbar-dark" id="nav__menu">
        <div class="container-fluid" id="nav__container">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent"
            aria-controls="navbarToggleExternalContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>

      <div class="navbar-collapse collapse">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a
              class="nav-link"
              style="font-family: 'Audiowide', cursive; font-weight: 700"
              href="#"
              >MENU</a
            >
          </li>
        </ul>
      </div>

      <a class="navbar-brand mx-auto" href="/PAGES/Inicio.html">
        <img
          class="shadow-sm rounded-circle"
          src="/IMG/logo_grande.png"
          width="150"
          height="150"
          alt="logo/brand"
        />
      </a>

      <div class="navbar-nav justify-content-end">
        <div class="navbar-nav ml-auto">
          <a class="" href="/PAGES/Perfil.html">
            <img src="/ASSETS/Profile.svg" width="40" height="40" alt="" />
          </a>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <!-- Seção do Perfil -->
          <div class="card">
            <img src="seu_avatar.jpg" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title"><?php echo $_SESSION["matricula"]?></h5>
              <p class="card-text">Sua descrição pessoal</p>
            </div>
          </div>
          <div class="mt-3">
            <!-- Botões de Navegação -->
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action"
                >Histórico</a
              >
              <a href="#" class="list-group-item list-group-item-action"
                >Editar Perfil</a
              >
              <a href="#" class="list-group-item list-group-item-action"
                >Suporte</a
              >
              <a href="#" class="list-group-item list-group-item-action"
                >Sair</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
