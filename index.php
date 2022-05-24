<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kysitlus</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            function load() {
                $.ajax({ //create an ajax request to load_page.php
                    type: "GET",
                    url: "test.php",
                    dataType: "html", //expect html to be returned
                    success: function (response) {
                        $(".eriala").html(response);
                        setTimeout(load, 1000)
                    }
                });
            }

            load(); //if you don't want the click
        });
    </script>
</head>
<body>
<div style="display:inline-block;vertical-align:top;">
    <h2 class="pealkiri">
        Oled hädas kvalifitseeritud
        tööjõu leidmisega ja järel-
        kasvu kindlustamisega?
    </h2>
    <p style="float: right;"><img src="public/img/placeholder.png" height="300px" width="350px" border="1px" class="placheholderimg5"></p>
    <p class="paragraph">
        Uus profiõppe pilootmudel pakub lahendust, mis kasvatab kutseoskustega noori töötajaid,
        kes vastavad just Sinu ettevõtte vajadustele.</p>
    <p class="paragraph">Profiõpe viib kokku kutsekooli, metalliettevõtte
        ja erialast tööd otsiva noore, kes on juba
        omandanud keskhariduse. Kolmepoolse
        kokkuleppe alusel toimub kutseõpe
        paralleelselt töösuhte alustamisega ettevõttes.</p>
    <p class="paragraph">See tagab kiirema, kvaliteetsema ja täpselt
        ettevõtte vajadustele vastava uue meistri
        kujunemise - see ongi profiõpe.</p>
</div>
<img src="public/img/placeholder.png" alt="VOCO LOGO" width="100" height="40" class="placeholderimg1 placeholderimg">
<img src="public/img/placeholder.png" alt="VOCO LOGO" width="100" height="40" class="placeholderimg2 placeholderimg">
<img src="public/img/placeholder.png" alt="VOCO LOGO" width="100" height="40" class="placeholderimg3 placeholderimg">
<img src="public/img/placeholder.png" alt="VOCO LOGO" width="100" height="40" class="placeholderimg4 placeholderimg">

<p class="paragraph1">Koostöös metallierialasid õpetavate kutsekoolidega piloteerime töökohapõhist profiõpet kolmel
    erialal. Palun anna meile oma huvist ja võimalikest eelistustest märku – milliste erialade
    proffide järelkasvu Sinu ettevõte täna ja tulevikus kõige olulisemaks peab?</p>




<div class="erialadiv">
    <table class="eriala">
        <tr>
            <td><img src="public/img/placeholder.png" alt="VOCO LOGO" width="100" height="40"></td>
            <td><img src="public/img/placeholder.png" alt="VOCO LOGO" width="100" height="40"></td>
            <td><img src="public/img/placeholder.png" alt="VOCO LOGO" width="100" height="40"></td>
        </tr>

        <tr>
            <th>CNC operaator</th>
            <th>Koostelukksepp</th>
            <th>Keevitaja</th>
        </tr>
        <tr>
            <td><input type="checkbox" value="1"></td>
            <td><input type="checkbox" value="2"></td>
            <td><input type="checkbox" value="3"></td>
        </tr>
        <tr>
            <td><p>CNC operaatori profiõpe sisaldab
                metallilõikepinkide programmeerimist
                ja ka täpsust nõudvaid käelisi
                oskusi. Õppe käigus on võimalik
                spetsialiseeruda CNC treipingi või
                CNC freespingi operaatoriks. Õppe
                aluseks on CNC metallilõikepingi
                operaatori õppekava.</p></td>
            <td><p>Koostelukksepa tööülesanded on
                toorikute ettevalmistamine, detailide
                mõõtmine, märkimine, töötlemine,
                puhastamine ning koostude koostamine
                ja reguleerimine. See eeldab jooniste

                lugemise oskust, masinaehitus-
                tehnoloogia ja kasutatavate

                materjalide tundmist.</p></td>
            <td><p>Keevitaja valmistab detaile ja
                kooste, kasutades erinevaid
                keevitusseadmeid, lähtudes

                tööjoonisest, töötlemis-
                tehnoloogiatest, töö-
                protsessidest, töövahenditest ja

                töödeldavatest materjalidest.</p></td>

        </tr>

    </table>
</div>
<div class="container">
    <form action="/missing">
        <label for="otherspec">Või mõni muu eriala?</label>
        <input class="cont" id="otherspec" type="text" name="otherspec" placeholder="Sisesta eriala nimi.." />
    </form>
</div>

<div class="container">
    <form action="/form">
        <label for="bname">Ettevõtte nimi</label>
        <input class="cont" id="bname" type="text" name="bussinessname" placeholder="Ettevõtte nimi.." />

        <label for="hname">Kes tegeleb Sinu ettevõttes uute inimeste, sh praktikantide vastuvõtmisega?</label>
        <input class="cont" id="hname" type="text" name="hname" placeholder="Inimese nimi.." />

        <label for="bdesc">Milline on Sinu ettevõtte võimekus ja kogemus praktikantide personaalsel juhendamisel?</label>
        <input class="cont" id="bdesc" type="text" name="bdesc" placeholder="Kirjeldus.." />

        <label for="contract">Kas Sinu ettevõte on valmis lepinguga tööle võtma noore, kes samal ajal õpib kutsekoolis vajalikku eriala?</label>
        <input class="cont" id="contract" type="text" name="contract" placeholder="Jah/Ei.." />

        <label for="2022program">Kas Sinu ettevõte oleks huvitatud osalema 2022/23 õppeaasta profiõppe pilootprogrammis?</label>
        <input class="cont" id="2022program" type="text" name="2022program" placeholder="Jah/Ei.." />

        <label for="howmany">Mitu noort on Sinu ettevõte korraga võimeline ja valmis vastu võtma?</label>
        <input class="cont" id="howmany" type="text" name="howmany" placeholder="Number.." />

        <label for="question">Tekkis küsimusi? Tahaks midagi täpsustada? Kirjuta siia!</label>
        <input class="cont" id="question" type="text" name="question" placeholder="Sinu küsimus.." />

        <label for="email">Jäta meile oma e-mail kui soovid, et võtaksime Sinuga personaalselt ühendust!!</label>
        <input class="cont" id="email" type="text" name="email" placeholder="Sinu email.." />

    </form>
</div>
<div id="responsecontainer"></div>
</body>
</html>
