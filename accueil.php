<?php
session_start();
// var_dump($_SESSION["pseudo"] == null);
if (!isset($_SESSION["pseudo"]) ) {
    header('Location: login.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f4f4f4;
        }
        header {
            background-color: #35424a;
            color: white;
            padding: 30px;
            text-align: center;
        }
        nav {
            background-color: #35424a;
            color: white;
            padding: 10px 0;
        }
        nav ul {
            padding: 0;
            list-style: none;
            text-align: center;
        }
        nav li {
            display: inline;
            margin: 0 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
        }
        section {
            padding: 20px;
            margin: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .btn {
            display: inline-block;
            background: #35424a;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 10px;
        }
        footer {
            background-color: #35424a;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Bienvenue sur Mon Site</h1>
            <p>Un site web simple et élégant</p>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#apropos">À propos</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <section id="accueil">
            <h2>Accueil</h2>
            <p>Bienvenue sur notre site web. Nous sommes ravis de vous accueillir ici.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
            <a href="#" class="btn">En savoir plus</a>
        </section>

        <section id="services">
            <h2>Nos Services</h2>
            <p>Découvrez nos services professionnels.</p>
            <ul>
                <li>Service 1</li>
                <li>Service 2</li>
                <li>Service 3</li>
            </ul>
            <a href="#" class="btn">Voir tous les services</a>
        </section>

        <section id="apropos">
            <h2>À propos de nous</h2>
            <p>Nous sommes une entreprise passionnée par ce que nous faisons.</p>
            <p>Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
        </section>

        <section id="contact">
            <h2>Contactez-nous</h2>
            <p>N'hésitez pas à nous contacter pour toute question ou demande d'information.</p>
            <p>Email: contact@monsite.com</p>
            <p>Téléphone: 01 23 45 67 89</p>
        </section>
    </div>

    <footer>
        <p>&copy; 2025 Mon Site Web. Tous droits réservés.</p>
    </footer>
</body>
</html>