<?php

//include <-- bisa pakai ini juga selain require_once
require_once __DIR__ . "/function.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    // data di ambil dari fungsi ambil data dengan parameter id lalu di fecth
    $data = ambilSatuData($id)->fetch();
    // var_dump($data);
}elseif(isset($_GET['id']) || $_GET['id'] == '') {
        header("location: index.php");   
}

// edit data
// isset buat ngecek tru atau false ada atau tidak nya suatu value
if (isset($_POST['editData'])) {
    
    $tugas = $_POST['tugas'];
    $deadline = $_POST['deadline'];

    editData($data['id_tugas'], $tugas, $deadline);

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
                        <input type="text" name="tugas" class="form-control" id="tugas"
                            value="<?= $data['azmi_tugas'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" class="form-control" id="deadline"
                            value="<?php echo $data['deadline']  ?>" required>
                    </div>
                    <button type="submit" name="editData" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>