<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Modelo de HTML com link para css e js</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/1f400e7c0b.js"></script>

        <link rel="stylesheet" href="css/estilo2.css">

    </head>
    <body>
        <?php require_once 'process.php'; ?>
        
        <!-- inicio do modal -->
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
                        
                        <form>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="Order Number">
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="Campain">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="Product Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="Customer">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Status">
                                </div>
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="Update Date">
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" name="add-item" style="font-size: 15px;">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 15px;">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- termino do modal -->

        <div class="container-fluid">
        <div class="row" style="">
            
        <!-- container da lateral esquerda - azul -->
        <div class="bg-primary" style="width: 15%; height: 700px; margin: 0; padding: 0;">
            <div class="container-fluid" style="margin: 0; padding: 0;">
                <div class="btn-group-vertical bg-primary" style="margin: 0; padding: 0; width: 100%; height: 100%">
                    <button type="button" class="btn btn-primary" style="height: 50px;"><i class="fas fa-angle-double-right mr-2"></i>Insight Tech</button>
                    <button type="button" class="btn btn-primary text-md-left" style="font-size: 14px;"><i class="fas fa-home mr-2"></i>Home</button>
                    <button type="button" class="btn btn-primary text-md-left" style="font-size: 14px;"><i class="fas fa-user mr-2"></i>Customer Service</button>
                    <button type="button" class="btn btn-primary text-md-left" style="font-size: 14px;"><i class="fas fa-map-marker-alt mr-2"></i>Address Verification</button>
                    <button type="button" class="btn btn-primary text-md-left" style="font-size: 14px;"><i class="fas fa-clipboard-check mr-2"></i>Orders</button>
                    <button type="button" class="btn btn-primary text-md-left" style="font-size: 14px;"><i class="fas fa-comment-dots mr-2"></i>Dispute Center</button>
                </div>
            </div>
        </div>
        
        <!-- quadro cinza fundo principal -->
        <div class="" style="background-color: whitesmoke; width: 85%; height: 700px;">
            
            <!-- quadro all order e info do usuário (quadro branco) -->
            <div class="" style="background-color: white; width: 100%; height: 50px;">
                <div class="card" style="border-radius: 0; margin: 0; padding: 0; border-color: none;">
                    <div class="card-body" style="margin: 10px 0; padding: 0;">
                        
                        <div class="row" style="font-size: 20px; margin: 0; padding: 0;">
                            <div class="col-sm-6">
                                <p class="card-text">
                                    <i class="fas fa-bars mr-3"></i>
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
            
            <!-- quadro pesquisa e botoes verde e azul -->
            <div class=" ml-4 mt-4" style="/*background-color: orange; */width: 95%; height: 50px;">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="card-text">
                            <div class="card">
                                <div class="card-body" style="margin: 0; padding: 0;">
                                    <div class="btn-group" style="width: 100%;">
                                    <button class="btn btn-outline-secondary" type="button" style="border-color: white;"><i class="fas fa-search"></i></button>
                                    <input type="text" class="form-control" placeholder="Search by Irder by Number, Product Name, Keywords, ..." style="width: inherit; border-color: white;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-text">
                            <div class="row" style="margin-top: 3px;">
                                <div class="card-body text-center" style="margin: 0; padding: 0;">
                                    <button class="btn btn-success pt-2 pb-2" type="button" type="button" style="font-size: 13px;">
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
                
            <!-- quadro com a lista de pedidos -->
            <div class="ml-4 mt-2 mb-4" style="/*background-color: purple;*/ width: 95%; height: 500px;">
                
                <?php
                $mysqli = new mysqli('localhost', 'root', '', 'Sales') or die(mysqli_error($mysqli));
                $result = $mysqli->query("SELECT * FROM Orders ORDER BY id ASC") or die($mysqli->error);

                //pre_r($result);

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
                    while ($row  = $result->fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $row['ORDERNUMBER']; ?></td>
                            <td><?php echo $row['CAMPAIN']; ?></td>
                            <td><?php echo $row['PRODUCTNAME']; ?></td>
                            <td><?php echo $row['CUSTOMER']; ?></td>
                            <td><?php echo $row['STATUS']; ?></td>
                            <td><?php echo $row['UPDATEDATE']; ?></td>
                        </tr>
                    <?php }; ?>

                    </tbody>
                    </table>
                    
                <?php
                function pre_r($array){
                    echo '<pre>';
                    print_r($array);
                    echo '</pre>';
                }
                ?>  
                    
                </div>
            </div>
        </div>
            
        </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>    
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="js/index.js"></script>

    </body>
</html>