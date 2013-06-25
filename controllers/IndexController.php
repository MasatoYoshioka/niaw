<?php
class IndexController extends Controller{
	public function IndexAction()
	{
		return $this->render(array(
			'_token' => $this->generateCsrfToken('index/index'),
		));
	}
	public function registerAction()
	{
		if(!$this->request->isPost()){
			$this->forward404();
		}
		$token - $this->request->getPost('_token');
		if(!$this->checkCsrfToken('index/index',$token)){
			return $this->redirect('/index');
		}
		//keyword エラーチェック 
		$keyword = $this->request->getPost('keyword');
		$error = array();
		
	}
}
?>
