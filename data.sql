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
    name VARCHAR(100) NOT NUL,
    area_id INT,
    web VARCHAR(200),
    -- foreign keyを設定
    FOREIGN KEY (area_id) REFRENCES areas(id)
);

-- 5. --3.jobsテーブルを追加
CREATE TABLE jobs(
    id INT AUTO_INCREMENT PRIMARY KEY,
    job VARCHAR(100) NOT NULL
);

-- 6. --4.work-typesテーブルを追加
CREATE TABLE workTypes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    workType VARCHAR(100) NOT NULL
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
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    office_id INT,
    job_id INT,
    workType_id INT,
    salary_id INT,
    time_id INT,
    off_id INT,
    skills_id INT,
    web VARCHAR(200),
    FOREIGN KEY (office_id) REFERENCES offices(id),
    FOREIGN KEY (job_id) REFERENCES jobs(id),
    FOREIGN KEY (worktype_id) REFERENCES worktypes(id),
    FOREIGN KEY (salary_id) REFERENCES salaries(id),
    FOREIGN KEY (time_id) REFERENCES times(id),
    FOREIGN KEY(off_id) REFERENCES offs(id),
    FOREIGN KEY (skills_id) REFERENCES skills(id)
);

-- 12. スプレッドシートからMySQLにデータ追加 areaテーブル

-- 13. officeテーブルからはforeach構文


-- 追加のサンプルデータを挿入

-- offices テーブル
INSERT INTO offices VALUES(NULL,'スパークジャパン',1,'http://www.sparkjapan.co.jp/');
INSERT INTO offices VALUES(NULL,'UUUM',1,'https://www.uuum.co.jp/');
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
INSERT INTO workTypes VALUES(NULL,'正社員');
INSERT INTO workTypes VALUES(NULL,'パートタイム');
INSERT INTO workTypes VALUES(NULL,'アルバイト');
INSERT INTO workTypes VALUES(NULL,'契約社員');
INSERT INTO workTypes VALUES(NULL,'派遣社員');

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

-- recruits テーブル
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 11, 11, 2, 8, 3, 1, 1, 'https://www.inter-cross.com/job/show/3288');
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 2, 2, 2, 2, 2, 2, 2,'https://www.inter-cross.com/job/show/2117');
