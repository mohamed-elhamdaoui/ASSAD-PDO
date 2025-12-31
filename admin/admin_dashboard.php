<?php include '../includes/header.php'; ?>
<?php
include '../Classes/Utilisateurs.php'; 
include '../Classes/Animal.php'; 
include '../Classes/Habitat.php'; 
include '../config/db_connect.php'; 

$user = new Utilisateurs("","","","");
$hibatitat = new Habitat("","","","", "");
// include 'config/connection.php';


$users = $user->getAll($pdo);
$Habitats = $hibatitat->getAll($pdo);

// print_r($Habitats);
$allanimlas = Animal::getAll($pdo);





?>

<div class="container my-5">
    <div class="row mb-4">
        <div class="col">
            <h1 class="oswald"><i class="fas fa-tachometer-alt me-2 text-maroc"></i>Panel Administration - ASSAD</h1>
            <p class="text-muted">Gestion du Zoo Virtuel pour la CAN 2025 au Maroc.</p>
        </div>
    </div>

    <div class="row g-3 mb-5 text-center">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-dark text-white h-100">
                <div class="card-body">
                    <h6 class="text-uppercase small opacity-75">Utilisateurs Inscrits</h6>
                    <h2 class="oswald mb-0"><?= count($users) ?></h2>
                    <p class="small mb-0 text-success"><i class="fas fa-globe-africa"></i> +12 pays</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white h-100" style="background-color: #006233;">
                <div class="card-body">
                    <h6 class="text-uppercase small opacity-75">Animaux en Base</h6>
                    <h2 class="oswald mb-0"><?= count($allanimlas) ?></h2>
                    <p class="small mb-0"><i class="fas fa-paw"></i> Table: animaux</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-white h-100" style="background-color: #c1272d;">
                <div class="card-body">
                    <h6 class="text-uppercase small opacity-75">Habitats Créés</h6>
                    <h2 class="oswald mb-0"><?= count($Habitats) ?></h2>
                    <p class="small mb-0"><i class="fas fa-mountain"></i> Table: habitats</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-info text-white h-100">
                <div class="card-body">
                    <h6 class="text-uppercase small opacity-75">Avis Approuvés</h6>
                    <h2 class="oswald mb-0">124</h2> 
                    <p class="small mb-0"><i class="fas fa-comments"></i> Table: commentaires</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3">
                    <h5 class="oswald mb-0 text-success"><i class="fas fa-tools me-2"></i>Modules de Gestion (CRUD)</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <a href="manage_users.php" class="btn btn-outline-dark w-100 py-4">
                                <i class="fas fa-users-cog d-block mb-2 fa-2x"></i>
                                <strong>UTILISATEURS</strong><br>
                                <small class="text-muted">Activer/Désactiver les comptes</small>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="manage_animals.php" class="btn btn-outline-dark w-100 py-4">
                                <i class="fas fa-paw d-block mb-2 fa-2x"></i>
                                <strong>ANIMAUX</strong><br>
                                <small class="text-muted">Gérer les fiches et habitats liés</small>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="manage_habitats.php" class="btn btn-outline-dark w-100 py-4">
                                <i class="fas fa-mountain d-block mb-2 fa-2x"></i>
                                <strong>HABITATS</strong><br>
                                <small class="text-muted">Zones et climats du zoo</small>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="statistics.php" class="btn btn-outline-dark w-100 py-4">
                                <i class="fas fa-chart-bar d-block mb-2 fa-2x"></i>
                                <strong>STATISTIQUES</strong><br>
                                <small class="text-muted">Vues, pays et réservations</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white py-3">
                    <h5 class="oswald mb-0 text-danger"><i class="fas fa-bell me-2"></i>Actions Requises</h5>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item p-3 border-start border-warning border-4">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <h6 class="mb-1 fw-bold">Commentaires en attente</h6>
                                <span class="badge bg-warning text-dark">5</span> 
                            </div>
                            <p class="mb-2 small text-muted">De nouveaux avis attendent d'être modérés.</p>
                            <a href="manage_comments.php" class="btn btn-sm btn-outline-warning w-100">Accéder à la modération</a>
                        </div>

                        <div class="list-group-item p-3">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <h6 class="mb-1 fw-bold">Nouveau Guide en attente</h6>
                                <span class="badge bg-danger">3</span>
                            </div>
                            <p class="mb-2 small text-muted">Vérifiez les certifications des guides inscrits.</p>
                            <a href="validate_guides.php" class="btn btn-sm btn-maroc">Accéder à la validation</a>
                        </div>
                        
                        <div class="list-group-item p-3">
                            <h6 class="mb-1 fw-bold">Nettoyage Base de Données</h6>
                            <p class="mb-1 small text-muted">8 réservations annulées à traiter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>