<!DOCTYPE html>
<html lang="zxx">
<head>
<title>KOSAKATA</title>
<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        },
		false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
		<!-- bootstrap style sheet -->
			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- fontawesome -->
			<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
		<!-- gallery css -->
			<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
		<!-- stylesheets-->
			<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
			<link href="css/login.css" rel='stylesheet' type="text/css">
		
</head>
<body>
<!-- nav -->
<header>
<div class="navbar-login" style="
			background-color: transparent; 
			height: 50px; 
			width: auto;">
  <h1><img src="images/kosa.png" style="width: 250px; height: 50px; float: left; margin-left: 30px; margin-top: 10px;"href="index.php"></a></h1>
  		<div class="log-btn1" style="
			float: right;
			margin-top: 20px;
			background-color: #F5DF4E;
			border: 7px solid ;
			border-color: #F5DF4E;
			border-radius: 10px;
			text-align: center;

  		">
			<a class="	" href= "index.php" style="font-size: 15px; color: white;">
		        Beranda
		    </a>
		</div>
</div>
</header>
<!-- //nav -->
<div class="cotn_principal" >
<div class="cont_centrar" style="margin-top: 90px;">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2 style="font-size: 12px;">Sudah Punya akun?</h2>  
  <p><b>Masuk disini.</b></p> 
  <button class="btn_login" onclick="cambiar_login()">MASUK</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2 style="font-size: 12px;">Belum punya akun?</h2>

  
  <p>Daftar disini.</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">DAFTAR</button>
</div>
  </div>
       </div>
    <div class="cont_back_info" style="background-color: white; height: 400px; border-radius: 10px;">
    </div>
<div class="cont_forms"style="background-color:#F5DF4E; height: 400px;border-radius: 10px;" >
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>MASUK</h2>
 <input type="text" placeholder="Username" />
<input type="password" placeholder="Password" />
<button class="btn_login" onclick="cambiar_login()">MASUK</button>
  </div>
  
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>DAFTAR</h2>
<input type="text" placeholder="Username" />
<input type="text" placeholder="Email" />
<input type="text" placeholder="Nama" />
<input type="text" placeholder="No HP" />
<input type="password" placeholder="Password" />
<!-- <input type="password" placeholder="Confirm Password" /> -->
<button class="btn_sign_up" onclick="cambiar_sign_up()">DAFTAR</button>

  </div>

    </div>
    
  </div>
 </div>
</div>

<script>
	        /* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

function cambiar_login() {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";               

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
  
setTimeout(function(){    
document.querySelector('.cont_form_sign_up').style.display = "none";
},200);  
  }

function cambiar_sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";
  
setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},100);  

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},400);  


}    



function ocultar_login_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";  
document.querySelector('.cont_form_sign_up').style.opacity = "0";               
document.querySelector('.cont_form_login').style.opacity = "0"; 

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},500);  
  
  }




</script>
</body>
