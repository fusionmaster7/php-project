console.log("Working");

//SET VISIBILITY
document.getElementsByClassName("timer-container")[0].style.visibility =
  "visible";

//FUNCTION TO TOGGLE TIMER
const toggleTimer = () => {
  const timerRef = document.getElementsByClassName("timer-container")[0];
  const isVisible = timerRef.style.visibility === "visible" ? true : false;
  timerRef.style.visibility = isVisible === true ? "hidden" : "visible";
};

//TO ENSURE DATE ALWAYS APPEARS IN DOUBLE DIGITS
const formatDate = (val) => {
  return val < 10 ? `0${val}` : val;
};

//SET AN INTERVAL TO UPDATE DATE
setInterval(() => {
  const date = new Date();
  const day = formatDate(date.getDate());
  const hours = formatDate(date.getHours());
  const minutes = formatDate(date.getMinutes());
  const seconds = formatDate(date.getSeconds());
  document.getElementById(
    "timer"
  ).innerHTML = `${day}:${hours}:${minutes}:${seconds}`;
}, 1000);
