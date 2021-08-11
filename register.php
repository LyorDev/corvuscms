<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once 'assets/includes/head.php' ?>
    <title>Registro - Corvus</title>
</head>
<body>  
<?php include_once 'assets/includes/header.php' ?>
<div class="container pt-4">
    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-3">
                        <h5>Crie a sua conta</h5>
                    </div>
                    <form id="formulario" method="POST">
                        <div class="alert alert-danger alert-dismissible fade show error" role="alert" style="display: none"></div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Nome de Usuário" required autofocus>
                            <label for="username">Nome de Usuário</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                            <label for="email">Email</label>
                            <small class="text-muted">Utilize um email existente para que você consiga recuperar sua conta se necessário.</small>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Senha" required>
                            <label for="password">Senha</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password_repeat" id="password_repeat" placeholder="Senha" required>
                            <label for="password_repeat">Repita a Senha</label>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="gender" id="gender" required> 
                                <option value="M" >Sexo Masculino</option> 
                                <option value="F" >Sexo Feminino</option>                      
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Data de nascimento" required>
                            <label for="birthday">Data de nascimento</label>
                        </div>
                        <div class="d-grid gap-2 mx-auto">  
                            <input type="submit" class="btn btn-primary mb-1" id="btnEnviar" value="Criar conta">
                            <hr>
                            <a class="btn btn-outline-danger" href="/index">Ja tem uma conta?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mb-3">
            <div class="card">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active rounded" style="height:397px; background:url(assets/images/recep.png);">
                      <div class="card-body text-light">
                        <h4>Teste1</h4>
                      </div>
                    </div>
                    <div class="carousel-item rounded" style="height:397px; background:url(https://1.bp.blogspot.com/-LkdJkdHxshs/XcoWCj4nluI/AAAAAAABZj4/DMMxeZFi3PETABeG0zC7OBQGPhpX6XaOgCKgBGAsYHg/s1600/lpromo_gen15_50.png) center center / cover;">
                      <div class="card-body text-light">
                        <h4>Teste2</h4>
                      </div>
                    </div>
                    <div class="carousel-item rounded" style="height:397px; background:url(https://1.bp.blogspot.com/-y-AtVdEKoSQ/WfkbyJ1JOkI/AAAAAAAA_QQ/BAVmUIXMURE70sv10W4MbPahb-xMuIHaQCKgBGAs/s1600/gabcms2.png) center center / cover;">
                      <div class="card-body text-light">
                        <h4>Teste3</h4>
                      </div>
                    </div>
                  </div>
                </div> 
            </div>

            <h3 class="mt-3">Ultima Notícia</h3>
            <div class="col newsbox-ly align-items-stretch">
              <a href="#">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background: url('') center center / cover;">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h6 class="pt-5 mt-5 mb-4 display-10 lh-1 fw-bold" style="text-decoration:none !important;text-shadow: 2px 2px #000000;">Notícia 1</h6>
                    <ul class="d-flex list-unstyled mt-auto">
                      <li class="me-auto">
                        <img data-bs-toggle="tooltip" data-bs-placement="top" title="Lyor" src="https://habbo.city/habbo-imaging/avatarimage?figure=ch-235-62.hd-180-1.sh-295-62.lg-281-64.hr-828-39&action=std,crr=1&gesture=std&direction=2&head_direction=2&size=n&headonly=1&img_format=png">
                      </li>
                      <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small style="text-decoration:none !important;">11/04/2004 às 18:00</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </a>
            </div>
        </div>
    </div>
</div>

<?php include_once 'assets/includes/footer.php' ?>
    <?php include_once 'assets/includes/bottom.php' ?>
</body>
</html>