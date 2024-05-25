const inputs = document.querySelectorAll(".input");
const input_special = document.getElementsByClassName("input_special");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});


input_special.addEventListener("focus", focusFunc);
input_special.addEventListener("blur", focusFunc);