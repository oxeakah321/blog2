<!DOCTYPE html>
<html>
    <head>
        <title>Usuário | Projeto para WEB com PHP</title>
        <link rel="stylesheet"
              href="lib//bootstrap-4.2.1-dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include 'includes/topo.php'; ?> 
                </div>
            </div>
            <div class="row" style="min-height:  500px;">
                <div class="col-md-12">
                    <?php include 'includes/menu.php'; ?>
                </div>
                 <div class="col-md-10" style="padding-top:50px;">
                  <?php 
                      require_once 'includes/funcoes.php';
                      require_once 'core/conexao-mysql,php';
                      require_once 'core/sql.php';
                      require_once 'core/mysql.php';

                      if(isset($_SESSION['login'])){
                        $_SESSION['login']['usuario']['id'])
                      }
                  ?>  
                 </div>
            </div>
        </div>
    </body>
</html>
