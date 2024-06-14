-- 1.recruit_infoという名前のDB作成
drop database if exists recruit_info;
create database recruit_info default character set utf8 collate utf8_general_ci;
-- ユーザー(classmate)追加
drop user if exists 'classmate'@'localhost';
create user 'classmate'@'localhost' identified by 'testpass';
grant all on recruit_info.* to 'classmate'@'localhost';
-- ↑一旦ここまででDB追加。
-- DB修復して再実行。


use recruit_info;

-- 2.--1.areasテーブルを追加
CREATE TABLE areas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    address_level1 VARCHAR(200) NOT NULL,
    address_level2 VARCHAR(200) NOT NULL
);

-- 3. areasテーブルにデータを追加

INSERT INTO areas VALUES(null, '宮崎県', '宮崎市');
INSERT INTO areas VALUES(null, '宮崎県', '都城市');
INSERT INTO areas VALUES(null, '宮崎県', '延岡市');
INSERT INTO areas VALUES(null, '宮崎県', '日南市');
INSERT INTO areas VALUES(null, '宮崎県', '小林市');
INSERT INTO areas VALUES(null, '宮崎県', '日向市');
INSERT INTO areas VALUES(null, '宮崎県', '串間市');
INSERT INTO areas VALUES(null, '宮崎県', '西都市');
INSERT INTO areas VALUES(null, '宮崎県', 'えびの市');
INSERT INTO areas VALUES(null, '宮崎県', '三股町');
INSERT INTO areas VALUES(null, '宮崎県', '高原町');
INSERT INTO areas VALUES(null, '宮崎県', '国富町');
INSERT INTO areas VALUES(null, '宮崎県', '綾町');
INSERT INTO areas VALUES(null, '宮崎県', '高鍋町');
INSERT INTO areas VALUES(null, '宮崎県', '新富町');
INSERT INTO areas VALUES(null, '宮崎県', '西米良村');
INSERT INTO areas VALUES(null, '宮崎県', '木城町');
INSERT INTO areas VALUES(null, '宮崎県', '川南町');
INSERT INTO areas VALUES(null, '宮崎県', '都農町');
INSERT INTO areas VALUES(null, '宮崎県', '門川町');
INSERT INTO areas VALUES(null, '宮崎県', '美郷町');
INSERT INTO areas VALUES(null, '宮崎県', '高千穂町');
INSERT INTO areas VALUES(null, '宮崎県', '日之影町');
INSERT INTO areas VALUES(null, '宮崎県', '五ヶ瀬町');
-- 4. --2.officesテーブルを追
CREATE TABLE offices(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    area_id INT,
    web VARCHAR(200),
    -- foreign keyを設定
    FOREIGN KEY (area_id) REFERENCES areas(id)
);

-- 5. --3.jobsテーブルを追加
CREATE TABLE jobs(
    id INT AUTO_INCREMENT PRIMARY KEY,
    job VARCHAR(100) NOT NULL
);

-- 6. --4.work-typesテーブルを追加
CREATE TABLE work_types(
    id INT AUTO_INCREMENT PRIMARY KEY,
    work_type VARCHAR(100) NOT NULL
);

-- 7. --5.salariesテーブルを追加
CREATE TABLE salaries(
    id INT AUTO_INCREMENT PRIMARY KEY,
    salary VARCHAR(100) NOT NULL
);

-- 8. --6.timesテーブルを追加
CREATE TABLE times(
    id INT AUTO_INCREMENT PRIMARY KEY,
    time VARCHAR(20) NOT NULL
);

-- 9. --7.offsテーブルを追加
CREATE TABLE offs(
    id INT AUTO_INCREMENT PRIMARY KEY,
    off VARCHAR(50) NOT NULL
);

-- 10. --8.skillsテーブルを追加
CREATE TABLE skills(
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill VARCHAR(100) NOT NULL
);

-- 11. --9.recruitテーブルを追加
CREATE TABLE recruits(
    id INT AUTO_INCREMENT PRIMARY KEY,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    office_id INT,
    job_id INT,
    work_type_id INT,
    salary_id INT,
    time_id INT,
    off_id INT,
    skill_id INT,
    web VARCHAR(200),
    FOREIGN KEY (office_id) REFERENCES offices(id),
    FOREIGN KEY (job_id) REFERENCES jobs(id),
    FOREIGN KEY (work_type_id) REFERENCES worktypes(id),
    FOREIGN KEY (salary_id) REFERENCES salaries(id),
    FOREIGN KEY (time_id) REFERENCES times(id),
    FOREIGN KEY(off_id) REFERENCES offs(id),
    FOREIGN KEY (skill_id) REFERENCES skills(id)
);

-- 12. スプレッドシートからMySQLにデータ追加 areaテーブル

-- 13. officeテーブルからはforeach構文


-- 追加のサンプルデータを挿入

-- offices テーブル
INSERT INTO offices VALUES(NULL,'MANGO株式会社',1,'http://www.10005.co.jp/');
INSERT INTO offices VALUES(NULL,'GMOインターネット',1,'https://www.gmo.jp/');
INSERT INTO offices VALUES(NULL,'エイムネクスト',1,'https://www.aimnext.co.jp/');
INSERT INTO offices VALUES(NULL,'オロ宮崎',1,'https://www.oro-miyazaki.com/');
INSERT INTO offices VALUES(NULL,'アンティーシステム',1,'http://www.un-tsystem.com/');
INSERT INTO offices VALUES(NULL,'グローバルテクノロジー',1,'https://gtmi.co.jp/');
INSERT INTO offices VALUES(NULL,'パーソル ワークスデザイン',1,'https://www.persol-wd.co.jp/recruit/miyazaki/');
INSERT INTO offices VALUES(NULL,'スカイコム',1,'https://www.skycom.jp/recruit/application/career/');
INSERT INTO offices VALUES(NULL,'ソフトウェアセンター',1,'https://www.miyazaki-sc.co.jp/recruit/mid-career-recruit-entry/');
INSERT INTO offices VALUES(NULL,'SCSKニアショアシステムズ',1,'https://www.scsk-nearshore.co.jp/about/');
INSERT INTO offices VALUES(NULL,'ネオキャリア',1,'https://www.neocareer-miyazaki.com/');
INSERT INTO offices VALUES(NULL,'スパークジャパン',1,'http://www.sparkjapan.co.jp/');
INSERT INTO offices VALUES(NULL,'UUUM',1,'https://www.uuum.co.jp/');
INSERT INTO offices VALUES(NULL,'ワークポート',1,'https://www.workport.co.jp/');
INSERT INTO offices VALUES(NULL,'サンネット',1,'https://www.csunnet.co.jp/');
INSERT INTO offices VALUES(NULL,'TOEI株式会社',1,'https://www.toei-inc.jp/');
INSERT INTO offices VALUES(NULL,'イデアルディレクションズ',1,'https://idealdirections.co.jp/');
INSERT INTO offices VALUES(NULL,'メソッドプラス',1,'https://methodplus.co.jp/');

-- jobs テーブル
INSERT INTO jobs VALUES(NULL,'開発エンジニア(SE)');
INSERT INTO jobs VALUES(NULL,'アプリケーションエンジニア');
INSERT INTO jobs VALUES(NULL,'プログラマー');
INSERT INTO jobs VALUES(NULL,'組込みエンジニア');
INSERT INTO jobs VALUES(NULL,'開発エンジニア(WEBエンジニア)');
INSERT INTO jobs VALUES(NULL,'フロントエンドエンジニア');
INSERT INTO jobs VALUES(NULL,'バックエンドエンジニア');
INSERT INTO jobs VALUES(NULL,'WEBデザイナー');
INSERT INTO jobs VALUES(NULL,'インフラエンジニア');
INSERT INTO jobs VALUES(NULL,'サーバーエンジニア');
INSERT INTO jobs VALUES(NULL,'ネットワークエンジニア');
INSERT INTO jobs VALUES(NULL,'データベースエンジニア');
INSERT INTO jobs VALUES(NULL,'セキュリティエンジニア');
INSERT INTO jobs VALUES(NULL,'クラウドエンジニア');
INSERT INTO jobs VALUES(NULL,'ITコンサルタント');
INSERT INTO jobs VALUES(NULL,'プロジェクトマネージャー');
INSERT INTO jobs VALUES(NULL,'社内SE');
INSERT INTO jobs VALUES(NULL,'カスタマーサポート');

-- workTypes テーブ
INSERT INTO work_types VALUES(NULL,'正社員');
INSERT INTO work_types VALUES(NULL,'パートタイム');
INSERT INTO work_types VALUES(NULL,'アルバイト');
INSERT INTO work_types VALUES(NULL,'契約社員');
INSERT INTO work_types VALUES(NULL,'派遣社員');

-- salaries テーブル
INSERT INTO salaries VALUES(NULL,'120,000~');
INSERT INTO salaries VALUES(NULL,'130,000~');
INSERT INTO salaries VALUES(NULL,'140,000~');
INSERT INTO salaries VALUES(NULL,'150,000~');
INSERT INTO salaries VALUES(NULL,'160,000~');
INSERT INTO salaries VALUES(NULL,'170,000~');
INSERT INTO salaries VALUES(NULL,'180,000~');
INSERT INTO salaries VALUES(NULL,'190,000~');
INSERT INTO salaries VALUES(NULL,'200,000~');
INSERT INTO salaries VALUES(NULL,'210,000~');
INSERT INTO salaries VALUES(NULL,'220,000~');
INSERT INTO salaries VALUES(NULL,'230,000~');
INSERT INTO salaries VALUES(NULL,'240,000~');
INSERT INTO salaries VALUES(NULL,'250,000~');
INSERT INTO salaries VALUES(NULL,'260,000~');
INSERT INTO salaries VALUES(NULL,'未定');

-- times テーブル
INSERT INTO times VALUES(NULL,'8:00-17:00');
INSERT INTO times VALUES(NULL,'8:30-17:30');
INSERT INTO times VALUES(NULL,'9:00-18:00');
INSERT INTO times VALUES(NULL,'9:30-18:30');
INSERT INTO times VALUES(NULL,'10:00-19:00');
INSERT INTO times VALUES(NULL,'10:30-19:30');
INSERT INTO times VALUES(NULL,'11:00-20:00');
INSERT INTO times VALUES(NULL,'フレックスタイム');

-- offs テーブル
INSERT INTO offs VALUES(NULL,'土日休み');
INSERT INTO offs VALUES(NULL,'週休2日制');
INSERT INTO offs VALUES(NULL,'土日祝休み');
INSERT INTO offs VALUES(NULL,'シフト制');

-- skills テーブル
INSERT INTO skills VALUES(NULL,'Java');
INSERT INTO skills VALUES(NULL,'PHP');
INSERT INTO skills VALUES(NULL,'JavaScript');
INSERT INTO skills VALUES(NULL,'HTML/CSS');
INSERT INTO skills VALUES(NULL,'C#');
INSERT INTO skills VALUES(NULL,'Python');
INSERT INTO skills VALUES(NULL,'不問');
INSERT INTO skills VALUES(NULL,'JS/PHP');

-- recruits テーブル
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 11, 11, 2, 8, 3, 1, 1, 'https://www.inter-cross.com/job/show/3288');
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 2, 2, 2, 2, 2, 2, 2,'https://www.inter-cross.com/job/show/2117');
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 14,13,1,11,3,3,3,'https://xn--pckua2a7gp15o89zb.com/jb/c050528f959a847429f20146466940d9');
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 15,17,1,9,3,1,7,'https://www.inter-cross.com/job/show/3637');
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 2,18,4,7,4,3,7,'https://www.inter-cross.com/job/show/3628');
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 1,16,1,11,8,3,7,'https://www.inter-cross.com/job/show/4059');
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 12,1,1,9,1,3,7,'https://next.rikunabi.com/viewjob/jk484c89abfbf15dc5/?list_disp_no=4&referrer_id=cp_s00700&jrtk=5-nrt1-0-1i08u0n5i2423000-484c89abfbf15dc5--SoCV6_M3_I0NBsylbh0KbzkdCdPP&leadtc=n_ichiran_adnet_ttl&betskey=SoCm6_I3_I0LDQ26Zp0LbzkdCdPP');
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 16,6,1,15,3,3,7,'https://xn--pckua2a7gp15o89zb.com/jb/6abbae5b7f4a25bf9a965e71db29efd3');
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 17,6,1,15,3,3,4,'https://xn--pckua2a7gp15o89zb.com/jb/03bbb551cd9a1ccad243ca5b27161f44');
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 18,5,1,16,8,3,2,'https://xn--pckua2a7gp15o89zb.com/jb/ld3991fb18bd4d5ffdd597c9aa2d0802a');