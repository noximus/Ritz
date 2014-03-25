<?

header("Content-Type: application/xml; charset=ISO-8859-1"); // application/xml

$missing="";

if(!($_POST['email'])){$missing.="<missing>email</missing>";}
if(!($_POST['fname'])){$missing.="<missing>fname</missing>";}
if(!($_POST['lname'])){$missing.="<missing>lname</missing>";}
if(!($_POST['addy1'])){$missing.="<missing>addy1</missing>";}
if(!($_POST['city'])){$missing.="<missing>city</missing>";}
if(!($_POST['state'])){$missing.="<missing>state</missing>";}
if(!($_POST['zip'])){$missing.="<missing>zip</missing>";}
	
if($missing!=""){
	echo '<registration valid="false">'.$missing.'</registration>';
} else {	
	$msg="New Registration at ".date("M j Y g:i a", time())."\r\n\r\n";
	$subject="New Registration";
	$from = "From: ritz-carlton@ritz-carlton.com";

	foreach($_POST as $i=>$val){
		if(strpos($val, "ubmit")==false){$msg.=$i.": ".$val."\r\n";}
	}

	echo '<registration valid="true"></registration>';

	$mailed=mail('kimberley.carson@rcresidenceswestchester.com, coniffrey@cappelli-inc.com, kragone@cappelli-inc.com', $subject, $msg, $from);
}

?>