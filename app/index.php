<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel='shortcut icon' type='image/x-icon' href='../img/logo-mini.png' />
    <title>Vsion Partners - App</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom CSS -->
    <link href="../css/app/index.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img class="logo img-responsive" src="../img/logo-mini.png"></img><b>Vsion Partners</b></a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> Ei você!
                                    <span class="pull-right text-muted small">Agora mesmo</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-cc-visa fa-fw"></i> Prefiro Bradesco!
                                    <span class="pull-right text-muted small">Agora mesmo</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Opções</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>-->
                            <!-- /input-group -->
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Início</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-exchange fa-fw"></i> Movimentações</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Dropdownzinho de teste<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">Mais um aeho <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">2</a>
                                        </li>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 main-div">
                        <h1 class="page-header title">Cadastro de algo</h1>
                        <div class="content col-lg-12">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                            Formulário de cadastro
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form">
                                            <div class="form-group col-lg-4">
                                                <label for="inputCategory">Categoria*</label>
                                                <select class="form-control" id="inputCategory">
                                                    <option>Selecione uma categoria...</option>
                                                    <option>Categoria 1</option>
                                                    <option>Categoria 2</option>
                                                    <option>Categoria 3</option>
                                                </select>
                                            </div>
                                             <div class="form-group col-lg-8">
                                                <label>Descrição*</label>
                                                <input type="text" placeholder="Digite aqui uma descrição" class="form-control">
                                            </div>
                                             <div class="form-group col-lg-4">
                                                <label>Valor (R$)*</label>
                                                <input type="text" placeholder="Digite aqui o valor" class="form-control">
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="inputCategory">Forma de pagamento*</label>
                                                <select class="form-control" id="inputPaymentType">
                                                    <option>Selecione uma forma de pagamento...</option>
                                                    <option>Forma de pagamento 1</option>
                                                    <option>Forma de pagamento 2</option>
                                                    <option>Forma de pagamento 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label for="inputCategory">Cliente e Fornecedor</label>
                                                <select class="form-control" id="inputClient">
                                                    <option>Selecione um cliente e/ou fornecedor...</option>
                                                    <option>Cliente 1</option>
                                                    <option>Fornecedor 2</option>
                                                    <option>Cliente 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <label for="inputCategory">Tipo de conta*</label>
                                                <select class="form-control" id="inputClient">
                                                    <option selected>Á vista</option>
                                                    <option>Parcelado</option>
                                                    <option>Recorrente</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <label>Parcelas</label>
                                                <input type="number" class="form-control" disabled>
                                            </div>
                                            <div class="form-group col-lg-3">
                                                <label>Data de Vencimento*</label>
                                                <input type="date" class="form-control">
                                            </div>
                                             <div class="form-group col-lg-3">
                                                <label>Data de Pagamento</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="buttons-form">
                                                <button type="reset" class="btn btn-default">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Enviar</button>  
                                            </div>        
                                        </form>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>  
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>