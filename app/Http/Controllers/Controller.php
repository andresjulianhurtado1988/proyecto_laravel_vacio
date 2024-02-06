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

        $algo = "INSERT INTO `tbl_auditoria` VALUES
        (1,2,'2023-08-01 21:35:26','Crear',NULL,NULL,1,'Se crea el registro: {\"monto_desde\":\"500\",\"monto_hasta\":\"100000000\",\"fecha_hora_vigencia_desde\":\"2023-08-01\",\"fecha_hora_vigencia_hasta\":\"2023-12-31\",\"termino_contrato\":\"2\",\"porcentaje_retroventa\":\"10\",\"tiempo_anulacion_abono\":\"60\",\"descripcion\":\"Denarios - Parametros plan separe.\",\"estado\":1,\"created_at\":\"2023-08-01 16:35:26\",\"updated_at\":\"2023-08-01 16:35:26\",\"created_by\":2,\"updated_by\":2}',NULL,NULL),
        (2,2,'2023-08-03 02:29:10','Crear',NULL,NULL,26,'El medio de pago fue asociado con 1 joyería(s).','2023-08-03 02:29:10',NULL),
        (3,2,'2023-08-03 02:29:10','Crear',NULL,NULL,26,'El medio de pago fue asociado con 1 joyería(s).','2023-08-03 02:29:10',NULL),
        (4,2,'2023-08-17 20:57:25','Crear',NULL,NULL,1,'El medio de pago fue asociado con 1 joyería(s).','2023-08-17 20:57:25',NULL),
        (5,2,'2023-08-17 20:57:25','Crear',NULL,NULL,1,'El medio de pago fue asociado con 2 joyería(s).','2023-08-17 20:57:25',NULL),
        (6,2,'2023-08-17 20:58:11','Crear',NULL,NULL,1,'El medio de pago fue asociado con 1 joyería(s).','2023-08-17 20:58:11',NULL),
        (7,2,'2023-08-17 20:58:11','Crear',NULL,NULL,1,'El medio de pago fue asociado con 3 joyería(s).','2023-08-17 20:58:11',NULL),
        (8,2,'2023-08-17 20:58:27','Crear',NULL,NULL,1,'El medio de pago fue asociado con 1 joyería(s).','2023-08-17 20:58:27',NULL),
        (9,2,'2023-08-17 20:58:27','Crear',NULL,NULL,1,'El medio de pago fue asociado con 1 joyería(s).','2023-08-17 20:58:27',NULL),
        (10,2,'2023-08-17 20:59:05','Crear',NULL,NULL,2,'El medio de pago fue asociado con 1 joyería(s).','2023-08-17 20:59:05',NULL),
        (11,2,'2023-08-17 20:59:05','Crear',NULL,NULL,2,'El medio de pago fue asociado con 2 joyería(s).','2023-08-17 20:59:05',NULL),
        (12,2,'2023-08-17 21:03:48','Crear',NULL,NULL,2,'El medio de pago fue asociado con 1 joyería(s).','2023-08-17 21:03:48',NULL),
        (13,2,'2023-08-17 21:03:48','Crear',NULL,NULL,2,'El medio de pago fue asociado con 4 joyería(s).','2023-08-17 21:03:48',NULL),
        (14,2,'2023-08-17 21:06:05','Crear',NULL,NULL,1,'El medio de pago fue asociado con 1 joyería(s).','2023-08-17 21:06:05',NULL),
        (15,2,'2023-08-17 21:06:05','Crear',NULL,NULL,1,'El medio de pago fue asociado con 1 joyería(s).','2023-08-17 21:06:05',NULL),
        (16,2,'2023-08-17 21:08:28','Crear',NULL,NULL,2,'El medio de pago fue asociado con 1 joyería(s).','2023-08-17 21:08:28',NULL),
        (17,2,'2023-08-17 21:08:28','Crear',NULL,NULL,2,'El medio de pago fue asociado con 5 joyería(s).','2023-08-17 21:08:28',NULL),
        (18,2,'2023-08-21 19:53:12','Crear',NULL,NULL,2,'El medio de pago fue asociado con 1 joyería(s).','2023-08-21 19:53:12',NULL),
        (19,2,'2023-08-21 19:53:12','Crear',NULL,NULL,2,'El medio de pago fue asociado con 4 joyería(s).','2023-08-21 19:53:12',NULL),
        (20,2,'2023-08-22 01:10:03','Crear',NULL,NULL,2,'El medio de pago fue asociado con 1 joyería(s).','2023-08-22 01:10:03',NULL),
        (21,2,'2023-08-22 01:10:03','Crear',NULL,NULL,2,'El medio de pago fue asociado con 5 joyería(s).','2023-08-22 01:10:03',NULL),
        (22,2,'2023-09-09 23:01:35','Crear',NULL,NULL,2,'El medio de pago fue asociado con 1 joyería(s).','2023-09-09 23:01:35',NULL),
        (23,2,'2023-09-09 23:01:35','Crear',NULL,NULL,2,'El medio de pago fue asociado con 6 joyería(s).','2023-09-09 23:01:35',NULL),
        (24,2,'2023-09-09 23:03:15','Crear',NULL,NULL,2,'El medio de pago fue asociado con 1 joyería(s).','2023-09-09 23:03:15',NULL),
        (25,2,'2023-09-09 23:03:15','Crear',NULL,NULL,2,'El medio de pago fue asociado con 30 joyería(s).','2023-09-09 23:03:15',NULL),
        (26,1025,'2023-09-21 20:52:40','Crear',NULL,NULL,3,'El medio de pago fue asociado con 1 joyería(s).','2023-09-21 20:52:40',NULL),
        (27,1025,'2023-09-21 20:52:40','Crear',NULL,NULL,3,'El medio de pago fue asociado con 30 joyería(s).','2023-09-21 20:52:40',NULL),
        (28,878,'2023-09-23 00:42:36','Crear',NULL,NULL,3,'Se crea el registro: {\"monto_desde\":\"100\",\"monto_hasta\":\"200000\",\"termino_contrato\":\"2\",\"porcentaje_retroventa\":\"10\",\"tiempo_anulacion_abono\":\"60\",\"descripcion\":\"PRUEBA\",\"estado\":1,\"created_at\":\"2023-09-22 19:42:36\",\"updated_at\":\"2023-09-22 19:42:36\",\"created_by\":878,\"updated_by\":878}',NULL,NULL),
        (29,1021,'2023-09-26 21:44:57','Actualizar',NULL,NULL,2,'Se actualiza el registro: {\"descripcion\":\"PRUEBA\",\"monto_desde\":\"1\",\"monto_hasta\":\"1000000000000\",\"termino_contrato\":\"9\",\"porcentaje_retroventa\":\"10\",\"tiempo_anulacion_abono\":\"60\",\"updated_at\":\"2023-09-26 16:44:57\",\"updated_by\":1021}',NULL,NULL),
        (30,1021,'2023-09-26 21:50:12','Crear',NULL,NULL,2,'El medio de pago fue asociado con 1 joyería(s).','2023-09-26 21:50:12',NULL),
        (31,1021,'2023-09-26 21:50:12','Crear',NULL,NULL,2,'El medio de pago fue asociado con 1 joyería(s).','2023-09-26 21:50:12',NULL),
        (32,1021,'2023-09-26 21:50:35','Crear',NULL,NULL,2,'El medio de pago fue asociado con 1 joyería(s).','2023-09-26 21:50:35',NULL),
        (33,1021,'2023-09-26 21:50:35','Crear',NULL,NULL,2,'El medio de pago fue asociado con 30 joyería(s).','2023-09-26 21:50:35',NULL),
        (34,878,'2023-12-14 19:30:15','Crear',NULL,NULL,6,'El medio de pago fue asociado con 1 joyería(s).','2023-12-14 19:30:15',NULL),
        (35,878,'2023-12-14 19:30:15','Crear',NULL,NULL,6,'El medio de pago fue asociado con 30 joyería(s).','2023-12-14 19:30:15',NULL),
        (36,878,'2023-12-14 21:40:24','Crear',NULL,NULL,6,'Se crea el registro: {\"monto_desde\":\"500\",\"monto_hasta\":\"100000000\",\"termino_contrato\":\"9\",\"porcentaje_retroventa\":\"10\",\"tiempo_anulacion_abono\":\"60\",\"descripcion\":\"Plan Separe CATAY\",\"estado\":1,\"created_at\":\"2023-12-14 16:40:24\",\"updated_at\":\"2023-12-14 16:40:24\",\"created_by\":878,\"updated_by\":878}',NULL,NULL),
        (37,878,'2023-12-14 22:03:27','Actualizar',NULL,NULL,3,'Se actualiza el registro: {\"descripcion\":\"Plan Separe CATAY\",\"monto_desde\":\"0\",\"monto_hasta\":\"100000000\",\"termino_contrato\":\"9\",\"porcentaje_retroventa\":\"10\",\"tiempo_anulacion_abono\":\"60\",\"updated_at\":\"2023-12-14 17:03:27\",\"updated_by\":878}',NULL,NULL);";
    }
}

