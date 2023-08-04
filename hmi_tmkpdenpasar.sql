/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.25-MariaDB : Database - hmi_tmkpdenpasar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `failed_jobs` */

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (2,'2014_10_12_100000_create_password_resets_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (3,'2019_08_19_000000_create_failed_jobs_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (4,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Table structure for table `password_resets` */

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `tb_berita` */

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linked_hash` varchar(500) DEFAULT NULL,
  `judul_berita` varchar(100) DEFAULT NULL,
  `tgl_berita` datetime DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `thumb_gambar` varchar(100) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tayang` int(11) DEFAULT NULL,
  `tipe_berita` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_berita` */

insert  into `tb_berita`(`id`,`linked_hash`,`judul_berita`,`tgl_berita`,`penulis`,`tempat`,`thumb_gambar`,`isi`,`tayang`,`tipe_berita`) values (1,'placeholder','placeholder','2022-11-17 10:39:01','placeholder','placeholder','placeholder','placeholder',NULL,NULL);
insert  into `tb_berita`(`id`,`linked_hash`,`judul_berita`,`tgl_berita`,`penulis`,`tempat`,`thumb_gambar`,`isi`,`tayang`,`tipe_berita`) values (4,'$2y$10$PTAeKP5_lfIXRlCMI9sPb.1m.i3h8h6E2zITY_ulmYgHlquANnxq6','Pelantikan Kepengurusan Baru HMI Cabang Denpasar Komisariat TMKP Periode 2022/2023','2022-11-17 10:39:01','Pandu','Denpasar','20221117022615.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus mauris diam, ut ultrices urna tincidunt quis. Nullam semper ipsum enim, ut dapibus sapien faucibus non. Aliquam felis nulla, consectetur mattis sapien id, fermentum accumsan mauris. Fusce nec tempus justo. Integer quis tellus sit amet nunc ultrices vehicula pellentesque at diam. Praesent enim ligula, volutpat vel semper at, euismod pellentesque est. Phasellus interdum neque eu orci ullamcorper convallis.</p>\r\n\r\n<p>Sed eu lectus dui. Nulla imperdiet erat vel dolor egestas finibus. Nullam magna enim, eleifend nec ultrices id, tincidunt et velit. Donec ornare euismod est, et sollicitudin dui rhoncus et. Praesent suscipit sapien nec felis pellentesque, non laoreet libero malesuada. Nunc venenatis quam in augue consequat, efficitur fringilla tellus egestas. Suspendisse ut quam tempus, imperdiet est id, aliquam sem. Nulla aliquam accumsan lacus, rutrum laoreet metus finibus pretium. Cras porttitor, erat a rhoncus placerat, augue mi placerat sem, id feugiat ligula tellus vitae odio. Cras tincidunt enim vel metus interdum posuere. Vestibulum tellus metus, efficitur sit amet enim sed, scelerisque luctus quam. Aliquam congue id urna eget semper. In ut erat nunc. Donec viverra fermentum faucibus. Cras volutpat ipsum auctor odio cursus, vel volutpat neque aliquam. Aenean sed arcu vel libero pharetra malesuada.</p>\r\n\r\n<p>Maecenas vel orci porttitor, porttitor risus scelerisque, lobortis erat. In eget dolor ornare, venenatis nisl eu, tempor velit. In pretium arcu diam, in varius augue vulputate a. Integer ac consectetur quam. Aenean a fringilla sapien, sed molestie velit. Aliquam vitae urna vel orci tristique accumsan vulputate sit amet tellus. Morbi vel augue eget ante aliquam finibus. Ut blandit metus nisl, sit amet pharetra libero tincidunt a.</p>\r\n\r\n<p>Nullam dictum tincidunt tempor. Proin placerat odio eget semper vehicula. Vestibulum sit amet tincidunt orci, id ornare justo. Donec commodo, enim eget vulputate facilisis, tellus nulla lacinia tortor, id viverra elit tortor eu dolor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent elementum ipsum sapien, id pellentesque est aliquet ac. Suspendisse potenti. Nam molestie euismod turpis id rutrum. Quisque ex magna, condimentum sit amet velit sed, cursus fermentum turpis.</p>\r\n\r\n<p>Morbi et dui non arcu lobortis sodales at id mi. Nunc eget iaculis risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In sed sem vel lorem ultrices efficitur sit amet ut purus. Donec sed lacus est. Suspendisse venenatis suscipit justo bibendum placerat. Nulla rutrum consectetur lectus, varius pharetra lorem semper in. Aenean venenatis justo nisl, vitae porta nisl elementum at. Etiam pellentesque eros sit amet sapien consequat, at pulvinar ipsum tempus. Pellentesque volutpat lorem purus, vel congue mauris tincidunt eget. Nulla pharetra est id massa tincidunt, quis aliquam velit ultrices. Cras eget ligula ac mi gravida condimentum. Proin ut libero vitae urna ullamcorper pretium ut id ex. Suspendisse ullamcorper lacinia ligula nec vulputate. Nunc vulputate quam est, nec fermentum lacus mattis tempor. In vitae auctor est, non laoreet libero.</p>',1,1);

/*Table structure for table `tb_event` */

CREATE TABLE `tb_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_event` varchar(100) DEFAULT NULL,
  `tgl_mulai` datetime DEFAULT NULL,
  `tgl_selesai` datetime DEFAULT NULL,
  `mulai_pendaftaran` datetime DEFAULT NULL,
  `selesai_pendaftaran` datetime DEFAULT NULL,
  `ket` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_event` */

/*Table structure for table `tb_lk1` */

CREATE TABLE `tb_lk1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periodik_lk` int(11) DEFAULT NULL,
  `nama_peserta` varchar(500) DEFAULT NULL,
  `alamat_peserta` varchar(500) DEFAULT NULL,
  `telp_peserta` varchar(50) DEFAULT NULL,
  `asal_univ` varchar(500) DEFAULT NULL,
  `asal_fakultas` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_lk1` */

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'example@example.com',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_tinggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '...',
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '...',
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '...',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'Calon Kader',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`username`,`email_verified_at`,`type`,`password`,`alamat_tinggal`,`no_telp`,`whatsapp`,`remember_token`,`created_at`,`updated_at`,`role`) values (5,'Calon Kader','example@example.com','caKader',NULL,0,'$2y$10$SHSEEUqshVLsGfGyPKjPaeziVBEqgSy3xjrZyuwGffX5ipECiqEqi','...','...','...',NULL,'2022-10-15 07:29:06','2022-10-15 07:29:06','Calon Kader');
insert  into `users`(`id`,`name`,`email`,`username`,`email_verified_at`,`type`,`password`,`alamat_tinggal`,`no_telp`,`whatsapp`,`remember_token`,`created_at`,`updated_at`,`role`) values (6,'Kader','example@example.com','kaderbaru',NULL,1,'$2y$10$63nr.FdCQSU1Bn6XIwek9OwHgODlCFExtFV7OYrJia2IB2SWQis96','...','...','...',NULL,'2022-10-15 07:29:06','2022-10-15 07:29:06','Calon Kader');
insert  into `users`(`id`,`name`,`email`,`username`,`email_verified_at`,`type`,`password`,`alamat_tinggal`,`no_telp`,`whatsapp`,`remember_token`,`created_at`,`updated_at`,`role`) values (7,'Kader','example@example.com','ketum',NULL,2,'$2y$10$tjepKWKUR8NnRcosjB7k0uWNsKViJ/RJ0zKWMvGud8on6LvRfwjA.','...','...','...',NULL,'2022-10-15 07:29:06','2022-10-15 07:29:06','Calon Kader');
insert  into `users`(`id`,`name`,`email`,`username`,`email_verified_at`,`type`,`password`,`alamat_tinggal`,`no_telp`,`whatsapp`,`remember_token`,`created_at`,`updated_at`,`role`) values (8,'Kader','example@example.com','sekum',NULL,3,'$2y$10$Xzz6kOmLZ1BR3LOGD4GahO0uOKBUt9NTQJYFzHOoWfliY1n94dj5.','...','...','...',NULL,'2022-10-15 07:29:06','2022-10-15 07:29:06','Calon Kader');
insert  into `users`(`id`,`name`,`email`,`username`,`email_verified_at`,`type`,`password`,`alamat_tinggal`,`no_telp`,`whatsapp`,`remember_token`,`created_at`,`updated_at`,`role`) values (9,'Kader','example@example.com','bendum',NULL,4,'$2y$10$KOj0NYm6.ES7nQ4unYsIdeh84Kcw6QwDPZUFZiyf/a2XYWO4QqSkC','...','...','...',NULL,'2022-10-15 07:29:06','2022-10-15 07:29:06','Calon Kader');
insert  into `users`(`id`,`name`,`email`,`username`,`email_verified_at`,`type`,`password`,`alamat_tinggal`,`no_telp`,`whatsapp`,`remember_token`,`created_at`,`updated_at`,`role`) values (10,'Kader','example@example.com','kabid',NULL,5,'$2y$10$4tXVYn4HrPznH4TjYQ6ObOqwVJAIIBzGqE0b.BfywkOGyErtzngGO','...','...','...',NULL,'2022-10-15 07:29:06','2022-10-15 07:29:06','Calon Kader');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
