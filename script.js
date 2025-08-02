document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("toggleBtn");
    const navLinks = document.getElementById("navLinks");
    const toggleIcon = toggleBtn.querySelector("i");

    toggleBtn.addEventListener("click", function () {
        navLinks.classList.toggle("active"); 
        toggleIcon.classList.toggle("fa-bars"); 
        toggleIcon.classList.toggle("fa-xmark"); 
    });
});