// Let the page load before firing query to select all the button elements.
window.addEventListener('load', function () {

    // Select all close buttons in the block.
    const messageBlocks = document.querySelectorAll('.button-close');

    // Add click listener to all the close buttons of the blocks.
    messageBlocks.forEach(msgBlock => {
        msgBlock.addEventListener("click", function(event) {
            event.target.parentElement.remove();    // Destroy the block by removing their parent element.
        }); 
    });

}) 