<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
     crossorigin="anonymous">

</head>
<body>
    <header>
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
             <a class="navbar-brand" href="#">Spring Step</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="pagin1.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
        </nav>
    </header> 

    <main>

        <div class= "container">
            <div class="row justify-content-center">
                <div class="col4">

                <form class = "mt-5" action="springStep.php" method="POST"> 
                     <h4 class ="text center">Ingrese la cantidad de zapatos a comprar</h4>
                     <br>
                    <div class="row">
                        <div class="col">
                             <input type="text-center" class="form-control" placeholder="Zapatos" name="zapatos">
                        </div>
                        <h5>El precio de cada par de zapatos es de $50.000</h5>
                    </div>
                    <button type="submit" class= "btn btn-primary mt-5" name="botonCalcular">Calcular </button>
                </form>

                <?php
                
                    if(isset($_POST["botonCalcular"])){

                        $zapatos1=$_POST["zapatos"];
                       
                        
                        $total=$zapatos1*50000;

                        switch($zapatos1){

                            case $zapatos1 == 3 ;
                                echo ('Tienes un descuento del 10%');
                            break;
                        
                            case $zapatos1 >3 && $zapatos1 <8;
                                echo('Tienes descuento de 20%');
                            break;

                            case $zapatos1 >=8 ;
                            echo('Tienes descuento de 50%');
                            break;
                            
                            default:
                        
                                echo('No hay descuento');

                        echo(" el total de la compra es de: " .$total);
                     }
                    }
                ?>
                
                </div>
            
            </div>
        
        </div>

    </main>

    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>