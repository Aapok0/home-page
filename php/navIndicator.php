<?php
  // Checking which site we are on
  $url = $_SERVER["REQUEST_URI"];
  $pos1 = strrpos($url, "index.php");
  $pos2 = strrpos($url, "about.php");
  $pos3 = strrpos($url, "resume.php");
  $pos4 = strrpos($url, "skills.php");
  $pos5 = strrpos($url, "interests.php");
  $pos6 = strrpos($url, "contacts.php");

  // Putting html into variables
  $home = "<a class=\"navbar-item is-flex-direction-column is-justify-content-space-around\" href=\"index.php\"><img class=\"mb-1\" src=\"img/home.png\" alt=\"Home\">Home</a>";
  $about = "<a class=\"navbar-item is-flex-direction-column is-justify-content-space-around\" href=\"about.php\"><img class=\"mb-1\" src=\"img/about.png\" alt=\"About\">About</a>";
  $resume = "<a class=\"navbar-item is-flex-direction-column is-justify-content-space-around\" href=\"resume.php\"><img class=\"mb-1\" src=\"img/resume.png\" alt=\"Resume\">Resume</a>";
  $skills = "<a class=\"navbar-item is-flex-direction-column is-justify-content-space-around\" href=\"skills.php\"><img class=\"mb-1\" src=\"img/skills.png\" alt=\"Skills\">Skills</a>";
  $interests = "<a class=\"navbar-item is-flex-direction-column is-justify-content-space-around\" href=\"interests.php\"><img class=\"mb-1\" src=\"img/interests.png\" alt=\"Interests\">Interests</a>";
  $contacts = "<a class=\"navbar-item is-flex-direction-column is-justify-content-space-around\" href=\"contacts.php\"><img class=\"mb-1\" src=\"img/contacts.png\" alt=\"Contacts\">Contacts</a>";
  $version1 = "<a class=\"navbar-item is-flex-direction-column is-justify-content-space-around\" href=\"../index.php\"><img class=\"mb-1\" src=\"img/home.png\" alt=\"Home-Version 1\">Home-Version 1</a>";

  // Class that adds indicator to the page you are on
  if ($pos1 != false) {
    echo "<a class=\"navbar-item is-open is-flex-direction-column is-justify-content-space-around has-text-weight-bold\" href=\"index.php\"><img class=\"mb-1\" src=\"img/home-dark.png\" alt=\"Home\">Home</a>";
    echo $about;
    echo $resume;
    echo $skills;
    echo $interests;
    echo $contacts;
    echo $version1;
  }
  else if ($pos2 != false) {
    echo $home;
    echo "<a class=\"navbar-item is-open is-flex-direction-column is-justify-content-space-around has-text-weight-bold\" href=\"about.php\"><img class=\"mb-1\" src=\"img/about-dark.png\" alt=\"About\">About</a>";
    echo $resume;
    echo $skills;
    echo $interests;
    echo $contacts;
    echo $version1;
  }
  else if ($pos3 != false) {
    echo $home;
    echo $about;
    echo "<a class=\"navbar-item is-open is-flex-direction-column is-justify-content-space-around has-text-weight-bold\" href=\"resume.php\"><img class=\"mb-1\" src=\"img/resume-dark.png\" alt=\"Resume\">Resume</a>";
    echo $skills;
    echo $interests;
    echo $contacts;
    echo $version1;
  }
  else if ($pos4 != false) {
    echo $home;
    echo $about;
    echo $resume;
    echo "<a class=\"navbar-item is-open is-flex-direction-column is-justify-content-space-around has-text-weight-bold\" href=\"skills.php\"><img class=\"mb-1\" src=\"img/skills-dark.png\" alt=\"Skills\">Skills</a>";
    echo $interests;
    echo $contacts;
    echo $version1;
  }
  else if ($pos5 != false) {
    echo $home;
    echo $about;
    echo $resume;
    echo $skills;
    echo "<a class=\"navbar-item is-open is-flex-direction-column is-justify-content-space-around has-text-weight-bold\" href=\"interests.php\"><img class=\"mb-1\" src=\"img/interests-dark.png\" alt=\"Interests\">Interests</a>";
    echo $contacts;
    echo $version1;
  }
  else if ($pos6 != false) {
    echo $home;
    echo $about;
    echo $resume;
    echo $skills;
    echo $interests;
    echo "<a class=\"navbar-item is-open is-flex-direction-column is-justify-content-space-around has-text-weight-bold\" href=\"contacts.php\"><img class=\"mb-1\" src=\"img/contacts-dark.png\" alt=\"Contacts\">Contacts</a>";
    echo $version1;
  }
  else {
    echo $home;
    echo $about;
    echo $resume;
    echo $skills;
    echo $interests;
    echo $contacts;
    echo $version1;
  }
?>