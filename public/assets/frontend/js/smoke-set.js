var canvas = document.getElementById('canvas')
var ctx = canvas.getContext('2d')
canvas.width = innerWidth
canvas.height = innerHeight

var party = smokemachine(ctx, [255, 255, 255])
party.start() // start animating
party.setPreDrawCallback(function (dt) {
    party.addSmoke(innerWidth / 2, innerHeight, .09)
    canvas.width = innerWidth
    canvas.height = innerHeight
})
