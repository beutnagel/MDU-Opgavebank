var picks = ['Lizzard', 'Spock', 'Scissors', 'Paper', 'Rock'];
var modular = 5;


var playerpoint = 0;
var computerpoint = 0;


var playerstatus = document.getElementById("ppoint");
var pcstatus = document.getElementById("cpoint");
var gametxt = document.getElementById("game");
playerstatus.innerHTML = playerpoint;
pcstatus.innerHTML = computerpoint;

gametxt.innerHTML = "Press the buttons to play the game";


function computerpick() {
    var cpick = picks;
    var random = [Math.floor(Math.random() * cpick.length)];
    return cpick[random];
}





function fight(id) {
    var computerPick = computerpick();
    var userPick = picks[id];
    
    console.log(computerPick);
    console.log(picks[(id+1)%modular], picks[(id+3)%modular]);

    if (computerPick == picks[(id+1)%modular] || computerPick == picks[(id+3)%modular]) {

        gametxt.innerHTML = "You picked " + userPick + " Computer picked " + computerPick + " you won";
        playerpoint++;
        playerstatus.innerHTML = playerpoint;

    } else if (computerPick == picks[(id+2)%modular] || computerPick == picks[(id+4)%modular]) {

        gametxt.innerHTML = "You picked " + userPick + " Computer picked " + computerPick + " you lost";
        computerpoint++;
        pcstatus.innerHTML = computerpoint;
    } else {

        gametxt.innerHTML = "You picked " + userPick + " Computer picked " + computerPick + " its a tie";
    }
    update();
}

function update(){
if (playerpoint > computerpoint) {
    var playerstatus = document.getElementById("ppoint");
    playerstatus.style.color = "#00FF00";
    var pcstatus = document.getElementById("cpoint");
    pcstatus.style.color = "#FF0000";
} else if (playerpoint < computerpoint) {
    var playerstatus = document.getElementById("ppoint");
    playerstatus.style.color = "#FF0000";
    var pcstatus = document.getElementById("cpoint");
    pcstatus.style.color = "#00FF00";
}
}

/* MURATS KODE
var userChoice = prompt("Vælg mellem Sten, Saks og Papir?");

var userChLowerCase = userChoice.toLowerCase();
console.log(userChLowerCase);
var computerChoice = Math.floor(Math.random() * 3) + 1;
console.log(computerChoice);
console.log(userChoice);

if (computerChoice === 1) {
    computerChoice = "Sten";
    if (userChLowerCase == "saks") {
        window.alert("Computeren valgte: " + computerChoice + " og du valgte " + userChLowerCase + "." + " Computeren VANDT!");
    } else if (userChLowerCase == "papir") {
        window.alert("Computeren valgte: " + computerChoice + " og du valgte " + userChLowerCase + "." + " DU VANDT!");
    } else {
        window.alert("Computeren valgte: " + computerChoice + " og du valgte " + userChLowerCase + "." + " UAFGJORT!");
    }
}
if (computerChoice === 2) {
    computerChoice = "Papir";
    if (userChLowerCase == "saks") {
        window.alert("Computeren valgte: " + computerChoice + " og du valgte " + userChLowerCase + "." + " DU VANDT!");
    } else if (userChLowerCase = "sten") {
        window.alert("Computeren valgte: " + computerChoice + " og du valgte " + userChLowerCase + "." + " Computeren VANDT!");
    } else {
        window.alert("Computeren valgte: " + computerChoice + " og du valgte " + userChoice + "." + " UAFGJORT!");
    }
}
if (computerChoice === 3) {
    computerChoice = "Saks";
    if (userChLowerCase == "papir") {
        window.alert("Computeren valgte: " + computerChoice + " og du valgte " + userChLowerCase + "." + " Computeren VANDT!");
    } else if (userChLowerCase == "sten") {
        window.alert("Computeren valgte: " + computerChoice + " og du valgte " + userChLowerCase + "." + " DU VANDT!");
    } else {
        window.alert("Computeren valgte: " + computerChoice + " og du valgte " + userChLowerCase + "." + " UAFGJORT!");
    }
}

*/