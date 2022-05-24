# HARNO tagasiside korjamise projekt

### Projekti eesmärk
Projekti eesmärgiks on luua HARNO profiõppe pilootmudelile maanudmisleht. 

Veebirakendus asub (_05.05.2022_)
<pre>htv5.ikt.khk.ee</pre>

### Pivotaltracker

Projekti haldus toimub pivotaltrackeris. Seal on kõik vajalikud funktsionaalsused dokumenteeritud.
<pre>https://www.pivotaltracker.com/n/projects/2567176</pre>

### Vajalikud ressursid andmebaasi loomiseks
Server: Localhost via UNIX socket<br />
Server type: MariaDB<br />
Server version: 10.3.34-MariaDB - MariaDB Server<br />
Protocol version: 10<br />
Server charset: cp1252 West European (latin1)<br />

<details>
<summary>Tabelid</summary>
<pre>
CREATE TABLE erialad(
id int NOT NULL AUTO_INCREMENT,
eriala_nimi varchar(255) NOT NULL,
eriala_kirjeldus varchar(4000) NOT NULL,
eriala_pilt varchar(512) NOT NULL
PRIMARY KEY (id)
);
</pre>
<pre>
CREATE TABLE input_log(
eriala_nimi varchar(255) NOT NULL,
ettevotte_nimi varchar(255) NOT NULL,
personalijuht varchar(1000) NOT NULL,
voimekus int unsigned NOT NULL CHECK(voimekus BETWEEN 0 and 4),
valmis_toole_votma TINYINT NOT NULL,
valmis_osalema_piloot TINYINT NOT NULL,
mitu_valmis_vastu_votma int unsigned NOT NULL,
lisakusimused varchar(4000),
email varchar(255)
);
</pre>
</details>

<details>
<summary>Näidispäring</summary>
<pre>
mysql_query("INSERT INTO input_log (eriala_nimi, ettevotte_nimi, personalijuht, voimekus, valmis_toole_votma, valmis_osalema_piloot, mitu_valmis_vastu_votma, lisakusimused, email)
VALUES ('$eriala', '$ettevote', '$personalijuht', '$voimekus', '$valmis_toole_votma', '$valmis_osalema_piloot', '$mitu_valmis_vastu_votma', '$lisakusimused', '$email')");
</pre>
</details>
<details>
<summary>Andmete sisestamine</summary>
<pre>
INSERT INTO erialad(eriala_nimi, eriala_kirjeldus, eriala_pilt) VALUES ('CNC Operaator', 'CNC operaatori profiõpe sisaldab metallilõikepinkide programmeerimist ja ka täpsust nõudvaid käelisi oskusi. Öppe käigus on võimalik spetsialiseeruda CNC treipingi või CNC freespingi operaatoriks. Õppe aluseks on CNC metallilõikepingi operaatori õppekava.', 'public/img/stock.png'),
('Koosteluksepp', 'Koostelukksepa tööülesanded on toorikute ettevalmistamine, detailide mõõtmine, märkimine, töötlemine, puhastamine ning koostude koostamine ja reguleerimine. See eeldab jooniste lugemise oskust, masinaehitustehnoloogia ja kasutatavate materjalide tundmist.', 'public/img/stock.png'),
('Keevitaja', 'Keevitaja valmistab detaile ja kooste, kasutades erinevaid keevitusseadmeid, lähtudes tööjoonisest, töötlemis tehnoloogiatest, tooprotsessidest, töövahenditest ja töödeldavatest materjalidest.', 'public/img/stock.png');
</pre>
</details>
	
### Projekti koostasid:
Roomet Sütt</br>
Robin Rattasep</br>
Marcus Kruuleht</br>