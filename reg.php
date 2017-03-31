<?php
    session_start(); /* �������� ������ */
    require_once("dbconnect.php"); /* ����������� ����� dbconnect.php */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rena_Ivis</title>
	<meta charset="utf-8">
	<meta name="author" content="Rena">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<header>
		<div class="logo">
			<a href="#"><img src="http://x-lines.ru/letters/i/cyrillicgothic/0371/8181e4/28/0/kj1shak9jf5g1ha.png"></a>
		</div><!-- end logo -->

		<div id="menu_icon"></div>
		<nav>
			<ul>
				<li><a href="index.html" class="selected">�������</a></li>
				<li><a href="about.html">��� ���</a></li>
				<li><a href="#">��� �������</a></li>
				<li><a href="gallery.html">�������</a></li>
				<li><a href="resurs.html">������ �������</a></li>
			</ul>
		</nav><!-- end navigation menu -->

		<div class="footer clearfix">
			<ul class="social clearfix">
				<li><a href="#" class="fb"></a></li>
				<li><a href="#" class="twitter"></a></li>
				<li><a href="#" class="vkon"></a></li>
			</ul><!-- end social -->
		</div ><!-- end footer -->
	</header><!-- end header -->





<form action="register.php" method="post" name="r_form" >
    <table>
        <tr>
            <td> ���: </td>
            <td>
                <input type="text" name="r_name" required="required" />
            </td>
        </tr>
 
        <tr>
            <td> �����: </td>
            <td>
                <input type="text" name="r_username" required="required" />
            </td>
        </tr>
 
        <tr>
            <td> ������: </td>
            <td>
                <input type="password" name="r_password" required="required" />
            </td>
        </tr>
 
        <tr>
            <td colspan="2">
                <input type="submit" name="r_send" value="�����������������!" />
            </td>
        </tr>
    </table>
</form>

<form action="login.php" method="post" name="l_form" >
    <table>
        <tr>
            <td> �����: </td>
            <td>
                <input type="text" name="l_username" required="required" />
            </td>
        </tr>
 
        <tr>
            <td> ������: </td>
            <td>
                <input type="password" name="l_password" required="required" />
            </td>
        </tr>
 
        <tr>
            <td colspan="2">
                <input type="submit" name="l_send" value="�����" />
            </td>
        </tr>
    </table>
</form>

</body>
</html>
