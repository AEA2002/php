<!DOCTYPE html>
    <html>
        <head>
            <title>PHP test</title>
        </head>
        <body>

        <div>
            <?php echo "Hello from PHP" ?>

            </div>
        <div><?php
            /* This is where I learned about
             * dates and variables.
             */
            $harvey=time();
            echo("<div>Harvey is: " . $harvey . "</div>");
            echo("<div>Formatted \$\$Harvey is:" . date('D, d-M-Y', $harvey) . "</div>");
            // Compute yesterday from Harvey
            $yesterday = ($harvey - 86400);
            echo("<div>" . date('D, d-M-Y', $yesterday) . "</div>");
            ?></div>

        </body>

    </html>