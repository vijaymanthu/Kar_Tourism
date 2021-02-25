<div id="packges" class="container">

    <?php
    require './include/db.php';

    $sql = "SELECT * from packages";
    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);
    if ($num > 0) {
        $i = 1;
    ?>
        <div class="container">
            <?php
            while ($row = mysqli_fetch_array($res)) {
                if ($i == 3) { ?>
                    <div class="row">
                    <?php
                }
                    ?>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['pname'] ?></h5>
                                <p class="card-text"><?php echo $row['description'] ?></p>
                                <a href="#" class="btn btn-danger">Remove</a>
                            </div>
                        </div>
                    </div>
                <?php
                if ($i == 3) echo "</div>";
                $i++;
            }
        } else {
                ?>
                <div class="container">
                    <p style="text-align:center;font-family:'Times New Roman', Times, serif" class="h3 text-secondary">No Packages Available</p>
                </div>
            <?php
        }
        for ($i = 1; $i <= 5; $i++) { ?>
                <div class="row p-1 m-1">
                    <?php
                    for ($j = 1; $j <= 5; $j++) { ?>
                        <div class="col">
                            <img src="" alt="loading.." class="" width="100px" height="100px">
                        </div>
                    <?php
                    }

                    ?>
                </div>
            <?php
        }
            ?>

                    </div>