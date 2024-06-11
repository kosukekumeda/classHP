-- recruit_infoという名前のDB作成
drop database if exists recruit_info;
create database recruit_info default character set utf8 collate utf8_general_ci;
-- ユーザー(classmate)追加
drop user if exists 'minaho'@'localhost';
create user 'classmate'@'localhost' identified by 'password';
grant all on recruit_info.* to 'classmate'@'localhost';
use recruit_info;


-- areaテーブルを追加
CREATE TABLE area(
    id INT AUTO_INCREMENT PRIMARY KEY,
    address_level1 VARCHAR(200) NOT NULL,
    address_level2 VARCHAR(200) NOT NULL
);

-- データを追加 foreach文
INSERT INTO area VALUES(null, '宮崎県', '宮崎市');
INSERT INTO area VALUES(null, '宮崎県', '都城市');
INSERT INTO area VALUES(null, '宮崎県', '延岡市');