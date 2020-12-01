<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potęgowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="baner">
        <a href="index.html"><img src="baner.jpg" alt="baner"></a>
    </div>

    <main>
        <div class="menu">
            <span>Menu</span>
            <ul>
                <li>
                    <a href="strona1.html">proste działania</a>
                </li>
                <li>
                    <a href="strona2.php">potęgowanie</a>
                </li>
            </ul>
        </div>
        <section class="content">
            <h1>Potęgowanie</h1>
            <form action="#" method="POST">
                <div>
                    <label for="podsawa">Podaj podstawę potęgi: </label>
                    <input type="number" name="podsawa" id="podsawa">
                </div>

                <div>
                    <label for="wykladnik">Podaj dodatni, całkowity wykładnik potęgi: </label>
                    <input type="number" name="wykladnik" id="wykladnik">
                </div>
                <input type="submit" value="Potęgowanie" name="submit">
            </form>

            <?php
                if(isset($_POST['submit'])) {
                    $a = $_POST['podsawa'];
                    $b = $_POST['wykladnik'];
                    if($a != '' && $b != '') {
                        if($b >= 0) {
                            $res = $a**$b;
                            echo "<span id='info'>Wynik działania wynosi: $res</span>";
                        } else {
                            echo "<span id='info'>Wykładnik potęgi musi być dodatni.</span>";
                        }
                    } else {
                        echo "<span id='info'>Wpisz podstawę i wykładnik potęgi.</span>";
                    }
                }
            ?>
        </section>
    </main>

</body>
</html>