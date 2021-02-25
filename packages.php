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
            <div class="row">
                <?php
                while ($row = mysqli_fetch_array($res)) {
                    if ($i == 3) { ?>
                        <div class="row">
                        <?php
                    }
                        ?>
                        <div class="col">
                            <div class="card" style="width: 18rem;">

                                <div class="card-body">
                                    <?php $ar = explode("../", $row['image']);
                                    $path = $ar[1];
                                  
                                    ?>
                                    <img class="card-img-top" src='<?php echo $path ?>' alt="loading">
                                    <h5 class="card-title"><?php echo $row['pname'] ?></h5>
                                    <p class="card-text"><?php echo $row['description'] ?></p>
                                    <p class="card-text"><?php echo $row['no_of_days'] ?><span>Days</span></p>
                                    <p class="card-text"><?php echo $row['price'] ?></p>
                                    <a href="package_details.php?pid=<?php echo $row['p_id'] ?>" class="btn btn-success">View Details</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    if ($i == 3) echo "</div>";
                    $i++;
                }
            } else {
                    ?>
                        </div>
                        <div class="container">
                            <p style="text-align:center;font-family:'Times New Roman', Times, serif" class="h3 text-secondary">No Packages Available</p>
                        </div>
                    <?php
                }
                    ?>
            </div>
            <?php

            ?>

        </div>