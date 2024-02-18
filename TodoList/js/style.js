// Select all delete buttons
const deleteButtons = document.querySelectorAll('.delete-btn');

// Add click event listener to each delete button
deleteButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove the parent todo-item when the delete button is clicked
        button.parentElement.remove();
    });
});
