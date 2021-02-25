<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Template</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <?php
    require './admin_navbar.php';
    require '.././include/db.php';

    if (isset($_POST['add'])) {
        $target_dir = './upload/images/';
        $pname = $_POST['pname'];
        $price = $_POST['price'];
        $file_name = $_FILES['pimages']['name'];
        $tmp_name = $_FILES['pimages']['tmp_name'];
        $desc = $_POST['description'];
        $nod = $_POST['nod'];
        $type = explode(".", $file_name);
        $type = $type[1];
        $ext = array("jpg", "pgn", "jpeg");
        if (in_array($type, $ext)) {
            $file_path = $target_dir . basename($file_name);
            if (move_uploaded_file($tmp_name, $file_path)) {
                $sql = "INSERT INTO `packages`(`pname`, `description`, `price`, `image`,`no_of_days`) VALUES ('$pname','$desc','$price','$file_path','$nod')";
                $res = mysqli_query($conn, $sql);
                if ($res) {
                    echo "<script>alert('Package added Successfully')</script>";
                } else {
                    echo mysqli_error();
                }
            }
        } else {
            echo '<script>alert("Please Upload only image...")</script>';
        }
    }
    ?>
    <br>
    <div class="row col-5">
        <div class="col">
            <button name="add_packages" class="btn btn-secondary active" id="add_packages">Add Packages</button>
        </div>

        <div class="col">
            <button name="add_places" class="btn btn-secondary" id="add_places">Add Places</button>
        </div>
    </div>
    <div style="vertical-align: middle; border:1;" id="add_packages" class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="row row-header">
                <div class="col col-lg-12 col-sm-6">
                    <p style="text-align:center" class="text-uppercase text-secondary h4">Add packages</p>
                </div>
            </div>
            <div class="row">
                <div class="col ">
                    <label for="pname" class="col-form-label ">Package Name</label>
                    <input type=" text" class="form-control" name="pname" id="pname">
                </div>
                <div class="col ">
                    <label for="description" class="col-form-label ">Description</label>
                    <input type="text" class="form-control" name="description" id="description">
                </div>
            </div>
            <div class="row">
                <div class="col ">
                    <label for="pimage" class="col-form-label ">Upload Image</label>
                    <input type="file" class="form-control" required id="pimages" name="pimages">
                </div>
                <div class="col ">
                    <label for="price" class="col-form-label ">Price</label>
                    <input type="text" class="form-control" required id="price" name="price" id="price">
                </div>
            </div>
            <div class="row">
                <div class="col col-6">
                    <label for="nod" class="col-form-label ">NO of days</label>
                    <input type="number" class="form-control" required id="nod" name="nod">
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col">
                    <button class="btn btn-info" name="add" type="submit"> ADD </button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <script>
        $(function() {
            $('#add_packages').click(function() {
                if ($this).hasclass()

            })


        })
    </script>
</body>

</html>