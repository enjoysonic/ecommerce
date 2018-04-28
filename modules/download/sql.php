<?php die('File not found !')?>
define("DB_DOWNLOAD", PREFIX."_download");
DROP TABLE IF EXISTS `{prefix}_download`;
CREATE TABLE IF NOT EXISTS `{prefix}_download` (`id` int(11) unsigned NOT NULL auto_increment,`module_id` int(11) NOT NULL,`category_id` int(11) unsigned NOT NULL,`member_id` int(11) unsigned NOT NULL,`detail` varchar(200) collate utf8_general_ci NOT NULL,`create_date` int(11) unsigned NOT NULL,`last_update` int(11) unsigned NOT NULL,`name` varchar(50) collate utf8_general_ci NOT NULL,`ext` varchar(5) collate utf8_general_ci NOT NULL,`size` int(50) unsigned NOT NULL,`file` varchar(255) collate utf8_general_ci NOT NULL,`downloads` int(11) unsigned NOT NULL,PRIMARY KEY (`id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
DELETE FROM `{prefix}_language` WHERE `owner`='download';
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('DO_NOT_DOWNLOAD','text','download','1','ไม่สามารถดาวน์โหลดไฟล์นี้ได้ อาจเป็นเพราะคุณไม่มีสิทธิ์');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('DOWNLOAD_DESCRIPTION','text','download','0','โมดูลสำหรับจัดการ การดาวน์โหลดไฟล์');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('DOWNLOAD_DESCRIPTION_EMPTY','text','download','1','กรุณากรอกคำอธิบายเกี่ยวกับไฟล์ สั้นๆ');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('DOWNLOAD_FILE_EMPTY','text','download','1','กรุณาเลือกไฟล์อัปโหลด');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('DOWNLOAD_FILE_NOT_FOUND','text','download','1','ขออภัย : ไม่พบไฟล์ที่ต้องการ!');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('DOWNLOAD_FILE_TYPIES_EMPTY','text','download','1','กรุณากรอกชนิดของไฟล์ที่สามารถอัปโหลดได้');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('DOWNLOAD_FILE_TYPIES_INVALID','text','download','1','ชนิดของไฟล์อัปโหลด เป็นภาษาอังกฤษตัวพิมพ์เล็กและตัวเลขเท่านั้น (2 - 6 ตัวอักษรต่อ 1 ชนิด)');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_CAN_DOWNLOAD_COMMENT','text','download','0','ขีดถูกเพื่อให้สมาชิกระดับนี้สามารถดาวน์โหลดไฟล์ได้');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD','text','download','0','ดาวน์โหลด');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_CATEGORY_DETAIL','text','download','0','หมวดหมู่ต่างๆของไฟล์ดาวน์โหลด, คลิกที่ชื่อหมวดหมู่เพื่อแก้ไข');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_CLICK','text','download','0','ที่นี่');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_DESCRIPTION_COMMENT','text','download','0','รายละเอียดสั้นๆเกี่ยวกับไฟล์ (อาจใช้แสดงในหน้าดาวน์โหลดได้)');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_EMPTY','text','download','0','<strong>ขออภัย : </strong>ยังไม่มีไฟล์ใดๆให้ดาวน์โหลดได้ในตอนนี้');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_FILE','text','download','0','ชื่อและที่อยู่ไฟล์');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_FILE_BROWSER_COMMENT','text','download','0','เลือกไฟล์อัปโหลดชนิด {TYPE} ขนาดไฟล์ไม่เกิน {SIZE}');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_FILE_COMMENT','text','download','0','ระบุชื่อและที่อยู่ที่เก็บไฟล์ เช่น upload/file.ext หากมีไฟล์อยู่บน Server อยู่แล้ว หรืออัปโหลดไฟล์ด้านล่าง');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_FILE_TIME','text','download','0','อัปโหลดล่าสุด');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_FILE_TYPIES_COMMENT','text','download','0','ระบุนามสกุลของไฟล์ที่ยอมให้อัปโหลด ภาษาอังกฤษตัวพิมพ์เล็กและตัวเลข 2 - 6 ตัวอักษรต่อ 1 ชนิด คั่นแต่ละชนิดด้วย ลูกน้ำ (,) และไม่ต้องมีช่องว่าง เช่น zip,rar,doc,docx');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_FILES','text','download','0','ไฟล์ดาวน์โหลด');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_NAME','text','download','0','ชื่อไฟล์');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_NAME_COMMENT','text','download','0','ชื่อของไฟล์ที่ต้องการเมื่อดาวน์โหลด ไม่ต้องระบุนามสกุลของไฟล์ อัปโหลดครั้งแรกถ้าไม่ระบุชื่อ โปรแกรมจะใช้ชื่อของไฟล์ที่อัปโหลดให้ (สามารถใช้ภาษาไทยได้)');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_SAVE','text','download','0','อัปโหลด / บันทึก');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_UPLOAD_SIZE_COMMENT','text','download','0','ขนาดของไฟล์ที่สามารถอัปโหลดได้ (ไม่ควรเกินค่ากำหนดของ Server {SIZE})');
INSERT INTO `{prefix}_language` (`key`, `type`, `owner`, `js`, `th`) VALUES ('LNG_DOWNLOAD_WRITE_TITLE','text','download','0','จัดการไฟล์ดาวน์โหลด');