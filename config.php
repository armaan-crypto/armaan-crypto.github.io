<?php
$db_url = "sql200.epizy.com";
$db_name = "epiz_33254920_epg"; //database name
$db_username = "epiz_33254920"; //database account username
$db_password="Highland1"; //database account password
$epg_url = "http://clientsportals.com:2095/xmltv.php?username=fqAEYSeq&password=azMUkNnz"; //epg xml url (http://domain.com:80/xmltv.php?username=pippo&password=test)
$epg_valid_hours = "+12 hours"; //if database has epg available for less than 12 hours it will be updated. Alternative values: "+1 day", "+2 days", "+1 week" etc etc

//To avoid wasting server resources, epg update will be triggered when an user login and database has less than 12 hours of programmes.

?>