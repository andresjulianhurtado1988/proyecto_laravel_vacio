<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function nada()
    {

        $algo = "INSERT INTO `tbl_apoderado`VALUES
        (1,'Jony Alejandro','Montaño Fernandez','1039452497','firmas/eWjsegTC6HCLB6BotKZSGIkklzR4VGUCPY4Bggzy.png',1,87,1,'2023-08-02 01:58:45','2023-09-28 02:28:04'),
        (2,'Fanor','Paz','289108301','firmas/i2umC0AybSc2ekaRhQPfPaEmW4IZgOewrFweGkfu.png',1,362,1,'2023-12-14 18:30:40','2023-12-14 18:31:08');";
    }
}

