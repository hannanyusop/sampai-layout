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
                                                    <span class="preview-title-lg overline-title">Transfer Trip</span>
                                                    <div class="row gy-4">

                                                        <div class="col-md-12">
                                                            <dl class="row">
                                                                <dt class="col-sm-3">Trip ID</dt>
                                                                <dd class="col-sm-9"><b>#LES-201111-1</b></dd>
                                                                <dt class="col-sm-3">Destination</dt>
                                                                <dd class="col-sm-9">
                                                                    <p>FTMK</p>
                                                                    <p>Fakulti Teknologi Maklumat & Komunikasi</p>
                                                                </dd>
                                                                <dt class="col-sm-3">Date</dt>
                                                                <dd class="col-sm-9">11/11/2020</dd>
                                                                <dt class="col-sm-3 text-truncate">Amount</dt>
                                                                <dd class="col-sm-9">23 Parcels</dd>
                                                                <dt class="col-sm-3 text-truncate">Remark</dt>
                                                                <dd class="col-sm-9"><small>Barang yg tertinggal 10/11/2020</small></dd>
                                                            </dl>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h6 class="text-center text-primary"><small class="font-weight-bold">One Time Password</small></h6>
                                                            <h3 class="text-center text-success mb-5">D4642A</h3>

                                                            <div class="form-group text-center">
                                                                <a href="user/admin-trip-index.php" class="btn btn-lg btn-warning">Back</a>
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

