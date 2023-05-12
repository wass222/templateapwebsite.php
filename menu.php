
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projet 06</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
           

           
           
           
           * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 500s;
  border-top: 10px;
}


@keyframes fade {
  from {opacity: 1}
  to {opacity: 1}
}

        
.img1{
    width: 1000px;
    border: 3px solid #ccc; /* bordure de l'image */
  box-shadow: 0 0 10px rgba(0,0,0,0.5); /* ombre portée */
    margin-top: 20px;

}
.wrapper {
  display: flex;
  align-items: center;
  margin-left: 1000px;
}


.search form {
  display: flex;
}

form {
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

input[type="text"] {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-right: 10px;
  font-size: 16px;
}



.container {
  width: 80%;
  margin: 0 auto;
  /* Autres styles de conteneur */
}

h2 {
  font-size: 2em;
  color: #333;
text-align: center;
width: 1000px;
margin-top: 15px;
  /* Autres styles pour le titre h2 */
}
section{
    width: 1200px;
    border: 3px solid #ccc; /* bordure de l'image */
  box-shadow: 0 0 10px rgba(0,0,0,0.5); /* ombre portée */
    margin-top: 20px;
    margin-left: 130px;
    padding: 20px;
}
.navbar-brand{
    margin-right: 300px;

}
.card-container {
  display: flex;
  gap: 20px; /* Adds 20px space between cards */
}

.card {

  padding: 5px;
  text-align: center;
  box-shadow: 0 0 10px rgba(0,0,0,0.5); /* ombre portée */ 
}

.card img {
  max-width: 100%;
  height: auto;
}

footer{
                background-color:darkslategray;
            }
            .copy{
                color:blue;
            }
            .cours{
             
  box-shadow: 0 0 10px rgba(0,0,0,0.5); /* ombre portée */  
  color: white;
            }
            h5{
                color: white;
            }
            .copy{
                text-align: center;
            }
            .logofooter{
                text-align: center;
            }
            h4{
                color: orange;
            }
            .col-md-8{
                padding: 50px;
            }

           


        </style>
    </head>

    <body>
   


        <div class="row pt-12">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container">
                        <ul class="navbar-nav navbar-brand ">
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="#"><i class="fa-solid fa-location-dot"></i> Nous sommes ici</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"> <i class="fa-solid fa-phone"></i> Tél: 216 99 99 99</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"> <i class="fa-solid fa-envelope"></i> Email : apcpedagogie@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <nav class="navbar navbar-expand-sm justify-content-center">
                        <div class="container">
                            <ul class="navbar-nav navbar-brand ">
                                <li class="nav-item ">
                                    <a class="nav-link text-white" href="#">Cours particulier en ligne</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" a href="login.php">S' inscrire</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </nav>
            </div>
        </div>

        <div class="row">
        <div class="col-md-1">
        </div>
        
            <div class="col-md-3">
            <img src="assets/img/logo1.png">

            </div>
            <div class="col-md-8 pt-4">
            <form action="#" method="get">
  <input type="text" placeholder="Rechercher...">
  <button type="submit" class="btn btn-warning"><i class="fas fa-search"></i></button>
</form>
                </div>
        </div>
        <div class="wrapper">
  <div class="logo">
  </div>
 
</div>


        <div class="row pt-12">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <div class="container">>
                    <a class="navbar-brand" href="#"> <i class="fa-solid fa-book" style="color: yellow;"></i> <span style="color: yellow;">apc</span><span style="font-weight: bold;">pedagogie </span></a>
                </div>
                <nav class="navbar navbar-expand-sm justify-content-center">
                    <div class="container">
                        <ul class="navbar-nav navbar-brand ">
                            <li class="nav-item ">
                                <a class="nav-link text-blue" href="#">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="cours.php">Cours et tutoriel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="#">Nos ressources</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="#">Forums</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-blue" href="#">à propos de nous</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </nav>
        </div>
       <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">

  <img src="assets/img/2.jpg" style="width:100%;margin-top: 30px;">

</div>

<div class="mySlides fade">
 
  <img src="assets/img/3.jpg "style="width:100%;margin-top: 30px;">
  
</div>

<div class="mySlides fade">
 
  <img src="assets/img/4.jpg" style="width:100%;margin-top: 30px;">
 
</div>
<div class="mySlides fade">

  <img src="assets/img/5.jpg" style="width:100%;margin-top: 30px;">

</div>
<div class="mySlides fade">
 
  <img src="assets/img/6.jpg" style="width:100%;margin-top: 30px;">
 
</div>
<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


        <br>
        <br>
        <div class="container">
  <h2>apcpedagogie votre site de formation à distance</h2>
</div>
<br>
<section><p>     Bienvenue sur apcpedagogie!
Apprenez et révisez les examens Microsoft Office Spécialiste et les examens Microsoft Office Expert,à l'aide des vidéos des cours et des exercices interactifs.
Découvrir les astuces Microsoft Office Word, Excel, PowerPoint et Access...
Apprenez comment installer WordPress chez votre hébergeur ou en local en moins de cinq minutes et maîtrisez les fonctions de base de cet incroyable outil de création de site. Choisissez parmi plus de 10000 thèmes gratuits et rédigez vos premiers articles... Sélectionner les meilleurs tutoriels et cours de formations gratuits pour apprendre la programmation Android. Dans notre cours & tutoriels vous trouverez:
    <li>Des vidéos en ligne haute qualité HD.</li>
<li>Des cours qui s'adressent à toute personne.</li>
<li>Des tutoriels, astuces, conseils... bien ficelés pour vous aider.</li>
</p>
</section>

      </div>
    </div>

        

        <br>
        <br>
     
  <div class="card-container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">nos cours </h3>
        <img src="assets/img/icon.jpg" alt="Image 3">
        <p>Le Bootstrap est un framework développé par l'équipe du réseau social Twitter. Proposé en open source (sous licence MIT), ce framework utilisant les langages HTML, CSS et JavaScript fournit aux développeurs des outils pour créer un site facilement.</p>
      </div>
    </div>
    <div class="card-container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">nos cours </h3>
        <img src="assets/img/icon2.jpg" alt="Image 3">
        <p>Le HTML 5 est un évolution logique du HTML 4.01 en le simplifiant sur certains points (comme le doctype) et en les actualisant en fonction de son utilisation et de sa distribution.
Le HTML5 est la dernière révision majeure du HTML.</p>
      </div>
    </div>
    <div class="card-container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">nos cours </h3>
        <img src="assets/img/icon3.jpg" alt="Image 3">
        <p>Le CSS est un langage de style qui définit la présentation des documents HTML. Par exemple, CSS couvre les polices, les couleurs, les marges, les lignes, la hauteur, la largeur, les images d'arrière-plan, les positionnements évolués et bien d'autres choses.</p>
      </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <br>
         
    <div class="row">
        <div class="col-md-8"> 
             <div class="embed-responsive embed-responsive-16by9">
                <iframe  src="https://www.youtube.com/embed/Ew79hEn1640" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
                </div>
        </div>
        <div class="col-md-4">
            <div>
                <h4>bootstrap</h4>
            <div class="embed-responsive-item">
                <iframe  src="https://www.youtube.com/embed/Ew79hEn1640" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>          
            </div>
            </div>
            <br>
            <div>
            <h4>HTML5</h4> 
            <div class="embed-responsive-item">
                <iframe src="https://www.youtube.com/embed/Ew79hEn1640" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
                </div>
            </div>
            <br>
            <div>
            <h4>CSS3</h4>
            <div class="embed-responsive-item">
                <iframe src="https://www.youtube.com/embed/Ew79hEn1640" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            </div>
        </div>
    </div>
 
  <footer>
            <div class="container">
                <div class="row pt-4">
                    <div class="col-sm-4">
                        <div class="card-dark" >
                            <div class="card-body">
                                <h5>Les cours de programmation</h5>
                                <p class="cours">L'informatique est le domaine d'activité scientifique, technique et industriel concernant le
                                    traitement automatique de l'information par des machines tels que : calculateur, système embarqué, ordinateur, console de jeux vidéo, robot,
                                    automate, etc [Wikipédia].
                                    Ce cours va vous initier aux bases du Visual Net, aucun prérequis n'est demandé : il n'est pas nécessaire de connaitre le moindre langage,
                                    tout vous sera expliqué. Ce cour est destiné sans limite d'age à tout internautes qui veut se former ou mettre à jour ses connaissances
                                    en informatique.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card-dark">
                            <div class="card-body">
                                <h5 class="card-title text-white">Le management de projet</h5>
                                <p class="cours">Le management de projet s'est révélé etre la méthode la plus efficace pour fournir des produits dans
                                    le cout, le calendrier et les contraintes de ressources.
                                    Cette série intensive et pratique de cours vous donne les compétences nécessaires pour que vos projets soient réalisés dans les délais et le
                                    budget tout en donnant à l'utilisateur le produit qu'il attend. Vous obtiendrez une solide connaissance pratique des bases de gestion de 
                                    projets et pourrez utiliser immédiatement ces connaissances pour gérer efficacement lrd projets de travail. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card-dark" >
                            <div class="card-body">
                                <h5 class="card-title text-white">L'approche Par Compétences</h5>
                                <p class="cours">Axer l'apprentissage sur des mises en situation techniques et/ou professionnelles qui devront permettre
                                    à l'apprenant d'aborder un (ou des) métiers dans ses dimensions opérationnelles.
                                    L'approche par compétences : Il s'agit de conjuger "savoir", "savoir-etre" et "savoir-faire" de l'apprenant.
                                    Le formateur s'engage dans une classification des objectifs à atteindre, en allant du plus simple au plus complexe.
                                    L'évaluation des apprentissages porte les comportements observables, elle peut-etre de type formatif, sommatif ou critérié.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <br>
<div class="logofooter">
            <i class="fa-brands fa-facebook-f" style="color: #1ba4c0;"></i>
            <i class="fa-solid fa-g" style="color: #d51010;"></i>
            <i class="fa-brands fa-twitter" style="color: #1da0d7;"></i>
            <i class="fa-brands fa-youtube" style="color: #da0b0b;"></i>
            </div>
            <div class="copy"> 
                ©Copyright 2016 -apcpedagogie 
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/4d3ae3eaa5.js" crossorigin="anonymous"></script>
        <script>
            let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
        </script>

    </body>
</html>
