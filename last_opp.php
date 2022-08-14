<?php
$filTyper = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];

if (!(in_array($_FILES['file']['type'], $filTyper)))
{
    echo "ikke ett bilde";
    return;
}

$filNavn = $_FILES['file']['name'];

move_uploaded_file($_FILES['file']['tmp_name'], 'bilder/' . $filNavn);

echo 'bilder/' . $filNavn;
die;
