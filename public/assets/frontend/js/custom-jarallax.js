init = function () {
    var jarallax = new Jarallax();

    jarallax.addAnimation('.food1', [{ progress: '0%', top: '-30%' }, { progress: '100%', top: '150%' }]);
    jarallax.addAnimation('.food2', [{ progress: '0%', top: '10%' }, { progress: '100%', top: '180%' }])
    jarallax.addAnimation('.food3', [{ progress: '0%', top: '-10%' }, { progress: '100%', top: '160%' }]);
    jarallax.addAnimation('.food4', [{ progress: '0%', top: '-35%' }, { progress: '100%', top: '120%' }]);
}

$(window).scroll(function () {
    var rotate = $(window).scrollTop() / 100 % Math.PI;
    $('.food1').css({ transform: 'rotate(' + rotate + 'rad)' });
    $('.food2').css({ transform: 'rotate(' + rotate + 'rad)' });
    var rotate_1 = $(window).scrollTop() / 150 % Math.PI;
    $('.food3').css({ transform: 'rotate(' + rotate_1 + 'rad)' });
});
