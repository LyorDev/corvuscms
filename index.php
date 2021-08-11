<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once 'assets/includes/head.php' ?>
    <title>Inicio - Corvus</title>
</head>
<body>  
<?php include_once 'assets/includes/header.php' ?>
<div class="container pt-4">

    <div class="row">
        <div class="col">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              Essa CMS se encontra em fase beta, qualquer falha ou sugestão reporte para algum dos desenvolvedores.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-3">
                        <h5>Faça login na sua conta</h5>
                    </div>
							      	<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Alerta Login
							      	</div>
                    <form method="POST">
                      <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="username" id="username" placeholder="name@example.com" require autofocus>
                          <label for="username">Usuário</label>
                      </div>
                      <div class="form-floating mb-3">
                          <input type="password" class="form-control" name="password" id="password" placeholder="Password" require>
                          <label for="password">Senha</label>
                      </div>
                      <div class="d-grid gap-2 mx-auto">
                          <input type="submit" name="login" class="btn btn-primary mb-1" value="Entrar">
                          <hr>
                          <a class="btn btn-outline-danger" href="#">Esqueceu sua senha?</a>
                          <a class="btn btn-outline-success" href="/register">Crie sua conta</a>
                      </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mb-3">
              <div class="card">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item rounded" style="height:445px; background:url(/assets/images/recep.png);">
                      <div class="card-body text-light">

                      </div>
                    </div>
                    <!-- <div class="carousel-item rounded" style="height:397px; background:url(/assets/images/card.png) center center / cover;">
                      <div class="card-body text-light">

                      </div>
                    </div> -->
                    <div class="carousel-item active rounded" style="height:445px; background:url(/assets/images/card3.png) center center / cover;">
                      <div class="card-body text-light" style="padding:6rem 1rem 1rem 1rem !important;text-shadow: 2px 2px #000000;">
                        <h4>
                          <b>Confiram as novidades e atualizações da nossa comunidade:</b><br>
                          Limite de 8 emblemas em seu perfil;<br>
                          Novo relacionamento de poop para se juntar com os três atuais;<br>
                          Sussurro em grupo com limite de 5 pessoas;<br>
                          Comandos para auxiliar em suas construções;<br>
                          Visuais e mobis atualizados constantemente;<br>
                          Visuais e mobis LGBTQ+ para comemorar o Pride Month;<br>
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        </div>
    </div>

    <div class="row align-items-stretch g-4 mb-3">
        <!--  -->
        <div class="col newsbox-ly">
          <a href="#">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background: url('https://i.imgur.com/Am50W8x.png') center center / cover;">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h6 class="pt-5 mt-5 mb-4 display-10 lh-1 fw-bold" style="text-decoration:none !important;text-shadow: 2px 2px #000000;">Notícia 1</h6>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img data-bs-toggle="tooltip" data-bs-placement="top" title="Lyor" src="https://habbo.city/habbo-imaging/avatarimage?figure=ch-235-62.hd-180-1.sh-295-62.lg-281-64.hr-828-39&action=std,crr=1&gesture=std&direction=2&head_direction=2&size=n&headonly=1&img_format=png">
                  </li>
                  <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                    <small style="text-decoration:none !important;">11/04/2005 às 18:00</small>
                  </li>
                </ul>
              </div>
            </div>
          </a>
        </div>
        <!--  -->
        <div class="col newsbox-ly">
          <a href="#">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background: url('https://i.imgur.com/Am50W8x.png') center center / cover;">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h6 class="pt-5 mt-5 mb-4 display-10 lh-1 fw-bold" style="text-decoration:none !important;text-shadow: 2px 2px #000000;">Notícia 2</h6>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img data-bs-toggle="tooltip" data-bs-placement="top" title="Lyor" src="https://habbo.city/habbo-imaging/avatarimage?figure=ch-235-62.hd-180-1.sh-295-62.lg-281-64.hr-828-39&action=std,crr=1&gesture=std&direction=2&head_direction=2&size=n&headonly=1&img_format=png">
                  </li>
                  <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                    <small style="text-decoration:none !important;">11/04/2005 às 18:00</small>
                  </li>
                </ul>
              </div>
            </div>
          </a>
        </div>
        <!--  -->
        <div class="col newsbox-ly">
          <a href="#">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background: url('https://i.imgur.com/Am50W8x.png') center center / cover;">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h6 class="pt-5 mt-5 mb-4 display-10 lh-1 fw-bold" style="text-decoration:none !important;text-shadow: 2px 2px #000000;">Notícia 3</h6>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img data-bs-toggle="tooltip" data-bs-placement="top" title="Lyor" src="https://habbo.city/habbo-imaging/avatarimage?figure=ch-235-62.hd-180-1.sh-295-62.lg-281-64.hr-828-39&action=std,crr=1&gesture=std&direction=2&head_direction=2&size=n&headonly=1&img_format=png">
                  </li>
                  <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                    <small style="text-decoration:none !important;">11/04/2005 às 18:00</small>
                  </li>
                </ul>
              </div>
            </div>
          </a>
        </div>
        <!--  -->
        <div class="col newsbox-ly">
          <a href="#">
            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background: url('https://i.imgur.com/Am50W8x.png') center center / cover;">
              <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <h6 class="pt-5 mt-5 mb-4 display-10 lh-1 fw-bold" style="text-decoration:none !important;text-shadow: 2px 2px #000000;">Notícia 4</h6>
                <ul class="d-flex list-unstyled mt-auto">
                  <li class="me-auto">
                    <img data-bs-toggle="tooltip" data-bs-placement="top" title="Lyor" src="https://habbo.city/habbo-imaging/avatarimage?figure=ch-235-62.hd-180-1.sh-295-62.lg-281-64.hr-828-39&action=std,crr=1&gesture=std&direction=2&head_direction=2&size=n&headonly=1&img_format=png">
                  </li>
                  <li class="d-flex align-items-center">
                    <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                    <small style="text-decoration:none !important;">11/04/2005 às 18:00</small>
                  </li>
                </ul>
              </div>
            </div>
          </a>
        </div>
        <!--  -->
    </div>
</div>

<?php include_once 'assets/includes/footer.php' ?>
    <?php include_once 'assets/includes/bottom.php' ?>
</body>
</html>