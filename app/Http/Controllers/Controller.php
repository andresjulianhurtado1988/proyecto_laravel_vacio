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
        $algo = "INSERT INTO `invoices_pagos` VALUES (9,1928,2,1090000.00,'2023-08-25 02:18:57','2023-08-25 02:18:57'),
                (10,1929,2,271400.00,'2023-08-26 01:16:24','2023-08-26 01:16:24'),
                (11,1930,2,198000.00,'2023-08-26 01:28:30','2023-08-26 01:28:30'),
                (12,1931,2,365800.00,'2023-08-29 00:05:26','2023-08-29 00:05:26'),
                (13,1932,2,12800.00,'2023-08-29 01:50:57','2023-08-29 01:50:57'),
                (14,1933,2,27900.00,'2023-08-29 22:03:44','2023-08-29 22:03:44'),
                (15,1934,2,9900.00,'2023-08-29 22:05:49','2023-08-29 22:05:49'),
                (16,1935,2,654000.00,'2023-08-30 01:17:36','2023-08-30 01:17:36'),
                (17,1937,2,18400.00,'2023-08-30 02:20:12','2023-08-30 02:20:12'),
                (18,1938,2,20000.00,'2023-08-30 02:27:05','2023-08-30 02:27:05'),
                (19,1939,2,6400.00,'2023-08-30 02:34:03','2023-08-30 02:34:03'),
                (20,1940,2,60800.00,'2023-08-30 19:30:03','2023-08-30 19:30:03'),
                (21,1941,2,35208.00,'2023-08-30 19:36:14','2023-08-30 19:36:14'),
                (22,1942,2,54000.00,'2023-08-30 19:39:27','2023-08-30 19:39:27'),
                (23,1943,2,110400.00,'2023-08-30 23:05:15','2023-08-30 23:05:15'),
                (24,1944,2,90000.00,'2023-08-31 00:25:25','2023-08-31 00:25:25'),
                (25,1945,2,19800.00,'2023-08-31 00:27:41','2023-08-31 00:27:41'),
                (26,1946,2,19620.00,'2023-08-31 00:31:49','2023-08-31 00:31:49'),
                (27,1947,2,1035500.00,'2023-08-31 01:08:25','2023-08-31 01:08:25'),
                (28,1948,2,96000.00,'2023-08-31 01:09:57','2023-08-31 01:09:57'),
                (29,1949,2,54500.00,'2023-08-31 01:11:38','2023-08-31 01:11:38'),
                (30,1950,2,63200.00,'2023-08-31 01:15:14','2023-08-31 01:15:14'),
                (31,1951,2,468700.00,'2023-08-31 01:17:05','2023-08-31 01:17:05'),
                (32,1952,2,64000.00,'2023-08-31 01:20:31','2023-08-31 01:20:31'),
                (33,1953,2,63000.00,'2023-08-31 01:21:54','2023-08-31 01:21:54'),
                (34,1954,2,36000.00,'2023-08-31 01:25:06','2023-08-31 01:25:06'),
                (35,1955,2,1566000.00,'2023-08-31 01:26:58','2023-08-31 01:26:58'),
                (36,1956,2,40000.00,'2023-08-31 01:31:10','2023-08-31 01:31:10'),
                (37,1957,2,38700.00,'2023-08-31 01:48:09','2023-08-31 01:48:09'),
                (38,1958,2,48000.00,'2023-08-31 01:53:11','2023-08-31 01:53:11'),
                (39,1959,2,198000.00,'2023-08-31 01:54:12','2023-08-31 01:54:12'),
                (40,1960,2,108000.00,'2023-08-31 01:55:18','2023-08-31 01:55:18'),
                (41,1961,2,33300.00,'2023-08-31 01:56:14','2023-08-31 01:56:14'),
                (42,1962,2,32400.00,'2023-08-31 01:57:25','2023-08-31 01:57:25'),
                (43,1963,2,140400.00,'2023-08-31 01:59:14','2023-08-31 01:59:14'),
                (44,1964,2,490500.00,'2023-08-31 02:00:12','2023-08-31 02:00:12'),
                (45,1965,2,70400.00,'2023-08-31 02:01:19','2023-08-31 02:01:19'),
                (46,1966,2,28000.00,'2023-08-31 02:02:17','2023-08-31 02:02:17'),
                (47,1967,2,18400.00,'2023-08-31 02:03:06','2023-08-31 02:03:06'),
                (48,1968,2,60000.00,'2023-08-31 02:04:08','2023-08-31 02:04:08'),
                (49,1969,2,436000.00,'2023-08-31 02:04:53','2023-08-31 02:04:53'),
                (50,1970,2,40000.00,'2023-08-31 02:06:17','2023-08-31 02:06:17'),
                (51,1971,2,32400.00,'2023-08-31 02:58:08','2023-08-31 02:58:08'),
                (52,1972,2,19200.00,'2023-08-31 03:08:13','2023-08-31 03:08:13'),
                (53,1973,2,36000.00,'2023-08-31 20:25:17','2023-08-31 20:25:17'),
                (54,1974,2,17600.00,'2023-08-31 20:29:27','2023-08-31 20:29:27'),
                (55,1975,2,279400.00,'2023-08-31 20:30:38','2023-08-31 20:30:38'),
                (56,1976,2,52000.00,'2023-08-31 20:31:40','2023-08-31 20:31:40'),
                (57,1977,2,224200.00,'2023-08-31 20:33:41','2023-08-31 20:33:41'),
                (58,1978,2,167400.00,'2023-08-31 20:34:42','2023-08-31 20:34:42'),
                (59,1979,2,212400.00,'2023-08-31 20:35:40','2023-08-31 20:35:40'),
                (60,1980,2,109000.00,'2023-08-31 20:36:38','2023-08-31 20:36:38'),
                (61,1981,2,609600.00,'2023-08-31 20:37:51','2023-08-31 20:37:51'),
                (62,1982,2,44000.00,'2023-08-31 20:38:36','2023-08-31 20:38:36'),
                (63,1983,2,1308000.00,'2023-08-31 22:43:19','2023-08-31 22:43:19'),
                (64,1984,2,12000.00,'2023-08-31 22:56:14','2023-08-31 22:56:14'),
                (65,1985,2,59200.00,'2023-08-31 22:57:43','2023-08-31 22:57:43'),
                (66,1986,2,9600.00,'2023-08-31 22:58:32','2023-08-31 22:58:32'),
                (67,1987,2,104000.00,'2023-08-31 23:01:03','2023-08-31 23:01:03'),
                (68,1988,2,16000.00,'2023-08-31 23:01:56','2023-08-31 23:01:56'),
                (69,1989,2,376200.00,'2023-08-31 23:02:51','2023-08-31 23:02:51'),
                (70,1990,2,132000.00,'2023-08-31 23:04:03','2023-08-31 23:04:03'),
                (71,1991,2,18000.00,'2023-08-31 23:05:19','2023-08-31 23:05:19'),
                (72,1992,2,584000.00,'2023-08-31 23:06:36','2023-08-31 23:06:36'),
                (73,1993,2,88000.00,'2023-08-31 23:07:32','2023-08-31 23:07:32'),
                (74,1994,2,518000.00,'2023-08-31 23:08:19','2023-08-31 23:08:19'),
                (75,1995,2,17604.00,'2023-08-31 23:37:10','2023-08-31 23:37:10'),
                (76,1996,2,507400.00,'2023-09-01 00:01:37','2023-09-01 00:01:37'),
                (77,1997,2,38700.00,'2023-09-01 00:09:28','2023-09-01 00:09:28'),
                (78,1998,2,80000.00,'2023-09-01 00:10:31','2023-09-01 00:10:31'),
                (79,1999,2,217600.00,'2023-09-01 00:11:37','2023-09-01 00:11:37'),
                (80,2000,2,80000.00,'2023-09-01 00:13:10','2023-09-01 00:13:10'),
                (81,2001,2,64000.00,'2023-09-01 00:15:35','2023-09-01 00:15:35'),
                (82,2002,2,48800.00,'2023-09-01 00:16:20','2023-09-01 00:16:20'),
                (83,2003,2,16000.00,'2023-09-01 00:17:24','2023-09-01 00:17:24'),
                (84,2004,2,22500.00,'2023-09-01 00:18:51','2023-09-01 00:18:51'),
                (85,2005,2,56000.00,'2023-09-01 00:20:00','2023-09-01 00:20:00'),
                (86,2006,2,54500.00,'2023-09-01 00:21:49','2023-09-01 00:21:49'),
                (87,2007,2,32000.00,'2023-09-01 00:22:36','2023-09-01 00:22:36'),
                (88,2008,2,48000.00,'2023-09-01 00:23:39','2023-09-01 00:23:39'),
                (89,2009,2,28800.00,'2023-09-01 00:24:24','2023-09-01 00:24:24'),
                (90,2010,2,88000.00,'2023-09-01 00:25:04','2023-09-01 00:25:04'),
                (91,2011,2,45000.00,'2023-09-01 01:02:34','2023-09-01 01:02:34'),
                (92,2012,2,13600.00,'2023-09-01 01:13:04','2023-09-01 01:13:04'),
                (93,2013,2,96000.00,'2023-09-01 01:40:46','2023-09-01 01:40:46'),
                (94,2014,2,48000.00,'2023-09-01 02:03:11','2023-09-01 02:03:11'),
                (95,2015,2,49600.00,'2023-09-01 02:06:17','2023-09-01 02:06:17'),
                (96,2016,2,24000.00,'2023-09-01 02:10:15','2023-09-01 02:10:15'),
                (97,2017,2,46400.00,'2023-09-01 02:19:37','2023-09-01 02:19:37'),
                (98,2018,2,112000.00,'2023-09-01 02:20:46','2023-09-01 02:20:46'),
                (99,2019,2,63200.00,'2023-09-01 02:45:44','2023-09-01 02:45:44'),
                (100,2020,2,250700.00,'2023-09-01 03:33:14','2023-09-01 03:33:14'),
                (101,2021,2,620000.00,'2023-09-01 18:59:14','2023-09-01 18:59:14'),
                (103,2023,2,144000.00,'2023-09-01 20:16:12','2023-09-01 20:16:12'),
                (104,2024,2,29600.00,'2023-09-01 20:48:31','2023-09-01 20:48:31'),
                (105,2025,2,49600.00,'2023-09-01 20:49:41','2023-09-01 20:49:41'),
                (106,2026,2,56000.00,'2023-09-01 20:50:34','2023-09-01 20:50:34'),
                (107,2027,2,36000.00,'2023-09-01 20:51:10','2023-09-01 20:51:10'),
                (108,2028,2,32000.00,'2023-09-01 20:52:25','2023-09-01 20:52:25'),
                (109,2029,2,16800.00,'2023-09-01 20:55:52','2023-09-01 20:55:52'),
                (110,2030,2,12000.00,'2023-09-01 20:56:45','2023-09-01 20:56:45'),
                (111,2031,2,6400.00,'2023-09-01 21:03:07','2023-09-01 21:03:07'),
                (112,2032,2,829600.00,'2023-09-01 21:04:44','2023-09-01 21:04:44'),
                (113,2033,2,1329800.00,'2023-09-01 21:05:07','2023-09-01 21:05:07'),
                (114,2034,2,36000.00,'2023-09-01 21:07:35','2023-09-01 21:07:35'),
                (115,2035,2,27200.00,'2023-09-01 21:11:17','2023-09-01 21:11:17'),
                (116,2036,2,27000.00,'2023-09-01 21:19:48','2023-09-01 21:19:48'),
                (117,2037,2,10400.00,'2023-09-01 21:21:11','2023-09-01 21:21:11'),
                (118,2038,2,3600.00,'2023-09-01 21:21:58','2023-09-01 21:21:58'),
                (119,2039,2,45000.00,'2023-09-01 21:22:45','2023-09-01 21:22:45'),
                (120,2040,2,16000.00,'2023-09-01 21:23:40','2023-09-01 21:23:40'),
                (121,2041,2,13600.00,'2023-09-01 21:24:37','2023-09-01 21:24:37'),
                (122,2042,2,10400.00,'2023-09-01 21:25:29','2023-09-01 21:25:29'),
                (123,2043,2,8000.00,'2023-09-01 21:26:11','2023-09-01 21:26:11'),
                (124,2044,2,354000.00,'2023-09-01 23:15:00','2023-09-01 23:15:00'),
                (125,2045,2,238000.00,'2023-09-01 23:21:25','2023-09-01 23:21:25'),
                (126,2046,2,8100.00,'2023-09-01 23:27:06','2023-09-01 23:27:06'),
                (127,2047,2,18000.00,'2023-09-01 23:28:07','2023-09-01 23:28:07'),
                (128,2048,2,80000.00,'2023-09-01 23:29:21','2023-09-01 23:29:21'),
                (129,2049,2,109000.00,'2023-09-01 23:30:47','2023-09-01 23:30:47'),
                (130,2050,2,635000.00,'2023-09-01 23:33:18','2023-09-01 23:33:18'),
                (131,2051,2,1968500.00,'2023-09-01 23:33:57','2023-09-01 23:33:57'),
                (132,2052,2,119900.00,'2023-09-01 23:41:39','2023-09-01 23:41:39'),
                (133,2053,2,3365500.00,'2023-09-01 23:43:31','2023-09-01 23:43:31'),
                (134,2054,2,14400.00,'2023-09-01 23:44:56','2023-09-01 23:44:56'),
                (135,2055,2,72900.00,'2023-09-01 23:45:42','2023-09-01 23:45:42'),
                (136,2056,2,118000.00,'2023-09-01 23:46:53','2023-09-01 23:46:53'),
                (137,2057,2,327000.00,'2023-09-01 23:55:29','2023-09-01 23:55:29'),
                (138,2058,2,330000.00,'2023-09-02 01:19:09','2023-09-02 01:19:09'),
                (139,2059,2,64000.00,'2023-09-02 01:20:57','2023-09-02 01:20:57'),
                (140,2060,2,354000.00,'2023-09-02 01:21:58','2023-09-02 01:21:58'),
                (141,2061,2,27000.00,'2023-09-02 01:25:18','2023-09-02 01:25:18'),
                (142,2062,2,44100.00,'2023-09-02 01:26:09','2023-09-02 01:26:09'),
                (143,2063,2,321550.00,'2023-09-02 01:27:12','2023-09-02 01:27:12'),
                (144,2064,2,3600.00,'2023-09-02 02:44:03','2023-09-02 02:44:03'),
                (145,2065,2,10400.00,'2023-09-02 02:46:12','2023-09-02 02:46:12'),
                (146,2066,2,13600.00,'2023-09-02 02:47:23','2023-09-02 02:47:23'),
                (147,2067,2,16000.00,'2023-09-02 02:48:15','2023-09-02 02:48:15'),
                (148,2068,2,8000.00,'2023-09-02 02:48:58','2023-09-02 02:48:58'),
                (149,2069,2,10400.00,'2023-09-02 02:50:06','2023-09-02 02:50:06'),
                (150,2070,2,14000.00,'2023-09-02 03:26:29','2023-09-02 03:26:29'),
                (151,2071,2,38700.00,'2023-09-02 18:40:10','2023-09-02 18:40:10'),
                (152,2072,2,17600.00,'2023-09-02 18:42:41','2023-09-02 18:42:41'),
                (153,2073,2,128000.00,'2023-09-02 19:03:12','2023-09-02 19:03:12'),
                (154,2074,2,244800.00,'2023-09-02 19:04:36','2023-09-02 19:04:36'),
                (155,2075,2,28800.00,'2023-09-02 19:10:05','2023-09-02 19:10:05'),
                (156,2076,2,54000.00,'2023-09-02 19:10:47','2023-09-02 19:10:47'),
                (157,2077,2,817500.00,'2023-09-02 19:11:42','2023-09-02 19:11:42'),
                (158,2078,2,2616000.00,'2023-09-02 19:12:49','2023-09-02 19:12:49'),
                (159,2079,2,90000.00,'2023-09-02 19:13:50','2023-09-02 19:13:50'),
                (160,2080,2,635000.00,'2023-09-02 21:25:24','2023-09-02 21:25:24'),
                (161,2081,2,58500.00,'2023-09-02 21:27:05','2023-09-02 21:27:05'),
                (162,2082,2,590000.00,'2023-09-02 21:28:01','2023-09-02 21:28:01'),
                (163,2083,2,14400.00,'2023-09-02 21:29:43','2023-09-02 21:29:43'),
                (164,2084,2,39200.00,'2023-09-02 21:30:28','2023-09-02 21:30:28'),
                (165,2085,2,90000.00,'2023-09-02 22:32:02','2023-09-02 22:32:02'),
                (166,2086,2,39600.00,'2023-09-02 22:33:19','2023-09-02 22:33:19'),
                (167,2087,2,76500.00,'2023-09-02 22:34:05','2023-09-02 22:34:05'),
                (168,2088,2,654000.00,'2023-09-02 22:34:52','2023-09-02 22:34:52'),
                (169,2089,2,319000.00,'2023-09-02 22:36:36','2023-09-02 22:36:36'),
                (170,2090,2,362500.00,'2023-09-02 22:38:43','2023-09-02 22:38:43'),
                (171,2091,2,28000.00,'2023-09-02 22:39:31','2023-09-02 22:39:31'),
                (172,2092,2,381000.00,'2023-09-02 22:40:19','2023-09-02 22:40:19'),
                (173,2093,2,673100.00,'2023-09-02 22:41:14','2023-09-02 22:41:14'),
                (174,2094,2,612000.00,'2023-09-02 22:42:25','2023-09-02 22:42:25'),
                (175,2095,2,952000.00,'2023-09-02 22:43:12','2023-09-02 22:43:12'),
                (176,2096,2,884500.00,'2023-09-02 22:44:01','2023-09-02 22:44:01'),
                (177,2097,2,90000.00,'2023-09-02 22:44:48','2023-09-02 22:44:48'),
                (178,2098,2,588600.00,'2023-09-02 22:47:09','2023-09-02 22:47:09'),
                (179,2099,2,828800.00,'2023-09-02 22:48:01','2023-09-02 22:48:01'),
                (180,2100,2,672600.00,'2023-09-02 22:48:51','2023-09-02 22:48:51'),
                (181,2101,2,435000.00,'2023-09-02 22:50:03','2023-09-02 22:50:03'),
                (182,2102,2,36000.00,'2023-09-02 22:51:01','2023-09-02 22:51:01'),
                (183,2103,2,160000.00,'2023-09-02 22:51:53','2023-09-02 22:51:53'),
                (184,2104,2,26400.00,'2023-09-02 22:52:25','2023-09-02 22:52:25'),
                (185,2105,2,144000.00,'2023-09-02 23:20:59','2023-09-02 23:20:59'),
                (186,2106,2,167560.00,'2023-09-02 23:45:09','2023-09-02 23:45:09'),
                (187,2107,2,96000.00,'2023-09-02 23:46:38','2023-09-02 23:46:38'),
                (188,2108,2,63000.00,'2023-09-02 23:47:52','2023-09-02 23:47:52'),
                (189,2109,2,27000.00,'2023-09-02 23:49:36','2023-09-02 23:49:36'),
                (190,2110,2,270000.00,'2023-09-02 23:50:16','2023-09-02 23:50:16'),
                (191,2111,2,12000.00,'2023-09-02 23:50:55','2023-09-02 23:50:55'),
                (192,2112,2,42000.00,'2023-09-03 00:15:04','2023-09-03 00:15:04'),
                (193,2113,2,27900.00,'2023-09-03 00:57:52','2023-09-03 00:57:52'),
                (194,2114,2,72900.00,'2023-09-03 00:59:43','2023-09-03 00:59:43'),
                (195,2115,2,585000.00,'2023-09-03 01:15:14','2023-09-03 01:15:14'),
                (196,2116,2,1016800.00,'2023-09-03 01:21:15','2023-09-03 01:21:15'),
                (197,2117,2,33600.00,'2023-09-03 01:39:34','2023-09-03 01:39:34'),
                (198,2118,2,80000.00,'2023-09-03 02:13:58','2023-09-03 02:13:58'),
                (199,2119,2,48800.00,'2023-09-03 02:16:11','2023-09-03 02:16:11'),
                (200,2120,2,64000.00,'2023-09-03 02:18:00','2023-09-03 02:18:00'),
                (201,2121,2,155250.00,'2023-09-03 03:16:01','2023-09-03 03:16:01'),
                (202,2122,2,180000.00,'2023-09-03 03:37:12','2023-09-03 03:37:12'),
                (203,2123,2,44000.00,'2023-09-03 22:13:26','2023-09-03 22:13:26'),
                (204,2124,2,114300.00,'2023-09-03 22:15:47','2023-09-03 22:15:47'),
                (205,2125,2,36800.00,'2023-09-03 22:17:36','2023-09-03 22:17:36'),
                (206,2126,2,76500.00,'2023-09-03 22:20:26','2023-09-03 22:20:26'),
                (207,2127,2,57600.00,'2023-09-03 22:21:50','2023-09-03 22:21:50'),
                (208,2128,2,9900.00,'2023-09-03 22:22:40','2023-09-03 22:22:40'),
                (210,2130,2,54000.00,'2023-09-03 23:39:13','2023-09-03 23:39:13'),
                (211,2131,2,54500.00,'2023-09-03 23:39:55','2023-09-03 23:39:55'),
                (212,2132,2,1046400.00,'2023-09-03 23:40:58','2023-09-03 23:40:58'),
                (213,2133,2,435000.00,'2023-09-03 23:42:01','2023-09-03 23:42:01'),
                (214,2134,2,381000.00,'2023-09-03 23:42:38','2023-09-03 23:42:38'),
                (215,2135,2,28000.00,'2023-09-03 23:43:14','2023-09-03 23:43:14'),
                (216,2136,2,66600.00,'2023-09-03 23:44:09','2023-09-03 23:44:09'),
                (217,2137,2,80000.00,'2023-09-03 23:44:43','2023-09-03 23:44:43'),
                (218,2138,2,548700.00,'2023-09-03 23:45:37','2023-09-03 23:45:37'),
                (219,2139,2,354000.00,'2023-09-03 23:46:10','2023-09-03 23:46:10'),
                (220,2140,2,15400.00,'2023-09-03 23:46:46','2023-09-03 23:46:46'),
                (221,2141,2,43200.00,'2023-09-03 23:47:50','2023-09-03 23:47:50'),
                (222,2142,2,436000.00,'2023-09-03 23:48:24','2023-09-03 23:48:24'),
                (223,2143,2,171000.00,'2023-09-03 23:51:05','2023-09-03 23:51:05'),
                (224,2144,2,246500.00,'2023-09-04 00:25:07','2023-09-04 00:25:07'),
                (225,2145,2,266700.00,'2023-09-04 00:25:58','2023-09-04 00:25:58'),
                (226,2146,2,7316000.00,'2023-09-04 00:30:27','2023-09-04 00:30:27'),
                (227,2147,2,19200.00,'2023-09-04 00:31:23','2023-09-04 00:31:23'),
                (228,2148,2,872000.00,'2023-09-04 00:55:52','2023-09-04 00:55:52'),
                (229,2149,2,12000.00,'2023-09-04 00:56:27','2023-09-04 00:56:27'),
                (230,2150,2,272000.00,'2023-09-04 00:57:01','2023-09-04 00:57:01'),
                (231,2151,2,45000.00,'2023-09-04 01:08:48','2023-09-04 01:08:48'),
                (232,2152,2,27450.00,'2023-09-04 01:12:01','2023-09-04 01:12:01'),
                (233,2153,2,348800.00,'2023-09-04 01:13:11','2023-09-04 01:13:11'),
                (234,2154,2,601800.00,'2023-09-04 01:14:31','2023-09-04 01:14:31'),
                (235,2155,2,1090000.00,'2023-09-04 01:15:12','2023-09-04 01:15:12'),
                (236,2156,2,83200.00,'2023-09-04 01:15:59','2023-09-04 01:15:59'),
                (237,2157,2,56800.00,'2023-09-04 01:16:38','2023-09-04 01:16:38'),
                (238,2158,2,40000.00,'2023-09-04 01:17:13','2023-09-04 01:17:13'),
                (239,2159,2,610400.00,'2023-09-04 01:17:54','2023-09-04 01:17:54'),
                (240,2160,2,610400.00,'2023-09-04 01:18:30','2023-09-04 01:18:30'),
                (241,2161,2,190500.00,'2023-09-04 01:18:59','2023-09-04 01:18:59'),
                (242,2162,2,1503000.00,'2023-09-04 01:20:54','2023-09-04 01:20:54'),
                (243,2163,2,1584000.00,'2023-09-04 01:21:53','2023-09-04 01:21:53'),
                (244,2164,2,21600.00,'2023-09-04 01:23:06','2023-09-04 01:23:06'),
                (245,2165,2,45000.00,'2023-09-04 01:23:45','2023-09-04 01:23:45'),
                (246,2166,2,65400.00,'2023-09-04 01:24:20','2023-09-04 01:24:20'),
                (247,2167,2,67500.00,'2023-09-04 01:24:54','2023-09-04 01:24:54'),
                (248,2168,2,24000.00,'2023-09-04 01:25:21','2023-09-04 01:25:21'),
                (249,2169,2,27000.00,'2023-09-04 01:25:51','2023-09-04 01:25:51'),
                (250,2170,2,21600.00,'2023-09-04 01:26:21','2023-09-04 01:26:21'),
                (251,2171,2,368300.00,'2023-09-04 03:28:53','2023-09-04 03:28:53'),
                (252,2172,2,39200.00,'2023-09-04 03:30:59','2023-09-04 03:30:59'),
                (253,2173,2,14400.00,'2023-09-04 03:31:39','2023-09-04 03:31:39'),
                (254,2174,2,362500.00,'2023-09-04 03:32:40','2023-09-04 03:32:40'),
                (255,2175,2,621300.00,'2023-09-04 03:33:34','2023-09-04 03:33:34'),
                (256,2176,2,144000.00,'2023-09-04 03:34:30','2023-09-04 03:34:30'),
                (257,2177,2,27000.00,'2023-09-04 03:36:17','2023-09-04 03:36:17'),
                (258,2178,2,6400.00,'2023-09-04 03:38:16','2023-09-04 03:38:16'),
                (259,2179,2,6400.00,'2023-09-04 03:38:48','2023-09-04 03:38:48'),
                (260,2180,2,367200.00,'2023-09-04 03:39:30','2023-09-04 03:39:30'),
                (261,2181,2,486000.00,'2023-09-04 03:40:05','2023-09-04 03:40:05'),
                (262,2182,2,885000.00,'2023-09-04 03:41:33','2023-09-04 03:41:33'),
                (263,2183,2,28000.00,'2023-09-04 03:42:04','2023-09-04 03:42:04'),
                (264,2184,2,76000.00,'2023-09-04 03:42:42','2023-09-04 03:42:42'),
                (265,2185,2,64000.00,'2023-09-04 03:46:07','2023-09-04 03:46:07'),
                (266,2186,2,24300.00,'2023-09-04 03:47:02','2023-09-04 03:47:02'),
                (267,2187,2,64000.00,'2023-09-04 03:49:23','2023-09-04 03:49:23'),
                (268,2188,2,16000.00,'2023-09-04 04:56:45','2023-09-04 04:56:45'),
                (269,2189,2,6400.00,'2023-09-04 04:57:12','2023-09-04 04:57:12'),
                (270,2190,2,599500.00,'2023-09-04 05:00:07','2023-09-04 05:00:07'),
                (271,2191,2,90000.00,'2023-09-04 05:00:38','2023-09-04 05:00:38'),
                (272,2192,2,2180000.00,'2023-09-04 05:01:14','2023-09-04 05:01:14'),
                (273,2193,2,432000.00,'2023-09-04 05:01:51','2023-09-04 05:01:51'),
                (274,2194,2,6400.00,'2023-09-04 08:25:30','2023-09-04 08:25:30'),
                (275,2195,2,55800.00,'2023-09-04 08:26:11','2023-09-04 08:26:11'),
                (276,2196,2,34400.00,'2023-09-04 08:26:47','2023-09-04 08:26:47'),
                (277,2197,2,56000.00,'2023-09-04 08:27:24','2023-09-04 08:27:24'),
                (278,2198,2,65400.00,'2023-09-04 08:28:22','2023-09-04 08:28:22'),
                (279,2199,2,9600.00,'2023-09-04 08:29:06','2023-09-04 08:29:06'),
                (280,2200,2,1417000.00,'2023-09-04 08:33:27','2023-09-04 08:33:27'),
                (281,2201,2,24300.00,'2023-09-04 08:36:18','2023-09-04 08:36:18'),
                (282,2202,2,32400.00,'2023-09-04 08:38:51','2023-09-04 08:38:51'),
                (283,2203,2,9000.00,'2023-09-04 08:41:37','2023-09-04 08:41:37'),
                (284,2204,2,270000.00,'2023-09-04 08:42:15','2023-09-04 08:42:15'),
                (285,2205,2,90000.00,'2023-09-04 08:42:54','2023-09-04 08:42:54'),
                (286,2206,2,204000.00,'2023-09-04 08:43:27','2023-09-04 08:43:27'),
                (287,2207,2,360000.00,'2023-09-04 08:46:49','2023-09-04 08:46:49'),
                (288,2208,2,1798500.00,'2023-09-04 08:51:16','2023-09-04 08:51:16'),
                (289,2209,2,112000.00,'2023-09-04 08:51:45','2023-09-04 08:51:45'),
                (290,2210,2,18900.00,'2023-09-04 08:54:21','2023-09-04 08:54:21'),
                (291,2211,2,1121000.00,'2023-09-04 08:56:54','2023-09-04 08:56:54'),
                (292,2212,2,72000.00,'2023-09-04 08:57:29','2023-09-04 08:57:29'),
                (293,2213,2,649000.00,'2023-09-04 09:00:26','2023-09-04 09:00:26'),
                (294,2214,2,45000.00,'2023-09-04 09:00:58','2023-09-04 09:00:58'),
                (295,2215,2,64000.00,'2023-09-04 09:01:31','2023-09-04 09:01:31'),
                (296,2216,2,80000.00,'2023-09-04 09:02:24','2023-09-04 09:02:24'),
                (297,2217,2,81000.00,'2023-09-04 09:03:01','2023-09-04 09:03:01'),
                (298,2218,2,7650.00,'2023-09-04 18:41:41','2023-09-04 18:41:41'),
                (299,2219,2,72000.00,'2023-09-04 19:10:02','2023-09-04 19:10:02'),
                (300,2220,2,36000.00,'2023-09-04 19:35:28','2023-09-04 19:35:28'),
                (301,2221,2,36000.00,'2023-09-04 19:46:24','2023-09-04 19:46:24'),
                (302,2222,2,171000.00,'2023-09-04 20:46:19','2023-09-04 20:46:19'),
                (303,2223,2,599500.00,'2023-09-04 20:46:57','2023-09-04 20:46:57'),
                (304,2224,2,126000.00,'2023-09-04 21:07:44','2023-09-04 21:07:44'),
                (305,2225,2,20700.00,'2023-09-04 21:08:15','2023-09-04 21:08:15'),
                (306,2226,2,33600.00,'2023-09-04 21:10:54','2023-09-04 21:10:54'),
                (307,2227,2,33600.00,'2023-09-04 21:11:27','2023-09-04 21:11:27'),
                (308,2228,2,816000.00,'2023-09-04 21:12:22','2023-09-04 21:12:22'),
                (309,2229,2,3068000.00,'2023-09-04 21:13:22','2023-09-04 21:13:22'),
                (310,2230,2,218000.00,'2023-09-04 21:35:53','2023-09-04 21:35:53'),
                (311,2231,2,2108000.00,'2023-09-04 22:10:10','2023-09-04 22:10:10'),
                (312,2232,2,406000.00,'2023-09-04 22:27:40','2023-09-04 22:27:40'),
                (313,2233,2,218000.00,'2023-09-04 22:28:26','2023-09-04 22:28:26'),
                (314,2234,2,348800.00,'2023-09-04 22:29:10','2023-09-04 22:29:10'),
                (315,2235,2,2360000.00,'2023-09-04 22:33:02','2023-09-04 22:33:02'),
                (316,2236,2,9000.00,'2023-09-04 22:33:41','2023-09-04 22:33:41'),
                (317,2237,2,60000.00,'2023-09-04 22:41:56','2023-09-04 22:41:56'),
                (318,2238,2,128000.00,'2023-09-04 22:42:40','2023-09-04 22:42:40'),
                (319,2239,2,32000.00,'2023-09-04 22:46:17','2023-09-04 22:46:17'),
                (320,2240,2,40000.00,'2023-09-04 22:47:27','2023-09-04 22:47:27'),
                (321,2241,2,16000.00,'2023-09-04 22:48:03','2023-09-04 22:48:03'),
                (322,2242,2,16000.00,'2023-09-04 22:48:39','2023-09-04 22:48:39'),
                (323,2243,2,4905000.00,'2023-09-04 22:52:42','2023-09-04 22:52:42'),
                (324,2244,2,340000.00,'2023-09-04 23:18:33','2023-09-04 23:18:33'),
                (325,2245,2,275500.00,'2023-09-04 23:48:55','2023-09-04 23:48:55'),
                (326,2246,2,48000.00,'2023-09-04 23:54:44','2023-09-04 23:54:44'),
                (327,2247,2,40000.00,'2023-09-04 23:58:24','2023-09-04 23:58:24'),
                (328,2248,2,80100.00,'2023-09-05 01:23:26','2023-09-05 01:23:26'),
                (329,2249,2,90000.00,'2023-09-05 01:25:04','2023-09-05 01:25:04'),
                (330,2250,2,16000.00,'2023-09-05 19:42:21','2023-09-05 19:42:21'),
                (331,2251,2,12000.00,'2023-09-05 19:43:34','2023-09-05 19:43:34'),
                (332,2252,2,59200.00,'2023-09-05 19:45:31','2023-09-05 19:45:31'),
                (333,2253,2,708000.00,'2023-09-05 19:59:36','2023-09-05 19:59:36'),
                (334,2254,2,45000.00,'2023-09-05 20:00:26','2023-09-05 20:00:26'),
                (335,2255,2,32400.00,'2023-09-05 20:01:10','2023-09-05 20:01:10'),
                (336,2256,2,140400.00,'2023-09-05 20:01:50','2023-09-05 20:01:50'),
                (337,2257,2,16650.00,'2023-09-05 20:34:12','2023-09-05 20:34:12'),
                (338,2258,2,12600.00,'2023-09-05 20:35:00','2023-09-05 20:35:00'),
                (339,2259,2,545000.00,'2023-09-05 21:47:31','2023-09-05 21:47:31'),
                (340,2260,2,360000.00,'2023-09-05 21:54:29','2023-09-05 21:54:29'),
                (341,2261,2,272000.00,'2023-09-06 00:37:33','2023-09-06 00:37:33'),
                (342,2262,2,924000.00,'2023-09-06 00:44:30','2023-09-06 00:44:30'),
                (343,2263,2,44000.00,'2023-09-06 01:07:07','2023-09-06 01:07:07'),
                (344,2264,2,68800.00,'2023-09-06 01:32:02','2023-09-06 01:32:02'),
                (345,2265,2,80000.00,'2023-09-06 01:33:49','2023-09-06 01:33:49'),
                (346,2266,2,1340700.00,'2023-09-06 01:48:25','2023-09-06 01:48:25'),
                (347,2267,2,490500.00,'2023-09-06 02:18:22','2023-09-06 02:18:22'),
                (348,2268,2,22500.00,'2023-09-06 19:45:13','2023-09-06 19:45:13'),
                (349,2269,2,48000.00,'2023-09-06 20:45:40','2023-09-06 20:45:40'),
                (350,2270,2,108000.00,'2023-09-06 21:41:09','2023-09-06 21:41:09'),
                (351,2271,2,523200.00,'2023-09-06 21:47:43','2023-09-06 21:47:43'),
                (352,2272,2,72000.00,'2023-09-06 22:01:49','2023-09-06 22:01:49'),
                (353,2273,2,508000.00,'2023-09-06 23:33:10','2023-09-06 23:33:10'),
                (354,2274,2,13300.00,'2023-09-06 23:56:25','2023-09-06 23:56:25'),
                (355,2275,2,18000.00,'2023-09-06 23:57:02','2023-09-06 23:57:02'),
                (356,2276,2,185400.00,'2023-09-06 23:59:31','2023-09-06 23:59:31'),
                (357,2277,2,33300.00,'2023-09-07 00:42:40','2023-09-07 00:42:40'),
                (358,2278,2,279000.00,'2023-09-07 01:15:42','2023-09-07 01:15:42'),
                (359,2279,2,1121000.00,'2023-09-07 01:18:46','2023-09-07 01:18:46'),
                (360,2280,2,185300.00,'2023-09-07 03:36:31','2023-09-07 03:36:31'),
                (361,2281,2,76500.00,'2023-09-07 19:14:17','2023-09-07 19:14:17'),
                (362,2282,2,70850.00,'2023-09-07 20:33:53','2023-09-07 20:33:53'),
                (363,2283,2,436000.00,'2023-09-07 22:05:17','2023-09-07 22:05:17'),
                (364,2284,2,528000.00,'2023-09-07 22:41:34','2023-09-07 22:41:34'),
                (365,2285,2,1358900.00,'2023-09-07 23:15:25','2023-09-07 23:15:25'),
                (366,2286,2,70400.00,'2023-09-07 23:59:43','2023-09-07 23:59:43'),
                (367,2287,2,1905000.00,'2023-09-08 01:19:20','2023-09-08 01:19:20'),
                (368,2288,2,108000.00,'2023-09-08 03:45:57','2023-09-08 03:45:57'),
                (369,2289,2,654000.00,'2023-09-08 22:48:37','2023-09-08 22:48:37'),
                (370,2290,2,675000.00,'2023-09-09 00:52:18','2023-09-09 00:52:18'),
                (371,2291,2,82800.00,'2023-09-09 00:57:45','2023-09-09 00:57:45'),
                (372,2292,2,421600.00,'2023-09-09 01:31:50','2023-09-09 01:31:50'),
                (373,2293,2,80000.00,'2023-09-09 01:53:25','2023-09-09 01:53:25'),
                (374,2294,2,45000.00,'2023-09-09 01:54:31','2023-09-09 01:54:31'),
                (375,2295,2,18000.00,'2023-09-09 02:49:18','2023-09-09 02:49:18'),
                (376,2296,2,530400.00,'2023-09-09 03:20:10','2023-09-09 03:20:10'),
                (377,2297,2,69600.00,'2023-09-09 18:39:18','2023-09-09 18:39:18'),
                (378,2298,2,28000.00,'2023-09-09 20:36:28','2023-09-09 20:36:28'),
                (379,2299,2,768500.00,'2023-09-09 20:40:00','2023-09-09 20:40:00'),
                (380,2300,2,290000.00,'2023-09-09 20:41:36','2023-09-09 20:41:36'),
                (381,2301,2,1044000.00,'2023-09-09 20:42:41','2023-09-09 20:42:41'),
                (382,2302,2,656000.00,'2023-09-09 20:44:02','2023-09-09 20:44:02'),
                (383,2303,2,1046400.00,'2023-09-09 21:25:58','2023-09-09 21:25:58'),
                (384,2304,2,147150.00,'2023-09-09 23:39:11','2023-09-09 23:39:11'),
                (385,2305,2,354000.00,'2023-09-10 00:32:59','2023-09-10 00:32:59'),
                (386,2306,2,873200.00,'2023-09-10 00:33:59','2023-09-10 00:33:59'),
                (387,2307,2,27000.00,'2023-09-10 01:13:37','2023-09-10 01:13:37'),
                (388,2308,2,327000.00,'2023-09-10 01:36:13','2023-09-10 01:36:13'),
                (389,2309,2,12000.00,'2023-09-10 02:16:53','2023-09-10 02:16:53'),
                (390,2310,2,16800.00,'2023-09-10 02:18:24','2023-09-10 02:18:24'),
                (391,2311,2,1199000.00,'2023-09-10 02:33:07','2023-09-10 02:33:07'),
                (392,2312,2,54000.00,'2023-09-10 02:36:25','2023-09-10 02:36:25'),
                (393,2313,2,34200.00,'2023-09-11 19:31:14','2023-09-11 19:31:14'),
                (394,2314,2,35200.00,'2023-09-11 22:56:43','2023-09-11 22:56:43'),
                (395,2315,2,272500.00,'2023-09-12 00:55:31','2023-09-12 00:55:31'),
                (396,2316,2,490500.00,'2023-09-12 01:02:28','2023-09-12 01:02:28'),
                (397,2317,2,163500.00,'2023-09-12 01:19:54','2023-09-12 01:19:54'),
                (398,2318,2,152600.00,'2023-09-12 01:22:11','2023-09-12 01:22:11'),
                (399,2319,2,2725000.00,'2023-09-12 01:27:53','2023-09-12 01:27:53'),
                (400,2320,2,944000.00,'2023-09-12 02:36:02','2023-09-12 02:36:02'),
                (401,2321,2,2296000.00,'2023-09-12 21:09:20','2023-09-12 21:09:20'),
                (402,2322,2,508000.00,'2023-09-12 21:23:15','2023-09-12 21:23:15'),
                (403,2323,2,111600.00,'2023-09-13 00:35:33','2023-09-13 00:35:33'),
                (404,2324,2,32400.00,'2023-09-13 00:36:41','2023-09-13 00:36:41'),
                (405,2325,2,81000.00,'2023-09-13 00:37:48','2023-09-13 00:37:48'),
                (406,2326,2,234000.00,'2023-09-13 00:56:02','2023-09-13 00:56:02'),
                (407,2327,2,870000.00,'2023-09-13 02:24:07','2023-09-13 02:24:07'),
                (408,2328,2,1072170.00,'2023-09-14 02:49:53','2023-09-14 02:49:53'),
                (409,2329,2,341145.00,'2023-09-14 22:03:35','2023-09-14 22:03:35'),
                (410,2330,2,142956.00,'2023-09-16 01:24:51','2023-09-16 01:24:51'),
                (411,2331,2,11520.00,'2023-09-20 02:32:31','2023-09-20 02:32:31'),
                (412,2332,2,130800.00,'2023-09-20 02:33:32','2023-09-20 02:33:32'),
                (413,2333,2,27250.00,'2023-09-20 17:53:45','2023-09-20 17:53:45'),
                (414,2334,2,58500.00,'2023-09-20 17:57:14','2023-09-20 17:57:14'),
                (415,2335,2,450000.00,'2023-09-20 19:43:10','2023-09-20 19:43:10'),
                (416,2336,2,204375.00,'2023-09-21 22:38:48','2023-09-21 22:38:48'),
                (417,2337,2,1003966.00,'2023-09-26 22:20:40','2023-09-26 22:20:40'),
                (418,2338,2,45000.00,'2023-09-26 23:00:08','2023-09-26 23:00:08'),
                (419,2339,2,584820.00,'2023-09-27 00:21:35','2023-09-27 00:21:35'),
                (420,2340,2,1527030.00,'2023-09-27 18:35:03','2023-09-27 18:35:03'),
                (421,2341,2,49500.00,'2023-09-27 18:43:13','2023-09-27 18:43:13'),
                (422,2342,2,6166130.00,'2023-09-27 18:47:43','2023-09-27 18:47:43'),
                (423,2343,2,15400.00,'2023-09-27 18:51:36','2023-09-27 18:51:36'),
                (424,2344,2,15400.00,'2023-09-27 18:52:33','2023-09-27 18:52:33'),
                (425,2345,2,30800.00,'2023-09-27 18:52:57','2023-09-27 18:52:57'),
                (426,2346,2,250800.00,'2023-09-27 18:53:17','2023-09-27 18:53:17'),
                (427,2347,2,299750.00,'2023-09-27 22:57:18','2023-09-27 22:57:18'),
                (428,2348,2,24750.00,'2023-09-28 01:11:26','2023-09-28 01:11:26'),
                (429,2349,2,1721970.00,'2023-09-28 01:12:42','2023-09-28 01:12:42'),
                (430,2350,2,722670.00,'2023-09-28 01:28:44','2023-09-28 01:28:44'),
                (431,2351,2,67500.00,'2023-09-29 18:47:07','2023-09-29 18:47:07'),
                (432,2352,2,16000.00,'2023-10-27 18:08:46','2023-10-27 18:08:46'),
                (433,2353,2,1332090.00,'2023-10-27 18:12:08','2023-10-27 18:12:08'),
                (434,2354,2,682290.00,'2023-11-02 18:51:27','2023-11-02 18:51:27'),
                (435,2355,2,48735.00,'2023-11-29 18:44:35','2023-11-29 18:44:35'),
                (436,2356,2,292410.00,'2023-12-12 01:47:50','2023-12-12 01:47:50'),
                (437,2357,2,28710.00,'2023-12-14 00:04:48','2023-12-14 00:04:48'),
                (438,2358,2,319000.00,'2023-12-14 00:09:03','2023-12-14 00:09:03'),
                (439,2359,2,997290.00,'2023-12-14 00:20:27','2023-12-14 00:20:27'),
                (440,2360,6,414000.00,'2023-12-14 20:26:42','2023-12-14 20:26:42'),
                (441,2361,6,2507000.00,'2023-12-14 20:33:29','2023-12-14 20:33:29'),
                (442,2362,6,661500.00,'2023-12-14 22:21:51','2023-12-14 22:21:51'),
                (443,2363,6,97650.00,'2023-12-14 23:26:11','2023-12-14 23:26:11'),
                (444,2364,6,195300.00,'2023-12-14 23:39:19','2023-12-14 23:39:19'),
                (445,2365,2,2696670.00,'2024-01-15 21:20:25','2024-01-15 21:20:25'),
                (446,2366,2,1713600.00,'2024-01-19 22:06:24','2024-01-19 22:06:24'),
                (447,2367,2,1066800.00,'2024-01-20 00:11:14','2024-01-20 00:11:14'),
                (448,2368,2,1020000.00,'2024-01-22 20:17:41','2024-01-22 20:17:41'),
                (449,2369,2,318010.00,'2024-01-22 20:56:23','2024-01-22 20:56:23'),
                (450,2370,2,66000.00,'2024-02-01 02:32:02','2024-02-01 02:32:02');";

    }
}

