<?php
    $server = "localhost"; /* ��� ����� (���������� � ����������), ���� �������� �� �������� ������� �� ��������� localhost */
    $database = "reg"; /* ��� ���� ������, ������� ������� */
    $username = "Rena_Ivis"; /* ��� ������������ �� */
    $password = "Rena_Ivis"; /* ������ ������������, ���� � ������������ ��� ������ ��, ��������� ������ */
 
    // ����������� � ������� MySQL
    $connect = mysql_connect($server,$username,$password) or die ( mysql_error() );
     
    // �������� ���� ������ � ������� ����� �����������
    mysql_select_db($database, $connect);
 
?>
    