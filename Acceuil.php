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
    <h1>Voyage Etoilés</h1>
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
    <main>
        <section id="acceuil" >
            <img src="./henfant.jpg" alt="voyage etoilé banner">
            <h2>Allez y</h2>
            <p>Notre agence de voyage , forte d'une experience de plus de 4ans, s'aura vous guider pour créer le séjour de vos réves . Avec plus de 5000 clients satisfaits à notre actif, 
                nous savons répondre à toutes les demandes et dans des délais restreints.  </p>
                <p>Notre service clientéle est aux petits soins à 
                    n'importe quel jour de le semaine , pour assurer sérenité et bien-étre . L'objectif est simple : <strong>Profitez de votre séjour !</strong>
                </p>
                <span></span>
        </section>
        <section id="prestation">
        <h2>Prestations</h2>
        <div class="service">
            <img src="./logo-docker.svg" alt="avion">
            <h3>Transport</h3>
            <p>Nous garantissons un transport agréable et sans strees . Gràce à une organisation 
                solide, vous n'aurez qu'à vous laisser guider par nos conseillers.</p>
        </div>
        <div class="service">
        <img src="./logo-docker.svg" alt="carte">
            <h3>Visites</h3>
            <p>Découvrez des endroits incroyable et vivez des experiences inédites grace à nos guides locaux
                sur chaque sites du burkina faso.</p>
        </div>

        <div class="service">
        <img src="./logo-docker.svg" alt="parasol">
            <h3>Plaisir</h3>
            <p>Détendez-vous en profitant de grandes piscines et de coktails genereusement préparés pour vous
                 dans notre sélection d'hotels de luxe.</p>
        </div>
        <span></span>
    </section>
    <section id="galerie">
    <h2>Galerie</h2>
    <img src="./henfant.jpg" alt="papillons">
    <img src="./henfant.jpg" alt="ballon">
    <img src="./henfant.jpg" alt="plage">
    <img src="./henfant.jpg" alt="couple">
    <span></span>
    </section>
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
    <p>Projet 2023 - &copy; Ridoss compagnie - Voyages Etoilés</p>
    <div class="logo">
            <img  class="logo" src="./logo-facebook.svg" alt="">
            <img  class="logo" src="./logo-instagram.svg" alt="">
            <img  class="logo" src="./logo-twitter.svg" alt="">
            <img  class="logo" src="./logo-linkedin.svg" alt="">
            <img class="logo" src="./logo-whatsapp.svg" alt="">+22675413359/60385320
        </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>