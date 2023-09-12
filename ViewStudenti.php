<?php

    class PrikazStudenti
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

        public function prikaziFormuDodaj()
        {
        //forma je metoda, ali u domeni atributa
        echo '
            <form method="post">
            <label>Ime</label>
            <input type="text" name="ime"><br>
            <label>Prezime</label>
            <input type="text" name="prezime"><br>
            <label>Jmbag</label>
            <input type="number" name="jmbag"><br>
            <input type="submit" value="Dodaj studenta">
        ';
        }

        public function prikaziStudente($studenti)
        {
            foreach ($studenti as $student)
            {
                echo "<h1>Ime: {$student['ime']} <br> Prezime: {$student['prezime']}</h1>";
            
                echo "<p>Jmbag: {$student['jmbag']}</p>";
            }
        }
    }

?>