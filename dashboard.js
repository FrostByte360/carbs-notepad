const dashboardOverlay = document.querySelector(".dashboard-overlay");

if (dashboardOverlay) {
  // Wait until the browser has rendered the black overlay
  requestAnimationFrame(function () {
    requestAnimationFrame(function () {
      dashboardOverlay.classList.add("fade-out");
    });
  });
}
