<?php

require_once "db.php";

$autos = [
    ["Hook", "Braun", "Chevrolet 3800", "hook.png"],
    ["Lightning McQueen", "Rot", "Custom Race Car", "mcqueen.jpg"],
    ["Doc Hudson", "Blau", "1951 Hudson Hornet", "doc-hudson.jpg"],
    ["Sally Carrera", "Babyblau", "Porsche 911 Carrera", "sally.jpg"],
    ["Mack", "Rot", "American Truck", "mack.jpg"],
    ["Guido", "Babyblau", "Gabelstapler", "guido.jpg"],
    ["Luigi", "Gelb", "Fiat 500", "luigi.jpg"],
    ["King", "Blau", "Plymoth Superbird", "king.jpg"],
    ["Chick Hicks", "Grün", "Shyster Cremlin", "chick-hicks.jpg"],
    ["Fred", "Rost", "Stodgey Suaver LT", "fred.jpg"]
];

$stmt = $pdo->prepare("
    INSERT INTO autos
    (id, charakter, farbe, fahrzeug, bild)
    VALUES
    (:id, :charakter, :farbe, :fahrzeug, :bild)
");

$id = 1;

foreach ($autos as $auto) {

    $stmt->execute([
        "id" => $id,
        "charakter" => $auto[0],
        "farbe" => $auto[1],
        "fahrzeug" => $auto[2],
        "bild" => $auto[3]
    ]);

    $id++;
}

echo "Import abgeschlossen.";