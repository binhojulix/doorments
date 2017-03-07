<?php include("logica-usuario.php");

logout();
header("Location: ../pages/login.php?logout=true");
die();
