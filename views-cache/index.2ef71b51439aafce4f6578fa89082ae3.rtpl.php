<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 style="color: #4b646f">
    Olá <b><?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b>!
  </h1>
    <h4 style="color: #4b646f"> Hoje é&nbsp;
     <script type="text/javascript">

      var now = new Date();
      var mName = now.getMonth() +1 ;
      var dName = now.getDay() +1;
      var dayNr = now.getDate();
      var yearNr=now.getYear();
      if(dName==1) {Day = "domingo";}
      if(dName==2) {Day = "segunda-feira";}
      if(dName==3) {Day = "terça-feira";}
      if(dName==4) {Day = "quarta-feira";}
      if(dName==5) {Day = "quinta-feira";}
      if(dName==6) {Day = "sexta-feira";}
      if(dName==7) {Day = "sábado";}
      if(mName==1){Month = "janeiro";}
      if(mName==2){Month = "fevereiro";}
      if(mName==3){Month = "março";}
      if(mName==4){Month = "abril";}
      if(mName==5){Month = "maio";}
      if(mName==6){Month = "junho";}
      if(mName==7){Month = "julho";}
      if(mName==8){Month = "agosto";}
      if(mName==9){Month = "setembro";}
      if(mName==10){Month = "outubro";}
      if(mName==11){Month = "novembro";}
      if(mName==12){Month = "dezembro";}
      if(yearNr < 2000) {Year = 1900 + yearNr;}
      else {Year = yearNr;}
      var todaysDate =(" " + Day + ", " + dayNr + "/" + Month + "/" + Year);

       document.write('  '+todaysDate);
     </script>&nbsp;-
      <SPAN ID="Clock">&nbsp;00:00:00</SPAN>
    </h4>
  
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Home</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Your Page Content Here -->
  <div class="container">
  	<img class="img-fluid" src="/res/site/images/ciclo-logo-grdOK-semtexto.png" alt="Logo CicloVittal" style="height: 100px; width: 130px; position: relative; top: -7px; left: -25px">
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->