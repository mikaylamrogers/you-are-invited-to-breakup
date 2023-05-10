let drops = document.querySelectorAll('.drop');

drops.forEach(drop => {
  drops.style.color = 'white';
});

// YOU
let dropY = document.getElementById('droppable');
let dropO = document.getElementById('droppable2');
let dropU = document.getElementById('droppable3');

dropY.addEventListener('click', function() {
    dropY.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'> Y </span>";
    dropY.style.backgroundColor = "#121CFF";
    dropY.style.transition = "0.3s";
    dropO.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  O </span>";
    dropO.style.backgroundColor = "#121CFF";
    dropO.style.transition = "0.3s";
    dropU.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  U </span";
    dropU.style.backgroundColor = "#121CFF";
    dropU.style.transition = "0.3s";
})

// ARE
let dropA = document.getElementById('droppable4');
let dropR = document.getElementById('droppable5');
let dropE = document.getElementById('droppable11');

dropA.addEventListener('click', function() {
    dropA.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  A </span>";
    dropA.style.backgroundColor = "#121CFF";
    dropA.style.transition = "0.3s";
    dropR.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  R </span>";
    dropR.style.backgroundColor = "#121CFF";
    dropR.style.transition = "0.3s";
    dropE.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  E </span>";
    dropE.style.backgroundColor = "#121CFF";
    dropE.style.transition = "0.3s";
})

// INVITED
let dropI = document.getElementById('droppable6');
let dropN = document.getElementById('droppable7');
let dropV = document.getElementById('droppable8');
let dropII = document.getElementById('droppable9');
let dropT = document.getElementById('droppable10');
let dropEE = document.getElementById('droppable11');
let dropD = document.getElementById('droppable12');

dropI.addEventListener('click', function() {
    dropI.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  I </span>";
    dropI.style.backgroundColor = "#121CFF";
    dropI.style.transition = "0.3s";
    dropN.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  N </span>";
    dropN.style.backgroundColor = "#121CFF";
    dropN.style.transition = "0.3s";
    dropV.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  V </span>";
    dropV.style.backgroundColor = "#121CFF";
    dropV.style.transition = "0.3s";
    dropII.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  I </span>";
    dropII.style.backgroundColor = "#121CFF";
    dropII.style.transition = "0.3s";
    dropT.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  T </span>";
    dropT.style.backgroundColor = "#121CFF";
    dropT.style.transition = "0.3s";
    dropEE.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  E </span>";
    dropEE.style.backgroundColor = "#121CFF";
    dropEE.style.transition = "0.3s";
    dropD.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  D </span>";
    dropD.style.backgroundColor = "#121CFF";
    dropD.style.transition = "0.3s";
})

// TO
let dropTT = document.getElementById('droppable13');
let dropOO = document.getElementById('droppable14');

dropTT.addEventListener('click', function() {
    dropTT.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  T </span>";
    dropTT.style.backgroundColor = "#121CFF";
    dropTT.style.transition = "0.3s";
    dropOO.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  O </span>";
    dropOO.style.backgroundColor = "#121CFF";
    dropOO.style.transition = "0.3s";
})

// BREAKUP
let dropB = document.getElementById('droppable15');
let dropRR = document.getElementById('droppable16');
let dropEEE = document.getElementById('droppable17');
let dropAA = document.getElementById('droppable18');
let dropK = document.getElementById('droppable19');
let dropUU = document.getElementById('droppable20');
let dropP = document.getElementById('droppable21');

dropB.addEventListener('click', function() {
    dropB.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  B </span>";
    dropB.style.backgroundColor = "#121CFF";
    dropB.style.transition = "0.3s";
    dropRR.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  R </span>";
    dropRR.style.backgroundColor = "#121CFF";
    dropRR.style.transition = "0.3s";
    dropEEE.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  E </span>";
    dropEEE.style.backgroundColor = "#121CFF";
    dropEEE.style.transition = "0.3s";
    dropAA.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  A </span>";
    dropAA.style.backgroundColor = "#121CFF";
    dropAA.style.transition = "0.3s";
    dropK.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  K </span>";
    dropK.style.backgroundColor = "#121CFF";
    dropK.style.transition = "0.3s";
    dropUU.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  U </span>";
    dropUU.style.backgroundColor = "#121CFF";
    dropUU.style.transition = "0.3s";
    dropP.innerHTML = "<span style='font-size:5vw; color: white; text-align: center;'>  P </span>";
    dropP.style.backgroundColor = "#121CFF";
    dropP.style.transition = "0.3s";
})

let button = document.querySelector('button');
let dsi = document.getElementById('dsi');
let casio = document.getElementById('casio');
let iphone4 = document.getElementById('iphone4');
let iphone6 = document.getElementById('iphone6');
let ipodnano = document.getElementById('ipodnano');
let mino = document.getElementById('mino');
let polaroid = document.getElementById('polaroid');

dropB.addEventListener('click', function() {
    button.style.display = "block";
    dsi.style.visibility= "visible";
    casio.style.visibility= "visible";
    iphone4.style.visibility= "visible";
    iphone6.style.visibility= "visible";
    ipodnano.style.visibility= "visible";
    mino.style.visibility= "visible";
    polaroid.style.visibility= "visible";
    document.body.style.backgroundColor = "#eae7de";
    document.body.style.transition = "0.3s";

    // animate();
})


