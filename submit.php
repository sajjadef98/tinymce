<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];

    // Save content to a file (optional)
	//var_dump($content);
    file_put_contents('content.html', $content);

    echo "Content successfully saved!";
}
?>