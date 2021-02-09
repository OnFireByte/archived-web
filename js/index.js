Math.randomRangeInt = (min, max) =>
  Math.floor(Math.random() * (max - min + 1) + min);

function onLoad() {
  //RandomAccent
  document.getElementById(
    "randomAccent_Hello_" + Math.randomRangeInt(1, 4)
  ).style.cssText =
    "background-color:#27e8a7; color:#1d212f;padding:0 2px;margin: 0;font-weight:550;";

  document.getElementById(
    "randomAccent_World_" + Math.randomRangeInt(1, 4)
  ).style.cssText =
    "background-color:#27e8a7; color:#1d212f;padding:0 2px;margin: 0;font-weight:550;";
}

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(() => {
    onLoad();
  }, 500);
});
