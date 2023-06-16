<?php
include_once "config/connect.php";

$id = $_GET['id'];
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
            <h2 class="mb-5">Edit Data</h2>
            <div class="card shadow p-5">
                <?php
                $get = get('data_kependudukan', 'WHERE id=' . $id);
                $data = mysqli_fetch_assoc($get);

                $name = $data['name'];
                $birthdate = $data['birthdate'];
                $gender = $data['gender'];
                $address = $data['address'];
                ?>
                <form method="POST">
                    <div class="mb-2">
                        <p class="form-label mb-2">Name</p>
                        <input type="text" name="name" class="form-control" value="<?= $name ?>">
                    </div>
                    <div class="mb-2">
                        <p class="mb-2">Date</p>
                        <!-- <input type="text" name="birthdate" class="form-control" value="<?= $birthdate ?>"> -->
                        <input type="date" name="birthdate" class="form-control" value="<?= $birthdate ?>">
                    </div>
                    <div class="mb-2">
                        <p class="mb-2">Gender</p>
                        <select name="gender" class="form-select mb-2">
                            <!-- <option selected disabled hidden>-</option> -->
                            <option value="male" <?php echo ($gender == 'male') ? 'selected' : ''; ?>>Male</option>
                            <option value="female" <?php echo ($gender == 'female') ? 'selected' : ''; ?>>Female</option>
                        </select>
                    </div>
                    <div class="mb-5">
                        <p class="mb-2">Address</p>
                        <textarea type="text" name="address" class="form-control"><?=$address?></textarea>
                    </div>
                    <div>
                        <a href="index.php" class="btn btn-primary">BACK</a>
                        <button type="submit" name="submit" class="btn btn-primary">SAVE</button>
                    </div>
                </form>
                <?php
                if (isset($_POST['submit'])) {
                    $name_new = $_POST['name'];
                    $birthdate_new = $_POST['birthdate'];
                    $gender_new = $_POST['gender'];
                    $address_new = $_POST['address'];

					$query = 'UPDATE data_kependudukan SET name="' . $name_new . '", birthdate="'.$birthdate_new.'", gender="'.$gender_new.'", address="'.$address_new.'" WHERE id=' . $id;
                    $result = mysqli_query($connect, $query);                    

                    if ($result) {
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