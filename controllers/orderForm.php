<?php
 $status = false;
 $successName = true;
 $successContacts  = true;
 $successMsg = true;
 $verif = false;
 if (empty($_POST['name'])) $successName = false;
 if (empty($_POST['contactsUser'])) $successContacts = false;
 if (empty($_POST['msg'])) $successMsg = false;
 if ($successName && $successContacts && $successMsg){
	if (empty($_POST['someVerif'])){
		$from_name = "travers";
		$from_mail = "travers@gmail.com";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "From: ".$from_name." <".$from_mail."> \r\n";
		$headers .= "Content-type: text/html; charset=utf-8 \r\n";
		$verif = true;
		$msg = "От : ".$_POST['name']."<br>Контакты: ".$_POST['contactsUser']."<br>Вопросы: ".$_POST['msg'];
		if(mail("scenox1010@gmail.com","Заказ",$msg, $headers)) $status = true;
	}
 }
 
 echo json_encode(array($status, $successName, $successContacts, $successMsg));
 ?>