var phrases = ['Uh-oh! This is not good.', 'Someone stepped on a cable.', 'The server may have exploded.', 'Thank you server, very cool!'];






var get = function get(n) {return phrases[typeof n === 'number' ? n : Math.round(Math.random() * (phrases.length - 1))];};
var upd = function upd(n) {return document.querySelector('h2').textContent = get(n);};

upd();

var curr = 0;
document.addEventListener('click', function () {return upd(++curr >= phrases.length ? curr = 0 : curr);}, false);