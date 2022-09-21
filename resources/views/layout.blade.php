<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Intitulé de ma page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
<!-- Voici notre en‑tête principale utilisée dans toutes les pages
      de notre site web -->
<header>
    <h1>En-tête</h1>
</header>

<nav>
    <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">L'équipe</a></li>
        <li><a href="#">Projets</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <!-- Un formulaire de recherche est une autre façon de naviguer de
        façon non‑linéaire dans un site. -->

    <form>
        <input type="search" name="q" placeholder="Rechercher">
        <input type="submit" value="Lancer !">
    </form>
</nav>

<!-- Ici nous mettons le contenu de la page -->


@yield('content')
<!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
<footer>
    <p>©Copyright 2050 par personne. Tous droits reversés.</p>
</footer>

</body>
</html>
