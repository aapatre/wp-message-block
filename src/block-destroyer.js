window.addEventListener('load', function () {

    const messageBlocks = document.querySelectorAll('.button-close');

    console.log(messageBlocks);

    messageBlocks.forEach(msgBlock => {
        msgBlock.addEventListener("click", function(event) {
            event.target.parentElement.remove();
        }); 
    });

}) 