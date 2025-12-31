<?php include '../includes/header.php'; ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm text-center p-4">
                <div class="position-relative d-inline-block mx-auto mb-3">
                    <img src="https://ui-avatars.com/api/?name=Yassine+Benali&size=150&background=c1272d&color=fff" class="rounded-circle shadow" alt="Avatar">
                    <button class="btn btn-sm btn-dark position-absolute bottom-0 end-0 rounded-circle"><i class="fas fa-camera"></i></button>
                </div>
                <h4 class="oswald">Yassine Benali</h4>
                <p class="text-muted small">Membre depuis : Décembre 2025</p>
                <div class="badge bg-success mb-3">Statut : Visiteur Connecté</div>
                <hr>
                <div class="list-group list-group-flush text-start">
                    <a href="my_reservations.php" class="list-group-item list-group-item-action border-0"><i class="fas fa-ticket-alt me-2 text-danger"></i> Mes Réservations</a>
                    <a href="profile.php" class="list-group-item list-group-item-action border-0 fw-bold"><i class="fas fa-user-edit me-2 text-success"></i> Modifier Profil</a>
                    <a href="index.php" class="list-group-item list-group-item-action border-0 text-danger"><i class="fas fa-sign-out-alt me-2"></i> Déconnexion</a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 oswald">Paramètres du compte</h5>
                </div>
                <div class="card-body p-4">
                    <form>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Prénom</label>
                                <input type="text" class="form-control" value="Yassine">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nom</label>
                                <input type="text" class="form-control" value="Benali">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Adresse Email</label>
                            <input type="email" class="form-control" value="yassine.benali@can2025.ma">
                        </div>
                        <hr class="my-4">
                        <h6 class="mb-3">Sécurité</h6>
                        <div class="mb-3">
                            <label class="form-label">Ancien mot de passe</label>
                            <input type="password" class="form-control" placeholder="••••••••">
                        </div>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Nouveau mot de passe</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Confirmer nouveau mot de passe</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-maroc px-4">Enregistrer les changements</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>