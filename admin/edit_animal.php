    <?php include '../includes/header.php'; ?>

<?php
// include 'config/connection.php';

// $id = $_GET["id"];
// // echo $id;

// $sql = "select * from animaux where id = $id" ;

// $result = $conn->query($sql);
// // 
// $animal = $result->fetch_assoc();
// // print_r($rows);


// $query_hab = "select * from habitats ";
// $all_hab = $conn->query($query_hab);

// $rows = $all_hab->fetch_all(mode:1);

// while($row = $all_hab->fetch_assoc()){
//     echo $row["typeclimat"];
// }

// echo $id=$_GET["id"];

?>
<div class="container my-5">
    <div class="card shadow border-0">
        <div class="card-header bg-maroc text-white">
            <h5 class="oswald mb-0">Modifier la fiche : Assaad (Lion de l'Atlas)</h5>
        </div>
        <div class="card-body p-4">
            <form action="logique/crud_animaux.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $animal['id'] ?>">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" value="<?php echo $animal['nom']?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Espèce</label>
                        <input type="text" class="form-control" name="espece" value="<?php echo $animal['espece']?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Pays d'origine</label>
                        <input type="text" class="form-control" name="paysorigine" value="<?php echo $animal['paysorigine']?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Alimentation</label>
                        <input type="text" class="form-control" name="alimentation" value="<?php echo $animal['alimentation']?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Habitat lié (ID)</label>
                        <select class="form-select" name="id_habitat">
                            <option value="">-- Sélectionner un habitat --</option>
                            <?php while($h = $all_hab->fetch_assoc()): ?>
                            <option value="<?= $h["id"] ?>" <?= ($animal["id_habitat"] == $h['id']) ? 'selected' : '' ?> >
                                <?= $h["nom"] ?>
                            </option>
                            
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Changer l'image (Actuel: lion.jpg)</label>
                        <input type="text" class="form-control" name="image" value="<?php echo $animal['image']?>">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description courte</label>
                        <textarea class="form-control" name="descriptioncourte" rows="3"><?php echo $animal['descriptioncourte']?></textarea>
                    </div>
                </div>
                <div class="mt-4">
                    <button name="save_edit" type="submit" class="btn btn-success">ENREGISTRER LES MODIFICATIONS</button>
                    <a href="manage_animals.php" class="btn btn-light border">Retour</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>