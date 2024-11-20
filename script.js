function toggleStep(stepNumber) {
  var step = document.getElementById("step-" + stepNumber);
  step.classList.toggle("open");
}
function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}
