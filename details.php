<?php

$title = "Details | Egypt Tour";
$page = "Details";

include('./inc/data.php');

if (!isset($_GET['name'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['name'];

if (!array_key_exists($id, $cities)) {
    header("Location: index.php");
    exit;
}

$city = $cities[$id];

include('./inc/header.php');

?>

<section class="p-5 bg-body-secondary rounded">

    <div class="row align-items-center">

        <div class="col-md-6 mb-4 mb-md-0">

            <img
                src="<?php echo htmlspecialchars($city['img']); ?>"
                class="img-fluid rounded"
                alt="<?php echo htmlspecialchars($city['title']); ?>"
            >

        </div>

        <div class="col-md-6">

            <h2 class="display-5 fw-bold">

                <?php echo htmlspecialchars($city['title']); ?>

            </h2>

            <p class="lead">

                <?php echo htmlspecialchars($city['description']); ?>

            </p>

            <a
                href="index.php"
                class="btn btn-warning btn-lg mt-3"
            >
                Back
            </a>

        </div>

    </div>

</section>

<?php

include('./inc/footer.php');

?>