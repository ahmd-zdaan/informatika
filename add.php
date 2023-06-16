<?php
include_once "config/connect.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="main-content">
        <div class="container p-5" style="width: 750px">
            <h2 class="mb-5">Add Data</h2>
            <div class="card shadow p-5">
                <form method="POST">
                    <div class="mb-2">
                        <p class="form-label mb-2">Name</p>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-2">
                        <p class="mb-2">Date</p>
                        <input type="date" name="birthdate" class="form-control">
                    </div>
                    <div class="mb-2">
                        <p class="mb-2">Gender</p>
                        <select name="gender" class="form-select mb-2">
                            <option selected disabled hidden>-</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <p class="mb-2">Address</p>
                        <textarea type="text" name="address" class="form-control"></textarea>
                    </div>
                    <div>
                        <a href="index.php" class="btn btn-primary">BACK</a>
                        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $birthdate = $_POST['birthdate'];
                    $gender = $_POST['gender'];
                    $address = $_POST['address'];

                    $insert = insert('data_kependudukan', [
						'name' => $name,
						'birthdate' => $birthdate,
						'gender' => $gender,
						'address' => $address
                    ]);
                    
                    if ($insert) {
						echo '<script>window.location.href = "index.php"</script>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="text-center">
            <div class="copyright">
                <p>-</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>