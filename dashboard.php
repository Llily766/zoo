<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $images = 'images'; 
    
    // Informations de connexion à la base de données
    $host = 'localhost'; // Adresse du serveur MySQL
    $dbname = 'aurelieDB'; // Nom de la base de données
    $user = 'votre_nom_utilisateur'; // Nom d'utilisateur MySQL
    $pass = 'votre_mot_de_passe'; // Mot de passe MySQL
    
    // Connexion à la base de données
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$aurelieDB", 'aurelie', '210982');

        // Configuration pour afficher les erreurs PDO
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Requête d'insertion
        $sql= "INSERT INTO `service` (`id`, `title`, `description`, `images`, `category_id`) 
                VALUES (NULL, :title, :description, :images, :category)";
        
        // Préparation de la requête
        $stmt = $dbh->prepare($sql);
        
        // Liaison des valeurs
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':images', $images);
        $stmt->bindParam(':category', $category);
        
        // Exécution de la requête
        $stmt->execute();
        
        echo "Enregistrement ajouté avec succès";
    } catch(PDOException $e) {
        // En cas d'erreur, afficher l'erreur
        echo "Erreur : " . $e->getMessage();
    }
}
?>
<form method="POST">
    <div class="mb-3">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="10" rows="5"></textarea>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select name="category" id="category" class="form-select">
            <option value="1">Service</option>
            <option value="2">Service Restauration</option>
            <option value="3">Service visite guidée</option>
            <option value="4">Service petit train</option>
        </select>
    </div>
    <button type="submit">Enregistrer</button>
</form>


