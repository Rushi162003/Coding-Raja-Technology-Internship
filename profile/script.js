        
// document.addEventListener('DOMContentLoaded', function () {
//   // Get references to checkboxes and result element
//   var check1 = document.getElementById('check1');
//   var check2 = document.getElementById('check2');
//   var resultElement = document.getElementById('total');

//   // Initialize total
//   var total = 0;

//   // Function to update total when a checkbox is checked or unchecked
//   function updateTotal() {
//     total = 0;

//     // Check each checkbox and add its value to the total if checked
//     if (check1.checked) {
//       total += parseInt(check1.value);
//     }

//     if (check2.checked) {
//       total += parseInt(check2.value);
//     }
//     // Update the result element
//     resultElement.textContent = total;
//   }

//   // Attach event listeners to checkboxes
//   check1.addEventListener('change', updateTotal);
//   check2.addEventListener('change', updateTotal);
// });

// // function amount(){
//   // function amount() {
//     var qty = parseInt(document.getElementById('qty').value);
//     var first_pro = parseInt(document.getElementById('rate').value);
//     var second_pro = parseInt(document.getElementById('rate2').value);
//     var priceElement = document.getElementsByName('price')[0];
  
//     if (qty >= 1) {
//       var totalPrice = qty * first_pro ;
//       document.getElementsByName('price').innerHTML = totalPrice;
//     }
//   // }
  
// // }
const checkboxes = document.querySelectorAll('input[type="checkbox"]');
let sum = 0;

// Add event listener to each checkbox
checkboxes.forEach(function(checkbox) {
  checkbox.addEventListener('change', function() {
    // If checkbox is checked, add its value to the sum, else subtract its value
    if (this.checked) {
      sum += parseInt(this.value);
    } else {
      sum -= parseInt(this.value);
    }
    // Update the result
    document.getElementById('result').innerText = 'Sum: ' + sum;
  });
});