<?php $email = ($_POST["mail"]);
	if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
	echo "2";
	} else {
	echo "1";
	}
?>
