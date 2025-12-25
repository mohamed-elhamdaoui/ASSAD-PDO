<?php



/**
 * SIMULATION DE L'ÉTAT DE CONNEXION
 * Changez la valeur de $role pour tester les différents affichages :
 * 'guest'   -> Non connecté
 * 'visitor' -> Connecté en tant que Visiteur
 * 'guide'   -> Connecté en tant que Guide
 * 'admin'   -> Connecté en tant que Administrateur
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSAD Zoo - CAN 2025 Maroc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <span class="oswald">ASSAD ZOO</span>
            <span class="badge bg-danger ms-2">MAROC 2025</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="/index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="/animals/animals.php">Animaux</a></li>
                <li class="nav-item"><a class="nav-link" href="/visits/visits.php">Visites</a></li>
            </ul>

            <ul class="navbar-nav ms-auto">
                
                <?php if (!isset($_SESSION['id'])): ?>
                    <li class="nav-item"><a class="nav-link" href="/auth/login.php">Connexion</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-maroc ms-lg-2" href="/auth/register.php">Inscription</a></li>

                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i> 
                            <?php 
                                if($_SESSION["role"] === 'Visiteur') echo 'Mon Compte';
                                if($_SESSION["role"] === 'Guide') echo 'Espace Guide';
                                if($_SESSION["role"] === 'admin') echo 'Administration';
                            ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            
                            <?php if ($_SESSION["role"] === 'Visiteur'): ?>
                                <li><a class="dropdown-item" href="profile.php"><i class="fas fa-user me-2"></i>Mon Profil</a></li>
                                <li><a class="dropdown-item" href="my_reservations.php"><i class="fas fa-ticket-alt me-2"></i>Mes Réservations</a></li>

                            <?php elseif ($_SESSION["role"] === 'Guide'): ?>
                                <li><a class="dropdown-item" href="profile.php"><i class="fas fa-user me-2"></i>Mon Profil</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header">Gestion des Visites</h6></li>
                                <li><a class="dropdown-item" href="guide_dashboard.php">Dashboard</a></li>
                                <li><a class="dropdown-item" href="create_visit.php">Créer une visite</a></li>
                                <li><a class="dropdown-item" href="manage_steps.php">Gérer les étapes</a></li>
                                <li><a class="dropdown-item" href="guide_reservations.php">Réservations clients</a></li>

                            <?php elseif ($_SESSION["role"] === 'Admin'): ?>
                                <li><a class="dropdown-item fw-bold" href="admin_dashboard.php"><i class="fas fa-chart-line me-2"></i>Dashboard</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="manage_users.php">Gestion utilisateurs</a></li>
                                <li><a class="dropdown-item" href="validate_guides.php">Validation des guides</a></li>
                                <li><a class="dropdown-item" href="manage_animals.php">Gestion des animaux</a></li>
                                <li><a class="dropdown-item" href="manage_habitats.php">Gestion des habitats</a></li>
                                <li><a class="dropdown-item" href="statistics.php">Statistiques</a></li>
                            <?php endif; ?>

                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i>Déconnexion</a></li>
                        </ul>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>