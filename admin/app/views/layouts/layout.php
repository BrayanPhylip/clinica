
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">        
        <title><?php echo $titulo; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href="<?php echo base_url('assets') ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets') ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?php echo base_url('assets') ?>/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

        <!-- daterange picker -->
        <link href="<?php echo base_url('assets') ?>/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap time Picker -->
        <link href="<?php echo base_url('assets') ?>/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>

        <!-- DATA TABLES 
        -->
        <!-- Bootstrap Color Picker -->
        <link href="<?php echo base_url('assets') ?>/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
        <!-- Theme style -->
        <link href="<?php echo base_url('assets') ?>/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url('assets') ?>/css/custom.css" rel="stylesheet" type="text/css" />





        <!-- Grocerycrud-->
        <?php if (isset($crud)): ?>
            <?php foreach ($crud->css_files as $file): ?>
                <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
            <?php endforeach; ?>
            <?php foreach ($crud->js_files as $file): ?>
                <script src="<?php echo $file; ?>"></script>
            <?php endforeach; ?>
        <?php else: ?>
            <link href="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
            <script src="<?php echo base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
            <!-- jQuery 2.1.4 -->
            <script src="<?php echo base_url('assets') ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
            <!-- Bootstrap 3.3.2 JS--> 
            <script src="<?php echo base_url('assets') ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <?php endif; ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo site_url() ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>Sis</b><i class="fa fa-home"></i></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Sistema</b> Imoveis</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    <span class="hidden-xs"><?php // echo $usuario->username; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">

                                        <p>
                                            <?php // echo $usuario->username; ?> - <?php//  echo $usuario->email; ?>
                                           <!-- <small>Member since Nov. 2012</small>-->
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Listar Usuários</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Listar Permissões</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Listar Páginas</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Meu usuário</a>
                                        </div>                                        <div class="pull-right">
                                            <a href="<?php echo site_url('logout'); ?>" class="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <!-- Control Sidebar Toggle Button -->
                            <!--<li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>-->
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <!--<div class="pull-left image" >
                          <img src="<?php echo base_url('assets') ?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                       </div>-->
                        <div class="pull-left info" >
                            <p><?php // echo $usuario->username; ?></p>

                            <i class="fa fa-circle text-success"></i> Online
                        </div>
                    </div>

                    <ul class="sidebar-menu">
                        <li class="header">Menu Principal</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-plus-circle"></i> <span>Bairros</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('bairro') ?>"><i class="fa fa-plus-circle"></i> Gerenciar Bairros</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-map-marker "></i> <span>Cidades</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('cidade') ?>"><i class="fa fa-plus-circle"></i> Gerenciar Cidades</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-plus-circle"></i> <span>Ruas</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('rua') ?>"><i class="fa fa-plus-circle"></i> Gerenciar Ruas</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-chain"></i> <span>Tipos de itens dos imóveis</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('item') ?>"><i class="fa fa-plus-circle"></i> Gerenciar Itens</a></li>
                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-home"></i> <span>Imoveis</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('imovel') ?>"><i class="fa fa-plus-circle"></i> Gerenciar Imoveis</a></li>
                            </ul>
                        </li>
                        <!--<li class="treeview">
                            <a href="#">
                                <i class="fa fa-image"></i> <span>Banners</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">

                                <li><a href="<?php echo site_url("banner"); ?>/list"><i class="fa fa-list"></i> Listar</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bullhorn"></i> <span>Notícias</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('noticia') ?>/add"><i class="fa fa-plus-circle"></i> Adicionar</a></li>
                                <li><a href="<?php echo site_url('noticia') ?>/list"><i class="fa fa-list"></i> Listar</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-image"></i> <span>Galeria</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('galeria') ?>/add"><i class="fa fa-plus-circle"></i> Adicionar</a></li>
                                <li><a href="<?php echo site_url('galeria') ?>/list"><i class="fa fa-list"></i> Listar</a></li>
                            </ul>
                        </li>-->
                        <!--<li class="treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>Layout Options</span>
                                <span class="label label-primary pull-right">4</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                                <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                                <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                                <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                            </ul>
                        </li>

                        <li><a href="<?php echo base_url('assets') ?>/documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                        <li class="header">LABELS</li>
                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span> <span class="label label-primary pull-right">4</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) 
                <section class="content-header">
                    <h1>
                        Paciente
                        <small>Listagem de Paciente</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Noticias</li>
                        <li class="active">Listagem</li>
                    </ol>
                </section>
                -->
                <!-- Main content -->
                <section class="content" style="min-height: 850px;">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Lista</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div>
                                        <?php echo isset($crud) ? $crud->output : ""; ?>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->





            <!-- Content Header (Page header) -->



        </div><!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Versão</b> 04.055.16
            </div>
            <strong>Copyright &copy; 2016 
                <a href="fatecourinhos.edu.br">Sistema de Cadastro de Imoveis (FATEC)</a>
                .</strong>
            Todos os direitos reservados.
        </footer>

        <!-- Control Sidebar -->      
        <aside class="control-sidebar control-sidebar-dark">                
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class='control-sidebar-menu'>
                        <li>
                            <a href='javascript::;'>
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href='javascript::;'>
                                <i class="menu-icon fa fa-user bg-yellow"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href='javascript::;'>
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href='javascript::;'>
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul><!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3> 
                    <ul class='control-sidebar-menu'>
                        <li>
                            <a href='javascript::;'>               
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="label label-danger pull-right">70%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>                                    
                            </a>
                        </li> 
                        <li>
                            <a href='javascript::;'>               
                                <h4 class="control-sidebar-subheading">
                                    Update Resume
                                    <span class="label label-success pull-right">95%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>                                    
                            </a>
                        </li> 
                        <li>
                            <a href='javascript::;'>               
                                <h4 class="control-sidebar-subheading">
                                    Laravel Integration
                                    <span class="label label-waring pull-right">50%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>                                    
                            </a>
                        </li> 
                        <li>
                            <a href='javascript::;'>               
                                <h4 class="control-sidebar-subheading">
                                    Back End Framework
                                    <span class="label label-primary pull-right">68%</span>
                                </h4>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>                                    
                            </a>
                        </li>               
                    </ul><!-- /.control-sidebar-menu -->         

                </div><!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">            
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>
                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked />
                            </label>
                            <p>
                                Some information about this general settings option
                            </p>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Allow mail redirect
                                <input type="checkbox" class="pull-right" checked />
                            </label>
                            <p>
                                Other sets of options are available
                            </p>
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Expose author name in posts
                                <input type="checkbox" class="pull-right" checked />
                            </label>
                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div><!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Show me as online
                                <input type="checkbox" class="pull-right" checked />
                            </label>                
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Turn off notifications
                                <input type="checkbox" class="pull-right" />
                            </label>                
                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Delete chat history
                                <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                            </label>                
                        </div><!-- /.form-group -->
                    </form>
                </div><!-- /.tab-pane -->
            </div>
        </aside><!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->



    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets') ?>/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url('assets') ?>/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App --->
    <script src="<?php echo base_url('assets') ?>/dist/js/app.min.js" type="text/javascript"></script>
    <!--DATA TABLE SCRIPT
    <!-- Demo -->
    <script src="<?php echo base_url('assets') ?>/dist/js/demo.js" type="text/javascript"></script>

    <!-- InputMask -->
    <script src="<?php echo base_url('assets') ?>/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets') ?>/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>


    <script src="<?php echo base_url('assets') ?>/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url('assets') ?>/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo base_url('assets') ?>/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- iCheck 1.0.1 -->
    <script src="<?php echo base_url('assets') ?>/plugins/iCheck/icheck.min.js" type="text/javascript"></script>




    <!-- custom -->
    <script src="<?php echo base_url('assets') ?>/js/custom.js"></script>
   
</body>
</html>