<!DOCTYPE html>
<html lang="en" data-theme="lemonade">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDMU LMS</title>
    <link href="/css/tailwind.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/logo.png" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>

<body>
    <div class="min-h-screen flex">
        <?php include './src/loading.php'; ?>
        <div class="flex-grow">
            <div class="navbar bg-primary text-primary-content">
                <img src="/assets/logo.png" class="w-12 h-12">
                <a class="label font-bold font-poppins text-xl flex-1">Notre Dame Of Marbel University</a>
                <div class="flex-none">
                    <a class="btn btn-ghost">Explore NDMU</a>
                </div>
            </div>
            <div class="container mx-auto p-4">
                <main>
                    <section class="p-6 mt-5 dark:bg-white dark:text-gray-100">
                        <div id="toast-container" class="fixed top-16 right-4 z-50"></div>
                        <div class="container grid gap-6 mx-auto lg:grid-cols-2 xl:grid-cols-5">
                            <img src="./assets/hero.svg" alt="" class="object-cover w-full rounded-md xl:col-span-3">
                            <div
                                class="w-full px-6 py-16 rounded-md sm:px-12 md:px-16 xl:col-span-2 place-content-center bg-slate-50 drop-shadow-xl divide-y divide-inherit">
                                <form class="self-stretch space-y-3 ng-untouched ng-pristine ng-valid" id="loginForm">
                                    <div class="my-6">
                                        <label for="email" class="text-lg font-poppins text-black -ml-5">Email
                                            Address</label>
                                        <input id="email" name="email" type="email" placeholder="Email Address"
                                            class="input input-bordered w-full rounded-md focus:ring focus:ring-neutral border-gray-700 text-black" />
                                        <div class="error-message text-red-800"></div>
                                    </div>
                                    <div class="my-6">
                                        <label for="password"
                                            class="text-lg font-poppins text-black -ml-5">Password</label>
                                        <input id="password" name="password" type="password" placeholder="Password"
                                            class="input input-bordered w-full rounded-md focus:ring focus:ring-neutral border-gray-700 text-black" />
                                        <div class="error-message text-red-800"></div>
                                    </div>
                                    <button type="submit"
                                        class="w-full py-2 font-semibold rounded mt-5 bg-primary hover:bg-green-700 dark:text-gray-900">Login</button>
                                </form>
                                <div class="mt-3 p-6 mx-auto">
                                    <label class="py-6 font-poppins -ml-3 text-lg text-black">Don't have an
                                        account?</label>
                                    <a href="/src/register.php">
                                        <button type="submit"
                                            class="w-full py-2 font-semibold rounded bg-secondary hover:bg-yellow-300 dark:text-gray-900">
                                            Enroll Here
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
    <script src="./script/login.js"></script>
    <script src="./script/load.js"></script>
</body>

</html>