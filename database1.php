<?php

    $mysql = new mysqli("localhost", "root", "root", "phpschema", 3306);

    if($mysql ->connect_errno){
        echo "Failed to connect to MySQL with error number: ".$mysql ->connect_errno;
        exit;
    }

    $results = $mysql->query("select id, firstname, lastname, email, pswd from users");

    print "<TABLE BORDER='1'>";
    for($i=0; $i < $results->num_rows; $i++){
        $results -> data_seek($i);
        $aRow = $results->fetch_assoc();

        print "<TR>";
        print "<TD>".$aRow['id']."</TD>";
        print "<TD>".$aRow['firstname']."</TD>";
        print "<TD>".$aRow['lastname']."</TD>";
        print "<TD>".$aRow['email']."</TD>";
        print "<TD>".$aRow['pswd']."</TD>";
        print "</TR>";
    }
    print "</TABLE>";


?>