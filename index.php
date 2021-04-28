<?php
// Multiple recipients
$to = 'name@example.com'; // note the comma

// Subject
$subject = 'Email subject';

// Message
$message = '
<html>
<head>
<title>
</title>
</head>
<body>
<p>
Email body.
</p>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: Name <name@example.com>';
$headers[] = 'From: Chosen name <chosen.name@example.com>';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));
?>