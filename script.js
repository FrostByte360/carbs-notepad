const loginForm = document.getElementById("loginForm");
const overlay = document.querySelector(".transition-overlay");
const logo = document.querySelector(".transition-logo");

if (loginForm && overlay && logo) {
  let isTransitioning = false;

  loginForm.addEventListener("submit", function (event) {
    event.preventDefault();

    if (isTransitioning) return;
    isTransitioning = true;

    // 1. Fade the screen to black
    overlay.classList.add("active");

    // 2. Fade the logo in
    setTimeout(function () {
      logo.classList.add("visible");
    }, 1000);

    // 3. Fade the logo out
    setTimeout(function () {
      logo.classList.remove("visible");
    }, 3500);

    // 4. Submit the form after the logo disappears
    setTimeout(function () {
      loginForm.submit();
    }, 4500);
  });
}
