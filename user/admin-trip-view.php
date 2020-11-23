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

                            <div class="nk-block">

                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Trip View</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Trip : <span class="text-base">#FTMK-201111-1</span></p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="user/admin-index.php" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-back-alt"></em><span>Back</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-bordered">
                                    <div class="card-aside-wrap">
                                        <div class="card-content">
                                            <div class="card-inner">
                                                <div class="nk-block">
                                                    <div class="nk-block-head">
                                                        <h5 class="title">Trip Information</h5>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Trip ID.</span>
                                                                <span class="profile-ud-value">#FTMK-201111-1</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Destination</span>
                                                                <span class="profile-ud-value">Fakulti Tenknologi Maklumat & Komunikasi </span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Date</span>
                                                                <span class="profile-ud-value">11 Sept, 2020</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Destination Code</span>
                                                                <span class="profile-ud-value">FTMK</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-line">
                                                        <h6 class="title overline-title text-base">Parcel Information</h6>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="profile-ud-list">
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Total</span>
                                                                <span class="profile-ud-value">1</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Pending</span>
                                                                <span class="profile-ud-value">1</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Received</span>
                                                                <span class="profile-ud-value">0</span>
                                                            </div>
                                                        </div>
                                                        <div class="profile-ud-item">
                                                            <div class="profile-ud wider">
                                                                <span class="profile-ud-label">Return</span>
                                                                <span class="profile-ud-value">0</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .profile-ud-list -->
                                                </div><!-- .nk-block -->
                                                <div class="nk-divider divider md"></div>
                                                <div class="nk-block">
                                                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                        <h5 class="title">Admin Note</h5>
                                                        <a href="#" class="link link-sm">+ Add Note</a>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="bq-note">
                                                        <div class="bq-note-item">
                                                            <div class="bq-note-text">
                                                                <p>Ini adalah senarai yang tertinggal pada 10/11/2020</p>
                                                            </div>
                                                            <div class="bq-note-meta">
                                                                <span class="bq-note-added">Added on <span class="date">Septemeber 11, 2020</span> at <span class="time">5:34 PM</span></span>
                                                                <span class="bq-note-sep sep">|</span>
                                                                <span class="bq-note-by">By <span>Ahmad Kasim</span></span>
                                                                <a href="#" class="link link-sm link-danger">Delete Note</a>
                                                            </div>
                                                        </div><!-- .bq-note-item -->
                                                    </div><!-- .bq-note -->
                                                </div><!-- .nk-block -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card-content -->
                                    </div><!-- .card-aside-wrap -->
                                </div>
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        <div class="card-inner position-relative">
                                            <div class="card-title-group">
                                                <div class="card-tools">
                                                    <div class="form-inline flex-nowrap gx-3">
                                                        <div class="form-wrap w-150px">
                                                            <select class="form-select form-select-sm" data-search="off" data-placeholder="Bulk Action">
                                                                <option value="">Bulk Action</option>
                                                                <option value="email">Send Email</option>
                                                                <option value="group">Change Group</option>
                                                                <option value="suspend">Suspend User</option>
                                                                <option value="delete">Delete User</option>
                                                            </select>
                                                        </div>
                                                        <div class="btn-wrap">
                                                            <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                            <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-tools -->
                                                <div class="card-tools mr-n1">
                                                    <ul class="btn-toolbar gx-1">
                                                        <li>
                                                            <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                        </li>
                                                        <li class="btn-toolbar-sep"></li>
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                    <div class="dot dot-primary"></div>
                                                                    <em class="icon ni ni-filter-alt"></em>
                                                                </a>
                                                                <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                                                    <div class="dropdown-head">
                                                                        <span class="sub-title dropdown-title">Filter Document</span>
                                                                    </div>
                                                                    <div class="dropdown-body dropdown-body-rg">
                                                                        <div class="row gx-6 gy-3">
                                                                            <div class="col-6">
                                                                                <div class="form-group">
                                                                                    <label class="overline-title overline-title-alt">Doc Type</label>
                                                                                    <select class="form-select form-select-sm">
                                                                                        <option value="any">Any Type</option>
                                                                                        <option value="nidcard">Nidcard</option>
                                                                                        <option value="passport">Passport</option>
                                                                                        <option value="driving">Driving</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-6">
                                                                                <div class="form-group">
                                                                                    <label class="overline-title overline-title-alt">Status</label>
                                                                                    <select class="form-select form-select-sm">
                                                                                        <option value="any">Any Status</option>
                                                                                        <option value="approved">Approved</option>
                                                                                        <option value="pending">Pending</option>
                                                                                        <option value="suspend">Rejected</option>
                                                                                        <option value="deleted">Deleted</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group">
                                                                                    <button type="button" class="btn btn-secondary">Filter</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="dropdown-foot between">
                                                                        <a class="clickable" href="#">Reset Filter</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown">
                                                                    <em class="icon ni ni-setting"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                    <ul class="link-check">
                                                                        <li><span>Show</span></li>
                                                                        <li class="active"><a href="#">10</a></li>
                                                                        <li><a href="#">20</a></li>
                                                                        <li><a href="#">50</a></li>
                                                                    </ul>
                                                                    <ul class="link-check">
                                                                        <li><span>Order</span></li>
                                                                        <li class="active"><a href="#">DESC</a></li>
                                                                        <li><a href="#">ASC</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- .card-tools -->
                                            </div><!-- .card-title-group -->
                                            <div class="card-search search-wrap" data-search="search">
                                                <div class="card-body">
                                                    <div class="search-content">
                                                        <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                        <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or id">
                                                        <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                    </div>
                                                </div>
                                            </div><!-- .card-search -->
                                        </div><!-- .card-inner -->
                                        <div class="card-inner p-0">
                                            <div class="nk-tb-list nk-tb-ulist">
                                                <div class="nk-tb-item nk-tb-head">
                                                    <div class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid">
                                                            <label class="custom-control-label" for="uid"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col"><span>User</span></div>
                                                    <div class="nk-tb-col tb-col-lg"><span>Last Transaction</span></div>
                                                    <div class="nk-tb-col tb-col-md"><span>Status</span></div>
                                                    <div class="nk-tb-col tb-col-lg"><span>Receiver</span></div>
                                                    <div class="nk-tb-col nk-tb-col-tools">&nbsp;</div>
                                                </div><!-- .nk-tb-item -->
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                                            <label class="custom-control-label" for="uid1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead">ER23643753454MY <span class="dot dot-success d-md-none ml-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span class="tb-date">Received By Utem Mel</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-success">In Transit</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <div class="user-card">
                                                            <div class="user-name">
                                                                <span class="tb-lead"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="html/general/kyc-details-regular.html"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                            <li><a href="html/general/kyc-details-regular.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-user"></em><span>View Profile</span></a></li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#"><em class="icon ni ni-check-round"></em><span>Approved</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-na"></em><span>Rejected</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul><!-- .pagination -->
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
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