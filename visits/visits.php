<?php include '../includes/header.php'; ?>

<div class="container my-5">
    <h1 class="mb-4">Visites Guidées Virtuelles</h1>
    
    <div class="row mb-5">
        <div class="col-md-8">
            <p class="lead">Apprenez-en plus sur la faune avec nos guides experts via des sessions interactives en direct.</p>
        </div>
        <div class="col-md-4 text-end">
            <a href="search_visit.php" class="btn btn-outline-dark"><i class="fas fa-search me-2"></i>Rechercher une visite</a>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card h-100 flex-row overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1535083319918-2989b8a995cf?auto=format&fit=crop&w=200&q=80" class="d-none d-md-block" style="object-fit: cover; width: 200px;" alt="Visite Safari">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title">Safari au Cœur de la CAN</h5>
                        <span class="badge bg-warning text-dark">25 MAD</span>
                    </div>
                    <p class="small text-muted mb-2"><i class="fas fa-user-tie me-1"></i> Guide : Ahmed Alami</p>
                    <p class="card-text">Une immersion totale dans les habitats africains avec un focus sur les pays participants.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-success small fw-bold"><i class="far fa-clock me-1"></i> Demain à 14:00</span>
                        <a href="visit_details.php" class="btn btn-sm btn-maroc">Détails</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 flex-row overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1541019179119-933614bc0893?auto=format&fit=crop&w=200&q=80" class="d-none d-md-block" style="object-fit: cover; width: 200px;" alt="Visite Oiseaux">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title">Les Ailes du Maroc</h5>
                        <span class="badge bg-warning text-dark">Gratuit</span>
                    </div>
                    <p class="small text-muted mb-2"><i class="fas fa-user-tie me-1"></i> Guide : Sarah Dridi</p>
                    <p class="card-text">Découverte des oiseaux migrateurs qui traversent le détroit de Gibraltar.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-secondary small fw-bold"><i class="far fa-clock me-1"></i> Samedi à 10:00</span>
                        <a href="visit_details.php" class="btn btn-sm btn-maroc">Détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>