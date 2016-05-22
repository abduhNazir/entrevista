<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("Location: login.php");
exit;
  }else{

  include"conf/class_connection.php";
  include"layout/header.php";
  include"layout/sidebar.php";

?>
      
      <!--main content start-->
      <!-- body start.. -->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  <!-- section about - contando um pouco de nossos objetivos -->
                    <h2 class="section-heading" align="center"> EAD PLATAFORMA - ENTREVISTA</h2>
                    
                      <hr class="light">
                      <!-- 
                      **********************************************************************************************************************************************************
                            FORM BODY PARA INTRODUÇÃO DE TITULO E CONTEUDO
                      *********************************************************************************************************************************************************** 
                      -->
                      <h3 align="center">
                        A EAD Plataforma é a solução ideal para Ensino a Distância, com ela você poderá oferecer um ambiente Online para seus alunos comprar e acessar cursos de qualquer lugar no mundo... Oferecemos todas as ferramentas necessárias para que você foque apenas em criar seu conteúdo. 
                        Venda Cursos Online ou ofereça Treinamentos para sua Equipe, tudo em um ambiente super agradável e de fácil manuseio ;) 
                      </h3>
  
                      <!--FIM DO CORPO-->
                      <!--INICIO FOOTER-->
                      <?php
                        include"layout/footer.php";
                      ?>
                      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>  
  


  </body>
</html>

<?php
}
?>

  
