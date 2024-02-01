<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Example Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <style>
        a, .nav-link, .navbar-brand {
            color: #fff; 
            font-family: 'Showcard Gothic', sans-serif; 
        }

        body {
            background-color: #f5f5dc; 
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #87CEEB; 
            padding: 20px;
            font-size:30px;
        }

        .navbar-toggler-icon {
            background-color: #fff; 
        }

        .navbar-nav {
            text-align: center;
            width: 100%;
            font-size: 40px;
        }

        .navbar-nav .nav-item {
            margin: 0 25px;
        }

        .nav-link {
            font-size: 30px; 
        }

        .form-control {
            background-color: #f5f5dc;  
            border: none;
            color: #000; 
        }

        .btn-outline-success {
            color: #fff; 
            background-color: #5bc0de; 
            border: none;
        }

        .col-sm-3 {
            background-color: #87CEEB; 
            padding: 10px;
            border-radius: 5px;
        }

        .col-sm-9 {
            background-color: #fff; 
            padding: 20px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="layout.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ex1.php">Exercise1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="layout.php">Exercise2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ex3.php">Exercise3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ex4.php">Exercise4</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">                        
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-bE0BT1L7VH1JqNFF9Z2MOqYb2UnQlmh/jAEe5U6Xqq8CC57VFfLFI0qzBCVjKoS" crossorigin="anonymous"></script>
</body>
</html>



