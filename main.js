document.addEventListener('DOMContentLoaded', () => {
  console.log('fock')
  animate_text();

})
function animate_text() {
  let delay = 200,
    delay_start = 0,
    contents,
    letters;

  let elem = document.querySelector("#animateTitle p")
  contents = elem.textContent;
  elem.textContent = "";
  letters = contents.split("");
  elem.style.visibility = 'visible';
  console.log(letters)
  letters.forEach((letter, index_1) => {
    setTimeout(function () {

      elem.textContent += letter;

    }, delay_start + delay * index_1);
  });
  delay_start += delay * letters.length;

}
