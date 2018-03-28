var twenty = document.getElementsByClassName('twenty');
var ten = document.getElementsByClassName('ten');
var five = document.getElementsByClassName('five');

var pnts = ar[0].points;
console.log(pnts);

var $newPnts;

var pntDecrease = function(clickedItem){
    if (clickedItem === twenty) {
        if ((pnts - 20) <= 0) {
            alert("Sorry, je hebt niet genoeg punten!")
        } else {
            pnts -= 20;
            console.log(pnts);
            $newPnts = pnts;
            return $newPnts;
        }
    } else if (clickedItem === ten){
        if ((pnts - 10) <= 0) {
            alert("Sorry, je hebt niet genoeg punten!")
        } else {
            pnts -= 10;
            console.log(pnts);
        }
    } else {
        if ((pnts - 5) <= 0) {
            alert("Sorry, je hebt niet genoeg punten!")
        } else {
            pnts -= 5;
            console.log(pnts);
        }
    }
};

$.ajax({
    url: 'backend.php',
    data: {x: $newPnts},
    type: 'POST'
});

console.log($newPnts);