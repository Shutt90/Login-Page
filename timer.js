const labelTimer = document.querySelector(".labelTimer");
const startLogOutTimer = function () {
  const tick = function () {
    const min = String(Math.trunc(time / 60)).padStart(2, 0);
    const sec = String(time % 60).padStart(2, 0);
    labelTimer.innerHTML = `${min}:${sec}`;

    if (time === 0) {
      clearInterval(timer);
      window.location.replace("./login.php");
    }

    time--;
  };
  let time = 120;
  const timer = setInterval(tick(), 1000);
  return timer;
};
document.querySelector("body").addEventListener("click", function (e) {
  e.preventDefault;
  startLogOutTimer();
});
