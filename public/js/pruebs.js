function logo() {
    let logo = document.getElementById('IconLog');
    let unif = document.getElementById('uniform');
    let texti = document.getElementById('texti-prom');
    let proyect = document.getElementById('proyec-esp');
    let nosot = document.getElementById('nost');
    let cont = document.getElementById('cont');
    let blog = document.getElementById('blog');

    logo.style.transition = '1s'
    logo.style.transform = 'translate(40px, -25px) rotate(25deg)'
    unif.style.transition = '400ms ease-in-out'
    unif.style.color = '#b10303'
    texti.style.transition = '500ms ease-in-out'
    texti.style.color = '#d70000'
    proyect.style.transition = '600ms ease-in-out'
    proyect.style.color = '#ff0000'
    nosot.style.transition = '700ms ease-in-out'
    nosot.style.color = '#ff2323'
    cont.style.transition = '800ms ease-in-out'
    cont.style.color = '#ff5757'
    blog.style.transition = '900ms ease-in-out'
    blog.style.color = '#ff9494'
};

function logo1() {
    let logo = document.getElementById('IconLog');
    let unif = document.getElementById('uniform');
    let texti = document.getElementById('texti-prom');
    let proyect = document.getElementById('proyec-esp');
    let nosot = document.getElementById('nost');
    let cont = document.getElementById('cont');
    let blog = document.getElementById('blog');

    logo.style.transform = 'translate(0px, 0px) rotate(0deg)'
    unif.style.color = '#47d111'
    texti.style.color = '#47d111'
    proyect.style.color = '#47d111'
    nosot.style.color = '#47d111'
    cont.style.color = '#47d111'
    blog.style.color = '#47d111'
};

function movim(Id) {
    let vista = document.getElementById(Id);
    vista.classList.replace('movarr', 'movarr1');
};

function regres(Id) {
    let vista = document.getElementById(Id);
    vista.classList.replace('movarr1', 'movarr');
};

function Mmovim(Id) {
    let vista = document.getElementById(Id);
    vista.classList.replace('mov-tarje', 'mov-tarje-1');
};

function Rregres(Id) {
    let vista = document.getElementById(Id);
    vista.classList.replace('mov-tarje-1', 'mov-tarje');
};

function Mmovim1(Id) {
    let vista = document.getElementById(Id);
    vista.classList.replace('mov-tarje', 'mov-tarje-2');
};

function Rregres1(Id) {
    let vista = document.getElementById(Id);
    vista.classList.replace('mov-tarje-2', 'mov-tarje');
};