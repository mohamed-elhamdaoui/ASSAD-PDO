<?php 
// 1. Initialisation et Connexion
include '../includes/header.php'; 
include '../config/db_connect.php';

// Vérification de la session
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$id_user = $_SESSION["user_id"];
$id_res = isset($_GET['id']) ? intval($_GET['id']) : 0;

// 2. Sécurité : Vérifier que la réservation existe, appartient à l'user et est TERMINÉE
$sql_check = "SELECT r.id, v.titre, v.statut 
              FROM reservations r 
              JOIN visitesguidees v ON r.idvisite = v.id 
              WHERE r.id = ? AND r.idutilisateur = ? AND v.statut = 'terminée'";

$stmt = $pdo->prepare($sql_check);
$stmt->execute([$id_res, $id_user]);
$reservation = $stmt->fetch(PDO::FETCH_ASSOC);

// Si la condition n'est pas remplie, on redirige vers la liste
if (!$reservation) {
    header("Location: my_reservations.php?msg=not_allowed");
    exit();
}

// 3. Traitement de l'envoi de l'avis
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = intval($_POST['note']);
    $commentaire = htmlspecialchars($_POST['commentaire']);

    if ($note >= 1 && $note <= 5) {
        try {
            $sql_ins = "INSERT INTO evaluations (id_reservation, note, commentaire) VALUES (?, ?, ?)";
            $stmt_ins = $pdo->prepare($sql_ins);
            
            if ($stmt_ins->execute([$id_res, $note, $commentaire])) {
                $message = "<div class='alert alert-success shadow-sm'><i class='fas fa-check-circle me-2'></i> Merci ! Votre avis a été enregistré avec succès.</div>";
                // Redirection automatique après 2 secondes
                header("Refresh: 2; url=my_reservations.php");
            }
        } catch (PDOException $e) {
            $message = "<div class='alert alert-danger shadow-sm'>Erreur : Vous avez peut-être déjà noté cette visite.</div>";
        }
    } else {
        $message = "<div class='alert alert-warning shadow-sm'>Veuillez sélectionner une note.</div>";
    }
}
?>



<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="my_reservations.php" class="text-decoration-none">Mes Réservations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Laisser un avis</li>
                </ol>
            </nav>

            <div class="card shadow-lg border-0 overflow-hidden" style="border-radius: 20px;">
                <div class="card-header bg-warning py-4 text-center">
                    <h3 class="mb-0 fw-bold text-dark"><i class="fas fa-star me-2"></i> Évaluer la visite</h3>
                </div>
                
                <div class="card-body p-4 p-md-5">
                    <?= $message ?>

                    <div class="text-center mb-5">
                        <p class="text-muted mb-1">Comment s'est passée votre expérience avec :</p>
                        <h4 class="fw-bold text-success">"<?= htmlspecialchars($reservation['titre']) ?>"</h4>
                    </div>

                    <form method="POST">
                        <div class="mb-5">
                            <label class="form-label d-block text-center fw-bold mb-3">Votre note globale :</label>
                            <div class="d-flex justify-content-center gap-2">
                                <?php for($i=1; $i<=5; $i++): ?>
                                    <input type="radio" class="btn-check" name="note" id="star<?= $i ?>" value="<?= $i ?>" required>
                                    <label class="btn btn-outline-warning rounded-pill px-3 py-2" for="star<?= $i ?>">
                                        <?= $i ?> <i class="fas fa-star"></i>
                                    </label>
                                <?php endfor; ?>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="commentaire" class="form-label fw-bold"><i class="fas fa-comment-dots me-2"></i> Votre témoignage (optionnel) :</label>
                            <textarea name="commentaire" id="commentaire" class="form-control border-0 bg-light" rows="5" 
                                      placeholder="Partagez ce que vous avez aimé (les explications du guide, les animaux vus...)" 
                                      style="border-radius: 15px;"></textarea>
                        </div>

                        <div class="d-grid gap-3">
                            <button type="submit" class="btn btn-success btn-lg shadow-sm" style="border-radius: 12px;">
                                <i class="fas fa-paper-plane me-2"></i> Publier mon avis
                            </button>
                            <a href="my_reservations.php" class="btn btn-link text-muted text-decoration-none">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
            
            <p class="text-center mt-4 text-muted small">
                <i class="fas fa-shield-alt me-1"></i> Vos avis aident les futurs visiteurs à choisir les meilleures expériences.
            </p>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>