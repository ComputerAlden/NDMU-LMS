<!DOCTYPE html>
<html lang="en" data-theme="lemonade">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDMU LMS</title>
    <link href="/css/tailwind.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/logo.png" />
    <script src="https://kit.fontawesome.com/008d7d135c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/script/load.js"></script>
</head>

<body>
<?php include 'loading.php'; ?>
    <div class="min-h-screen flex">
        <div class="flex-grow">
        <?php include 'navbar.php'; ?>
            <div class="container mx-auto p-4">
                <main>
                    <?php
                        if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        include $page . '.php';
                        } else {
                        include 'home.php';
                        include 'class.php';
                        include 'business.php';
                        include 'library.php';
                        include 'clinic.php';
                        include 'event.php';
                        include 'profile.php';
                        include 'room.php';
                        }   
                    ?>
                </main>
            </div>
        </div>
    </div>
</body>
</html>