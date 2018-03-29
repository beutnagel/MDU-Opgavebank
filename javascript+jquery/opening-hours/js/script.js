// variabel erklæringer

// indeholder datoen og tidspunktet 
var today = new Date();

// indeholder klokkeslet
var hourNow = today.getHours();

// indeholder miutter
var minutesNow = today.getMinutes();

// indeholder hilsen
var greeting;

var weekday_value = today.getDay();

// Et array som indeholder alle ugedagene
var weekdays = new Array(7);
weekdays[0] = "Sunday";
weekdays[1] = "Monday";
weekdays[2] = "Tuesday";
weekdays[3] = "Wednesday";
weekdays[4] = "Thursday";
weekdays[5] = "Friday";
weekdays[6] = "Saturday";

// alert(today.getHours() );
// alert(today.getMinutes() );


if(hourNow >= 17 && hourNow <= 23){
	greeting = 'Good evening';
} 
else if (hourNow >= 00 && hourNow <= 5){
	greeting = 'Good Night';
} 
else if (hourNow >= 6 && hourNow <= 12){
	greeting = 'Good morning';
}
else {
	greeting = 'Good afternoon';
}

document.write('<h3>' + greeting + '</h3><br>');

document.write('<h4>' + hourNow +':' + minutesNow + '</h4><br>');

document.write('<h4>' + weekdays[weekday_value] + '</h4><br>');















