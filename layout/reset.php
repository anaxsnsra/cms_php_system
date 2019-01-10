<?php
session_start();

unset($_SESSION['storedCasePrice']);
unset($_SESSION['storedCaseModel']);
unset($_SESSION['storedMoboModel']);
unset($_SESSION['storedMoboPrice']);
unset($_SESSION['storedCpuPrice']);
unset($_SESSION['storedCpuModel']);
unset($_SESSION['storedRamModel']);
unset($_SESSION['storedRamPrice']);
unset($_SESSION['storedHddModel']);
unset($_SESSION['storedHddPrice']);
unset($_SESSION['storedSSDModel']);
unset($_SESSION['storedSSDPrice']);
unset($_SESSION['storedGraphicCardModel']);
unset($_SESSION['storedGraphicCardPrice']);
unset($_SESSION['storedPowerSupplyModel']);
unset($_SESSION['storedPowerSupplyPrice']);
header("Location: ../build.php");
session_write_close();

