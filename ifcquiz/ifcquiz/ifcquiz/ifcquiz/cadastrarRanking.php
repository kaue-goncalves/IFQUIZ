<?php
require_once "src/RankingDAO.php";
RankingDAO::cadastrar();
header("Location:../ranking.php");
?>
