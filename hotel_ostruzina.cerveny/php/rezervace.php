<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = htmlspecialchars($_POST['jmeno']);
    $email = htmlspecialchars($_POST['email']);
    $datum = htmlspecialchars($_POST['datum']);
    $pocet = (int)$_POST['pocet'];
    $osoby = (int)$_POST['osoby'];
    $detaily = htmlspecialchars($_POST['detaily']);
    $sleva = (int)($_POST['sleva'] ?? 0);


    // Výpočet ceny za noc
    if ($osoby == 1) {
        $cena_za_noc = 1200;
    } elseif ($osoby == 2) {
        $cena_za_noc = 1800;
    } else {
        $cena_za_noc = 2500;
    }

    // Celková cena
    $cena_celkem = $cena_za_noc * $pocet;

    // Aplikace slevy
    $sleva_text = "";
    if ($sleva == 1) {
        $cena_celkem *= 0.6; // 40 % sleva => zaplatí 60 %
        $sleva_text = "BYLA UPLATNĚNA SLEVA Z AKCE 40%";
    }

} else {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potvrzení rezervace</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- pokud máš css v css/style.css -->
    <style>
        .potvrzeni {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            text-align: center;
            font-family: "Montserrat", sans-serif;
        }

        .potvrzeni h1 {
            color: #3d9403;
            margin-bottom: 20px;
        }

        .potvrzeni p {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .potvrzeni a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #3d9403;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .potvrzeni a:hover {
            background-color: #2d6f02;
        }
    </style>
</head>
<body>
<div class="potvrzeni">
    <h1>Děkujeme za rezervaci, <?php echo $jmeno; ?>!</h1>
    <p>Potvrzení bylo odesláno na <?php echo $email; ?>.</p>
    <p>Termín: <?php echo $datum; ?> na <?php echo $pocet; ?> nocí.</p>
    <p>Počet osob: <?php echo $osoby; ?></p>
    <p>Detaily k objednávce: <?php echo $detaily; ?>.</p>
    <p>
    Finální cena pobytu: 
    <?php if ($sleva == 1): ?>
        <del style="color: #888; opacity: 0.7;">
            <?php echo number_format(($cena_za_noc * $pocet), 0, ',', ' '); ?> Kč
        </del> 
        <span style="color: red; font-weight: bold; margin-left: 10px;">
            <?php echo number_format($cena_celkem, 0, ',', ' '); ?> Kč
        </span>
        <?php else: ?>
            <?php echo number_format($cena_celkem, 0, ',', ' '); ?> Kč
        <?php endif; ?>
    </p>
    <?php if ($sleva_text != ""): ?>
        <p style="color: red;"><strong><?php echo $sleva_text; ?></strong></p>
    <?php endif; ?>

    <a href="../index.php">Vrátit zpět na stránku</a>
</div>
</body>
</html>