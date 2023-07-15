<?php include_once './bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './_includes/head.php' ?>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card bg-white">
                        <div class="card-body p-5">
                            <form class="mb-3 mt-md-4" method="post" id="signup-form" action="./_includes/functions.php">
                                <h2 class="fw-bold mb-2 text-uppercase ">Signup to <?= $_ENV['COMPANY_NAME'] ?></h2>
                                <p class=" mb-5">Please enter your login and password!</p>
                                <div class="mb-3">
                                    <label for="name" class="form-label ">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" require>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label ">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" require>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label ">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="*******" require>
                                </div>
                                <!-- <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p> -->
                                <div class="d-grid">
                                    <button class="btn btn-outline-dark" name="register" type="submit">Register Yourself</button>
                                </div>
                            </form>
                            <div>
                                <p class="mb-0  text-center">Don't have an account? <a href="./" class="text-primary fw-bold">Sign In</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>