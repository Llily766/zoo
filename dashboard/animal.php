<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nom = $_POST['nom'];
  $description = $_POST['description'];
  $category = $_POST['category'];
  $images = 'Test image';

  // Informations de connexion à la base de données
  $host = 'localhost'; // Adresse du serveur MySQL
  $dbname = 'zoo'; // Nom de la base de données
  $user = 'root'; // Nom d'utilisateur MySQL
  $pass = ''; // Mot de passe MySQL

  // Connexion à la base de données
  try {

    $dbh = new PDO("mysql:host=" . $host . ";dbname=" . $dbname 
  . ";charset=utf8", $user, $pass);

    // Configuration pour afficher les erreurs PDO
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête d'insertion
    $sql = "INSERT INTO `animal` (race, prenom)
      VALUES (:race, :prenom)";

    // Préparation de la requête
    $stmt = $dbh->prepare($sql);

    // Liaison des valeurs
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':images', $images);
    // Exécution de la requête
    $stmt->execute();

    echo "Enregistrement ajouté avec succès";
  } catch (PDOException $e) {
    // En cas d'erreur, afficher l'erreur
    echo "Erreur : " . $e->getMessage();
  }
}
?>
<form method="POST">
  <div class="mb-3">
    <label for="nom">Title</label>
    <input type="text" name="nom" id="nom">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" id="description" cols="10" rows="5"></textarea>
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select name="category" id="category" class="form-select">
      <option value="1">Service</option>
      <option value="2">habitats</option>
      <option value="3">image</option>
      <option value="4">animal</option>
    </select>
  </div>
  <button type="submit">Enregistrer</button>
</form>