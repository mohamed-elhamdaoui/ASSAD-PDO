<?php include '../includes/header.php'; ?>

<?php
// include 'config/connection.php';




// if (isset($_POST["save"])) {
//     $nom = $_POST["nom"];
//     $role = $_POST["role"];
//     $email = $_POST["email"];
//     $motpasse = $_POST["motpasse"];


//     $sql = "insert into utilisateurs (nom , email , role , motpasse_hash) values ('$nom' , '$email' , '$role' ,'$motpasse');";
    
//     $conn->query($sql);

//     if($role == 'Visiteur'){
//         header("location: login.php");
//     }
//     if($role == 'Guide'){
//         header("location: guide_pending.php");
//     }

// }



?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center py-4">
                    <h2 class="h4 mb-0">Créer un compte</h2>
                </div>
                <div class="card-body p-4">
                    <form action="register.php" method="POST">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Nom complet</label>
                                <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type de compte</label>
                            <select name="role" class="form-select" required>
                                <option value="Visiteur">Visiteur (Supporter / Famille)</option>
                                <option value="Guide">Guide Animalier (Expert)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="exemple@domaine.ma" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mot de passe</label>
                            <input type="password" name="motpasse" class="form-control" placeholder="********" required>
                        </div>

                        <button type="submit" name="save" class="btn btn-maroc w-100">Finaliser l'inscription</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>