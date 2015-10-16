<!DOCTYPE html>
    <html>
        <head><title>Arrays</title></head>
        <body>
            <h1>Arrays!</h1>
            <?php
                $dogs = [ "Spot" => "Shepherd", "Duke" => "Dane"];
            ?>
            <table>
                <tr>
                    <td>Name</td>
                    <td>Breed</td>
                </tr>
                <tr>
                    <td>Spot</td>
                    <td><?php print($dogs["Spot"]);?></td>
                </tr>
                <tr>
                    <td>Duke</td>
                    <td><?php print($dogs["Duke"]);?></td>
                </tr>

            </table>
        <hr/>

            <?php
                $numbers = "37,42,9,18,129,4";
                $splitNumbers = explode(",", $numbers);

                foreach($splitNumbers as $aNumber){
                   print($aNumber."<br />");
                }

            ?>















        </body>

</html>