function animateCircle(bar) {
  var $bar = $('.' + bar),
    radius = $bar.find('circle').attr('r'),
    percent = $bar.data('percent'),
    circumference = 2 * radius * Math.PI,
    level = percent * circumference / 100
  $bar.css('stroke-dasharray', level + ' 999')
}

animateCircle('bar_html');
animateCircle('bar_css');
animateCircle('bar_scss');
animateCircle('bar_php');
animateCircle('bar_c');
animateCircle('bar_py');
animateCircle('bar_js');
animateCircle('bar_mat');
animateCircle('bar_sql');

animateCircle('bar_team');
animateCircle('bar_doc');
animateCircle('bar_scr');
animateCircle('bar_ldr');
animateCircle('bar_ht');
animateCircle('bar_ca');
animateCircle('bar_sa');
animateCircle('bar_pr');