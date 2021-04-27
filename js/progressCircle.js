$(document).ready(function() {
  var $skillbar = $('.skillbar'),
    radius = $skillbar.find('circle').attr('r'),
    percent = $skillbar.data('percent'),
    circumference = 2 * radius * Math.PI,
    level = percent * circumference / 100
  $skillbar.css('stroke-dasharray', level + ' 999')
})