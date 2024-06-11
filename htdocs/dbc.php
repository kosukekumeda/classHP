<?php 

require_once('env.php');

Class Dbc 
{
    protected $table_name;

    //1,データベース接続
    //引数:なし
    //返り値:接続結果を返す
    protected function dbConnect() {
        $host   = DB_HOST;
        $dbname = DB_NAME;
        $user   = DB_USER;
        $pass   = DB_PASS;
        $dsn    = "mysql:host=$host;dbname=$dbname;charset=utf8";        

        try {
        $dbh = new PDO($dsn, $user, $pass,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
        
        } catch(PDOException $e) {
            echo 'error'. $e->getMessage();
            exit();
        };
        return $dbh;
    }
    //2,データを取得する
    //引数:なし
    //返り値:取得したデータ
    public function getALL() {
        $dbh = $this->dbConnect();
        //1,sqlの準備
        $sql = "SELECT * FROM $this->table_name";
        //2,sqlに実行
        $stmt = $dbh->query($sql);
        //3,sqlの結果を受け取る
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $result;
        // var_dump($result);
        $dbh = null;
    } 

    

    // 引数:$id
    // 返り値：$result
    public function getById($id) {
        if(empty($id)) {
            exit('Something wrong, ID was wrong.');
        }
            $dbh = $this->dbConnect();
        
            //sql準備
            $stmt = $dbh->prepare("SELECT * FROM $this->table_name WHERE id = :id");
            $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
            //sql実行
            $stmt->execute();
            //結果を取得
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            // var_dump($result);
        
            if(!$result) {
                exit('Here is not your Data.');
            }
            return $result;
    }
    public function delete($id) {
        if(empty($id)) {
            exit('Something wrong, ID was wrong.');
        }
            $dbh = $this->dbConnect();
        
            //sql準備
            $stmt = $dbh->prepare("DELETE FROM $this->table_name WHERE id = :id");
            $stmt->bindValue(':id', (int)$id, PDO::PARAM_INT);
            //sql実行
            $stmt->execute();
            echo 'Deleted a Link.';
            
    }
}
?>
