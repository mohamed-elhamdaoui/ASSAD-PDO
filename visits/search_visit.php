<?php include '../includes/header.php'; ?>

<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="oswald">Trouver une Visite Virtuelle</h1>
        <p class="text-muted">Utilisez les filtres pour découvrir nos parcours thématiques CAN 2025.</p>
    </div>

    <div class="card border-0 shadow-sm mb-5">
        <div class="card-body p-4">
            <form class="row g-3">
                <div class="col-md-4">
                    <label class="form-label fw-bold">Thématique</label>
                    <select class="form-select">
                        <option selected>Toutes les thématiques</option>
                        <option>Lions de l'Atlas (Spécial Maroc)</option>
                        <option>Écosystèmes Africains</option>
                        <option>Oiseaux migrateurs</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold">Date souhaitée</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold">Guide</label>
                    <select class="form-select">
                        <option selected>Tous les guides</option>
                        <option>Ahmed Alami</option>
                        <option>Sarah Dridi</option>
                    </select>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="button" class="btn btn-maroc w-100">Filtrer</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-12">
            <div class="alert alert-info py-2">3 visites correspondent à vos critères</div>
        </div>
        
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://images.unsplash.com/photo-1546182990-dffeafbe841d?auto=format&fit=crop&w=400&q=80" class="card-img-top" alt="Lion">
                <div class="card-body">
                    <h5 class="card-title oswald text-danger">Session Spéciale : Lions de l'Atlas</h5>
                    <p class="small text-muted mb-2"><i class="far fa-calendar-alt me-2"></i>22 Décembre 2025</p>
                    <p class="card-text">Une visite interactive dédiée au symbole du Maroc hôte.</p>
                    <a href="visit_details.php" class="btn btn-sm btn-outline-dark">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>