<?php ?>









<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">


</head>

<body>
    <header class="container pt-3 pb-3 text-center text-white">
        <h1>Strong Password Generator</h1>
        <h2>genera una password sicura</h2>
    </header>


    <main>
        <?php if (!isset($_GET['password'])) { ?>
            <section class="container" id="userinfo">
                <div class="row">
                    <div class="col-12">

                        <div class="alert alert-danger container" role="alert">
                            inserisci parametro
                        </div>
                    <?php } elseif (empty($_GET['password']) || !is_string($_GET['password']) ) { ?>
                        <div class="alert alert-danger container" role="alert">
                            parametro non valido
                        </div>
                    <?php } else { ?>

                        <div class="alert alert-success container" role="alert">
                            Parametro valido inserito
                          

                        </div>


                    </div>
                </div>


            </section>


        <?php } ?>


    <section class="bg-light container">

    <div class="container">
        <div class="row">
            <div class="col-12">
        <h3>la tua password sicurissima è:</h3> 
        <?php  echo rand_string($_GET['password']);?>
    </div>
    </div> 
    </div> 
    </section>






        <form class="container pt-4 pb-4 ">
            <div class="mb-3 d-flex justify-content-between">
                <label for="password" class="form-label"> Inserisci Lunghezza password:</label>
                <input type="number" class="my_input" name="password" id="password" aria-describedby="emailHelp">

            </div>
            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputPassword1" class="form-label">Consenti ripetizione di uno o più caratteri:</label>
                <div class="d-flex flex-column my_check">
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="repeat1" id="repeat11">
                        <label class="form-check-label " for="repeat1">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="repeat2" id="repeat2" checked>
                        <label class="form-check-label" for="repeat2">
                            No
                        </label>
                    </div>
                    <div class="pt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="letter" id="letter">
                            <label class="form-check-label" for="letter">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="number" id="number" checked>
                            <label class="form-check-label" for="number">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="simbol" id="simbol" checked>
                            <label class="form-check-label" for="simbol">
                                Simboli
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="button" class="btn btn-secondary">Annulla</button>
        </form>


    </main>


</body>

</html>



<?php

function rand_string( $password) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@!?%&";
    return substr(str_shuffle($chars),0,$password);

}







?>