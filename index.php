<?php
include('klasor1/header.php');
if( @$_GET['sayfa'] == 'iletisim' )
{
	include('iletisim/iletisim.php');
}
include('klasor1/footer.php');
?>