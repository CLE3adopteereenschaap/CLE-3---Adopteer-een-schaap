var twenty = document.getElementById('twenty');
var ten = document.getElementById('ten');
var five = document.getElementById('five');

var pnts = ar[0].points;
console.log(pnts);

var newPnts;

function backToPhp() {
    $.ajax({
        url: 'backend.php',
        method: 'GET',
        type: 'xhr',
        data: {name: 'janessa'},
    });
}

function pntDecrease (e){
    var clickedItem = e.target;
    if (clickedItem === twenty) {
        if ((pnts - 20) <= 0) {
            alert("Sorry, je hebt niet genoeg punten!")
        } else {
            pnts -= 20;
            console.log(pnts);
            newPnts = JSON.stringify(newPnts);
            backToPhp();
        }
    } else if (clickedItem === ten){
        if ((pnts - 10) <= 0) {
            alert("Sorry, je hebt niet genoeg punten!")
        } else {
            pnts -= 10;
            console.log(pnts);
            newPnts = JSON.stringify(pnts);
        }
    } else {
        if ((pnts - 5) <= 0) {
            alert("Sorry, je hebt niet genoeg punten!")
        } else {
            pnts -= 5;
            console.log(pnts);
            newPnts = JSON.stringify(pnts);
        }
    }
}

twenty.addEventListener('click', pntDecrease);
ten.addEventListener('click', pntDecrease);
five.addEventListener('click', pntDecrease);


