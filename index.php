<?php

$title = "Home | Egypt Tour";
$page = "home";

include('./inc/data.php');
include('./inc/header.php');

?>

<section class="mb-5">

    <div
        id="mainSlider"
        class="carousel slide"
        data-bs-ride="carousel"
    >

        <div class="carousel-inner">

            <div class="carousel-item active">

                <img
                    src="images/slide-1.jpg"
                    class="d-block w-100"
                    style="height: 400px; object-fit: cover;"
                    alt="Egypt tourism"
                >

            </div>

            <div class="carousel-item">

                <img
                    src="images/slide-2.jpg"
                    class="d-block w-100"
                    style="height: 400px; object-fit: cover;"
                    alt="Egypt tourism"
                >

            </div>

        </div>

        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#mainSlider"
            data-bs-slide="prev"
        >

            <span class="carousel-control-prev-icon"></span>

        </button>

        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#mainSlider"
            data-bs-slide="next"
        >

            <span class="carousel-control-next-icon"></span>

        </button>

    </div>

</section>


<section id="cities">

    <h2 class="text-center mb-4">
        Featured Cities
    </h2>

    <div class="row">

        <?php foreach ($cities as $city): ?>

            <div class="col-md-3 col-sm-6 mb-4">

                <div class="card h-100 text-center">

                    <img
                        src="<?php echo htmlspecialchars($city['img']); ?>"
                        class="card-img-top"
                        style="height: 200px; object-fit: cover;"
                        alt="<?php echo htmlspecialchars($city['title']); ?>"
                    >

                    <div class="card-body d-flex flex-column">

                        <h5 class="card-title">
                            <?php echo htmlspecialchars($city['title']); ?>
                        </h5>

                        <a
                            href="details.php?name=<?php echo urlencode($city['title']); ?>"
                            class="btn btn-outline-info mt-auto"
                        >
                            Learn More
                        </a>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<?php

include('./inc/footer.php');

?>