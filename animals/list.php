<?php include 'includes/header.php'; ?>

<?php
include 'config/connection.php';
?>
<div class="container my-5">
    <h2 class="oswald text-center mb-4">Nos Animaux - CAN 2025</h2>
    <form method="get">
        <div class="row g-2 mb-4">
            <div class="col-md-4">
                <select name="pays" class="form-select border-maroc">
                    <option value="">Tous les pays africains</option>
                    <option value="Maroc">Maroc</option>
                    <option value="Sénégal">Sénégal</option>
                    <option value="Cameroun">Cameroun</option>
                </select>
            </div>
            <div class="col-md-4">
                <select name="habitat" class="form-select border-atlas">
                    <option value="">Tous les habitats</option>
                    <option value="1">Montagnes de l'Atlas</option>
                    <option value="3">Savane</option>
                    <option value="4">Désert</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" name="save" class="btn btn-maroc w-100">FILTRER</button>
            </div>
        </div>
    </form>
    <?php

    $sql = "select * from habitats,animaux where habitats.id=animaux.id_habitat ORDER BY animaux.id ASC";

    if (!empty($_GET["pays"])) {
        $sql .= "and paysorigine = '{$_GET["pays"]}' ";
    }
    if (!empty($_GET["habitat"])) {
        $sql .= "and habitats.id = '{$_GET["habitat"]}' ";
    }

    // echo $sql;
    // print_r($_GET);

    $result = $conn->query($sql);
    $rows = $result->fetch_all(1);

    echo $result->num_rows;

    ?>




    <div class="container my-5">
        <div class="row g-4">

            <?php

            if ($result->num_rows > 0) {
                foreach ($rows as $row) {
                    echo ' <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm border-0">
                <img src=" ' . $row["image"] . ' " class="card-img-top" alt="NOM_ANIMAL">
                <div class="card-body">
                    <h5 class="oswald">' . $row["nom"] . '</h5>
                    <p class="small text-muted mb-1">Espèce : ' . $row["espece"] . '</p>
                    <p class="small text-muted mb-2">Origine : <span class="badge bg-danger">' . $row["paysorigine"] . '</span></p>
                    <a href="animal_details.php?id=ID_ANIMAL" class="btn btn-sm btn-outline-dark w-100">Voir Fiche</a>
                </div>
            </div>
        </div>';
                }
            } else{
                echo "<p class='text-center'>Aucun animal trouvé pour le moment.</p>";
            }
            ?>
        </div>
    </div>





</div>
<?php include 'includes/footer.php'; ?>