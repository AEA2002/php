<!DOCTYPE html>
    <html>
        <head>
            <title>Strings</title>
        </head>
        <body>
        <?php

        $x = 7;
        print 'My number is $x <br />';
        print "My number is $x";

        echo '<div>Hello "with quotes" </div>';
        echo "<div>Hello \"with quotes\" </div>";
        print "<div>Hello with a backslash \\</div>";
        print "<div>This is 3 newlines \n\n\n</div>";

        print "<table border='1'><tr><td>" . $x . "</td></tr></table>";

/* using a heredoc */
print <<< UPTOHERE
<table border="1">
    <tr>
        <td>column1</td>
        <td>column2</td>
    </tr>
    <tr>
        <td>$x</td>
        <td>seven</td>
    </tr>
</table>
UPTOHERE;


        $sentence = "The quick brown fox jumps over the lazy dog";
        print "<div>$sentence</div>";
        print "<div>".substr($sentence, 16, 3)."</div>";
        print "<div>".substr($sentence, -3)."</div>";
        print "<div>".strtoupper($sentence)."</div>";
        print "<div>The letter a is at position: ".strpos($sentence, 'a')."</div>";
        print "<div>The character @ is at position: ".strpos($sentence, '@')."</div>";

        print var_dump(getallheaders());



        ?>
        <hr />
        <div>
            <?php


            $words = [ "Chihuahua", "Shepherd", "Poodle", "Dane"];
            print(var_dump($words));
            print("<br />");
            print($words[0]);
            ?>
        </div>
        <br /><br /><br /><br />
        </body>
    </html>



















