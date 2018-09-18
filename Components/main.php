
            <?php
            if (isset($_GET['stranka'])) {
                if (file_exists("./Pages/".$_GET['stranka'].'.php')) {
                    include "./Pages/".$_GET['stranka'].'.php';
                } else {
                    echo "<h2> Hledana stranka neexistuje </h2>";
                }
            } else {
                  include "./Pages/sluzby.php";
            }
            ?>