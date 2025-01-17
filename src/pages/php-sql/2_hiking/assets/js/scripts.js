// ALERTS
const alertContainer = document.querySelector(".alert-container");
const alertMessages = document.querySelectorAll(".alert");

if (alertMessages.length > 0) {
  alertMessages.forEach((alert) => {
    setTimeout(() => {
      alert.classList.add("fade-out");

      setTimeout(() => {
        alert.remove();
      }, 1500);
    }, 5000);
  });
}
