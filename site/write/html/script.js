const form = document.getElementById('writeLetter');

form.addEventListener('submit', function(event) {
  const inputs = form.querySelectorAll('input[type="text"]');
  let isFormValid = true;

  inputs.forEach(function(input) {
    if (!input.value) {
      isFormValid = false;
    }
  });

  if (!isFormValid) {
    event.preventDefault();
    alert("Oops! You haven't finished writing your letter!");
  }
});