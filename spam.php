<?php
include_once "database/database.php";

$result = mysqli_query($conn, "SELECT * FROM spam WHERE status = 'normal'");
?>

<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>Verosign</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>

<body>
    <header id="#top">

        <nav class="main-navigation navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Заявки</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="messages.php">Повідомлення</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="spam.php">Спам</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <div class="page-banner change-name">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="header-text">
                        <h2><em>Адмін</em> панель</h2>
                        <p>Адміністрування підписаних електронних пошт на спам</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        while($objects = mysqli_fetch_assoc($result)) {
    ?>

    <div class="search-form admin_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="search-form" name="gs" role="search" action="database/spam_delete.php" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                <input class="admin_input_hide" type="text" name="email_id" id="email_id" hidden value=<?php echo $objects['id'];?>>
                                    <label for="searchTitle" class="form-label">Електронна пошта</label>
                                    <p class="break"><?php echo $objects['email'];?></p>
                                </fieldset>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button class="main-button admin-button" onclick = 'location.href="?deleteButton=1"'>Видалити пошту зі списку</button>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        }
    ?>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>