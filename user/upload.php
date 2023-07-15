<?php include_once '../bootstrap.php'; ?>
<?php include_once './_includes/security.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './_includes/head.php' ?>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <?php include './_includes/sidebar.php' ?>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <?php include './_includes/top_navbar.php' ?>
            <!-- Page content-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form class="mb-3 mt-md-4" method="post" action="./_includes/functions.php" enctype="multipart/form-data">
                            <h2 class="fw-bold mb-2 text-uppercase ">Regsiter a Song at <?= $_ENV['COMPANY_NAME'] ?></h2>
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label ">Song Name</label>
                                        <input type="text" class="form-control" name="song_name" placeholder="La La La">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label ">Artist Name</label>
                                        <input type="text" class="form-control" name="artist_name" placeholder="Asad">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label ">Song Genere</label>
                                        <input type="text" class="form-control" name="song_genere" placeholder="Pop">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label ">File (.mp3)</label>
                                        <input type="file" class="form-control" name="song" accept=".mp3,audio/*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="d-grid">
                                        <button class="btn btn-outline-dark" name="upload" type="submit">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>