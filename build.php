<html>
  <head><title>Message</title></head>
  <body>
    <h1> Output: </h1>
    
<?php
    $result = system('cd /var/www/pharma-project-web', $val);
echo '<pre>';

// Outputs all the result of shellcommand "ls", and returns
// the last output line into $last_line. Stores the return value
// of the shell command in $retval.
$last_line = system('git pull origin main', $retval);

// Printing additional info
echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;
?>
  </body>
</html>  
