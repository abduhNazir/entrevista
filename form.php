<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("Location: login.php");
exit;
  }else{


  include"conf/class_connection.php";
  include"conf/class_cliente.php";

  if($_POST){
        
           $cliente = new cliente();
           $cliente->nome           = $_POST["nome"];
           $cliente->rg             = $_POST["rg"];
           $cliente->cpf            = $_POST["cpf"];

           // Chamada do método para salvar os dados no banco
           $cliente->cadastrar_cliente();
            header('Location:http://localhost/entrevista/lista_clientes.php');
              exit;
    }

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
                      
                        <div class="row mt">
                          <div class="col-lg-6">
                            <div class="form-panel">
                            <!-- FORM PARA CADASTRO INICIAL -->
                              <form  action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                                  <label>Nome Completo</label>
                                  <div class="span3">
                                      <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="Insira seu nome completo">
                                  </div>
                                  <br>
                                  <label>RG</label>
                                  <div class="span3">
                                      <input type="text" class="form-control" name="rg" id="rg" value="" placeholder="Insira seu RG">
                                  </div>
                                  <br>
                                  <label>CPF</label>
                                  <div class="span3">
                                      <input type="text" class="form-control" name="cpf" id="cpf" value="" placeholder="Insiria seu CPF">
                                  </div>
                                  <br>
                                  <button type="submit" value="enviar" class="btn btn-theme">SALVAR</button>
                              </form>
                                   
                            </div>
                          </div>
                          <!--
                          **************************************************************************************************************************************************
                          DIV DO CALENDARIO
                          **************************************************************************************************************************************************
                          -->
                        
                          <div class="col-lg-6">
                            <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                        <div class="col-lg-6">
                          <div class="white-panel pn donut-chart">
                            <div class="white-header">
                                <h5>Quantidade de Registros dos Clientes</h5>
                            </div>
                        <div class="row">
                          <div class="col-sm-6 col-xs-12 goleft">
                            <p><i class="fa fa-database"></i> 30%</p>
                          </div>
                        </div>
                            <canvas id="serverstatus01" height="120" width="190"></canvas>
                            <script>
                              var doughnutData = [
                                  {
                                    value: 30,
                                    color:"#68dff0"
                                  },
                                  {
                                    value : 70,
                                    color : "#fdfdfd"
                                  }
                                ];
                                var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                            </script>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->

                        </div>
                        </div>
                      </div>


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
  
  
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>

<?php
}
?>

  
