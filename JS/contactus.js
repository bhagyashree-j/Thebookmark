const inputs = document.querySelectorAll(".input");   //the const inputs stores the element that matches the css selector-input
function focusFunc() {                                //we created a function called focusFunct
  let parent = this.parentNode;                       //getting the parent node of the object this
  parent.classList.add("focus");                      //this add focus to the collection of class attributes of the parent
}

function blurFunc() {                                 //we create a new function called blurF
  let parent = this.parentNode;                       //getting the parent node of the object this
  if (this.value == "") {                             
    parent.classList.remove("focus");                 //if the value of the object "this" is empty then we remove the focus from the collection of class attributes of the parent
  }
}

inputs.forEach((input) => {                           //for each input in inputs we add the event focus and the event blur along with the function focusFunc blurFunc
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
