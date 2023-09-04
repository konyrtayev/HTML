<?php
	echo 'Document root: '.$_SERVER['DOCUMENT_ROOT'].'<br>';
	echo 'Полный путь к скрипту и его имя: '.$_SERVER['SCRIPT_FILENAME'].'<br>';
	echo 'Имя скрипта: '.$_SERVER['SCRIPT_NAME'];
	// закинуть файл в директорию сайта и открыть его. Тогда узнаем полный путь, когда узнаем путь и вставляем в htaccess, 
        // этот файл можно удалять
?>