<!DOCTYPE html>
<html lang="eb" class="js">

<?php require "include/header.php" ?>

<body class="nk-body npc-subscription has-aside ui-clean ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <?php require "include/topbar.php" ?>
            <div class="nk-content ">
                <div class="container wide-xl">
                    <div class="nk-content-inner">
                        <?php include "include/menu.php" ?>
                        <div class="nk-content-body">
                            <div class="nk-content-wrap">
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title">Parcel Received</span>
                                                    <div class="row gy-8">
                                                        <div class="col-md-6 offset-md-3">
                                                       <img src="images/barcode.png" width="200" height="50" class="center">
                                                       </div>
                                                        <div class="col-sm-12">
                                                           
                                                            <h5 class="text-center text-success mb-5">LES-201111-1</small></h5>
                                                        
                                                            <div>
                                                            <h3 class="text-center text-primary"><small class="font-weight-bold"> ABDUL HANNAN</h3>
                                                            <h6 class="text-center text-primary"><small class="font-weight-bold">B031910175</small></h5>
                                                            </div>

                                                            <div class="form-group text-center">
                                                                <a href="user/admin-trip-index.php" class="btn btn-lg btn-warning">BACK</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php include "include/footer.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>

