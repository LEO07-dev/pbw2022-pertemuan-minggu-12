<?php

//include <-- bisa pakai ini juga selain require_once
require_once __DIR__ . "/function.php";

retrieveData();

// added data
// isset buat ngecek tru atau false ada atau tidak nya suatu value
if (isset($_POST['konfirmasi'])) {
    // yang di sini menggunakan bagian name
    $tugas = $_POST['tugas'];
    $deadline = $_POST['deadline'];

    //yang ini baru menggunkan id 
    addData($tugas, $deadline);

    header("location: index.php");
}

// delete data
// id yang ?id=   <-- nah id itu dari situ
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    deleteData($id);

    header("location: index.php");
}

?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                Mau melakukan apa hari ini ?
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="tugas" class="form-label">Tugas</label>
                        <input type="text" name="tugas" class="form-control" id="tugas" required>
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" class="form-control" id="deadline" required>
                    </div>
                    <button type="submit" name="konfirmasi" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tugas Saya</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $nomor = 1;
                        foreach (retrieveData() as $data) { ?>
                        <tr>
                            <th scope="row"><?php echo $nomor++; ?></th>
                            <td>
                                <?php echo $data['azmi_tugas'] ?>
                            </td>
                            <td>
                                <?php echo date("j F Y", strtotime($data['deadline']));   ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?php echo $data['id_tugas'] ?>" class="btn btn-warning">Edit</a>
                                <a href="?id=<?php echo $data['id_tugas'] ?>"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>