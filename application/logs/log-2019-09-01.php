<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-01 11:46:55 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 11:47:16 --> 404 Page Not Found: UserRanking/index
ERROR - 2019-09-01 11:49:24 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 11:49:38 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 11:52:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 11:53:22 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:00:59 --> Severity: Notice --> Undefined variable: contests C:\xampp\htdocs\less\application\views\admin\userranking\levelList.php 23
ERROR - 2019-09-01 12:00:59 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:01:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:01:28 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:04:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:05:15 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:23:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:24:15 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:26:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:27:09 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:27:29 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:29:30 --> Query error: Unknown column 't1.iuserID' in 'field list' - Invalid query: SELECT `t1`.`iuserID`, `t2`.`userName`, `t2`.`email`, CONCAT(t2.firstName, ' ', t2.lastName) AS fullName, `t3`.`id` as `contestId`, `t3`.`contestName`, `t4`.`id` as `levelId`, `t4`.`levelName`
FROM `users_contests_levels` `t1`
JOIN `users` `t2` ON `t1`.`userID` = `t2`.`id`
JOIN `master_contests` `t3` ON `t1`.`contestID` = `t3`.`id`
JOIN `contest_levels` `t4` ON `t1`.`levelID` = `t4`.`id`
WHERE `t3`.`isDeleted` = '0'
AND `t4`.`isDeleted` = '0'
AND `t3`.`id` = '1'
AND `t4`.`id` = '1'
ERROR - 2019-09-01 12:29:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:29:32 --> Query error: Unknown column 't1.iuserID' in 'field list' - Invalid query: SELECT `t1`.`iuserID`, `t2`.`userName`, `t2`.`email`, CONCAT(t2.firstName, ' ', t2.lastName) AS fullName, `t3`.`id` as `contestId`, `t3`.`contestName`, `t4`.`id` as `levelId`, `t4`.`levelName`
FROM `users_contests_levels` `t1`
JOIN `users` `t2` ON `t1`.`userID` = `t2`.`id`
JOIN `master_contests` `t3` ON `t1`.`contestID` = `t3`.`id`
JOIN `contest_levels` `t4` ON `t1`.`levelID` = `t4`.`id`
WHERE `t3`.`isDeleted` = '0'
AND `t4`.`isDeleted` = '0'
AND `t3`.`id` = '1'
AND `t4`.`id` = '1'
ERROR - 2019-09-01 12:29:59 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:51:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 12:55:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 13:06:33 --> Query error: Unknown column 't1.levelID' in 'where clause' - Invalid query: SELECT `t1`.*
FROM `user_contest_report` `t1`
WHERE `t1`.`userID` = '4'
AND `t1`.`contestID` = '1'
AND `t1`.`levelID` = '1'
ERROR - 2019-09-01 13:06:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 13:06:54 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 13:07:24 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 13:07:45 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 13:08:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 13:09:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 13:11:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 13:28:30 --> Severity: error --> Exception: syntax error, unexpected '$counterTotal' (T_VARIABLE), expecting ',' or ';' C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 126
ERROR - 2019-09-01 13:28:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 13:28:41 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 13:40:17 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: sur C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 130
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: Taal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 131
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: Emotion_Feel C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 132
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: Voice_Quality_Nasal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 133
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: Soothing_Level C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 134
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: Copy_Or_Originality C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 135
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: Variation C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 136
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: Diction C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 137
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: Murki_Vibratos C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 138
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: Alaap C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 139
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: Sargam C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 140
ERROR - 2019-09-01 13:59:50 --> Severity: Notice --> Undefined variable: Judge_Score C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 141
ERROR - 2019-09-01 13:59:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: sur C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 130
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: Taal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 131
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: Emotion_Feel C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 132
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: Voice_Quality_Nasal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 133
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: Soothing_Level C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 134
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: Copy_Or_Originality C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 135
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: Variation C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 136
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: Diction C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 137
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: Murki_Vibratos C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 138
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: Alaap C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 139
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: Sargam C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 140
ERROR - 2019-09-01 14:00:58 --> Severity: Notice --> Undefined variable: Judge_Score C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 141
ERROR - 2019-09-01 14:00:59 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: sur C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 131
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: Taal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 132
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: Emotion_Feel C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 133
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: Voice_Quality_Nasal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 134
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: Soothing_Level C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 135
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: Copy_Or_Originality C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 136
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: Variation C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 137
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: Diction C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 138
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: Murki_Vibratos C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 139
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: Alaap C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 140
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: Sargam C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 141
ERROR - 2019-09-01 14:02:25 --> Severity: Notice --> Undefined variable: Judge_Score C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 142
ERROR - 2019-09-01 14:02:25 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: sur C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 131
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: Taal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 132
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: Emotion_Feel C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 133
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: Voice_Quality_Nasal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 134
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: Soothing_Level C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 135
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: Copy_Or_Originality C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 136
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: Variation C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 137
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: Diction C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 138
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: Murki_Vibratos C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 139
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: Alaap C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 140
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: Sargam C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 141
ERROR - 2019-09-01 14:03:32 --> Severity: Notice --> Undefined variable: Judge_Score C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 142
ERROR - 2019-09-01 14:03:32 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: sur C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 132
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: Taal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 133
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: Emotion_Feel C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 134
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: Voice_Quality_Nasal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 135
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: Soothing_Level C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 136
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: Copy_Or_Originality C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 137
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: Variation C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 138
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: Diction C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 139
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: Murki_Vibratos C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 140
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: Alaap C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 141
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: Sargam C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 142
ERROR - 2019-09-01 14:04:03 --> Severity: Notice --> Undefined variable: Judge_Score C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 143
ERROR - 2019-09-01 14:04:03 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: sur C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 132
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: Taal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 133
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: Emotion_Feel C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 134
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: Voice_Quality_Nasal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 135
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: Soothing_Level C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 136
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: Copy_Or_Originality C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 137
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: Variation C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 138
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: Diction C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 139
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: Murki_Vibratos C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 140
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: Alaap C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 141
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: Sargam C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 142
ERROR - 2019-09-01 14:04:47 --> Severity: Notice --> Undefined variable: Judge_Score C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 143
ERROR - 2019-09-01 14:04:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: sur C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 131
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: Taal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 132
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: Emotion_Feel C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 133
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: Voice_Quality_Nasal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 134
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: Soothing_Level C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 135
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: Copy_Or_Originality C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 136
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: Variation C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 137
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: Diction C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 138
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: Murki_Vibratos C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 139
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: Alaap C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 140
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: Sargam C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 141
ERROR - 2019-09-01 14:05:11 --> Severity: Notice --> Undefined variable: Judge_Score C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 142
ERROR - 2019-09-01 14:05:11 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: j C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: sur C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 131
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: Taal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 132
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: Emotion_Feel C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 133
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: Voice_Quality_Nasal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 134
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: Soothing_Level C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 135
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: Copy_Or_Originality C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 136
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: Variation C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 137
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: Diction C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 138
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: Murki_Vibratos C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 139
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: Alaap C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 140
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: Sargam C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 141
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined variable: Judge_Score C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 142
ERROR - 2019-09-01 14:05:50 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: j C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: sur C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 131
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: Taal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 132
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: Emotion_Feel C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 133
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: Voice_Quality_Nasal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 134
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: Soothing_Level C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 135
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: Copy_Or_Originality C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 136
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: Variation C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 137
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: Diction C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 138
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: Murki_Vibratos C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 139
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: Alaap C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 140
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: Sargam C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 141
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined variable: Judge_Score C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 142
ERROR - 2019-09-01 14:05:52 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:05:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: j C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: sur C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 131
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: Taal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 132
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: Emotion_Feel C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 133
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: Voice_Quality_Nasal C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 134
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: Soothing_Level C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 135
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: Copy_Or_Originality C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 136
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: Variation C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 137
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: Diction C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 138
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: Murki_Vibratos C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 139
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: Alaap C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 140
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: Sargam C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 141
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined variable: Judge_Score C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 142
ERROR - 2019-09-01 14:05:55 --> Severity: Notice --> Undefined offset: 2 C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:05:55 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:06:19 --> Severity: Notice --> Undefined variable: j C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:06:19 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:06:19 --> Severity: Notice --> Undefined variable: j C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:06:19 --> Severity: Notice --> Undefined index:  C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 127
ERROR - 2019-09-01 14:06:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:06:38 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:07:19 --> Severity: Notice --> Undefined variable: sur C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 129
ERROR - 2019-09-01 14:07:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:07:46 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:12:35 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:17:34 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:19:23 --> Severity: Notice --> Undefined variable: Voice_Quality_Nasa C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 156
ERROR - 2019-09-01 14:19:23 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:19:55 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:20:38 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:21:30 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:23:15 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:23:59 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:24:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:30:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:37:00 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:38:20 --> Severity: error --> Exception: Call to undefined function int() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 154
ERROR - 2019-09-01 14:38:20 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:38:29 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:39:11 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:40:08 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:41:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:44:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:47:49 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:55:36 --> Severity: error --> Exception: syntax error, unexpected ')' C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 178
ERROR - 2019-09-01 14:55:36 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 14:56:11 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 15:15:29 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 15:18:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 15:37:33 --> Severity: Notice --> Undefined variable: userId C:\xampp\htdocs\less\application\models\Userranking_m.php 117
ERROR - 2019-09-01 15:37:33 --> Severity: Notice --> Undefined variable: contestId C:\xampp\htdocs\less\application\models\Userranking_m.php 118
ERROR - 2019-09-01 15:37:33 --> Severity: Notice --> Undefined variable: levelId C:\xampp\htdocs\less\application\models\Userranking_m.php 119
ERROR - 2019-09-01 15:37:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*)
FROM `trans_votings` `t1`
WHERE `t1`.`participantID` IS NULL
AND `t1`.`contes' at line 1 - Invalid query: SELECT t1.COUNT(*)
FROM `trans_votings` `t1`
WHERE `t1`.`participantID` IS NULL
AND `t1`.`contestID` IS NULL
AND `t1`.`contestLevelID` IS NULL
ERROR - 2019-09-01 15:37:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 15:37:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '*)
FROM `trans_votings` `t1`
WHERE `t1`.`participantID` = '4'
AND `t1`.`contestI' at line 1 - Invalid query: SELECT t1.COUNT(*)
FROM `trans_votings` `t1`
WHERE `t1`.`participantID` = '4'
AND `t1`.`contestID` = '1'
AND `t1`.`contestLevelID` = '1'
ERROR - 2019-09-01 15:39:19 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 128
ERROR - 2019-09-01 15:39:19 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 128
ERROR - 2019-09-01 15:39:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 15:40:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 15:40:52 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 128
ERROR - 2019-09-01 15:40:52 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 128
ERROR - 2019-09-01 15:40:53 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 15:42:36 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 128
ERROR - 2019-09-01 15:42:36 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 128
ERROR - 2019-09-01 15:42:36 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 15:43:37 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 128
ERROR - 2019-09-01 15:43:37 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 128
ERROR - 2019-09-01 15:44:14 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 15:54:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 15:55:21 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 15:55:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 16:01:25 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 16:02:21 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 16:02:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 19:57:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 19:57:52 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 19:57:52 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 19:57:52 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 23
ERROR - 2019-09-01 19:57:52 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 24
ERROR - 2019-09-01 19:58:03 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 20:39:05 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'sortByTotal' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 196
ERROR - 2019-09-01 20:39:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 20:40:53 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'sortByTotal' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 196
ERROR - 2019-09-01 20:40:54 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 20:54:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:00:05 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'sortByTotal' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 196
ERROR - 2019-09-01 21:00:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:09:47 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 202
ERROR - 2019-09-01 21:09:47 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 202
ERROR - 2019-09-01 21:09:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:10:40 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 202
ERROR - 2019-09-01 21:10:40 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 202
ERROR - 2019-09-01 21:10:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:11:05 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 201
ERROR - 2019-09-01 21:11:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\less\application\controllers\admin\Userranking.php:131) C:\xampp\htdocs\less\system\core\Common.php 570
ERROR - 2019-09-01 21:11:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:12:47 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 202
ERROR - 2019-09-01 21:12:47 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 202
ERROR - 2019-09-01 21:12:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:16:31 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 201
ERROR - 2019-09-01 21:16:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\less\application\controllers\admin\Userranking.php:131) C:\xampp\htdocs\less\system\core\Common.php 570
ERROR - 2019-09-01 21:16:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:17:41 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 201
ERROR - 2019-09-01 21:17:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\less\application\controllers\admin\Userranking.php:131) C:\xampp\htdocs\less\system\core\Common.php 570
ERROR - 2019-09-01 21:17:42 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:23:13 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 202
ERROR - 2019-09-01 21:23:13 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 203
ERROR - 2019-09-01 21:23:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\less\application\controllers\admin\Userranking.php:131) C:\xampp\htdocs\less\system\core\Common.php 570
ERROR - 2019-09-01 21:23:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:23:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:24:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:26:14 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 203
ERROR - 2019-09-01 21:26:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\less\application\controllers\admin\Userranking.php:131) C:\xampp\htdocs\less\system\core\Common.php 570
ERROR - 2019-09-01 21:26:14 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:30:13 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 203
ERROR - 2019-09-01 21:30:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\less\application\controllers\admin\Userranking.php:131) C:\xampp\htdocs\less\system\core\Common.php 570
ERROR - 2019-09-01 21:30:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:32:50 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 203
ERROR - 2019-09-01 21:32:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\less\application\controllers\admin\Userranking.php:131) C:\xampp\htdocs\less\system\core\Common.php 570
ERROR - 2019-09-01 21:32:51 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:33:17 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 203
ERROR - 2019-09-01 21:33:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\less\application\controllers\admin\Userranking.php:131) C:\xampp\htdocs\less\system\core\Common.php 570
ERROR - 2019-09-01 21:33:17 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:36:20 --> Severity: error --> Exception: Call to undefined function msort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 199
ERROR - 2019-09-01 21:36:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\less\application\controllers\admin\Userranking.php:131) C:\xampp\htdocs\less\system\core\Common.php 570
ERROR - 2019-09-01 21:36:20 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:40:19 --> Severity: error --> Exception: Call to undefined function msort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 199
ERROR - 2019-09-01 21:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\less\application\controllers\admin\Userranking.php:131) C:\xampp\htdocs\less\system\core\Common.php 570
ERROR - 2019-09-01 21:40:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:43:52 --> Severity: error --> Exception: Call to undefined function msort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:43:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:44:09 --> Severity: error --> Exception: Call to undefined function msort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:44:09 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:44:23 --> Severity: error --> Exception: Call to undefined function msort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:44:23 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:45:06 --> Severity: error --> Exception: Call to undefined function msort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:45:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:45:30 --> Severity: error --> Exception: Call to undefined function anandsort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:45:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:46:15 --> Severity: error --> Exception: Call to undefined function anandsort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:46:15 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:46:16 --> Severity: error --> Exception: Call to undefined function anandsort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:46:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:46:16 --> Severity: error --> Exception: Call to undefined function anandsort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:46:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:46:16 --> Severity: error --> Exception: Call to undefined function anandsort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:46:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:46:16 --> Severity: error --> Exception: Call to undefined function anandsort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:46:17 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:46:17 --> Severity: error --> Exception: Call to undefined function anandsort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:46:17 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:46:27 --> Severity: error --> Exception: Call to undefined function anandsort() C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 184
ERROR - 2019-09-01 21:46:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:51:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:51:21 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:55:22 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:46 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:49 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:49 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:49 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:56:51 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:57:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 21:57:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:01:31 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'cmp' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:01:32 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:01:32 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'cmp' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:01:32 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:02 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:03 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:03 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:03 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:03 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:04 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:04 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:04 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:04 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:04 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:04 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:04 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:04 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:04 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:05 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:05 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:05 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:05 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:06 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:06 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:06 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:06 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:07 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:07 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'anandsort' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:07 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:29 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:29 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:29 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:29 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:30 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:30 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:30 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:30 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:31 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:31 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:31 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:32 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:32 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:32 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:32 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:32 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:32 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:32 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:32 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:33 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:33 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:33 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:33 --> Severity: Warning --> usort() expects parameter 1 to be array, object given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:58 --> Severity: Compile Error --> Only variables can be passed by reference C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:58 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:02:59 --> Severity: Compile Error --> Only variables can be passed by reference C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:02:59 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:03:00 --> Severity: Compile Error --> Only variables can be passed by reference C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:03:00 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:03:00 --> Severity: Compile Error --> Only variables can be passed by reference C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:03:00 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:03:00 --> Severity: Compile Error --> Only variables can be passed by reference C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:03:00 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:03:00 --> Severity: Compile Error --> Only variables can be passed by reference C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:03:00 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:03:01 --> Severity: Compile Error --> Only variables can be passed by reference C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:03:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:03:01 --> Severity: Compile Error --> Only variables can be passed by reference C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:03:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:03:01 --> Severity: Compile Error --> Only variables can be passed by reference C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:03:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:03:24 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:05:55 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:06:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:07:43 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 181
ERROR - 2019-09-01 22:07:43 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 181
ERROR - 2019-09-01 22:07:43 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:08:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:08:18 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:08:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:09:22 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:09:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:09:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:09:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:09:36 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:10:14 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:10:20 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:10:43 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:13:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:19:04 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 179
ERROR - 2019-09-01 22:19:04 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:19:05 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 179
ERROR - 2019-09-01 22:19:05 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:21:18 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 179
ERROR - 2019-09-01 22:21:18 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:21:38 --> Severity: Notice --> Undefined variable: gfg_array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:38 --> Severity: Warning --> array_map(): Argument #2 should be an array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:38 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 217
ERROR - 2019-09-01 22:21:38 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:21:38 --> Severity: Notice --> Undefined variable: gfg_array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:38 --> Severity: Warning --> array_map(): Argument #2 should be an array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:38 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 217
ERROR - 2019-09-01 22:21:38 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:21:39 --> Severity: Notice --> Undefined variable: gfg_array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:39 --> Severity: Warning --> array_map(): Argument #2 should be an array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:39 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 217
ERROR - 2019-09-01 22:21:39 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:21:39 --> Severity: Notice --> Undefined variable: gfg_array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:39 --> Severity: Warning --> array_map(): Argument #2 should be an array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:39 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 217
ERROR - 2019-09-01 22:21:39 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:21:39 --> Severity: Notice --> Undefined variable: gfg_array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:39 --> Severity: Warning --> array_map(): Argument #2 should be an array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:39 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 217
ERROR - 2019-09-01 22:21:39 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:21:39 --> Severity: Notice --> Undefined variable: gfg_array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:39 --> Severity: Warning --> array_map(): Argument #2 should be an array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:39 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 217
ERROR - 2019-09-01 22:21:39 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:21:40 --> Severity: Notice --> Undefined variable: gfg_array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:40 --> Severity: Warning --> array_map(): Argument #2 should be an array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:40 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 217
ERROR - 2019-09-01 22:21:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:21:40 --> Severity: Notice --> Undefined variable: gfg_array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:40 --> Severity: Warning --> array_map(): Argument #2 should be an array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:40 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 217
ERROR - 2019-09-01 22:21:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:21:40 --> Severity: Notice --> Undefined variable: gfg_array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:40 --> Severity: Warning --> array_map(): Argument #2 should be an array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:40 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 217
ERROR - 2019-09-01 22:21:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:21:40 --> Severity: Notice --> Undefined variable: gfg_array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:40 --> Severity: Warning --> array_map(): Argument #2 should be an array C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 208
ERROR - 2019-09-01 22:21:40 --> Severity: Warning --> usort() expects parameter 1 to be array, null given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 217
ERROR - 2019-09-01 22:21:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:22:50 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'comparator' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 179
ERROR - 2019-09-01 22:22:50 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:23:09 --> Severity: Warning --> usort() expects parameter 2 to be a valid callback, function 'comparator' not found or invalid function name C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 179
ERROR - 2019-09-01 22:23:10 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:23:43 --> Severity: Warning --> sort() expects parameter 2 to be integer, string given C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 179
ERROR - 2019-09-01 22:23:43 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:23:58 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:25:42 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:26:18 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:26:18 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:26:18 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 24
ERROR - 2019-09-01 22:26:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:26:33 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:26:33 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:26:33 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 24
ERROR - 2019-09-01 22:26:33 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:26:56 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:26:56 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:26:57 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:29:35 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:29:35 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:29:36 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:29:52 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:29:52 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:29:53 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:34:11 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:34:11 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:34:11 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:34:11 --> Severity: Notice --> Trying to get property 'levelName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:34:12 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:36:51 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:36:51 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:36:51 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:36:51 --> Severity: Notice --> Trying to get property 'levelName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:36:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:36:56 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:36:56 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:36:56 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:36:56 --> Severity: Notice --> Trying to get property 'levelName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:36:57 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:37:24 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:37:24 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:37:24 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:37:24 --> Severity: Notice --> Trying to get property 'levelName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:37:25 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:37:57 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:37:57 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:37:57 --> Severity: Notice --> Undefined variable: levelList C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:37:57 --> Severity: Notice --> Trying to get property 'levelName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:37:57 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:38:03 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:39:22 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:46:22 --> Severity: 8192 --> Methods with the same name as their class will not be constructors in a future version of PHP; geekSchool has a deprecated constructor C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 215
ERROR - 2019-09-01 22:46:23 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:51:31 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:55:14 --> Severity: Notice --> Undefined property: stdClass::$total C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:55:14 --> Severity: Notice --> Undefined property: stdClass::$total C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:55:15 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:55:21 --> Severity: Notice --> Undefined property: stdClass::$total C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:55:21 --> Severity: Notice --> Undefined property: stdClass::$total C:\xampp\htdocs\less\application\controllers\admin\Userranking.php 182
ERROR - 2019-09-01 22:55:45 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:55:55 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:56:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:57:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:57:44 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:58:05 --> Severity: Notice --> Undefined variable: report C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:58:05 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:58:05 --> Severity: Notice --> Undefined variable: report C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:58:05 --> Severity: Notice --> Trying to get property 'levelName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:58:05 --> Severity: Notice --> Undefined variable: report C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 40
ERROR - 2019-09-01 22:58:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:58:47 --> Severity: Notice --> Undefined variable: report C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:58:47 --> Severity: Notice --> Trying to get property 'contestName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:58:47 --> Severity: Notice --> Undefined variable: report C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:58:47 --> Severity: Notice --> Trying to get property 'levelName' of non-object C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 8
ERROR - 2019-09-01 22:58:47 --> Severity: Notice --> Undefined variable: report C:\xampp\htdocs\less\application\views\admin\userranking\userLevelRanking.php 40
ERROR - 2019-09-01 22:58:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:59:34 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 22:59:53 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:01:00 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:24 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:24 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:25 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:25 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:25 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:25 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:28 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:40 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:41 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-09-01 23:02:42 --> 404 Page Not Found: Faviconico/index
