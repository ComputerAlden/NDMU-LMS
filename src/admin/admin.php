<!DOCTYPE html>
<html lang="en" data-theme="halloween">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="/css/tailwind.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/logo.png" />
    <script src="https://kit.fontawesome.com/008d7d135c.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-800">
    <div class="min-h-screen flex">
        <?php include 'sidebar.php'; ?>
        <div class="flex-grow bg-slate-700">
            <div class="container mx-auto p-4">
                <main>
                    <?php
                        if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        include $page . '.php';
                        } else {
                        include 'dashboard.php';
                        include 'student.php';
                        include 'teacher.php';
                        include 'subject.php';
                        include 'event.php';
                        }
                    ?>
                </main>
            </div>
        </div>
    </div>
    <script src="/script/activelinks.js"></script>
</body>

</html>