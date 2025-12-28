<?php include '../includes/header.php'; 
include '../Classes/Utilisateurs.php';
include '../config/db_connect.php';

$user = new Utilisateurs("","","","");
$rows = $user->getAll($pdo);
 

?>

<?php
// include 'config/connection.php';

// On récupère tous les utilisateurs, y compris la colonne is_active
$sql = "SELECT * from utilisateurs";


// Utilisation du mode 1 (MYSQLI_ASSOC) pour manipuler les noms de colonnes


// if (isset($_GET["filter_search"]) && (!empty($_GET["search"]))){
//     $value = $_GET["search"];
//     $sql .= " where nom = '{$value}'  ";
// }

// $result = $conn->query($sql);
// $rows = $result->fetch_all(mode: 1);
?>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="oswald">Gestion des Utilisateurs</h2>
        <form method="get" action="" class="w-25">
        <div class="input-group">
            <input 
                type="text" 
                name="search" 
                class="form-control" 
                placeholder="Rechercher..."
                value=""
            >
            <button type="submit" name="filter_search" class="btn btn-outline-secondary">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0 text-center">
                <thead class="bg-dark text-white">
                    <tr>
                        <th class="py-3">ID</th>
                        <th class="py-3 text-start">Utilisateur</th>
                        <th class="py-3 text-start">Email</th>
                        <th class="py-3">Rôle</th>
                        <th class="py-3">Statut</th>
                        <th class="py-3">Action</th>
                    </tr>
                </thead>
                <tbody>

                    
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td class="text-muted">#<?= $row["id"] ?></td>
                            <td class="text-start"><strong><?= htmlspecialchars($row["nom"]) ?></strong></td>
                            <td class="text-start small"><?= htmlspecialchars($row["email"]) ?></td>
                            <td>
                                <span class="badge bg-secondary text-uppercase"><?= $row["role"] ?></span>
                            </td>

                            <td>
                                <?php if ($row['status_approbation'] == 1): ?>
                                    <span class="badge rounded-pill bg-success">
                                        <i class="fas fa-check-circle me-1"></i> Actif
                                    </span>
                                <?php else: ?>
                                    <span class="badge rounded-pill bg-danger">
                                        <i class="fas fa-ban me-1"></i> Suspendu
                                    </span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <a href="edit_user.php?id=<?= $row["id"] ?>" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>