<?php include '../includes/header.php' ?>

<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="list.html" class="text-decoration-none text-success">Visites</a></li>
            <li class="breadcrumb-item active">Safari au Cœur de la CAN</li>
        </ol>
    </nav>

    <div class="row g-4">
        <div class="col-lg-8">
            <img src="https://images.unsplash.com/photo-1547407139-3c921a66005c?auto=format&fit=crop&w=800&q=80" 
                 class="img-fluid w-100 hero-image shadow mb-4" alt="Safari">

            <h1 class="fw-bold">Safari au Cœur de la CAN 2025</h1>
            
            <div class="d-flex flex-wrap gap-3 mb-4 text-muted border-bottom pb-3">
                <span><i class="fas fa-map-marker-alt text-danger me-1"></i> Zone : Savane & Atlas</span>
                <span><i class="fas fa-clock text-primary me-1"></i> Durée : 45 min</span>
                <span><i class="fas fa-video text-success me-1"></i> Haute Définition</span>
            </div>
            
            <h4 class="mb-3">À propos de cette visite</h4>
            <p class="lead">
                Embarquez pour une aventure virtuelle interactive unique au monde. 
                Ce parcours est spécialement conçu pour les fans de football souhaitant découvrir 
                les animaux emblématiques des nations qualifiées pour la Coupe d'Afrique 2025.
            </p>
            
            <h4 class="mt-5 mb-3">Étapes du parcours</h4>
            <div class="list-group list-group-flush border rounded shadow-sm">
                <div class="list-group-item d-flex align-items-center">
                    <i class="fas fa-check-circle text-success me-3"></i>
                    <span>Introduction : L'histoire et les valeurs du Zoo ASSAD</span>
                </div>
                <div class="list-group-item d-flex align-items-center">
                    <i class="fas fa-check-circle text-success me-3"></i>
                    <span>Rencontre avec les Lions de l'Atlas (Symbole du Maroc)</span>
                </div>
                <div class="list-group-item d-flex align-items-center">
                    <i class="fas fa-check-circle text-success me-3"></i>
                    <span>Les Gazelles du Sénégal et les Éléphants de Côte d'Ivoire</span>
                </div>
                <div class="list-group-item d-flex align-items-center">
                    <i class="fas fa-check-circle text-success me-3"></i>
                    <span>Session interactive de questions/réponses avec le guide</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow border-0 sticky-sidebar">
                <div class="card-header bg-warning text-dark text-center py-3">
                    <h4 class="mb-0 fw-bold">25.00 MAD</h4>
                    <small>Accès par foyer</small>
                </div>
                <div class="card-body p-4">
                    <div class="d-grid gap-2 mb-4">
                        <a href="../user/reservation.html" class="btn btn-dark btn-lg fw-bold shadow-sm">
                            <i class="fas fa-ticket-alt me-2"></i>Réserver maintenant
                        </a>
                    </div>
                    
                    <hr>

                    <h6 class="text-uppercase small fw-bold text-muted mb-3">Votre Guide Expert</h6>
                    <div class="d-flex align-items-center p-2 bg-light rounded">
                        <img src="https://ui-avatars.com/api/?name=Ahmed+Alami&background=006233&color=fff" 
                             class="rounded-circle me-3" width="60" alt="Guide">
                        <div>
                            <h6 class="mb-0 fw-bold">Ahmed Alami</h6>
                            <small class="text-muted">Zoologiste Spécialiste Atlas</small>
                        </div>
                    </div>

                    <div class="mt-4">
                        <ul class="list-unstyled small text-muted">
                            <li class="mb-2"><i class="fas fa-shield-alt text-success me-2"></i> Annulation gratuite (24h avant)</li>
                            <li class="mb-2"><i class="fas fa-headset text-success me-2"></i> Assistance technique 24/7</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-4 mt-5">
    <p class="mb-0">&copy; 2025 Zoo ASSAD - Spécial CAN Maroc. Tous droits réservés.</p>
</footer>

</body>
</html>