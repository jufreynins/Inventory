
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
                                        <h2>Products List</h2>
                                    </div>
                            
                                </div>
                               
                            </div>
                            <div class="body">

                            <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Add Products</button>


                            <br><br><br><br>
                            <form method="POST" action="<?= base_url() ?>AdminCtrl/insert_prod">
                            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="defaultModalLabel">Products Description</h4>
                                        </div>
                                        <div class="modal-body">
                                            <br>
                                            <div class="col-sm-6">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="brand" class="form-control">
                                                        <label class="form-label">Brand Name:</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="category" class="form-control">
                                                        <label class="form-label">Category Name:</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="color" class="form-control">
                                                        <label class="form-label">Color:</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="liter" class="form-control">
                                                        <label class="form-label">Liter:</label>
                                                    </div>
                                                </div>
                                            </div>

                                           
                                            <div class="col-sm-3">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="qty" class="form-control">
                                                        <label class="form-label">Quantity:</label>
                                                    </div>
                                                </div>
                                            </div>



                                       
         



                                            <div class="row">   
                                                <div class="col-md-12">   
                                                     <?php
                                                            $int = 1;
                                                            foreach($mat_list as $matseres) { ?>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                           
                                                               <input type="checkbox" id="<?= $matseres->m_id?>" name="m_id[]" value="<?= $matseres->m_id ?>" class="filled-in chk-col-light-green" />
                                                                    <label for="<?= $matseres->m_id?>"><?= $matseres->name?></label>
                                                           
                                                        </div>
                                                     </div>
                                                      <?php } ?>
                                                </div>
                                            </div>


                                            <div class="row">
                                            </div>

                                                



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">CLOSE</button>
                                            <button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                                        </form>



                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead style="background-color: #03A9F4; color: white;">
                                        <tr>
                                            <th>Brand</th>
                                            <th>Category</th>
                                            <th>Color</th>
                                            <th>Liter</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Brand</th>
                                            <th>Category</th>
                                            <th>Color</th>
                                            <th>Liter</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="text-center">
                                         <?php
                                            if (is_array($prod_list)){
                                                foreach($prod_list as $post){?>
                                               

                                                <?php if($post->qty < 5){ ?>
                                             <tr style="">
                                                    <td><?php echo $post->brand;?></td>
                                                    <td><?php echo $post->category;?></td>
                                                    <td style="width: 100px;"><?php echo $post->color;?></td>
                                                    <td style="width: 10px;"><?php echo $post->liter;?></td>
                                                    <td style="width: 10px; color:white;background-color: #F44336;"><?php echo $post->qty;?></td>
                                                    <td><button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModals<?= $post->p_id ?>">
                                                     <i class="material-icons">settings</i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#deleteprod<?= $post->p_id ?>">
                                                     <i class="material-icons">delete</i></button>
                                                </td>
                                                      <div class="modal fade" id="defaultModals<?= $post->p_id ?>" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-sm" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="defaultModalLabel">Add Quantity:</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                <form method="POST" action="<?= base_url() ?>AdminCtrl/purchase">  
                                                                    <br>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group form-float">
                                                                            <div class="form-line">
                                                                                <input type="text" name="qty" class="form-control">
                                                                                <input type="hidden" name="p_id" class="form-control" value="<?= $post->p_id ?>">
                                                                                <label class="form-label">Add Quantity:</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">CLOSE</button>
                                                                    <button type="submit" class="btn btn-primary waves-effect">SAVE CHANGES</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     </form>
                                                   
                                              </tr>     

                                                <?php } else {?>
                                                <tr>
                                                    <td><?php echo $post->brand;?></td>
                                                    <td><?php echo $post->category;?></td>
                                                    <td style="width: 100px;"><?php echo $post->color;?></td>
                                                    <td style="width: 10px;"><?php echo $post->liter;?></td>
                                                    <td style="width: 10px;"><?php echo $post->qty;?></td>
                                                     <td>

                                                    <a href="purchase?pur_id=<?= $post->p_id ?>" class="btn btn-success waves-effect m-r-20">
                                                     <i class="material-icons">add_shopping_cart</i></a>

                                                     <a href="mod_products?post=<?= $post->p_id ?>">sdsd</a>
                                                     <button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#deleteprod<?= $post->p_id ?>">
                                                     <i class="material-icons">delete</i></button>
                                                 </td>

                                                </tr>
                                                <?php } ?>

                                         <?php }} ?>  
                                    </tbody>
                                </table>
                            </div>


                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



                    