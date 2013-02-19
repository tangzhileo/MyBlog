<?php

control();

function control()
{
	displayHeader();
	addMessage();
	displayMessageBoard();
	displayFooter();
	exit();
}
function displayHeader ()
{
	echo '<html><body>';
}

function displayFooter ()
{
	echo '</body></html>';
} 

function displayMessageBoard()
{
	echo '<p>This is a test message!!!</p>';
}

function addMessage()
{
	echo '<form action="home.php" method="post">
			<p>ADD: <input type="text" name="newMessage" id="new_message"/></p>
			<p><input type="submit" name="add_submit" id="add_submit" value="ADD"/></P>
			</form>';
}

function newMessage()
{
	echo '<p>This is a test message!!!</p>';
	echo '<p></p>';
	echo '<p>This is a new message<p>';
}

?>
