document.addEventListener("DOMContentLoaded", () => {
    const btnAddTextInput = document.querySelector(".btn-add-text-field");

    btnAddTextInput.addEventListener("click", (e) => {
        const sibling = btnAddTextInput.previousElementSibling;
        if (sibling && sibling.matches("input[type=text]")) {
            const newInput = sibling.cloneNode(true);
            newInput.value = "";
            btnAddTextInput.before(newInput);
        }
    });
})

