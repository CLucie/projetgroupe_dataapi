<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
    <title>projetgroupe_dataapi</title>
</head>
<body class="container-fluid">

    <header class="row fixed-top">
        <h1 class="col-12">LA NUIT DES MUSEES DE LA REGION AUVERGNE RHONE-ALPES</h1>
    </header>

    <section class="row">
    @yield('main')
    </section>

    <footer class="row fixed-bottom" >
        <h3 class="col-12">©2017 - SOPHIE LUCIE FREDERIC</h3>
    </footer>
   
</body>
</html>