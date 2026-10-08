<?php

require_once "db.php";
$suche = trim($_GET["q"] ?? "");

$autos = [];

if ($suche !== ""){
  $stmt = $pdo->prepare("
    SELECT *
    FROM autos
    WHERE charakter LIKE :suche
    OR farbe LIKE :suche
    OR fahrzeug LIKE :suche
    ORDER BY charakter ASC
  ");

  $stmt->execute([
     "suche" => "%" . $suche . "%"
  ]);

  $autos = $stmt->fetchALL();

}
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cars · Charakter-Datenbank</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <main>
    <h1> Hallo Ruben & Unbekannte </h1>
    <h2> What Car(s) am i looking for? </h2>

    <img src="./bilder/Werbung1.png" alt="Werbung" class="werbung werbung-links">
    <form method="GET" action="">

      <div class="suchfeld">
        <label for="search">Wen suchst du?</label>

        <input
          type="search"
          id="search"
          name="q"
          maxlength="120"
          autocomplete="off"
          placeholder="Name, Farbe oder Fahrzeug – z. B. Hook"
          aria-controls="cards"
          value="<?= htmlspecialchars($suche) ?>"
        >

        <button type="submit">
          Suchen
        </button>

      </div>

    </form>

    <img src="./bilder/Werbung2.png" alt="Werbung" class="werbung werbung-rechts">


    <div id="cards">

      <?php foreach ($autos as $auto): ?>

        <div class="card">

          <div class="card-bild">

            <img src="./bilder/<?= htmlspecialchars($auto["bild"]) ?>" alt="<?= htmlspecialchars($auto["charakter"]) ?>">

          </div>

          <div class="card-info">

          <h2>
            <?= htmlspecialchars($auto["charakter"]) ?>
          </h2>

          <p>
            Farbe:
            <?= htmlspecialchars($auto["farbe"]) ?>
          </p>

          <p>
            Fahrezug:
            <?= htmlspecialchars($auto["fahrzeug"]) ?>
          </p>

          </div>

        </div>
      <?php endforeach; ?>  

    </div>

  </main>


</body>
</html>