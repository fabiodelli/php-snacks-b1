<?php
$partite = [
    $partitaA = [
        "Squadra Casa" => "Olimpia Milano",
        "Squadra Ospite" => "Cantù",
        "Punti Casa" => 55,
        "Punti Ospite" => 60,
    ];
    $partitaB = [
        "Squadra Casa" => "Olimpia Roma",
        "Squadra Ospite" => "Salerno",
        "Punti Casa" => 55,
        "Punti Ospite" => 60,
    ];
    $partitaC = [
        "Squadra Casa" => "Olimpia Torino",
        "Squadra Ospite" => "Genova",
        "Punti Casa" => 55,
        "Punti Ospite" => 60,
    ];
];

foreach ($partite as $partita) {
    echo $partita["Squadra Casa"] . " - " . $partita["Squadra Ospite"] . " | " . $partita["Punti Casa"] . "-" . $partita["Punti Ospite"] . "<br>";
    
}

?>