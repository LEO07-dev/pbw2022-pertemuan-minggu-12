<?php
echo 'Nama  : ' . $_GET['nama'] . '<br/>';
echo 'Email : ' . $_GET['email'];

echo '<pre>'; print_r($_GET);
/* Hasil: 
Array
(
 [nama] => Agus Prawoto Hadi
 [email] => prawoto.hadi@gmail.com
 [submit] => Simpan
)
*/