<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-22 07:43:45 --> Severity: Notice --> Undefined index: userID /home/prkzvldrbrrj/public_html/dev/application/controllers/User.php 51
ERROR - 2019-09-22 07:43:45 --> Severity: Notice --> Undefined index: userID /home/prkzvldrbrrj/public_html/dev/application/controllers/User.php 52
ERROR - 2019-09-22 07:43:45 --> Severity: Notice --> Undefined index: userID /home/prkzvldrbrrj/public_html/dev/application/controllers/User.php 56
ERROR - 2019-09-22 07:43:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `t1`.`isDeleted` = '0'
AND `t2`.`isDeleted` = '0'
AND `t2`.`status` = 1
AN' at line 5 - Invalid query: SELECT `t1`.`id`, `t1`.`contestName`, `t1`.`description`, `t1`.`startDate`, `t1`.`endDate`, `t2`.`id` AS `levelID`, `t2`.`levelName`, `t3`.`userID`, IFNULL(t3.userID, 0) AS isParticipated
FROM `master_contests` `t1`
JOIN `contest_levels` `t2` ON `t1`.`id` = `t2`.`contestID`
LEFT JOIN `users_contests_levels` `t3` ON `t1`.`id` = `t3`.`contestID` AND `t3`.`userID` = 
WHERE `t1`.`isDeleted` = '0'
AND `t2`.`isDeleted` = '0'
AND `t2`.`status` = 1
AND `t2`.`isEnabled` = 1
AND `startDate` <= '2019-09-22'
AND `endDate` >= '2019-09-22'
AND `regStartDate` <= '2019-09-22'
AND `regEndDate` <= '2019-09-22'
ERROR - 2019-09-22 07:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-22 07:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-22 07:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-22 07:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-22 07:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-22 07:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-22 07:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-22 07:45:04 --> 404 Page Not Found: Assets/css
