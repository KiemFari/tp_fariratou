<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Voyage Etoilé</title>
</head>
<body>
    <header>
    <!-- <img src="./logo-docker.svg" alt=""> -->
    <h1>Voyage Etoilé</h1>
</header>

<div id="center">
<aside>
    <nav>
        <h3>Menu</h3>
        <ul>
            <li><a href="Acceuil.php">Acceuil</a></li>
            <li><a href="Prestation.php">Prestations</a></li>
            <li><a href="Galerie.php">Galerie</a></li>
            <li><a href="Contact.php">Contact</a></li>
        </ul>
    </nav>
    </aside>
    <section id="contact">
        <h2>On y va ????????</h2>
        <p>Qu'attendez-vous pour profiter de vacances exceptionnelles à un prix exceptionnel? Envoyez-nous 
            votre demande par mail au formulaire ci-dessous et nous vous renverrons un devis 
       <strong>gratuit</strong> sous 48h.</p>
       <form action="mailto:exemple@exemple.com" method="post" enctype="text/plain">
        <label for="nom">Votre nom et prénom :</label>
        <input type="text" id="nom" name=" Votre nom" required>
        <label for="email">Votre email ici :</label>
        <input type="email" id="email" name=" Votre email" required>
        <label for="depart">Votre lieu de résidence :</label>
        <input type="text" id="depart" name=" Votre lieu de départ" required>
        <label for="destination">Destination souhaitée :</label>
        <input type="text" id="email" name=" Votre destination souhaitée" required>
        <label for="durée">Durée du séjour(en nombre de nuits) :</label>
        <input type="number" min="0" max="100" id="durée" name="Durée du séjour(en nombre de nuits)" required>
        
        <button type="submit">Envoyer !</button>
        <p>*Vous serez redirigé vers votre messagerie . <br> Il vous suffira d'envoyer le mail 
        automatiquement crée *</p>
      
        </form>
    </section>
    </main>
</div>




<footer>
    <p>Projet 2023 - &copy; Ridoss compagnie - Voyages Etoilés </p>
    <div class="logo">
            <img  class="logo" src="./logo-facebook.svg" alt="">
            <img  class="logo" src="./logo-instagram.svg" alt="">
            <img  class="logo" src="./logo-twitter.svg" alt="">
            <img  class="logo" src="./logo-linkedin.svg" alt="">
            <img class="logo" src="./logo-whatsapp.svg" alt="">+22675413359/60385320
        </div>
</footer>
</div>





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>