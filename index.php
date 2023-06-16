<?php
include_once "config/connect.php";
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
    <div class="main-content">
        <div class="container p-5">
            <div class="row">
                <div class="col">
                    <h2>Data Kependudukan</h2>
                    <h5 class="mb-5" style="font-weight:normal ">RT 01 RW 19 Kelurahan Purwantoro, Kecamatan Belimbing, Kota Malang</h5>
                </div>
                <div class="col-2 text-end">
                    <a href="add.php" class="btn btn-primary">ADD DATA</a>
                </div>
            </div>
            <div class="card shadow">
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Birthdate</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $get = get('data_kependudukan');
                            foreach ($get as $data):
                                $id = $data['id'];
                                $name = $data['name'];
                                $birthdate = $data['birthdate'];
                                $gender = $data['gender'];
                                $address = $data['address'];

                                $birthdate_year = substr($birthdate, 0, 4);
                                $current_year = date('Y');

                                $age = $current_year - $birthdate_year;
                                ?>
                                <tr>
                                    <td>
                                        <?= ucwords($name) ?>
                                    </td>
                                    <td>
                                        <?= $age ?>
                                    </td>
                                    <td>
                                        <?= $birthdate ?>
                                    </td>
                                    <td>
                                        <?= ucfirst($gender) ?>
                                    </td>
                                    <td>
                                        <?= ucwords($address) ?>
                                    </td>
                                    <td>
                                        <a href="edit.php?id=<?= $id ?>" class="btn btn-outline-primary btn-sm">EDIT</a>
                                        <a href="delete.php?id=<?= $id ?>" class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Are you sure to DELETE this DATA?')">DELETE</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- PAGINATION -->
                <div>
                    <nav>
                        <ul class="justify-content-end pagination pe-3">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>