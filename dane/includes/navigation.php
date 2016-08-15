<ul class="navigation">

<?php
$theuri = $_SERVER['REQUEST_URI'];
if (($theuri =="/index.php") or ($theuri =="/"))
{
echo "<li class='thispage'>Home</li>";
} else {
echo "<li class='navbar'><a class='whitelink' href='/'>Home</a></li>";
}
?>

<?php
//$theuri = $_SERVER['REQUEST_URI'];
//if (($theuri =="http://www.custom-container-homes.com/") or ($theuri =="/about.php"))
//{
//echo "<li class='thispage'>About Us</li>";
//} else {
//echo "<li class='navbar'><a class='whitelink' href='about.php'>About Us</a></li>";
//}
?>

<?php
$theuri = $_SERVER['REQUEST_URI'];
if (($theuri =="http://www.custom-container-homes.com/") or ($theuri =="/contact.php"))
{
echo "<li class='thispage'>Contact Us</li>";
} else {
echo "<li class='navbar'><a class='whitelink' href='contact.php'>Contact Us</a></li>";
}
?>


</ul>

<img src="images/navbar_sep.gif" alt="">


<ul class="navigation">




<?php
//$theuri = $_SERVER['REQUEST_URI'];
//if (($theuri =="http://www.custom-container-homes.com/") or ($theuri =="/container_homes.php"))
//{
//echo "<li class='thispage'>Container Homes</li>";
//} else {
//echo "<li class='navbar'><a class='whitelink' href='container_homes.php'>Container Homes</a></li>";
//}
?>

<?php
$theuri = $_SERVER['REQUEST_URI'];
if (($theuri =="http://www.custom-container-homes.com/") or ($theuri =="/floor_plans.php"))
{
echo "<li class='thispage'>Floor Plans</li>";
} else {
echo "<li class='navbar'><a class='whitelink' href='floor_plans.php'>Floor Plans</a></li>";
}
?>

<?php
$theuri = $_SERVER['REQUEST_URI'];
if (($theuri =="http://www.custom-container-homes.com/") or ($theuri =="/extras.php"))
{
echo "<li class='thispage'>Extras</li>";
} else {
echo "<li class='navbar'><a class='whitelink' href='extras.php'>Extras</a></li>";
}
?>

<?php
$theuri = $_SERVER['REQUEST_URI'];
if (($theuri =="http://www.custom-container-homes.com/") or ($theuri =="/delivery_setup.php"))
{
echo "<li class='thispage'>Delivery/Setup</li>";
} else {
echo "<li class='navbar'><a class='whitelink' href='delivery_setup'>Delivery/Setup</a></li>";
}
?>

</ul>

<img src="images/navbar_sep.gif" alt="">


<ul class="navigation">




<?php
$theuri = $_SERVER['REQUEST_URI'];
if (($theuri =="http://www.custom-container-homes.com/") or ($theuri =="/request_quote.php"))
{
echo "<li class='thispage'>Request a Quote</li>";
} else {
echo "<li class='navbar'><a class='whitelink' href='request_quote.php'>Request a Quote</a></li>";
}
?>

<?php
$theuri = $_SERVER['REQUEST_URI'];
if (($theuri =="http://www.custom-container-homes.com/") or ($theuri =="/financing.php"))
{
echo "<li class='thispage'>Financing</li>";
} else {
echo "<li class='navbar'><a class='whitelink' href='financing.php'>Financing</a></li>";
}
?>

</ul>

<img src="images/navbar_sep.gif" alt="">



<ul class="navigation">


<?php
$theuri = $_SERVER['REQUEST_URI'];
if (($theuri =="http://www.custom-container-homes.com/") or ($theuri =="/resources.php"))
{
echo "<li class='thispage'>Resources</li>";
} else {
echo "<li class='navbar'><a class='whitelink' href='resources.php'>Resources</a></li>";
}
?>

<?php
$theuri = $_SERVER['REQUEST_URI'];
if (($theuri =="http://www.custom-container-homes.com/") or ($theuri =="/copyright.php"))
{
echo "<li class='thispage'>Copyright</li>";
} else {
echo "<li class='navbar'><a class='whitelink' href='copyright.php'>Copyright</a></li>";
}
?>

<?php
$theuri = $_SERVER['REQUEST_URI'];
if (($theuri =="http://www.custom-container-homes.com/") or ($theuri =="/privacy.php"))
{
echo "<li class='thispage'>Privacy</li>";
} else {
echo "<li class='navbar'><a class='whitelink' href='privacy.php'>Privacy</a></li>";
}
?>

</ul>

<img src="images/navbar_sep.gif" alt="">
