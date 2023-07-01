
          <?php
                /*Checks if there was input for rolls and type of dice*/
            if (isset($_POST["dice"]) && isset($_POST["rolls"])):
                /*Converts values to integers and assigns them to variables*/
                $dice = (int)$_POST["dice"];
                $rolls = (int)$_POST["rolls"];
                /*Declares variable for total and updates with each loop iteration*/
                $total = 0;
                for ($i = 0; $i < $rolls; $i++)
                {
                    $total += rand(0, $rolls);
                }
            ?>
