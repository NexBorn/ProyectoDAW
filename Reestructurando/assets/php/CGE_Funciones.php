<?php
//Mis funciones
function hora($_hora) { return $_hora * minuto(60); }
function minuto($_minuto) { return $_minuto * 60; }
function dia($_dia) { return $_dia * hora(24); }
function tiempo($_dia, $_hora, $_minuto, $_segundo) { return dia($_dia) + hora($_hora) + minuto($_minuto) + $_segundo; }
function check_POST($value){ Return !empty($_POST[$value]); }
?>