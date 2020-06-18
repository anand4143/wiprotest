<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-08-28 16:07:10 --> 404 Page Not Found: Less/index
ERROR - 2019-08-28 16:07:10 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 16:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 16:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2019-08-28 17:07:12 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 17:07:14 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:07:14 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:07:14 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 17:07:14 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 17:07:14 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:21:46 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 17:21:46 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:21:46 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:21:46 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:21:46 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 17:21:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 17:29:02 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 17:29:02 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:29:02 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:29:02 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:29:02 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 17:29:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' t4.levelName  FROM users_contests_levels t1 
			         left JOIN users t2 ON' at line 1 - Invalid query: SELECT t1.userID as userID,t1.contestID,t1.levelID, CONCAT(t2.firstName, ' ', t2.lastName) AS name, t2.email, t3.contestName,, t4.levelName  FROM users_contests_levels t1 
			         left JOIN users t2 ON(t1.userID = t2.id  ) 
			         LEFT JOIN master_contests t3 ON(t1.contestID = t3.id ) 
					 LEFT JOIN contest_levels t4 ON(t1.levelID = t4.id ) 
					 LEFT JOIN user_smule t5 ON(t5.userID = t2.id ) 
					 right JOIN user_contest_report t6 ON(t6.userID = t2.id AND t6.levelsID=t5.levelID  AND t6.contestID=t5.contestID  AND t6.contestID=t1.contestID AND t6.contestID=t3.id AND t6.levelsID=t4.id ) 
					 WHERE t2.isActive = 1 AND t2.isDeleted = 0
					 AND t3.status = 1 AND t3.isDeleted = 0
                     AND t4.status = 1 AND t4.isDeleted = 0
                     AND t6.userID = t2.id 
                     AND t6.levelsID=t5.levelID  
                     AND t6.userSmuleID=t5.id  
                     AND t6.contestID=t5.contestID  
                     AND t6.contestID=t1.contestID 
                     AND t6.contestID=t3.id 
                     AND t6.levelsID=t4.id ORDER BY t2.firstName, t2.lastName ASC  LIMIT 0, 6
ERROR - 2019-08-28 17:29:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 17:29:21 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 17:29:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:29:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:29:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:29:22 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 17:29:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ' t4.levelName  FROM users_contests_levels t1 
			         left JOIN users t2 ON' at line 1 - Invalid query: SELECT t1.userID as userID,t1.contestID,t1.levelID, CONCAT(t2.firstName, ' ', t2.lastName) AS name, t2.email, t3.contestName,, t4.levelName  FROM users_contests_levels t1 
			         left JOIN users t2 ON(t1.userID = t2.id  ) 
			         LEFT JOIN master_contests t3 ON(t1.contestID = t3.id ) 
					 LEFT JOIN contest_levels t4 ON(t1.levelID = t4.id ) 
					 LEFT JOIN user_smule t5 ON(t5.userID = t2.id ) 
					 right JOIN user_contest_report t6 ON(t6.userID = t2.id AND t6.levelsID=t5.levelID  AND t6.contestID=t5.contestID  AND t6.contestID=t1.contestID AND t6.contestID=t3.id AND t6.levelsID=t4.id ) 
					 WHERE t2.isActive = 1 AND t2.isDeleted = 0
					 AND t3.status = 1 AND t3.isDeleted = 0
                     AND t4.status = 1 AND t4.isDeleted = 0
                     AND t6.userID = t2.id 
                     AND t6.levelsID=t5.levelID  
                     AND t6.userSmuleID=t5.id  
                     AND t6.contestID=t5.contestID  
                     AND t6.contestID=t1.contestID 
                     AND t6.contestID=t3.id 
                     AND t6.levelsID=t4.id ORDER BY t2.firstName, t2.lastName ASC  LIMIT 0, 6
ERROR - 2019-08-28 17:29:22 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 17:29:57 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 17:29:57 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:29:57 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:29:57 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 17:29:57 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 17:29:57 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 59
ERROR - 2019-08-28 17:29:57 --> Severity: Notice --> Undefined index: id C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 59
ERROR - 2019-08-28 17:29:57 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 18:32:49 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 18:32:49 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 18:32:49 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 18:32:49 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 18:32:49 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 18:32:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 20:00:02 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 20:00:02 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 20:00:02 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 20:00:02 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 20:00:02 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 20:00:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 20:06:48 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 20:06:48 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 20:06:49 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 20:06:49 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 20:06:49 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 20:06:49 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 20:56:39 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 20:57:00 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 20:57:00 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 20:57:00 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 20:57:00 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 20:57:00 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:00:04 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:00:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:00:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:00:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:00:04 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:00:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:00:27 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:00:27 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:00:27 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:00:27 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:00:27 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:05:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:05:07 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:05:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:05:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:05:07 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:05:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:07:32 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:07:32 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:07:32 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:07:32 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:07:32 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:07:32 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:11:15 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:11:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:11:15 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:11:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:11:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:11:15 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:18:55 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:18:55 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:18:56 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:18:56 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:18:56 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:18:56 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:19:42 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:19:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:19:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:19:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:19:42 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:19:43 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:23:17 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:23:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:23:17 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:23:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:23:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:23:17 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:30:42 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:30:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:30:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:30:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:30:42 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:30:42 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:32:29 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:32:29 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:32:29 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:32:29 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:32:29 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:32:30 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:42:49 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:42:49 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:42:49 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:42:49 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:42:49 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:42:49 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:43:42 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:43:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:43:42 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:43:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:43:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:43:42 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:44:36 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:44:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:44:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:44:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:44:36 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:44:36 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:45:29 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:47:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:48:24 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:48:54 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:50:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:54:14 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:55:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:55:11 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:55:11 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:55:11 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:55:11 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:55:11 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:55:15 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:55:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:55:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:55:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:55:16 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:55:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:55:51 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:55:51 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:55:51 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:55:51 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:55:51 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:55:51 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:56:23 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:56:23 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:56:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:56:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:56:24 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:56:24 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:56:48 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:56:48 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:56:48 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:56:48 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:56:48 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:56:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:58:51 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:58:51 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:58:51 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:58:51 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:58:51 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:58:51 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 21:59:30 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:59:30 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:59:30 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:59:30 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 21:59:30 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 21:59:30 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 22:00:04 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 22:00:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 22:00:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 22:00:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 22:00:04 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 22:00:04 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 22:00:28 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 22:00:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 22:00:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 22:00:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-08-28 22:00:28 --> 404 Page Not Found: Assets/dist
ERROR - 2019-08-28 22:00:28 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 22:02:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 22:07:43 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 22:08:28 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 22:09:49 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 22:11:30 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 22:11:51 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 22:12:58 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-08-28 22:14:52 --> 404 Page Not Found: Faviconico/index
