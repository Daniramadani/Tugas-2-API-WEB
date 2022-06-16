<?php
$url = file_get_contents('https://indonesia-covid-19.mathdro.id/api');
$data = json_decode($url, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Covid-19 ID</title>
    <link rel="shortcut icon" href="indonesia.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#"><i class="fa fa-fw fa-home"></i> Home <span class="sr-only">(current)</span></a>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    <strong>Update</strong> Data Virus Corona di Indonesia!
                </div>
            </div>

            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-tittle text-center"><i class="fa fa-frown-open"></i>Positif</h4>
                        <p class="card-text text-center"><?= $data[0]['positif']; ?> </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card badge-warning p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-tittle text-white text-center"><i class="fa fa-frown-open"></i>Dirawat</h4>
                        <p class="card-text text-white text-center"><?= $data[0]['dirawat']; ?> </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card badge-success p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-tittle text-center"><i class="fa fa-grin"></i>Sembuh</h4>
                        <p class="card-text text-center"><?= $data[0]['sembuh']; ?> </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card badge-danger p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-tittle text-center"><i class="fa fa-frown-open"></i>Meninggal</h4>
                        <p class="card-text text-center"><?= $data[0]['meninggal']; ?> </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-4">
                <div class="text-center">
                    <a href="https://kawalcovid19.id/" target="_blank" class="btn btn-primary">Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <div class="card-footer bg-dark text-light fixed-bottom">
            <div class="container my-auto">
                <span>Made with &hearts; by <a href="" target="_blank">Taqbir Hasan Ramadani</a></span>
            </div>
        </div>
    </footer>
</body>
</html> 