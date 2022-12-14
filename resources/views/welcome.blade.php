<!DOCTYPE html>
<html lang="en">
<head>
<!--Oznaka <meta>definira metapodatke o HTML dokumentu. Metapodaci su podaci (informacije) o podacima.
<meta>Oznake uvijek idu unutar elementa <head> i obicno se koriste za odredivanje skupa znakova,
opisa stranice, kljcnih rijeci, autora dokumenta i postavki prikaza. Metapodaci nece biti prikazani na
stranici, ali se mogu strojno analizirati. Koriste preglednici (kako prikazati sadrzaj ili ponovno ucitati
stranicu), trazilice (kljucne rijeci) i druge web usluge. Postoji metoda koja omogucuje web dizajnerima da
preuzmu kontrolu nad okvirom za prikaz (korisnikovo vidljivo podrucje web-stranice).-->
<!--za hrvatski jezik-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <!--Definira autora stranice-->
    <meta name="author" content="Ana-Matea-Ana">

<!--Postavljanje okvira za prikaz kako bi web stranica izgledala dobro na svim uredajim-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--naslov-->
    <title>Sportska oprema &#8211; sportAma &#128526;  Sve za vas na jednom mjestu &#128521; </title>
<!--css stylesheet-->
    <link rel="stylesheet" type="text/css" href="SportAma.css">

    <!--za instagram-...ikone...-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> <!--footer s instagrama-->
    <!--<link rel="stylesheer" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">  <!--footer s insgtagrama-->

    <!--link za footer -icone-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>




<body>
    <!-------------------------------------------------------------Zaglavlje=>header--------------------------------------->
    <section class="naslovnica" id="naslovnica">
        <!--<h1>Pri??i, kupi jer nismo skupi &#128526 </br>
            Usre??iti Vas nam je glavna misao </br>zato za Vas smo spremili </br>
            najbolje od najboljeg &#128521</br>
            Sportska oprema - SportAma</h1>-->


        <header>
            <a href="#" class="logo">Sportska oprema<span>.</span></a>

            <nav class="navbar">
                <a href="#o_nama">O nama</a>
                <a href="#proizvodi">Shop</a>
                <a href="#tehnologije">Tehnologije</a>
                <a href="#admin">Admin</a>
                <a href="#kontakt">Kontakt</a>
            </nav>

            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="file:///C:/Users/HOME/Desktop/SportAma-PZI/prijava.html" target="_blank" class="fas fa-user"></a>
                <!--_blank -  u novom prozoru, _self -u istom prozoru-->
            </div>
        </header>

       <video src="img/w.mp4" controls width="11160" height="540"></video>

    </section>





    <!----------------------------------------------------------------------O NAMA----------------------------------->
    <!--traget='_blank'--  posle svakoga hrefa-->
    <section class="o_nama" id="o_nama">
        <div class="row">
            <div class="col50">
                <h2 class="titleText">O nama</h2>
                <p> SportAMA je najve??i online prodajni lanac na svijetu za djecu i odrasle. U ponudi ima vi??e od 200 000 proizvoda koje
                    prodaje 250+ prodava??a-partnera iz BiH i EU. Cilj nam je obu??i svakog ??ovjeka u najljep??u i najkvalitetniju robu, te
                    nam je na prvom mjestu udobnost proizvoda i zadovoljstvo kupca.
                    Na jednom mjestu imate sve, od fitnes opreme, sportske odje??e, do opreme za razli??ite sportove: karate, kickboks,
                    skijanje, tenis, golf, odbojka, itd. Cilj nam je i motivirati ljude da se pokrenu, ne sutra, ne prekosutra,vec sada -
                    POKRENI SE!<br>
                    <span class="extra-text">
                    Sve je na jednom mjestu, tvoje je samo da se pokrene??.<br>
                    Pokreta??i projekta su studentice studija Matematika-Informatika. Kako su zamislile svoj projekt, koji im je cilj,
                    motivacija te koje tehnologije ??e koristiti mo??ete pogledati
                    <a href="file:///C:/Users/HOME/Desktop/SportAma-PZI/SportAma_Vizija_2.pdf" target="_blank" rel="noreferrer" class="link">ovdje</a>.
                    <br><br>
                    Izaberi za sebe najbolji proizvod iz na??eg asortimana i iznenadi svoju budu??nost!</p></span>
                    <button class="read-more-btn">
                       Vi??e
                    </button>
            </div>

            <div class="col50">
                <div class="imgBx">
                    <img src="img/autori/nama.jpg">
                </div>
            </div>
        </div>
    </section>









    <!------------------------------------------------------------------------PROIZVODI---------------------------------------------------->
    <section class="proizvodi" id="proizvodi">
        <h2 class="titleText">Nasa<span>P</span>onuda</h2>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <a target="_blank" href="file:///C:/Users/HOME/Desktop/SportAma_PZI/proizvodi.html#">
                    <img src="img/proizvodi/muska_trenerka.png" alt="Mu??ka trenerka" width="600" height="400"></a>
                </div>

                    <div class="desc">
                        <div class="text">
                            <h3>Trenerka</h3>
                            <div class="text-content"><p><small>100,00 BAM</small></p>
                            </div>
                        </div>
                    </div>

                </div>
    <!----------------------------------------------------------------------------------->
                <div class="box">
                    <div class="imgBx">
                        <a target="_blank" href="file:///C:/Users/HOME/Desktop/SportAma_PZI/proizvodi_tajice.html">
                        <img src="img/proizvodi/tajice.png" alt="??enske tajice" width="600" height="400"></a>
                    </div>

                    <div class="desc">
                        <div class="text">
                            <h3>??enske tajice </h3>
                            <div class="text-content"><p><small>50,00 BAM</small></p>
                            </div>
                        </div>
                    </div>
                </div>


    <!----------------------------------------------------------------------------------->

                <div class="box">
                    <div class="imgBx">
                        <a target="_blank" href="file:///C:/Users/HOME/Desktop/SportAma_PZI/proizvodi_utezi.html">
                            <img src="img/proizvodi/utezi.png" alt="Utezi" width="600" height="400"></a>
                    </div>

                    <div class="desc">
                        <div class="text">
                            <h3>Utezi</h3>
                            <div class="text-content"><p><small>10,00 BAM</small></p>
                            </div>
                        </div>
                    </div>
                </div>

<!----------------------------------------------------------------------------------->

                <div class="box">
                    <div class="imgBx">
                        <a target="_blank" href="file:///C:/Users/HOME/Desktop/SportAma_PZI/proizvodi_tene.html">
                            <img src="img/proizvodi/tene.jpg" alt="Tene" width="600" height="400"></a>
                    </div>

                    <div class="desc">
                        <div class="text">
                            <h3>Tene</h3>
                            <div class="text-content"><p><small>100,00 BAM</small></p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="imgBx">
                        <a target="_blank" href="file:///C:/Users/HOME/Desktop/SportAma_PZI/proizvodi_tatami.html">
                            <img src="img/Proizvodi/tatami.png" alt="Tene" width="600" height="400"></a>
                    </div>
                    <div class="desc">
                        <div class="text">
                            <h3>Tatami podloga u raznim bojama</h3>
                            <div class="text-content"><p><small>70,00 BAM</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="imgBx">
                        <a target="_blank" href="file:///C:/Users/HOME/Desktop/SportAma_PZI/proizvodi_kimona.html">
                            <img src="img/Proizvodi/kimono.png" alt="Tene" width="600" height="400"></a>
                    </div>
                    <div class="desc">
                        <div class="text">
                            <h3>Kimono</h3>
                            <div class="text-content"><p><small>70,00 BAM</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="title">
                <span class="extra-text">Vidi sve</span>
            </div>-->
        </section>


    <!---------------------------------------------TEHNOLOGIJE--------------------------------------------------------------->
    <section class="tehnologije" id="tehnologije">
        <div class="title">
            <h2 class="titleText">Tehnologije i Dijagram</h2>
        </div>

        <div class="row">
            <div class="col50">
                <a href="img/Tehnologije i dijagram/tehnologije_dijagram.jpg" data-lightbox="models" data-title="Caption">
                <img src="img/Tehnologije i dijagram/tehnologije_dijagram.jpg"></a>
            </div>
            <div class="col50">
                <a href="img/Tehnologije i dijagram/dijagram.jpg" data-lightbox="models" data-title="Caption">
                <img src="img/Tehnologije i dijagram/dijagram.jpg" style="width: 100%; height: 97%;"></a> <!--kad otvoris sliku se otovri-->
            </div>
        </div>
    </section>


    <!-------------------------------------------------ADMIN--------------------------------------------------------->
    <section class="admin" id="admin">
       <div class="title white">
                <h2 class="titleText">Glavni i odgovorni krivci</h2>
                <p>SMO MI-UPOZNAJTE NAS</p>
            </div>

            <div class="content">
                <div class="box">
                    <div class="imgBx">
                        <img src="img/autori/Ana.jpg">
                    </div>

                    <div class="text">
                        <p>Ro??ena 01.11.1999.</br>SS?? ??iroki Brijeg, smjer Ra??unalni tehni??ar za strojarstvo</br>2018. FPMOZ,smjer Matematika-Informatika</br>
                        <a href="mailto:ana.ljubic1@fpmoz.sum.ba">ana.ljubic1@fpmoz.sum.ba</a></p>
                        <h3>Ana Ljubi??</h3>
                    </div>

                    <ul class="ikona">
                        <li style="--clr: #1877f2;" class="ikona2">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>

                        <li style="--clr: #c32aa3;" class="ikona2">
                            <a href="https://www.instagram.com/ana.ljubic16/">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>

                        <li style="--clr: #25d366;" class="ikona2">
                            <a href="#">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>

                        <li style="--clr:  rgb(15, 14, 14);" class="ikona2">
                            <a href="#">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </li>

                        <li style="--clr:  rgb(209, 3, 3);" class="ikona2">
                            <a href="mailto:ana.ljubic1@fpmoz.sum.ba">
                                <ion-icon name="mail-outline"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            <!--sljedeca-->
                <div class="box">
                    <div class="imgBx">
                        <img src="img/autori/AnaB.jpg">
                    </div>
                    <div class="text">
                        <p>Ro??ena 08.11.1998.</br>SS?? Livno, smjer Ekonomija</br>2018. FPMOZ,smjer Matematika-Informatika</br>
                        <a href="mailto:ana.braovac@fpmoz.sum.ba">ana.braovac@fpmoz.sum.ba</a></p>
                        <h3>Ana Braovac</h3>
                    </div>

                    <ul class="ikona">
                        <li style="--clr: #1877f2;" class="ikona2">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>

                        <li style="--clr: #c32aa3;" class="ikona2">
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>

                        <li style="--clr: #25d366;" class="ikona2">
                            <a href="#">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>

                        <li style="--clr: rgb(15, 14, 14);" class="ikona2">
                            <a href="#">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </li>

                        <li style="--clr:  rgb(209, 3, 3);" class="ikona2">
                            <a href="mailto:ana.braovac@fpmoz.sum.ba">
                                <ion-icon name="mail-outline"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>
        <!--sljedeca-->
                <div class="box">
                    <div class="imgBx">
                        <img src="img/autori/Matea.jpg">
                    </div>
                    <div class="text">
                        <p> Ro??ena 10.03.2000.</br>S?? Prozor, smjer Op??a gimnazija</br>2018. FPMOZ,smjer Matematika-Informatika</br>
                        <a href="mailto:matea.dzankic@fpmoz.sum.ba">matea.dzankic@fpmoz.sum.ba</a>.</p>
                        <h3>Matea D??anki??</h3>
                    </div>

                    <ul class="ikona">
                        <li style="--clr: #1877f2;" class="ikona2">
                            <a href="#">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>

                        <li style="--clr: #c32aa3;" class="ikona2">
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>

                        <li style="--clr: #25d366;" class="ikona2">
                            <a href="#">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>

                        <li style="--clr:  rgb(15, 14, 14);" class="ikona2">
                            <a href="#">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </li>

                        <li style="--clr:  rgb(209, 3, 3);" class="ikona2">
                            <a href="mailto:matea.dzankic@fpmoz.sum.ba">
                                <ion-icon name="mail-outline"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </section>










    <!-----------------------------------------------------KONTAKT---------------------------------------------------------------->
    <section class="kontakt" id="kontakt">
        <div class="contactForm">
            <div class="title">
                <h2 class="titleText">Kontakt</h2>
                <p>TU SMO ZA VAS 0-24h </br> Po??alji nam poruku</p>

            </div>

            <div class="inputBox">
                <input type="text" placeholder="Ime">
            </div>

            <div class="inputBox">
                <input type="text" placeholder="E-mail">
            </div>

            <div class="inputBox">
                <textarea placeholder="Poruka"></textarea>
            </div>

            <div class="inputBox">
                <input type="submit" value="Poslati">
            </div>
        </div>
    </section>


    <!------------------prijava----------------------------->
    <!--<section class="prijava" id="prijava">
        <div class="container">
            <div class="card">
                <div class="inner-box" id="card">
                    <div class="card-front">
                        <h2>PRIJAVI SE</h2>
                        <form>
                            <input type="email" class="input-box" placeholder="e-mail" required>
                            <input type="password" class="input-box" placeholder="lozinka" required>
                            <button type="submit" class="submit-btn">Prijavi se</button>
                            <input type="checkbox"><span>Zapamti me</span>
                            <a href="#">Zaboravila lozinku</a>
                        </form>

                        <button type="button" class="btn" onclick="openRegister()">Ja sam nova ovdje</button>
                    </div>
                    <div class="card-back">
                        <h2>REGISTRIRAJ SE</h2>
                        <form>
                            <input type="text" class="input-box" placeholder="Ime" required>
                            <input type="text" class="input-box" placeholder="Prezime" required>
                            <input type="email" class="input-box" placeholder="e-mail" required>
                            <input type="password" class="input-box" placeholder="lozinka" required>
                            <button type="submit" class="submit-btn">Registriraj se</button>
                            <input type="checkbox"><span>Zapamti me</span>
                        </form>

                        <button type="button" class="btn" onclick="openLogin()">Imam ra??un</button>
                    </div>
                </div>
            </div>
        </div>
    </section>-->


    <!---------------------footer---------------------------->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>SportAma</h4>
                    <ul>
                        <li><a href="#o_nama">O nama</a></li>
                        <li><a href="#admin">Na?? tim</a></li>
                        <!--<li><a href="#">Na??e usluge</a></li>
                        <li><a href="#">PRIVACY POLICY</a></li>-->
                        <li><a href="#">Partneri</a></li>
                        <li><a href="#">Suradnja s nama/Radite s nama</a></li> <!--Zaposlenje-->
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Pomo??</h4>
                    <ul>
                        <!--<li><a href="#">Pitanja</a></li>-->
                        <li><a href="#">Dostava - slanje</a></li>
                        <li><a href="#">Mogu??nost vra??anja - povrat</a></li>
                        <!--<li><a href="#">Stanje narud??be</a></li>-->
                        <li><a href="#">Na??in pla??anja</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Moglo bi te zanimati</h4>
                    <ul>
                        <li><a href="#proizvodi">Odje??a</a></li>
                        <li><a href="#proizvodi">Obu??a</a></li>
                        <li><a href="#proizvodi">Oprema</a></li>
                        <li><a href="#">Paketi</a></li>
                        <li><a href="#">Poklon kartice</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Kontakt</h4>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fas fa-home mr-3"></i>
                                Dostava na ku??nu adresu ili osobno preuzimanje uz dogovor (Mostar-??iroki Brijeg-Rama-Livno)
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-envelope"></i>
                                sport88@gamil.com
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-phone mr-3"></i>
                                063-050-751
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fas fa-print mr-3"></i>
                                039-705-976
                            </a>
                        </li>

                        <li><a href="file:///C:/Users/HOME/Desktop/SportAma_PZI/prijava.html">
                            <i class="fas fa-user"></i>
                            Prijava/Registracija</a>
                        </li>
                    </ul>
                </div>


                <div class="footer-col">
                    <h4>Zaprati nas <!--Follow as--></h4>
                    <div class="social-links">
                        <!--https://www.google.com/search?q=font+awesome+cdn&ei=ZcKHYtTRI4KI9u8Pw5-boAQ&oq=fonts+awesome+c&gs_lcp=Cgdnd3Mtd2l6EAEYADIGCAAQDRAKMgQIABANMgYIABANEAoyBAgAEA0yBAgAEA0yBAgAEA0yBAgAEA0yBggAEA0QCjIECAAQDTIGCAAQDRAKOgcIABBHELADOgcIABCwAxBDOgUIABCABDoGCAAQHhAWOggIABAeEBYQCkoECEEYAEoECEYYAFCOAVjvBWCGD2gBcAF4AIABzgGIAekCkgEFMC4xLjGYAQCgAQHIAQrAAQE&sclient=gws-wiz-->
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-snapchat"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-------------------Krajjj---------------------------->
    <div class="copyrightText">
        <p>Copyright ?? 2022 SportAma</a></p>
    </div>

    <!------------------JavaScript---------------------------->
    <script type="text/javascript" src="SportAma.js"></script>

    <!--U bacili pjesmu-->
</body>
</html>


