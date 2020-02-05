<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Parrainage 2017</title>
  

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="scripts/css/style.css">
     

  
</head>

<body>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>PARRAINAGE 2017</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Cliquez ici</div>
  </div>
  
  <div class="form">
    <h2>Authentifiez-Vous</h2>
    <form action = "nerve.php" method = "post">
      <input type="text" placeholder="Pseudo" name = "pseudo" id = "pseudo" required/>
      <input type="password" placeholder="Mot de Passe" name = "pass" id = "pass"/>
      <button>Connexion</button>
	  <!-- <p align="center" style="color:red;">Pseudo ou mot de passe incorrect</p> -->
    </form>
  </div>

  
  <div class="form">
    <h2>Inscrivez-Vous</h2>
    <form method="POST" action="nerve.php" enctype="multipart/form-data" >
      <input type="text" placeholder="Nom" name="nom" required pattern=".{3,10}" title="au moins 3 caracteres" required/>
      <input type="text" placeholder="Prenom" name="pre" required pattern=".{3,25}" title="3 à 15 caracteres" require/>
      <input type="text" placeholder="Matricule" name="mat" required pattern=".{3,15}" title="ce champs comporte 14 caracteres" require/>
      <input type="text" placeholder="Classe" name="classe" required pattern=".{4,8}" title="au moins 4 caracteres" require/>
      <input type="number" placeholder="Niveau" name="Niveau" lenght="1" title="1 caractere" require />
      <!-- <label>Niveau I</label>
      <label>Niveau II</label> -->
      <input type="tel" placeholder="Tel" name="tel"required id="numb" pattern=".{10}" title="ce champs comporte 9 chiffres"/><span id="demo"></span>
	  <input type="file" name="photo" id="photo" required />
      <button onclick="myFunction()" id="" name="save">Enregistrer</button>
    </form>
  </div>
  
  
  
  <div class="cta"><a href="">Mot de passe oublié?</a></div>
</div>
   <script src="scripts/js/jquery.min.js"></script>
   <script src="scripts/js/bootstrap.min.js"></script>

    <script  src="scripts/js/index.js"></script>

</body>
</html>