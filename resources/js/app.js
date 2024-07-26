import './bootstrap';

window.initCardOverlay = function () {
    window.initCardOverlay = function () {
    var cards = document.querySelectorAll('.card-component');
    cards.forEach(function(card) {
        card.addEventListener('mouseover', function() {
            alert('hovered');
        });
        card.addEventListener('mouseout', function() {
            alert('unhovered');
        });
    });
}
}
