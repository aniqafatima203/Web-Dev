// Get references to the button and select elements
const clickButton = document.getElementById('clickButton');
const colorSelect = document.getElementById('colorSelect');
const output = document.getElementById('output');

// Add an event listener for the button click
clickButton.addEventListener('click', function() {
    output.textContent = 'Button was clicked!';
});

// Add an event listener for the select change
colorSelect.addEventListener('change', function() {
    const selectedColor = colorSelect.value;
    if (selectedColor) {
        output.textContent = `You selected: ${selectedColor}`;
        output.style.color = selectedColor; // Change text color to the selected color
    } else {
        output.textContent = ''; // Clear output if no color is selected
    }
});