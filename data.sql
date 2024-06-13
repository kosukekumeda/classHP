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

-- 4. --2.officesテーブルを追加
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
    time INT NOT NULL
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
INSERT INTO offices VALUES (NULL, '会社A', 1, 'http://example.com');
INSERT INTO offices VALUES (NULL, '会社B', 2, 'http://example.com');

-- jobs テーブル
INSERT INTO jobs VALUES (NULL, 'エンジニア');
INSERT INTO jobs VALUES (NULL, 'デザイナー');

-- workTypes テーブル
INSERT INTO workTypes VALUES (NULL, '正社員');
INSERT INTO workTypes VALUES (NULL, 'パートタイム');

-- salaries テーブル
INSERT INTO salaries VALUES (NULL, '300万円');
INSERT INTO salaries VALUES (NULL, '400万円');

-- times テーブル
INSERT INTO times VALUES (NULL, 8);
INSERT INTO times VALUES (NULL, 6);

-- offs テーブル
INSERT INTO offs VALUES (NULL, '土日休み');
INSERT INTO offs VALUES (NULL, '週休2日');

-- skills テーブル
INSERT INTO skills VALUES (NULL, 'Java');
INSERT INTO skills VALUES (NULL, 'PHP');

-- recruits テーブル
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO recruits VALUES (NULL, CURRENT_TIMESTAMP, 2, 2, 2, 2, 2, 2, 2);