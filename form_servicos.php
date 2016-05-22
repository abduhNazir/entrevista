<?php
  session_start();
  if(!$_SESSION["usuario"]){
    header("Location: login.php");
exit;
  }else{

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
                      <h4 class="mb">
                        <i class="fa fa-angle-right"></i> 
                            Plataforma de Cadastro Serviços
                      </h4>
                        <div class="row mt">
                          <div class="col-lg-6">
                            <div class="form-panel">
                            <!-- FORM PARA CADASTRO INICIAL -->
                              <h4 class="mb"><i class="fa fa-angle-right"></i> Selecione os serviços desejados</h4>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="">
                Plano Starter
              </label>
            </div>
            
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Plano Basic
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Plano Premium
              </label>
            </div>
            
            <hr>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
            </label>

                                   
                            </div>
                          </div>
                          <!--
                          **************************************************************************************************************************************************
                          DIV DO CALENDARIO
                          **************************************************************************************************************************************************
                          -->
                        
                          <div class="col-lg-6">
                            <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
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

  
