<?php


function dividir(int $numero1, int $numero2) : void {
    echo $numero1 / $numero2;
}

try{dividir(10,0)."<br>";
}catch (Exception $exception){
    echo $exception->getmessage();
}

echo " Todo funciono Correctamente";

