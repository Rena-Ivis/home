<?php
    require_once("dbconnect.php");
 
    /* ��������� ���� � ���������� ������� $_POST ���������� ������ ������������ �� ����� � ��������� ���������� ������ � ������� ����������. ����� �������, �� ���������������� �� ���������, ������� �� ������������ ���������� ����������. */
 
    if(isset($_POST["r_name"])){ $r_name = $_POST["r_name"]; }
    if(isset($_POST["r_username"])){ $r_username = $_POST["r_username"]; }
    if(isset($_POST["r_password"])){ $r_password = md5($_POST["r_password"]); }
    if(isset($_POST["r_send"])){ $r_send = $_POST["r_send"]; }
 
    /* ��������� ���� ���� ������ ������ ������������������. ���� ��, �� ������ ���������� � ��, �����, ������ ��� ������ �� ���� ������, � ������������ ����� �� �������� ��������. ������� ������� ��� ��������� �� ����. */
    if(isset($r_send)){
        /* ��������� ������ � �� ��� ����� ������ */
        $query = "INSERT INTO users (name, log, pass) VALUES ('$r_name','$r_username','$r_password')";
        $result = mysql_query($query) or die ( "Error : ".mysql_error() );
 
        // ���� ��� ��������� �� ������� ���������.
        if($result){
            echo '����������� ������ �������! <a href="index.php">������� �� ������� ��������.</a> ';
            exit();
        }
    }else{
        echo '�� ����� �� ��� �������� ��������, ������� ��� ������ ��� ���������. �� ������ ������� �� <a href="index.php"> ������� �������� </a>';
    }
?>