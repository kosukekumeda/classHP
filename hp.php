<link rel="stylesheet" href="css/style.css">
<?php
require_once('dbc.php');

Class Hp extends dbc
{
    protected $table_name = 'hp';
    //3,CATEGORY名を表示
    //引数:数字
    //返り値:CATEGORYの文字列
    public function setCategoryName($category) {
        if ($category == 1) {
            return 'PHP';
        } elseif ($category == 2) {
            return 'Java Script';
        } elseif ($category == 3) {
            return 'CSS';
        }else {
            return 'HTML';
        }
    }

    public function hpCreate($hp) {
        $sql = "INSERT INTO
            $this->table_name(title, content, category, publish_status)
        VALUES
            (:title, :content, :category, :publish_status)";
        $dbh = $this->dbConnect();
        $dbh->beginTransaction();
        try {
            $stmt = $dbh->prepare($sql);
            $stmt->bindvalue(':title',$hp['title'], PDO::PARAM_STR);
            $stmt->bindvalue(':content',$hp['content'], PDO::PARAM_STR);
            $stmt->bindvalue(':category',$hp['category'], PDO::PARAM_INT);
            $stmt->bindvalue(':publish_status',$hp['publish_status'], PDO::PARAM_INT);
            $stmt->execute();
            $dbh->commit();
            
            echo '<p class=new>New post is up now!</p>';
        } catch(PDOException $e){
            $dbh->rollBack();
            exit($e);
        }
    }

    public function hpUpdate($hp) {
            $sql = "UPDATE $this->table_name SET
                        title = :title, content = :content, category= :category, publish_status= :publish_status
                    WHERE       
                        id = :id";

            $dbh = $this->dbConnect();
            $dbh->beginTransaction();
            try {
                $stmt = $dbh->prepare($sql);
                $stmt->bindvalue(':title',$hp['title'], PDO::PARAM_STR);
                $stmt->bindvalue(':content',$hp['content'], PDO::PARAM_STR);
                $stmt->bindvalue(':category',$hp['category'], PDO::PARAM_INT);
                $stmt->bindvalue(':publish_status',$hp['publish_status'], PDO::PARAM_INT);
                $stmt->bindvalue(':id',$hp['id'], PDO::PARAM_INT);
                $stmt->execute();
                $dbh->commit();
                echo '<p class="renew">New post is renew!</p>';
                // echo "<div class=renew>";
                // echo "New post is renew!";
                // echo "</div>";
            } catch(PDOException $e){
                $dbh->rollBack();
                exit($e);
            }

    }

    //hpバリデーション
    function hpValidate($hp) {
        if (empty($hp['title'])) {
            exit('Could you write something "title".');
        }
        
        if (mb_strlen($hp['title']) >191) {
            exit('Please write no more than "191 words".');
        }

        if (empty($hp['content'])) {
            exit('Could you write something "content".');
        }
        
        if (empty($hp['category'])) {
            exit('Could you write something "category".');
        }
        
        if (empty($hp['publish_status'])) {
            exit('You have to choose "pubic" or "Private".');
        }
    }
}
?>