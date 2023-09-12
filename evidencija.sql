CREATE TABLE studenti(
  id_studenti INT NOT NULL AUTO_INCREMENT, 
  ime VARCHAR(100),
  prezime VARCHAR(100),
  jmbag VARCHAR(100) UNIQUE,
  PRIMARY KEY(id_studenti)
  ) ENGINE=InnoDB;
  
  CREATE TABLE ocjene(
  id_ocjene INT NOT NULL AUTO_INCREMENT, 
  konacna_ocjena INT NOT NULL,
  fk_id_student INT NOT NULL,
  PRIMARY KEY (id_ocjene),
  FOREIGN KEY (`fk_id_student`) REFERENCES `studenti`(`id_studenti`)
  ) ENGINE=InnoDB;

 INSERT INTO studenti (ime, prezime, jmbag) VALUES ('A', 'A', '001'), ('B', 'B', '002'), ('C', 'C', '003');

 INSERT INTO ocjene (konacna_ocjena, fk_id_student) VALUES (4, 1), (3, 2), (5, 3);

SELECT studenti.id_studenti, ocjene.id_ocjene, Orders.OrderDate
FROM Orders
INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;