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

                                <div class="nk-block">
                                    <div class="row">
                                        <div class="col-xl-8 offset-xl-2">
                                            <div class="card card-bordered">
                                                <div class="card-inner-group">

                                                    <div class="card-inner">
                                                        <div class="sp-plan-head-group">
                                                            <div class="sp-plan-head">
                                                                <h6 class="title">Trip Number</h6>
                                                            </div>
                                                        </div>
                                                        <div class="sp-plan-payopt">
                                                            <div class="cc-pay">
                                                                <h5 class="title">#FTMK-201111-1</h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->

                                                    <div class="card-inner">
                                                        <div class="sp-plan-desc sp-plan-desc-mb">
                                                            <ul class="row gx-1">
                                                                <li class="col-sm-4">
                                                                    <p><span class="text-soft">Destination</span> FTMK</p>
                                                                </li>
                                                                <li class="col-sm-4">
                                                                    <p><span class="text-soft">Date</span> 11/11/2020</p>
                                                                </li>
                                                                <li class="col-sm-4">
                                                                    <p><span class="text-soft">Amount</span> 1 Parcels</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <form action="#">
                                                        <div class="form-group">
                                                            <label class="form-label" for="tracking_no">Tracking No</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control form-control-lg" placeholder="EX: ER111111111MY" name="tracking_no" id="tracking_no" autofocus required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-center">
                                                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                                            <a href="user/admin-index.php" type="submit" class="btn btn-lg btn-warning">Back</a>
                                                        </div>
                                                    </form>
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