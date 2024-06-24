<?php
<div class="row">
            <div class="col-md-3 mt-4">
            <?php if($v>0)
                while($row=mysqli_fetch_array($result))
                {  ?>
                <div class="card">
                    <img src="uploads/<?php echo $row['cimage1']; ?>" class="card-img-top" alt="Image">
                    <h3 class="text-center"><?php echo $row['cname']; ?></h3>
                    <a href="../dbtest/cshow.php?cid=<?php echo $row['cid']; ?>" class="view-more btn btn-primary">View More</a>
                </div>
            </div>
            <?php } ?>
        </div>