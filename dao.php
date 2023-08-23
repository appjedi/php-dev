 <?php
class Database
{
    public function getConn($idx=1) {
        if ($idx == 1) {
            $dsn = "mysql:dbname=appjedin_training;host=localhost;port=3306";
            $user = "appjedin_sensei";
            $pwd = "Sensei2022!";
            $db = new PDO($dsn, $user, $pwd);

            return $db;
        } else {
            echo "LOCALHOST DB";
            $dsn = "mysql:dbname=training;host=192.168.64.2;port=3306";
            $user = "training";
            $pwd = "Test1234";
            $db = new PDO($dsn, $user, $pwd);

            return $db;
        }
    }

    public function query($query) {
        $db = $this->getConn(1);
        $stmt = $db->query($query);

        return $stmt;
    }
    public function exec ($sql, $values=null)
    {
         $db = $this->getConn(2);
         $stmt =$db->prepare($sql);
         $stmt->execute($values);
         return $stmt;
    }
    public function call ($sql)
    {
         $db = $this->getConn(1);
         $stmt =$db->prepare($sql);
         $stmt->execute();
         return $stmt;
    }
    public function test() {
        $stmt = $this->query("SELECT * FROM users WHERE username='appjedi' AND password=PASSWORD('Test1234')");

        while ($row = $stmt->fetch()) {
            echo $row['username'] . "<br />\n";
        }
    }
   
}

?>


