<?php
function generatePayeezyHash($data) {
    echo hash_hmac("sha1", $data['pageid'] . "^" . $data['sequence'] . "^" . $data['timestamp'] . "^" . $data['amountInput'] . "^" . $data['currency'], $key = 'vmLZpqDnLWNlulH2_yMu');
}

if ($_POST['amountInput']){
    generatePayeezyHash($_POST);
}
