<?php
class KeywordRepository extends DbRepository
{
	public function insert($keyword)
	{
		$sql = "INSERT INTO keyword(keyword,credate,update,del_flg) VALUES(:keyword,CURRENT_DATE(),0)";
		$stmt = $this->execute($sql,array(
			':keyword' => $keyword));
	}
	public function fetchAll(){
		$sql = "SELECT * FROM keyword ";
		return $this->fetchAll($sql,array());
	}
}
?>
