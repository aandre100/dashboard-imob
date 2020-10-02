<?php
require_once('/home/andre/pass.php');

class Sql {

	const HOSTNAME = "127.0.0.1";
	const USERNAME = "aandre100";
	const PASSWORD = PASS;
	const DBNAME = "bd_imobiliaria";
  const CHARSET = "utf8";

	private $conn;

	public function __construct()
	{

		$this->conn = new \PDO(
			"mysql:dbname=".Sql::DBNAME.";host=".Sql::HOSTNAME.";charset=".Sql::CHARSET,
			Sql::USERNAME,
			Sql::PASSWORD,
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
		);

	}

	private function setParams($statement, $parameters = array())
	{

		foreach ($parameters as $key => $value) {

			$this->bindParam($statement, $key, $value);

		}

	}

	private function bindParam($statement, $key, $value)
	{

		$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array())
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		return $stmt->execute();
		

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		if(!$stmt->execute()) echo $stmt->error;
		// var_dump($stmt->fetchAll(\PDO::FETCH_ASSOC));
		// exit();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

	}
  public function selectReturn($rawQuery, $params = array())
  {

    $stmt = $this->conn->prepare($rawQuery);

    $this->setParams($stmt, $params);

    $stmt->execute();

    $LAST_ID = $this->conn->lastInsertId();
    return $LAST_ID;

  }
	public function selectDebug($rawQuery, $params = array()):array
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		if(!$stmt->execute()) echo $stmt->error;


		return $stmt->errorinfo();

	}


}
?>
