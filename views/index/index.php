<h1>NIAWとは最新(NEW)の情報(INFO)を自動(AUTO)で見れる(WATCH)サービス</h1>
<h2>使い方</h2>
<ul>
	<li>キーワードを登録だけ</li>
</ul>
<h3>キーワードの登録</h3>
<form action="/index/register" method="post">
	<input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>">
	<input type="text" name="keyword" value="">
	<input type="submit" value="登録">
</form>
<h3>キーワードリスト</h3>
<ul>
	<li><a href="#">キーワード1</a>&nbsp;:&nbsp;20XX年XX月XX日からのデータ</li>
</ul>
<div>目指せAPI化!!</div>
