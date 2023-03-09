<?php

require_once('src/Classes/Kitty.php');

$kitty = new ElectroKitty\Classes\Kitty('Котэ', 1, 2314512, 100, 0, 0, 0, 0);
echo $kitty->getAllParams();
