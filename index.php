<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Modelo de HTML com link para css e js</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1f400e7c0b.js"></script>

        <link href="css/custom.css" rel="stylesheet">
    </head>
    <body>
        <?php require_once 'process.php'; ?>
        
<!-- *************************************** inicio do modal *************************************** -->
        <div class="modal fade bd-example-modal-lg" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Make your order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <form action="process.php" method="POST">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" name="ORDERNUMBER" class="form-control" placeholder="Order Number">
                                </div>
                                <div class="form-group col">
                                    <input type="text" name="CAMPAIN"class="form-control" placeholder="Campain">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" name="PRODUCTNAME"class="form-control" placeholder="Product Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" name="CUSTOMER"class="form-control" placeholder="Customer">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="STATUS"class="form-control" placeholder="Status">
                                </div>
                                <div class="form-group col-md-3">
                                    <?php 

                                    
                                        date_default_timezone_set('America/Araguaina');
                                        $date = date('Y/m/d', time());
                                        $date = date_create($date);
                                                                            
                                        $time = date('h:ia', time());
                                        $time = date_create($time);
                                        
                                        $dateOk = date_format($date, 'd/m/Y');
                                    ?>
                                    <input type="date" name="DATE" class="form-control" value="<?php echo date('Y-m-d', time()); ?>">
                                    
                                </div>
                                <div class="form-group col-md-2">
                                    <?php
                                        $timeOk = date_format($time, 'h:i');
                                    ?>
                                    <input type="time" name="TIME" class="form-control" value="<?php echo date('h:i', time()); ?>">
                                </div>
                                <div class="form-group col-md-1">
                                    <span class="input-group-text" id="basic-addon1"><?php echo date('a', time()); ?></span>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="add-item" style="font-size: 15px;">Save</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 15px;">Close</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- *************************************** termino do modal *************************************** -->

        <div class="container-fluid">
            <div class="row" style="">

<!-- *************************************** Inicio do container da lateral azul *************************************** -->
            <div class="bg-primary" style="width: 15%; height: 800px; margin: 0; padding: 0;">
                <div class="container-fluid" style="margin: 0; padding: 0;">
                    <div class="btn-group-vertical bg-primary" style="margin: 0; padding: 0; width: 100%; height: 100%">
                        <button id="btn0" type="button" class="btn btn-primary" style="height: 50px;"><i class="fas fa-angle-double-right mr-2"></i>Insight Tech</button>
                        <button id="btn1" type="button" class="btn btn-primary text-md-left" style="font-size: 14px;"><i class="fas fa-home mr-2"></i>Home</button>
                        <button id="btn2" type="button" class="btn btn-primary text-md-left" style="font-size: 14px;"><i class="fas fa-user mr-2"></i>Customer Service</button>
                        <button id="btn3" type="button" class="btn btn-primary text-md-left" style="font-size: 14px;"><i class="fas fa-map-marker-alt mr-2"></i>Address Verification</button>
                        <button id="btn4" type="button" class="btn btn-primary text-md-left" style="font-size: 14px;"><i class="fas fa-clipboard-check mr-2"></i>Orders</button>
                        <button id="btn5" type="button" class="btn btn-primary text-md-left" style="font-size: 14px;"><i class="fas fa-comment-dots mr-2"></i>Dispute Center</button>
                    </div>
                </div>
            </div>
<!-- *************************************** Termino do container da lateral azul *************************************** -->        
<!-- *************************************** Inicio do quadro cinza fundo principal *************************************** -->
            <div class="" style="background-color: whitesmoke; width: 85%; height: 800px;">

                <!-- quadro all order e info do usuário (quadro branco) -->
                <div class="" style="background-color: white; width: 100%; height: 50px;">
                    <div class="card" style="border-radius: 0; margin: 0; padding: 0; border-color: none;">
                        <div class="card-body" style="margin: 10px 0; padding: 0;">

                            <div class="row" style="font-size: 20px; margin: 0; padding: 0;">
                                <div class="col-sm-6">
                                    <p class="card-text">
                                        <i class="fas fa-bars mr-3" id="info"></i>
                                        All Orders
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="card-text text-right">
                                        <i class="fas fa-bell mr-3"></i>
                                        <i class="fas fa-user-circle mr-3" style="font-size: 25px"></i>
                                        Sang Le
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
<!-- *************************************** Termino do quadro cinza fundo principal *************************************** -->
<!-- *************************************** Inicio do quadro pesquisa e botoes verde e azul *************************************** -->
                <div class=" ml-4 mt-4" style="/*background-color: orange; */width: 95%; height: 50px;">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="card-text">
                                <div class="card">
                                    <div class="card-body" style="margin: 0; padding: 0;">
                                        <form action="" method="">
                                        <div class="btn-group" style="width: 100%;">
                                        <button name="" type="submit" class="btn btn-outline-secondary" id="search" style="border-color: white;"><i class="fas fa-search"></i></button>
                                        <input name="" type="text" class="form-control" placeholder="Search by Irder by Number, Product Name, Keywords, ..." style="width: inherit; border-color: white;">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card-text">
                                <div class="row" style="margin-top: 3px;">
                                    <div class="card-body text-center" style="margin: 0; padding: 0;">
                                        <button class="btn btn-success pt-2 pb-2" type="button" style="font-size: 13px;" id="add-filter">
                                            <i class="fas fa-filter mt-1 mr-1"></i>
                                            Add Filter
                                        </button>
                                    </div>
                                    <div class="card-body text-center" style="margin: 0; padding: 0;">
                                        <button class="btn btn-primary pt-2 pb-2" type="button" style="font-size: 13px;" data-toggle="modal" data-target="#modalExemplo">
                                            <i class="fas fa-plus mt-1 mr-1"></i>
                                            New Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- *************************************** Inicio do quadro com a lista de pedidos *************************************** -->
                <div class="ml-4 mt-2 mb-4" style="/*background-color: purple;*/ width: 95%; min-height: 550px;">

                    <?php
                    $mysqli = new mysqli('localhost', 'root', '', 'Sales') or die(mysqli_error($mysqli));
                    $result = $mysqli->query("SELECT * FROM Orders ORDER BY id ASC") or die($mysqli->error);
                    ?>

                    <div class="card" style="height: 100%;">
                        <table class="table adjuste-table">
                        <thead>
                            <tr class>
                                <th scope="col col-md-1">ORDER NUMBER</th>
                                <th scope="col col-md-2">CAMPAIN</th>
                                <th scope="col col-md-2">PRODUCT NAME</th>
                                <th scope="col col-md-3">CUSTOMER</th>
                                <th scope="col col-md-1">STATUS</th>
                                <th scope="col col-md-3">UPDATE DATE</th>
                            </tr>
                        </thead>
                        <tbody class="itens-lista">

                        <?php
                        while ($row = $result->fetch_assoc()){ ?>
                            <tr>
                                <td class="text-primary "><?php echo $row['ORDERNUMBER']; ?></td>
                                <td><?php echo $row['CAMPAIN']; ?></td>
                                <td><?php echo $row['PRODUCTNAME']; ?></td>
                                <td><?php echo $row['CUSTOMER']; ?></td>
                                <td><?php echo $row['STATUS']; ?></td>
                                <td>
                                    <?php 
                                        $date = date_create($row['UPDATEDATE']);
                                        echo date_format($date, 'M d, Y - h:ia');                       
                                    ?>
                                </td>
                            </tr>
                        <?php }; ?>

                        </tbody>
                        </table>
                    </div>
                </div>
<!-- *************************************** Termino do quadro com a lista de pedidos *************************************** -->
<!-- *************************************** Inicio do rodape *************************************** -->
                <footer>
                    <div class="row" style="font-size: 15px; margin: 0; padding: 0;">
                        <div class="col">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a id="pag-after" class="nav-link adjust-btn-padding mt-2" href="">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a id="pag1" class="nav-link adjust-btn-padding mt-2 active bg-primary text-white" href="#">1</a>
                            </li>
                            <li class="nav-item">
                                <a id="pag2" class="nav-link adjust-btn-padding mt-2 " href="">2</a>
                            </li>
                            <li class="nav-item">
                                <a id="pag3" class="nav-link adjust-btn-padding mt-2 " href="">3</a>
                            </li>
                            <li class="nav-item">
                                <a id="pag-before" class="nav-link adjust-btn-padding mt-2 " href="">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </footer>
<!-- *************************************** Termino do rodape *************************************** -->
            </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>    
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
        
    </body>
</html>