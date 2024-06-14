<?php
// データベース接続情報
$host = 'localhost';
$dbname = 'recruit_info';
$user = 'classmate';
$password = 'testpass';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("データベース接続失敗: " . $e->getMessage());
}

// URLに$job,$area,$salaryのパラメータが存在する場合はその値を代入。
// 存在しない場合は空の値を代入。
$job = isset($_GET['job']) ? $_GET['job'] : '';
$skill = isset($_GET['skill']) ? $_GET['skill'] : '';
$salary = isset($_GET['salary']) ? $_GET['salary'] : '';

// クエリを構築
$query = "
    SELECT recruits.*, offices.name AS office_name, offices.web AS office_website, jobs.job AS job_name, 
           work_types.work_type AS work_type_name, salaries.salary AS salary_amount,
           times.time AS working_hours, offs.off AS off_days, skills.skill AS required_skills,
           CONCAT(areas.address_level1, ' ', areas.address_level2) AS address
    FROM recruits
    JOIN offices ON recruits.office_id = offices.id
    JOIN jobs ON recruits.job_id = jobs.id
    JOIN work_types ON recruits.work_type_id = work_types.id
    JOIN salaries ON recruits.salary_id = salaries.id
    JOIN times ON recruits.time_id = times.id
    JOIN offs ON recruits.off_id = offs.id
    JOIN skills ON recruits.skill_id = skills.id
    JOIN areas ON offices.area_id = areas.id
    WHERE 1=1
";

$params = [];
if ($job) {
    $query .= " AND recruits.job_id = :job";
    $params[':job'] = $job;
}
if ($skill) {
    $query .= " AND offices.skill_id = :skill";
    $params[':skill'] = $skill;
}
if ($salary) {
    $query .= " AND recruits.salary_id = :salary";
    $params[':salary'] = $salary;
}

$stmt = $pdo->prepare($query);
$stmt->execute($params);
$recruits = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>求人検索結果</title>
</head>
<body>
        <section id="serch" class="wrapper">
            <h2 class="section-title">RESULT</h1>
            <?php if (empty($recruits)): ?>
                <p>No items.</p>
            <?php else: ?>
                <?php foreach ($recruits as $recruit): ?>
                    <div class="job-list discription">
                        <h3><?= htmlspecialchars($recruit['job_name']) ?> at <?= htmlspecialchars($recruit['office_name']) ?></h2>
                        <p><strong>投稿日:</strong> <?= htmlspecialchars($recruit['create_at']) ?></p>
                        <p><strong>勤務地:</strong> <?= htmlspecialchars($recruit['address']) ?></p>
                        <p><strong>雇用形態:</strong> <?= htmlspecialchars($recruit['work_type_name']) ?></p>
                        <p><strong>給与:</strong> <?= htmlspecialchars($recruit['salary_amount']) ?></p>
                        <p><strong>勤務時間:</strong> <?= htmlspecialchars($recruit['working_hours']) ?></p>
                        <p><strong>休日:</strong> <?= htmlspecialchars($recruit['off_days']) ?></p>
                        <p><strong>スキル:</strong> <?= htmlspecialchars($recruit['required_skills']) ?></p>
                        <p><strong>webサイト:</strong> <?= htmlspecialchars($recruit['office_website']) ?></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
</body>
</html>
