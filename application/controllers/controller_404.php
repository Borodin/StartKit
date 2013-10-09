<?php

class Controller_404 extends Controller
{
	
	function action_index()
	{
		$data = new data();
		$data -> title = 'Ошибка 404';
		$this->view->generate('404_view.php', 'template_view.php', $data);
	}

}
