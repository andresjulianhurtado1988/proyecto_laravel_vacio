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

        $algo = "INSERT INTO `invoice_items` VALUES
        (1,2328,1,'0000000020','REF-ANI-NR','34',4,'1','ANILLO DE ORO 18 K NACIONAL REFACCIONADO','',1,3.30,1072170.00,0.00,0.00,1072170.00,19.00,0.00,1275882.30,0.00,0.00,0.00,324900.00,'2023-09-14 02:49:53','2023-09-14 02:49:53'),
        (2,2329,1,'0000000008','REF-ESF-NN','34',4,'1','ESFERA DE ORO 18 K NACIONAL NUEVO','',1,0.15,48735.00,0.00,0.00,40953.78,19.00,7781.22,40953.78,0.00,0.00,0.00,48735.00,'2023-09-14 22:03:35','2023-09-14 22:03:35'),
        (3,2329,2,'0000000009','REF-ESF-NN','34',4,'1','ESFERA DE ORO 18 K NACIONAL NUEVO','',1,0.15,48735.00,0.00,0.00,40953.78,19.00,7781.22,40953.78,0.00,0.00,0.00,48735.00,'2023-09-14 22:03:35','2023-09-14 22:03:35'),
        (4,2329,3,'0000000010','REF-ESF-NN','34',4,'1','ESFERA DE ORO 18 K NACIONAL NUEVO','',1,0.15,48735.00,0.00,0.00,40953.78,19.00,7781.22,40953.78,0.00,0.00,0.00,48735.00,'2023-09-14 22:03:35','2023-09-14 22:03:35'),
        (5,2329,4,'0000000011','REF-ESF-NN','34',4,'1','ESFERA DE ORO 18 K NACIONAL NUEVO','',1,0.15,48735.00,0.00,0.00,40953.78,19.00,7781.22,40953.78,0.00,0.00,0.00,48735.00,'2023-09-14 22:03:35','2023-09-14 22:03:35'),
        (6,2329,5,'0000000012','REF-ESF-NN','34',4,'1','ESFERA DE ORO 18 K NACIONAL NUEVO','',1,0.15,48735.00,0.00,0.00,40953.78,19.00,7781.22,40953.78,0.00,0.00,0.00,48735.00,'2023-09-14 22:03:35','2023-09-14 22:03:35'),
        (7,2329,6,'0000000013','REF-ESF-NN','34',4,'1','ESFERA DE ORO 18 K NACIONAL NUEVO','',1,0.15,48735.00,0.00,0.00,40953.78,19.00,7781.22,40953.78,0.00,0.00,0.00,48735.00,'2023-09-14 22:03:35','2023-09-14 22:03:35'),
        (8,2329,7,'0000000014','REF-ESF-NN','34',4,'1','ESFERA DE ORO 18 K NACIONAL NUEVO','',1,0.15,48735.00,0.00,0.00,40953.78,19.00,7781.22,40953.78,0.00,0.00,0.00,48735.00,'2023-09-14 22:03:35','2023-09-14 22:03:35'),
        (9,2330,1,'0000000005','REF-ARE-NN','34',4,'1','ARETES DE ORO 18 K NACIONAL NUEVO','',1,0.44,142956.00,0.00,0.00,120131.09,19.00,22824.91,120131.09,0.00,0.00,0.00,142956.00,'2023-09-16 01:24:51','2023-09-16 01:24:51'),
        (10,2337,1,'0000000001','REF-ANI-NN','34',4,'1','ANILLO DE ORO 18 K NACIONAL NUEVO','',1,1.14,370385.00,0.00,0.00,311247.90,19.00,59137.10,311247.90,0.00,0.00,0.00,37038500.00,'2023-09-26 22:20:40','2023-09-26 22:20:40'),
        (11,2337,2,'0000000007','REF-CAD-IN','34',4,'1','CADENA DE ORO 18 K ITALIANA NUEVO','',1,1.69,633581.00,0.00,0.00,532421.01,19.00,101159.99,532421.01,0.00,0.00,0.00,63358100.00,'2023-09-26 22:20:40','2023-09-26 22:20:40'),
        (12,2339,1,'0000000003','REF-ANI-NR','34',4,'1','ANILLO DE ORO 18 K NACIONAL REFACCIONADO','',1,1.80,584820.00,0.00,0.00,491445.38,19.00,93374.62,491445.38,0.00,0.00,0.00,584820.00,'2023-09-27 00:21:35','2023-09-27 00:21:35'),
        (13,2340,1,'0000000002','REF-ANI-NR','34',4,'1','ANILLO DE ORO 18 K NACIONAL REFACCIONADO','',1,2.10,682290.00,0.00,0.00,573352.94,19.00,108937.06,573352.94,0.00,0.00,0.00,68229000.00,'2023-09-27 18:35:03','2023-09-27 18:35:03'),
        (14,2340,2,'0000000016','REF-CAD-IR','34',4,'1','CADENA DE ORO 18 K ITALIANA REFACCIONADO','',1,2.60,844740.00,0.00,0.00,709865.55,19.00,134874.45,709865.55,0.00,0.00,0.00,84474000.00,'2023-09-27 18:35:03','2023-09-27 18:35:03'),
        (15,2349,1,'0000000004','REF-CAD-IR','34',4,'1','CADENA DE ORO 18 K ITALIANA REFACCIONADO','',1,4.30,1397070.00,0.00,0.00,1174008.40,19.00,223061.60,1174008.40,0.00,0.00,0.00,139707000.00,'2023-09-28 01:12:42','2023-09-28 01:12:42'),
        (16,2349,2,'0000000022','REF-CAD-IR','34',4,'1','CADENA DE ORO 18 K ITALIANA REFACCIONADO','',1,1.00,324900.00,0.00,0.00,273025.21,19.00,51874.79,273025.21,0.00,0.00,0.00,32490000.00,'2023-09-28 01:12:42','2023-09-28 01:12:42'),
        (17,2353,NULL,'0000000006','REF-ANI-NR','34',4,'1','ANILLO DE ORO 18 K NACIONAL REFACCIONADO','',1,2.90,942210.00,0.00,0.00,791773.11,19.00,150436.89,791773.11,0.00,0.00,0.00,942210.00,'2023-10-27 18:12:08','2023-10-27 18:12:08'),
        (18,2353,NULL,'0000000018','REF-CAD-IR','34',4,'1','CADENA DE ORO 18 K ITALIANA REFACCIONADO','',1,0.90,292410.00,0.00,0.00,245722.69,19.00,46687.31,245722.69,0.00,0.00,0.00,292410.00,'2023-10-27 18:12:08','2023-10-27 18:12:08'),
        (19,2353,NULL,'0000000019','REF-DIJ-NN','34',4,'1','DIJE DE ORO 18 K NACIONAL NUEVO','',1,0.30,97470.00,0.00,0.00,81907.56,19.00,15562.44,81907.56,0.00,0.00,0.00,97470.00,'2023-10-27 18:12:08','2023-10-27 18:12:08'),
        (20,2354,NULL,'0000000024','TEST-OR-24K','34',4,'1','ORO 24K','',1,2.10,682290.00,0.00,0.00,573352.94,19.00,108937.06,573352.94,0.00,0.00,0.00,682290.00,'2023-11-02 18:51:27','2023-11-02 18:51:27'),
        (21,2355,NULL,'0000000015','REF-ESF-NN','34',4,'1','ESFERA DE ORO 18 K NACIONAL NUEVO','',1,0.15,48735.00,0.00,0.00,40953.78,19.00,7781.22,40953.78,0.00,0.00,0.00,4873500.00,'2023-11-29 18:44:35','2023-11-29 18:44:35'),
        (22,2356,NULL,'0000000021','REF-ANI-NR','34',4,'1','ANILLO DE ORO 18 K NACIONAL REFACCIONADO','',1,0.90,292410.00,0.00,0.00,245722.69,19.00,46687.31,245722.69,0.00,0.00,0.00,29241000.00,'2023-12-12 01:47:50','2023-12-12 01:47:50'),
        (23,2359,NULL,'0000000023','REF-CAD-IR','34',4,'1','CADENA DE ORO 18 K ITALIANA REFACCIONADO','',1,2.10,682290.00,0.00,0.00,573352.94,19.00,108937.06,573352.94,0.00,0.00,0.00,682290.00,'2023-12-14 00:20:27','2023-12-14 00:20:27'),
        (24,2359,NULL,'0000000017','REF-A-REL-18016','36',5,'1','RELOJ NUEVO','',1,0.00,315000.00,0.00,0.00,315000.00,0.00,0.00,0.00,0.00,0.00,0.00,315000.00,'2023-12-14 00:20:27','2023-12-14 00:20:27'),
        (25,2362,NULL,'0000000045','REFREL','34',4,'1','RELOJ DE ORO 18 K','',1,2.10,661500.00,0.00,0.00,555882.35,19.00,105617.65,555882.35,0.00,0.00,0.00,66150000.00,'2023-12-14 22:21:51','2023-12-14 22:21:51'),
        (26,2363,NULL,'0000000035','REF-ANI-NN','34',4,'1','ANILLO DE ORO 18 K AMARILLO NACIONAL NUEVO CORONA SIN PIEDRA BUENO','',1,0.31,97650.00,0.00,0.00,82058.82,19.00,15591.18,82058.82,0.00,0.00,0.00,9765000.00,'2023-12-14 23:26:11','2023-12-14 23:26:11'),
        (27,2364,NULL,'0000000036','REF-ANI-NN','34',4,'1','ANILLO DE ORO 18 K AMARILLO NACIONAL NUEVO CORONA SIN PIEDRA BUENO','',1,0.31,97650.00,0.00,0.00,82058.82,19.00,15591.18,82058.82,0.00,0.00,0.00,97650.00,'2023-12-14 23:39:19','2023-12-14 23:39:19'),
        (28,2364,NULL,'0000000038','REF-ANI-NN','34',4,'1','ANILLO DE ORO 18 K AMARILLO NACIONAL NUEVO CORONA SIN PIEDRA BUENO','',1,0.31,97650.00,0.00,0.00,82058.82,19.00,15591.18,82058.82,0.00,0.00,0.00,97650.00,'2023-12-14 23:39:19','2023-12-14 23:39:19'),
        (29,2365,NULL,'0000000028','TEST-CORR-18','34',4,'1','CORREA 18 K','',1,3.20,1039680.00,0.00,0.00,873680.67,19.00,165999.33,873680.67,0.00,0.00,0.00,103968000.00,'2024-01-15 21:20:25','2024-01-15 21:20:25'),
        (30,2365,NULL,'0000000032','REF-ANI-NN','34',4,'1','ANILLO DE ORO 18 K AMARILLO NACIONAL NUEVO CORONA SIN PIEDRA BUENO','',1,5.10,1656990.00,0.00,0.00,1392428.57,19.00,264561.43,1392428.57,0.00,0.00,0.00,165699000.00,'2024-01-15 21:20:25','2024-01-15 21:20:25')";

    }
}
