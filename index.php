<?php include 'includes/header.php'; ?>

<header class="hero-section text-center">
    <div class="container">
        <h1 class="display-2 fw-bold">BIENVENUE AU ZOO ASSAD</h1>
        <p class="lead mb-4">Découvrez la faune africaine au rythme de la CAN 2025 au Maroc !</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="animals.php" class="btn btn-maroc btn-lg px-4">Nos Animaux</a>
            <a href="visits.php" class="btn btn-warning btn-lg px-4 text-dark">Réserver une Visite</a>
        </div>
    </div>
</header>

<main class="container my-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2 class="display-4 text-success">L'emblème : Le Lion de l'Atlas</h2>
            <p class="lead">Symbole de force et de fierté pour le Maroc, venez découvrir notre zone dédiée à l'animal sacré de la nation hôte de la CAN 2025.</p>
            <a href="asaad_lion.php" class="btn btn-outline-danger">Découvrir le Lion de l'Atlas</a>
        </div>
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?auto=format&fit=crop&w=800&q=80" class="img-fluid rounded-pill shadow" alt="Lion de l'Atlas">
        </div>
    </div>

    <hr class="my-5">

    <h2 class="text-center mb-4">Nos Habitats Thématiques</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card card-animal h-100">
                <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Savane">
                <div class="card-body text-center">
                    <h5 class="card-title">La Savane Africaine</h5>
                    <p class="card-text">L'habitat des géants : Éléphants, Girafes et Zèbres.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-animal h-100">
                <img src="https://images.unsplash.com/photo-1546182237-7756f140660a?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Atlas">
                <div class="card-body text-center">
                    <h5 class="card-title">Les Montagnes de l'Atlas</h5>
                    <p class="card-text">Le refuge des Mouflons et des Macaques de Barbarie.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-animal h-100">
                <img src="https://images.unsplash.com/photo-1534067783941-51c9c23ecefd?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Désert">
                <div class="card-body text-center">
                    <h5 class="card-title">Le Sahara Doré</h5>
                    <p class="card-text">Dromadaires, Fennecs et créatures du désert.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>