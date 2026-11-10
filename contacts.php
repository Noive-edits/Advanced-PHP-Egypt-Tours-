<?php

$title = "Contact | Egypt Tour";
$page = "contact";

$messageSent = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $messageSent = true;
}

include('./inc/header.php');

?>

<section class="mb-5">

    <h2 class="text-center mb-4">
        Contact Us
    </h2>

    <p class="text-center text-muted mb-5">
        Have questions about planning your trip to Egypt? Send us a message and we will get back to you.
    </p>

    <?php if ($messageSent): ?>

        <div class="alert alert-success text-center" role="alert">
            Thank you for your message. We will contact you soon.
        </div>

    <?php endif; ?>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow-sm border-warning border-top border-3">

                <div class="card-body p-4">

                    <form method="post" action="contacts.php">

                        <div class="mb-3">

                            <label for="name" class="form-label">
                                Full Name
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                required
                            >

                        </div>

                        <div class="mb-3">

                            <label for="email" class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                name="email"
                                required
                            >

                        </div>

                        <div class="mb-3">

                            <label for="message" class="form-label">
                                Message
                            </label>

                            <textarea
                                class="form-control"
                                id="message"
                                name="message"
                                rows="5"
                                required
                            ></textarea>

                        </div>

                        <button type="submit" class="btn btn-warning w-100">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">

            <div class="card h-100 bg-body-secondary border-0">

                <div class="card-body">

                    <h5 class="card-title text-warning">
                        Get in Touch
                    </h5>

                    <p class="mb-2">
                        <strong>Email:</strong>
                        info@egypttours.example
                    </p>

                    <p class="mb-2">
                        <strong>Phone:</strong>
                        +20 100 000 0000
                    </p>

                    <p class="mb-0">
                        <strong>Location:</strong>
                        Cairo, Egypt
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<?php

include('./inc/footer.php');

?>
