
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?= base_url() ?>dashboard"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">more_vert</i>
                        </a>
                         <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?= base_url() ?>dashboard">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url() ?>product">
                            <i class="material-icons">shopping_cart</i>
                            <span>Products</span>
                        </a>
                    </li>



                </ul>
            </div>




            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                     <strong>Copyright  &copy; <script>document.write(new Date().getFullYear());</script></a>.</strong> <a href="javascript:void(0);"></a>.
                </div>
                <div class="version">
                    <b> All rights reserved </b>
                </div>
            </div>
        </aside>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <div class="row clearfix">
                                    <div class="col-xs-12 col-sm-6">
                                        <h2>Products Details</h2>
                                    </div>
                            
                                </div>
                               
                            </div>
                            <div class="body">
                                 <p class="lead"> Brand Name: 
                                <?= $purchase_fetch->brand ?>
                                </p>

                                <table class="table">
                                <p>
                                    <tr > 
                                        <td style="border:0;"><b>Category:</b> &nbsp;&nbsp;&nbsp;&nbsp;<?= $purchase_fetch->category ?></td>
                                        <td style="border:0;"><b>Color:</b> &nbsp;&nbsp;&nbsp;&nbsp;<?= $purchase_fetch->color ?></td>
                                    </tr>
                                </p>


                                <p>
                                    <tr> 
                                        <td  style="border:0;"><b>Liter:</b> &nbsp;&nbsp;&nbsp;&nbsp;<?= $purchase_fetch->liter ?></td>
                                        <td  style="border:0;"><b>Quantity:</b> &nbsp;&nbsp;&nbsp;&nbsp;<?= $purchase_fetch->qty ?></td>
                                    </tr>
                                </p>
                               
                                </table>
                                     <form method="POST" action="<?= base_url() ?>AdminCtrl/purchase_prod">


                                <?php

                                    foreach ($awt as $mat_list ) {
                                    ?>


                                    <?php
                                    }

                                ?>

                                <input type="text" name="qty_prod" placeholder="qty"required>
                                <input type="text" name="get_id" value="<?= $_GET['pur_id'] ?>" required>

                                <br>
                                <br>
                                <br>
                                <?php
                                foreach ($mp_fetch_row as $mp_lists) {

                                ?>
                                    <input type="text" name="qty[]" value="<?= $mp_lists->qty ?>">

                                    <input type="text" name="p_id[]" value="<?= $mp_lists->m_id ?>"><br>
                               
                                <?php
                                }

                                ?>
                                         <button type="submit" class="btn btn-primary waves-effect pull-right">Purchase</button>
                                         <br>
                                </form>



                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



                    