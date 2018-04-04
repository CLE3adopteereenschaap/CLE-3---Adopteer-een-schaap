var state = 100;

var d = new Date();
var f =  d.setMinutes(d.getMinutes() + 30);

console.log(d);
console.log(f);

if (f > d){
    console.log('geen idee');
} else {
    console.log('zal dit werken?');
}