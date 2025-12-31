<?php include '../includes/header.php'; 



?>


<div class="container my-5">
    <div class="card shadow border-0">
        <div class="card-header bg-success text-white"><h5 class="oswald mb-0">Nouvelle Visite Guidée</h5></div>
        <div class="card-body p-4">
            <form method="POST">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label class="form-label">Titre de la visite</label>
                        <input type="text" class="form-control" name="titre" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date et Heure de début</label>
                        <input type="datetime-local" class="form-control" name="dateheure" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Durée (minutes)</label>
                        <input type="number" class="form-control" name="duree" placeholder="ex: 60">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Prix (MAD)</label>
                        <input type="number" class="form-control" name="prix" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Langue</label>
                        <select class="form-select" name="langue">
                            <option>Français</option>
                            <option>Arabe</option>
                            <option>Anglais</option>
                            <option>Amazigh</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Capacité Max</label>
                        <input type="number" class="form-control" name="capacite_max" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Statut initial</label>
                        <select class="form-select" name="statut">
                            <option value="disponible">Disponible</option>
                            <option value="annulée">Annulée</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-atlas mt-4 w-100">CRÉER LA VISITE</button>
            </form>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>