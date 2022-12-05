<?php
$mailsBody = ["CV", "other word", "promo", "proposal", "advertising", "PROMO", "cv", "Proposal"];

$generalCompt = 0;
$recruitmentCompt = 0;
$spamCompt = 0;
$salesCompt = 0;
$receptionCompt = 0;

foreach ($mailsBody as $contents => $value){
    switch ($value) {
        case (preg_match('/promo/i', $value) == 1 || preg_match('/advertising/i', $value) == 1):
            echo 'ok pour spam<br>';
            $generalCompt++;
            $spamCompt++;
            break;
        case (preg_match('/CV/i', $value) == 1):
            echo 'ok pour le recruitment<br>';
            $generalCompt++;
            $recruitmentCompt++;
            break;
        case (preg_match('/proposal/i', $value) == 1):
            echo 'ok pour sales<br>';
            $generalCompt++;
            $salesCompt++;
            break;
        default:
            echo 'Envoie a la reception<br>';
            $generalCompt++;
            $receptionCompt++;
            break;
    }
}

echo 'We have sorted '.$generalCompt.' mails:';
echo '<ul>
    <li>'.$recruitmentCompt.' to recruitment</li>
    <li>'.$spamCompt.' to spam</li>
    <li>'.$salesCompt.' to sales</li>
    <li>'.$receptionCompt.' to reception', '</li>
    </ul>';

// with a for loop
// in this case doesn't work loop on the same string
/*for ($i = 0; $i < count($mailsBody); $i++) {
    switch ($mailsBody) {
        case (preg_match('/promo/i', $mailsBody[2]) == 1 || preg_match('/advertising/i', $mailsBody[4]) == 1):
            echo 'ok pour spam<br>';
            $generalCompt++;
            $spamCompt++;
            break;
        case (preg_match('/CV/i', $mailsBody[0]) == 1):
            echo 'ok pour le recruitment<br>';
            $generalCompt++;
            $recruitmentCompt++;
            break;
        case (preg_match('/proposal/i', $mailsBody[3]) == 1):
            echo 'ok pour sales<br>';
            $generalCompt++;
            $salesCompt++;
            break;
        default:
            echo 'Envoie a la reception<br>';
            $generalCompt++;
            $receptionCompt++;
            break;
    }
}*/