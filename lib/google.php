<?php
class GoogleSearch{
	//URLを定義
	var $url;
	//オプション配列 key:value
	var $options = array();
	public function __construct($url,$referer_url){
		$this->url = $url;
		$this->referer_url = $referer_url;
	}
	public function setOption($key,$value){
		$this->options[$key] = $value;
	}
	public function getOption(){
		$query = "";
		$prefix = "";
		foreach($this->options as $option => $val){
			//最初のパラメーターは?にする それ以外は&
			$prefix = empty($query) ? "?" : "&";
			$query .= $prefix . $option . "=" . urlencode($val);
		}
		return $query;
	}
	public function setQuery(){
		$this->url = $this->url . $this->getOption();
	}
	public function getQuery(){
		$this->setQuery();
		return $this->url;
	}
	public function action(){
		$url = 	$this->getQuery();
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		/* Enter the URL of your site here */
		curl_setopt($ch, CURLOPT_REFERER, $this->referer_url);
		$body = curl_exec($ch);
		curl_close($ch);
		return $body;
	}
}
define ('URL',"https://ajax.googleapis.com/ajax/services/search/web");
define ('REFERER_URL',"http://192.168.1.160");
$options = array("v"=>"1.0","hl"=>"ja","as_qdr"=>"d");
$api = new GoogleSearch(URL,REFERER_URL);
foreach($options as $key => $val){
	$api->setOption($key,$val);
}
$api->setOption("q","住宅ローン");
var_dump(json_decode($api->action()));

?>
