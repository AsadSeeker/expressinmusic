<?php



// if (!$_POST) exit("direct access not permitted");

include_once '../../bootstrap.php';
include_once '../_includes/security.php';



if (isset($_POST['upload'])) {

    $url = strtok($_SERVER['HTTP_REFERER'], '?');

    $target_dir = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."uploads".DIRECTORY_SEPARATOR;
    $file_name = $_SESSION['user']['id'] . '-' . time();
    $file_exte = strtolower(pathinfo($_FILES["song"]["name"], PATHINFO_EXTENSION));

    $complete_file = $target_dir . $file_name . "." . $file_exte;


    if (move_uploaded_file($_FILES["song"]["tmp_name"], $complete_file)) {

        $data = [
            'song_name'        => $_POST['song_name'],
            'artist_name'      => $_POST['artist_name'],
            'song_genere'      => $_POST['song_genere'],
            'user_id'          => $_SESSION['user']['id'],
            'actual_file_name' => htmlspecialchars(basename($_FILES["song"]["name"])),
            'upload_file_name' => $file_name.'.'.$file_exte,
            'created_at'       => date('Y-m-d H:i:s'),
            'updated_at'       => date('Y-m-d H:i:s')
        ];
        $sql = "INSERT INTO songs (song_name, artist_name, song_genere, user_id, actual_file_name, upload_file_name, created_at, updated_at) VALUES (:song_name, :artist_name, :song_genere, :user_id, :actual_file_name, :upload_file_name, :created_at, :updated_at)";
   
        try {
            $stmt = $conn->prepare($sql);            
            $stmt->execute($data);
            return header('Location: ' . $url . '?success');
        } catch (Exception $e) {
            return header('Location: ' . $url . '?dberror');
            // echo 'Message: ' . $e->getMessage();
        }

    } else {
        return header('Location: ' . $url . '?exist');
    }

}

if(isset($_GET['logout'])){
    unset($_SESSION['user']);
    return header('Location: https://' . $_SERVER['SERVER_NAME'] . '?success');
}