<?php
session_start();
if(!session_register(myusername)){
header("location:index1.html");
}
?>
<html>
<body>
Login Successful
</body>
</html>