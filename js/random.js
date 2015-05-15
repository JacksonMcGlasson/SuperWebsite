
var howMany = 9; // max number of items listed below 
var page = new Array(howMany+1); 

page[0]="article1.php"; 
page[1]="article2.php"; 
page[2]="third.php"; 


function rndnumber(){ 
var randscript = -1; 
while (randscript < 0 || randscript > howMany || isNaN(randscript)){ 
randscript = parseInt(Math.random()*(howMany+1)); 
} 
return randscript; 
} 
quo = rndnumber(); 
quox = page[quo]; 
window.location=(quox);


