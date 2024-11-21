<?php
    session_start();

    if (isset($_SESSION["registrazioni"]) && count($_SESSION["registrazioni"]) > 0) {
        echo '<h2>Registrazioni</h2>';
        echo '<table border="1">
                <tr>
                    <th>Codice Fiscale</th>
                    <th>Età</th>
                </tr>';

        $totaleEta = 0;
        $numeroRegistrazioni = count($_SESSION["registrazioni"]);

        foreach ($_SESSION["registrazioni"] as $cf => $eta) {
            echo '<tr>
                    <td>' . htmlspecialchars($cf) . '</td>
                    <td>' . htmlspecialchars($eta) . '</td>
                </tr>';
            $totaleEta += $eta;
        }

        echo '</table>';

        $etaMedia = $totaleEta / $numeroRegistrazioni;
        echo '<p>Età media: ' . round($etaMedia, 2) . '</p>';
    } else {
        echo '<p>Non ci sono registrazioni.</p>';
    }

    echo '<p><a href="form.html">Aggiungi un altro inserimento</a></p>';
?>
