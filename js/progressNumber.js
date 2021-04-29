var anim_speed = 10;

// Function to get the element and the skill level
function animateNumber(nm) {
  el = document.getElementById(nm);
  lastnm = Number(document.getElementById(nm).innerHTML);
  increaseNumber(0, lastnm, el);
}

// Recursive function to increase number with increments
function increaseNumber(i, lastnm, el) {
  if (i <= lastnm) {
    el.innerHTML = i;
    setTimeout(function() { // Change animation speed with delay
      increaseNumber(i + 1, lastnm, el);
    }, anim_speed);
  }
}

animateNumber("nm_html");
animateNumber("nm_css");
animateNumber("nm_scss");
animateNumber("nm_php");
animateNumber("nm_team");
animateNumber("nm_doc");