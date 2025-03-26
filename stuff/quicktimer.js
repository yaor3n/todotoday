
document.addEventListener("DOMContentLoaded", function () {
  let timer;
  let milliseconds = 0;
  let isRunning = false;
  let startTime = 0;

  const timerDisplay = document.getElementById("timer");
  const startBtn = document.getElementById("startBtn");
  const pauseBtn = document.getElementById("pauseBtn");
  const resetBtn = document.getElementById("resetBtn");

  function formatTime(ms) {
    let totalSeconds = Math.floor(ms / 1000);
    let hrs = Math.floor(totalSeconds / 3600);
    let mins = Math.floor((totalSeconds % 3600) / 60);
    let secs = totalSeconds % 60;
    let milisec = Math.floor((ms % 1000) / 10);

    return (
      String(hrs).padStart(2, "0") + ":" +
      String(mins).padStart(2, "0") + ":" +
      String(secs).padStart(2, "0") + "." +
      String(milisec).padStart(2, "0")
    );
  }

  if (startBtn && pauseBtn && resetBtn && timerDisplay) {
    startBtn.addEventListener("click", function () {
      if (!isRunning) {
        isRunning = true;
        startTime = Date.now() - milliseconds;

        timer = setInterval(() => {
          milliseconds = Date.now() - startTime;
          timerDisplay.textContent = formatTime(milliseconds);
        }, 10);
      }
    });

    pauseBtn.addEventListener("click", function () {
      clearInterval(timer);
      isRunning = false;
    });

    resetBtn.addEventListener("click", function () {
      clearInterval(timer);
      milliseconds = 0;
      timerDisplay.textContent = "00:00:00.00";
      isRunning = false;
    });
  }
});
