<?php
  include"conf/constant.php";
?>

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="index.php"><img src="assets/img/friends/fr-11.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">EAD PLATAFORMA</h5>
              	  	
                  <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>Clientes</span>
                      </a>
                      <ul class="sub">
                          <li><a href="<?php echo PROJECT_URL?>/form.php"> Cadastro Clientes </a></li> 
                      </ul>
                      <ul class="sub">
                          <li><a href="<?php echo PROJECT_URL?>/lista_clientes.php"> Lista Clientes </a></li> 
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-gears"></i>
                          <span>Serviços</span>
                      </a>
                      <ul class="sub">
                          <li><a href="<?php echo PROJECT_URL?>/form_servicos.php"> Cadastro Serviços</a></li>   
                      </ul>
                      <ul class="sub">
                          <li><a href="<?php echo PROJECT_URL?>/lista_servicos.php"> Lista Serviços</a></li>   
                      </ul>
                  </li>

                

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->