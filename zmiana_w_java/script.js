function kolor(c) {
    document.getElementById('prawy').style.backgroundColor = c;
    document.cookie='kolor='+c;
}

function kolorek(b) {
    var b = document.getElementById('czcionka').value;
    document.getElementById('text').style.color = b;
    document.cookie='text='+b;
}

function wielkosc(a) {
    var a = document.getElementById('wielk').value;
    document.getElementById('text').style.fontSize = a + '%';
    document.cookie='size='+a;
}

function ramka() {
    if (document.getElementById('rama').checked == true)
        document.getElementById('gora').style.border = '2px solid white';
    else
        document.getElementById('gora').style.borderColor = 'transparent';
}

function radio() {
    console.log(document.getElementById('1').checked);
    if (document.getElementById('1').checked == true) {
        document.getElementById('ham').style.listStyleType = 'disc';
        document.getElementById('ham2').style.listStyleType = 'disc';
        document.getElementById('ham3').style.listStyleType = 'disc';
    } 

    if (document.getElementById('2').checked == true) {
        document.getElementById('ham').style.listStyleType = 'square';
        document.getElementById('ham2').style.listStyleType = 'square';
        document.getElementById('ham3').style.listStyleType = 'square';
    } 

    if (document.getElementById('3').checked == true) {
        document.getElementById('ham').style.listStyleType = 'circle';
        document.getElementById('ham2').style.listStyleType = 'circle';
        document.getElementById('ham3').style.listStyleType = 'circle';
    }
}

function zmiana() {
    var obrazek = document.getElementById('gora').src;
    document.getElementById('gora').src = 'gibraltar.png';
}

function zmiana2() {
    var obrazek = document.getElementById('gora').src;
    document.getElementById('gora').src = 'drugi.png';
}

function zmiana3() {
    var obrazek = document.getElementById('gora').src;
    document.getElementById('gora').src = 'trzeci.jpg';
}