<?php
$ldap = ldap_connect("ldap.ad.here.com");
$user = "jinde";
$password = "Pareek@2474";
if ($bind = ldap_bind($ldap, $user, $password)) {
  // log them in!
} else {
  // error message
}
?>