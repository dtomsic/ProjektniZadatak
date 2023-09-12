<?php

    class UnesiOcjenu
    {
        public function prikaziFormu()
        {
        //forma je metoda, ali u domeni atributa
        echo '
            <form method="post">
            <input type="text" name="jmbag"><br>
            <input type="number" name="konacna_ocjena"><br>
            <input type="submit" value="Dodaj ocjenu">
        ';
        }
    }
    


?>