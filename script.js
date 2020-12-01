var plus = document.getElementById('plus');
var minus = document.getElementById('minus');
var multiplication = document.getElementById('multiplication');
var devided = document.getElementById('devided');
var nr1 = document.getElementById('liczba1');
var nr2 = document.getElementById('liczba2');
var infoEl = document.getElementById('info');
var res;
function condition() {
    if(nr1.value == '' || nr2.value == '' || (nr1.value == '' && nr2.value == '')) {
        infoEl.innerText = 'Podaj obie liczby!';
        return false;
    } else {
        return true;
    }
}
plus.addEventListener('click', function() {
    var valid = condition();
    if(valid) {
        res = parseFloat(nr1.value) + parseFloat(nr2.value);
        infoEl.innerText = 'Wynik to: ' + res;
    }
});
minus.addEventListener('click', function() {
    var valid = condition();
    if(valid) {
        res = nr1.value - nr2.value;
        infoEl.innerText = 'Wynik to: ' + res;
    }
});
multiplication.addEventListener('click', function() {
    var valid = condition();
    if(valid) {
        res = nr1.value * nr2.value;
        infoEl.innerText = 'Wynik to: ' + res;
    }
});
devided.addEventListener('click', function() {
    var valid = condition();
    if(valid) {
        if(nr2.value == 0) {
            infoEl.innerText = 'Nie wolno dzielić przez zero!';
        } else {
            res = nr1.value / nr2.value;
            infoEl.innerText = 'Wynik to: ' + res;
        }
    }
});