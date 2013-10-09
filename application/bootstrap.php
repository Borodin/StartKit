<?php
$time_session = 60*60*24*365;
ini_set('session.gc_maxlifetime', $time_session);
ini_set('session.cookie_lifetime', $time_session);


session_start();
try{
	include 'core/dbh.php';
	
	// подключаем файлы ядра
	//require_once 'core/login.php';
	require_once 'core/model.php';
	require_once 'core/view.php';
	require_once 'core/controller.php';
	
	/*
	Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
		> аутентификацию
		> кеширование
		> работу с формами
		> абстракции для доступа к данным
		> ORM
		> Unit тестирование
		> Benchmarking
		> Работу с изображениями
		> Backup
		> и др.
	*/
	require_once 'core/route.php';
	Route::start(); // запускаем маршрутизатор
}
catch(PDOException $e){
	 // echo $e->getMessage();
	 die("Ошибка подключения к базе данных");
}
