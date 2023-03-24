<?php
    // setcookie('kolor','', time()-24*3600);

//  kolor tła
    if ( isset($_COOKIE['kolor'])) {
        $kolor = $_COOKIE['kolor'];
    }
    else {
        $kolor = 'indigo';
        setcookie('kolor',$kolor);
    }

// kolor tekstu
    if ( isset($_COOKIE['text'])) {
        $text = $_COOKIE['text'];
    }
    else {
        $text = 'black';
        setcookie('text',$text);
    }

//    rozmiar czcionki
    if ( isset($_COOKIE['size'])) {
        $size = $_COOKIE['size'];
    }
    else {
        $size = '100';
        setcookie('size',$size);
    }

//    ramka
    if ( isset($_COOKIE['rama'])) {
        $rama = $_COOKIE['rama'];
    }
    else {
        $rama = '2px solid white';
        setcookie('rama',$rama);
    }


?>  

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="styl6.css">
            <title>Style w Css</title>
            <script src="script.js"></script>
        </head>
        <body>
            <section id="lewy">
                <h1>Konfigurator stylu</h1>
                <p>Podaj kolor tła</p>
                <button name="option1" type="submit" id="Indigo" onclick="kolor('indigo');">Indigo</button>
                <button name="option1" type="submit" id="SteelBlue" onclick="kolor('steelblue')">SteelBlue</button>
                <button name="option1" type="submit" id="Olive" onclick="kolor('olive')">Olive</button>

                <p>Podaj kolor czcionki</p>
                <select id="czcionka" onchange="kolorek()">
                    <option value="White">White</option>
                    <option value="Tan">Tan</option>
                    <option value="Bisque">Bisque</option>
                    <option value="Plum">Plum</option>
                </select>
                <p>Podaj rozmiar czcionki w procentach</p>
                <input type="number" value="<?php echo $size;?>" onkeyup="wielkosc()" id="wielk">
                <p>czy rysunek ma mieć ramkę?</p>
                <input type="checkbox" onclick="ramka()" id="rama" value="1">Rysuj ramkę
                <p>Jaki jest typ punktora listy?</p>
                <input type="radio" name="1" checked value="1" id="1" onclick="radio()">Dysk
                <input type="radio" name="1" value="2" id="2" onclick="radio()">Kwadrat
                <input type="radio" name="1" value="3" id="3" onclick="radio()">Okrąg
                <p>Wybierz obraz:</p>
                <input type="submit" id="goral" onclick="zmiana()" value="góra">
                <input type="submit" id="goral" onclick="zmiana2()" value="hk">
                <input type="submit" id="goral" onclick="zmiana3()" value="hk2">
            </section>
            <section id="prawy"  style="background-color:<?php echo $kolor;?>">
                <div class="obraz">
                    <img src="gibraltar.png" id="gora" style="border:<?php echo $rama;?>;">
                </div>
                <div class="pkt">
                <ul>
                    <li id="ham">Element1</li>
                    <li id="ham2">Element2</li>
                    <li id="ham3">Element3</li>
                </ul>
                </div>
                <div class="text" id="rozmiar" style="font-size:<?php echo $size.'%';?>;">
                <p id="text" style="color:<?php echo $text;?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                       Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                </div>
            </section>
            <section id="stopka">
                Autor: 694296662137
            </section>
        </body>
    </html>