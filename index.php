<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/Style.CSS">
    <link rel="stylesheet" href="CSS/media.CSS">

    <link rel="icon" href="images/logos_Anolix/Logo_Noir_Rouge.svg" type="image/x-icon">

    <title>Anolix</title>
</head>

<body>

    <?php
    session_start();

    if (!isset($_REQUEST['uc'])) {
        $_REQUEST['uc'] = 'accueil';
    }
    $uc = htmlspecialchars($_REQUEST['uc']);
    switch ($uc) {
        case 'presentation':
            include 'vues/presentation.php';
            break;
        default:
            include 'vues/accueil.php';
            break;
    }

    include 'vues/footer.php';

    

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>