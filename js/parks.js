/*
    File: attempt at building list of parks.
    Author: Dalton Brooks

    NOTE: Could not get JSON object to parse, or to be assigned to variable. 
    kept getting parks undefined error due to this.
*/
var getpark = '';
function buildDisplayForParks(getpark){
var parksDiv = document.getElementById('admin-parks');
var display = '';
var parks;


    display += '<div>';
    display += '<table>';
    display += '<thead><tr><th>State</th><th>Park</th><th>URL</th></tr></thead>';
    for(var i=0; i<50; i++){
    display += '<tr><td>' + data.parks[i].state + '</td>';
    var numberOfParks = data.parks[i].parks.length;
    for(var j=0; j<numberOfParks; j++){
        if(j > 0){
            display += '</tr><tr><td></td>'
        }
        display += '<td>' + data.parks[i].parks[j] + '</td>';
        display +='<td>' + '<a href=' + data.parks[i].url[j] + '>';
        display += data.parks[i].url[j] + '</a></td></tr>';
    }
    }
    display += '</table></div>';
    getpark += display;
parksDiv.innerHTML = getpark;
}
function JSONload(){
var xhr = new XMLHttpRequest();
xhr.onload = function(){
    if(this.status === 200){
        data = JSON.parse(this.responseText);
    }
}
    xhr.open('GET', '../data/parks.json',false);
    xhr.send();
}
function addPark(){
getpark += '<div>';
getpark += '<form>';
getpark += 'State: <br>';
getpark += '<input type="text" name="state"><br>';
getpark += 'Park: <br>';
getpark += '<input type="text" name="park"><br>';
getpark += 'Url: <br>';
getpark += '<input type="text" name="url"><br>';
getpark += '<button type="submit" onsubmit="addParkToDisplay()">Add Park</button>';
getpark += '</form>';
addDiv = document.getElementById('add-parks');
return getpark;
}
JSONload();
addPark();
buildDisplayForParks(getpark);
