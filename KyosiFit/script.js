function calculateBMI() {
    var weight = document.getElementById('weight').value;
    var height = document.getElementById('height').value;
    if (weight && height) {
      var bmi = (weight / ((height / 100) * (height / 100))).toFixed(2);
  
      var resultDiv = document.getElementById('result');
      resultDiv.innerHTML = '<p>Your BMI is: ' + bmi + '</p>';
    } else {
      alert('Please enter valid weight and height values.');
    }
  }
  