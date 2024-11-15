
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Hafidhou Maoulida</title>
<!-- Favicon -->
<link rel="shortcut icon" type="x-icon" href="images/logo.png">
  <!-- Favicons -->
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/all.min.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-ben-resume-style.css">
  

</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
      <!-- Entete de page --> 
  
    <?php include("pages/header.php");?>
  
      <!-- Fin d'entete de page --> 


     

   <!-- Contenu de toutes les pages --> 
     <?php
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }
        else{
            $page="accueil";
        }

       
        
        if(file_exists("pages/".$page.".php")){
            include "pages/".$page.".php";
        }
        else{
             include "pages/404.html";
        }
    ?>


 <!-- Pied de page --> 
 <footer >
  <?php include("pages/footer.php");?>
</footer>

<!-- JavaScript Libraries -->
    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
    

    
</body>
</html>