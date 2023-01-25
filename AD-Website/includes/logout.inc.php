<?php

// ends the session and unsets the userUid to show the alternative nav bar
session_start();
session_unset();
session_destroy();
header("location: ../index.php");