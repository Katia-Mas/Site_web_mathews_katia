<?php
// Fichye sa a ka rete nan tèt index.php pou koneksyon ak baz done
include 'db_connect.php'; // Asire db_connect.php nan menm folder
$successMessage = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $email = $conn->real_escape_string($_POST['email']);
    $age = intval($_POST['age']);
    $instrument = $conn->real_escape_string($_POST['instrument']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO inscriptions (nom, prenom, email, age, instrument, message) 
            VALUES ('$nom', '$prenom', '$email', $age, '$instrument', '$message')";

    if ($conn->query($sql) === TRUE) {
        $successMessage = "Enskripsyon an fèt avèk siksè!";
    } else {
        $successMessage = "Erè: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecole de musique Notre-Dame du Mont Carmel des Cayes-Jacmel</title>
    <style>
        .marquee {
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
            font-weight: bold;
            font-size: 1.2em;
            color: #4a78b3;
            text-shadow: 0 0 5px #fff, 0 0 10px rgb(102, 117, 180), 0 0 15px rgb(135, 159, 194), 0 0 20px #ffa500, 0 0 30px #ffa500;
            display: inline-block;
            padding-left: 100%;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            0%   { transform: translateX(0%); }
            100% { transform: translateX(-100%); }
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            background: radial-gradient(circle, #009991, #f3cdd2);
            margin: 0;
            padding: 0;
        }
        header {
            background: linear-gradient(to bottom, #db86c2, #009991);
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            background: linear-gradient(to bottom, #db86c2, #009991);
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        section { padding: 20px; }
        footer {
            background: #db86c2;
            color: white;
            text-align: center;
            padding: 10px;
        }
        form input, form select, form textarea {
            display: block;
            margin: 10px 0;
            padding: 8px;
            width: 100%;
            max-width: 400px;
        }
        .button {
            background: #005599;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            vertical-align: middle;
        }
        html { scroll-behavior: smooth; }
        .image {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .image figure {
            width: 10%;
            text-align: center;
            min-width: 120px;
        }
        .image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
        .image figcaption {
            margin-top: 8px;
            font-size: 14px;
            color: #444;
            font-style: italic;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
        }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: center; }
        video { display: block; margin: 20px auto; }

        /* Section Événements */
        #evenements {
          padding: 50px;
          background-color: #1a1a1a;
          color: #ffcc00;
        }

        #evenements h2 {
          text-align: center;
          margin-bottom: 30px;
        }

        .evenement-list {
          display: flex;
          flex-wrap: wrap;
          gap: 20px;
          justify-content: center;
        }

        .evenement {
          background-color: #569996;
          padding: 20px;
          border-radius: 10px;
          width: 300px;
        }

        /* Section Photos de promotion */
        #photos {
          padding: 50px;
          background-color: #569996;
          color: #ffcc00;
        }

        #photos h2 {
          text-align: center;
          margin-bottom: 30px;
        }

        .photo-gallery {
          display: flex;
          flex-wrap: wrap;
          gap: 20px;
          justify-content: center;
        }

        .photo-gallery img {
          width: 250px;
          border-radius: 10px;
          transition: transform 0.3s;
        }

        .photo-gallery img:hover {
          transform: scale(1.05);
        }
    </style>
</head>
<body>

<header>
    <h1>
        <img src="logo Ecole de musique.jpg" class="logo" alt="Logo Ecole de musique">
        Ecole de musique Notre-Dame du Mont Carmel des Cayes-Jacmel
        <img src="logo Ecole de musique.jpg" class="logo" alt="Logo Ecole de musique">
    </h1>
    <h3>Bienvenue sur notre page web</h3>
</header>

<nav>
    <a href="#historique">Historique</a>
    <a href="#contact">Contact</a>
    <a href="#inscription">Formulaire d'inscription</a>
    <a href="#instruments">Instruments</a>
    <a href="#evennement">Évènement</a>
    <a href="#activites">Activités</a>
    <a href="#photos">Photos Promotion</a>
</nav>

<section id="section2">
    <div class="marquee">
        L'École de musique Notre-Dame du Mont Carmel a été fondée pour offrir une formation de qualité dans le domaine musical et diminuer la délinquance dans la commune.
    </div>
</section>

<section id="historique">
    <p>L'Ecole de musique Notre-Dame du Mont Carmel a été fondée pour offrir une formation de qualité dans le domaine musical et diminuer la délinquance dans la commune.</p>
    <h2>Historique</h2>
    <p>L’École de Musique Notre-Dame du Mont Carmel, située à Cayes-Jacmel, a été fondée en 2006 par le Révérend Père Serge Pardo. Elle est née d’une volonté forte de lutter contre la délinquance locale en offrant aux jeunes un espace d’apprentissage musical et de discipline.</p>
</section>

<section id="instruments">
    <h3>Différents types d'instruments</h3>
    <table>
        <tr>
            <th>Numéro</th>
            <th>Nom de l'instrument</th>
            <th>Catégorie</th>
            <th>Age</th>
            <th>Durée</th>
            <th>Image</th>
        </tr>
        <tr>
            <td>001</td>
            <td>Clarinette</td>
            <td>À vent</td>
            <td>10-14 ans</td>
            <td>2 ans</td>
            <td><img src="clarinette.jpg" alt="Clarinette" width="80"></td>
        </tr>
        <tr>
            <td>002</td>
            <td>Flûte</td>
            <td>À vent</td>
            <td>15-20 ans</td>
            <td>1 an</td>
            <td><img src="flute.jpg" alt="Flûte" width="80"></td>
        </tr>
        <tr>
            <td>003</td>
            <td>Saxophone alto</td>
            <td>à vent</td>
            <td>10-14 ans</td>
            <td>2 ans</td>
            <td><img src="Saxophone alto.jpg" alt="Saxophone alto" width="80"></td>
        </tr>
          </tr>
<tr>
<td>004</td>
<td>Guitare</td>
<td>à corde</td>
<td>7 à x</td>
<td>6mois</td>
<td><img src="Guitare.jpg" alt="Guitare" width="80"></td>

    </tr>

     </tr>
<tr><td>005</td>
<td>Keyboard</td>
<td>instrument à clavier</td>
<td>9 à x</td>
<td>6mois</td>
<td><img src="Keyboard.jpg" alt="Piano" width="80"></td>

    </tr>
<tr><td>006</td>
<td>percussions</td>
<td>à percussions</td>
<td>6 à x</td>
<td>6mois</td>
<td><img src="A Percussions.jpg" alt="batterie" width="80">
    </table>
</section>

<section id="inscription">
    <h2>Formulaire d'inscription</h2>

    <?php if($successMessage): ?>
        <p style="color: green; font-weight: bold;"><?php echo $successMessage; ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <input type="text" name="nom" placeholder="Nom" required>
        <input type="text" name="prenom" placeholder="Prénom" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="number" name="age" placeholder="Age" required>
        <select name="instrument" required>
            <option value="">Choisir un instrument</option>
            <option value="Clarinette">Clarinette</option>
            <option value="Flûte">Flûte</option>
            <option value="Saxophone alto">Saxophone alto</option>
        </select>
        <textarea name="message" placeholder="Message" required></textarea>
        <button type="submit" class="button">Envoyer</button>
    </form>
</section>

<section id="evenements">
    <h2>Événements</h2>
    <div class="evenement-list">
        <div class="evenement">Concert annuel - Juin 2025</div>
        <div class="evenement">Atelier percussion - Août 2025</div>
        <div class="evenement">Festival de jazz - Décembre 2025</div>
    </div>
</section>

<section id="photos">
    <h2>Photos de promotion</h2>
    <div class="photo-gallery">
        <img src="1ere promotion 2.jpg" alt="Photo 1">
        <img src="2eme promotion.jpg" alt="Photo 2">
        <img src="3eme promotion.jpg" alt="Photo 3">
    </div>
</section>

<footer>
    <p>&copy; 2025 Ecole de musique Notre-Dame du Mont Carmel des Cayes-Jacmel</p>
</footer>

</body>
</html>
