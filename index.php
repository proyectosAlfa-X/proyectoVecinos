<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="estilos/css/estiloLogin.css"> 
<link rel="stylesheet" type="text/css" href="bootstrap-4.5.3/css/bootstrap.css">
<script type="text/javascript">
  function mostrarContrasena(){
    var tipo= document.getElementById('password');
    if(tipo.type=="password"){
      tipo.type="text";

    }else{
      tipo.type="password";
    }

  }
  function mayus(e) {
    e.value = e.value.toUpperCase();
}
</script>
</head>
<body style="background:#D3D3D3;">

<div class="login-form">
  <br>
  <form method="post" action="menus/menuA.php">
     <!--<h1>Inicio de Sesi&oacute;n</h1>-->
     <div ><strong><h3 class="texto-c">INICIO DE SESI&Oacute;N</h3></strong></div><br>
      <div class="form-group">
        <!--<label for="email">Email</label>-->
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="USUARIO" onkeyup="mayus(this);" required="required">
      </div>
      <!--<div class="form-group">-->
       <!-- <label for="password">Password</label>-->
      <!--  <input type="password" name="password" id="password" class="form-control" placeholder="PASSWORD">
      </div>-->


      <div class="input-group mb-3">
  <input type="password" class="form-control" placeholder="PASSWORD" id="password" onkeyup="mayus(this);" required="required">
  <div class="input-group-append">
    <button class="btn btn-theme04" type="button" onclick="mostrarContrasena();" id="btns">VER</button>
  </div>
 
</div>
<!--<div class="input-group mb-3">
      <div class="text-center"><button type="submit" class="btn btn-primary btns">LOG IN</button></div>
      <div class="text-center"><button type="reset" class="btn btn-primary btns">CANCELAR</button></div>
  </div>-->

<!--<div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme btns" type="submit">Guardar</button>
                      <button class="btn btn-theme04 btns" type="reset">Cancel</button>
                    </div>
                  </div> -->

                  <div class="text-center">
  <button class="btn btn-theme " type="submit" id="btns">GUARDAR</button>
                      <button class="btn btn-theme04" id="btns" type="reset">CANCELAR</button>
                      <br><br>
</div><br>
    <br>
    </form>
   </div>

</body>
<!--<style type="text/css">
  
  $(document).ready(function(){
        $('.log-btn').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

    });
</style>-->
</html>
