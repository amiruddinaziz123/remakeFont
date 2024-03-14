const munculkanButton = document.getElementById("munculkanButton");
const cards = document.querySelectorAll(".card");
const pembungkusCard = document.getElementById("menu");

munculkanButton.addEventListener('click', function() {
  // Toggle display none/block untuk munculkan/div
  if (pembungkusCard.style.display === 'inline-block') {
      pembungkusCard.style.display = 'none';
  } else {
      pembungkusCard.style.display = 'inline-block';
  }
});
  