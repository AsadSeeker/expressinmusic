<?php include_once './bootstrap.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './_includes/head.php' ?>
</head>

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card bg-white">
                        <div class="card-body p-5">
                            <form class="mb-3 mt-md-4" method="post" action="./_includes/functions.php">
                                <h2 class="fw-bold mb-2 text-uppercase ">Welcome to <?= $_ENV['COMPANY_NAME'] ?></h2>
                                <p class=" mb-5">Please enter your login and password!</p>
                                <div class="mb-3">
                                    <label for="email" class="form-label ">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email" value="asad@seeker.com" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label ">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" value="123123123" placeholder="*******">
                                </div>
                                <!-- <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p> -->
                                <div class="d-grid">
                                    <button class="btn btn-outline-dark" name="login" type="submit">Login</button>
                                </div>
                            </form>
                            <div>
                                <p class="mb-0  text-center">Don't have an account? <a href="<?= './signup' ?>" class="text-primary fw-bold">Sign Up</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>