<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fils Rouge </title>
  <link rel="stylesheet" href="../FilsRouge/assets/style.css">
  <!-- Inclure le fichier CSS de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="menu">
            <img src="assets/img/the_district_brand/logo.png" alt="Image" style="float: left;" width="100" height="100">
            <div class="menuacceuil">
            <li><a href="index.html">Accueil</a></li>
        </div >
        <div class="menucategorie">
            <li><a href="categorie.html">Catégorie</a></li>
        </div>
        <div class="menuplat">
            <li><a href="plats.html">Plats</a></li>
        </div>
        <div class="menucontact">
            <li><a href="contact.html">Contact</a></li>
        </div>
        </div>
    </header>
    <br>
          
    
        <div class="search">
            <video src="../FilsRouge/assets/A_CINEMATIC_B_Roll_-_Burger_Foodporn_2020_ALbrollchallenge.mov" controls autoplay loop> </video>
            <input class="searchbar" type="search" placeholder="Recherche...">
    
        </div>
        <form id="monFormulaire" action="traitement_formulaire.php" method="POST">
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form>
          <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom"required>
            
          </div>
          <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom"required>
          </div>
          <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email"required>
          </div>
          <div class="form-group">
            <label for="message">Message :</label>
            <textarea class="form-control" id="message" rows="4" name="demande" placeholder="Entrez votre message"required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
  </form>

  <!-- Inclure le fichier JavaScript de Bootstrap (et jQuery) pour le bon fonctionnement des composants interactifs du formulaire -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
