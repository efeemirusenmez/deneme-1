<?php
include('klasor1/header.php');
if( @$_GET['sayfa'] == 'iletisim' )
{
	include('iletisim/iletisim.php');
}
else if( @$_GET['sayfa'] == 'iletisim_liste' )
{
	include('iletisim/iletisim_liste.php');
}
else if( @$_GET['sayfa'] == 'products' )
{
	include('products.php');
}
else if( @$_GET['sayfa'] == 'login' )
{
	include('Kayit/login.php');
}
else if( @$_GET['sayfa'] == 'iletisim_post' )
{
	include('iletisim/iletisim_post.php');
}
else if( @$_GET['sayfa'] == 'login_post' )
{
	include('Kayit/login_post.php');
}
else if( @$_GET['sayfa'] == 'login_liste' )
{
	include('Kayit/login_liste.php');
}
else if( @$_GET['sayfa'] == 'reset-password' )
{
	include('Kayit/reset-password.php');
}
else if( @$_GET['sayfa'] == 'products' )
{
	include('products.php');
}
else if( @$_GET['sayfa'] == 'top' )
{
	include('top.php');
}
else{
	include('anasayfa.php');
}
include('klasor1/footer.php');
?>