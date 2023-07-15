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
                    <form class="mb-3 mt-md-4" method="get" action="" >
                        <h2 class="fw-bold mb-2 text-uppercase ">Regsiter a Song at <?= $_ENV['COMPANY_NAME'] ?></h2>
                        <div class="row">
                            <div class="col-3">
                                <div class="mb-3">
                                    <label class="form-label ">Song Name</label>
                                    <input type="text" class="form-control" name="song_name" placeholder="La La La">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label class="form-label ">Artist Name</label>
                                    <input type="text" class="form-control" name="artist_name" placeholder="Asad">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <label class="form-label ">Song Genere</label>
                                    <input type="text" class="form-control" name="song_genere" placeholder="Pop">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label ">&nbsp;</label>
                                    <div class="d-grid">
                                        <button class="btn btn-outline-dark" name="upload" type="submit">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <table id="example" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Uploader</th>
                                <th>Song Name</th>
                                <th>Artist Name</th>
                                <th>Song Genere</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $parameters['song_name'] = !empty($_GET['song_name']) ? "%".$_GET['song_name']."%" : null;
                            $parameters['artist_name']  = !empty($_GET['artist_name'])  ? $_GET['artist_name']  : null;
                            $parameters['song_genere']  = !empty($_GET['song_genere'])  ? $_GET['song_genere']  : null;

                            $sql = "SELECT * FROM songs 
                            WHERE (song_name LIKE :song_name or :song_name is null)
                            AND   (artist_name  = :artist_name  or :artist_name  is null)
                            AND   (song_genere  != :song_genere  or :song_genere  is null)";

                            $stmt = $conn->prepare($sql);
                            $stmt->execute($parameters);

                            while ($row = $stmt->fetch()) {

                            ?>


                                <tr>
                                    <td><?= ($conn->query("SELECT * FROM users WHERE id = ". $row['user_id'])->fetch())['name']; ?></td>
                                    <td><?= $row['song_name'] ?></td>
                                    <td><?= $row['artist_name'] ?></td>
                                    <td><?= $row['song_genere'] ?></td>
                                    <td>

                                        <audio controls>
                                            <source src="/uploads/<?= $row['upload_file_name'] ?>" type="audio/mpeg">
                                            Your browser does not support the audio element.
                                        </audio>


                                    </td>
                                    <td>
                                        <?php 
                                        if($row['user_id'] == $_SESSION['user']['id']){
                                            echo "Delete or Update";
                                        }
                                        ?> 
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Uploader</th>
                                <th>Song Name</th>
                                <th>Artist Name</th>
                                <th>Song Genere</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
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