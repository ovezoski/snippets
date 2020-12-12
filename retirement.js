var calculateButton = document.getElementById('calculateButton')
var result = document.getElementById('result')

console.log(calculateButton)

calculateButton.onclick = function (){
  result.style.display='flex'
  result.scrollIntoView({ behavior: 'smooth'});
}
