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
                                    <div class="card card-bordered">
                                        <div class="card-inner card-inner-md">
                                            <div class="card-title-group">
                                                <h6 class="card-title">Subscribed Parcel</h6>
                                                <div class="card-action">
                                                    <a href="html/subscription/payments.html" class="link link-sm">See All <em class="icon ni ni-chevron-right"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-tranx">
                                            <thead>
                                            <tr class="tb-tnx-head">
                                                <th class="tb-tnx-id"><span class="">#</span></th>
                                                <th class="tb-tnx-info">
                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                <span>Tracking Number</span>
                                                            </span>
                                                    <span class="tb-tnx-date d-md-inline-block d-none">
                                                                <span class="d-md-none">Date</span>
                                                                <span class="d-none d-md-block">
                                                                    <span>Tag</span>
                                                                    <span>Received Date</span>
                                                                </span>
                                                            </span>
                                                </th>
                                                <th class="tb-tnx-amount">
                                                    <span class="tb-tnx-total">Destination</span>
                                                    <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                                </th>
                                            </tr></thead>
                                            <tbody>
                                            <tr class="tb-tnx-item">
                                                <td class="tb-tnx-id"><span>1</span></td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-desc">
                                                        <a href=""><span class="title font-weight-bold">ER23468473MY</span></a>
                                                    </div>
                                                    <div class="tb-tnx-date">
                                                        <span>Baju Shopee</span>
                                                        <span class="date"></span>
                                                    </div>
                                                </td>
                                                <td class="tb-tnx-amount">
                                                    <div class="tb-tnx-total">
                                                        <span>Lestari</span>
                                                    </div>
                                                    <div class="tb-tnx-status">
                                                        <span class="badge badge-dot badge-success">In Transit</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="tb-tnx-item">
                                                <td class="tb-tnx-id"><span>1</span></td>
                                                <td class="tb-tnx-info">
                                                    <div class="tb-tnx-desc">
                                                        <a href=""><span class="title font-weight-bold">PNX324568763</span></a>
                                                    </div>
                                                    <div class="tb-tnx-date">
                                                        <span>Sim Yodoo</span>
                                                        <span class="date"></span>
                                                    </div>
                                                </td>
                                                <td class="tb-tnx-amount">
                                                    <div class="tb-tnx-total">
                                                        <span></span>
                                                    </div>
                                                    <div class="tb-tnx-status">
                                                        <span class="badge badge-dot badge-danger">Not Found</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- .card -->
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