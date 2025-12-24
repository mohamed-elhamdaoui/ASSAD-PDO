
<?php
include 'includes/header.php';
include 'config/connection.php';



if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "select * from utilisateurs where motpasse_hash = '$password' and email = '$email'; ";
    $result = $conn->query($sql);
    // echo $sql;
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION["id"] = $user["id"];
        $_SESSION["role"] = $user["role"];
        $_SESSION["nom"] = $user["nom"];

        if($_SESSION["role"]== 'Visiteur'){
            header("location: profile.php");
        }if($_SESSION["role"]== 'Guide'){
            header("location: guide_dashboard.php");
        }if($_SESSION["role"]== 'Admin'){
            header("location: admin_dashboard.php");
        }
    }

    
}

?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-maroc text-white text-center py-4" style="background-color: #c1272d;">
                    <h2 class="h4 mb-0">Connexion à ASSAD Zoo</h2>
                </div>
                <div class="card-body p-4">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Adresse Email</label>
                            <input type="email" name="email" class="form-control" placeholder="exemple@can2025.ma" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mot de passe</label>
                            <input type="password" name="password" class="form-control" placeholder="********" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Se souvenir de moi</label>
                        </div>
                        <button type="submit" name="login" class="btn btn-maroc w-100 mb-3">Se connecter</button>
                    </form>
                    <hr>
                    <p class="text-center mb-0">Pas encore de compte ? <a href="register.php" class="text-success fw-bold text-decoration-none">Inscrivez-vous ici</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>