<?php include '../includes/header.php'; ?>




<div class="container my-5">
    <div class="card shadow border-0">
        <div class="card-header bg-dark text-white"><h5 class="oswald mb-0">Gestion de l'Animal</h5></div>
        <div class="card-body p-4">
            <form action="logique/crud_animaux.php" method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nom de l'animal</label>
                        <input type="text"  class="form-control" name="nom" placeholder="Ex: Assaad" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Espèce</label>
                        <input type="text" class="form-control" name="espece" placeholder="Ex: Panthera leo leo" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Pays d'origine (Afrique)</label>
                        <input type="text" class="form-control" name="paysorigine" placeholder="Ex: Maroc, Sénégal..." required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Alimentation</label>
                        <select class="form-select" name="alimentation">
                            <option value="Carnivore">Carnivore</option>
                            <option value="Herbivore">Herbivore</option>
                            <option value="Omnivore">Omnivore</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Habitat (ID lié)</label>
                        <select class="form-select" name="id_habitat">
                            <option value="1">Montagnes de l'Atlas</option>
                            <option value="3">Savane Africaine</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Image</label>
                        <input type="text"   placeholder="Ex: image url" class="form-control" name="image">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description courte</label>
                        <textarea class="form-control" name="descriptioncourte" rows="3" maxlength="255"></textarea>
                    </div>
                </div>
                <button type="submit" name="save" class="btn btn-maroc mt-4 w-100">ENREGISTRER EN BASE DE DONNÉES</button>
            </form>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>