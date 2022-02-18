document.addEventListener("DOMContentLoaded", () => {
    document.addEventListener("click", (e) => {
        if (e.target.classList.contains("btn-add-text-field")) {
            const btnAddTextInput = e.target;
            const sibling = btnAddTextInput.previousElementSibling;
            if (sibling) {
                const inputField = sibling.querySelector("input");
                if (inputField && inputField.matches("input[type=text]")) {
                    const newInput = inputField.cloneNode(true);
                    newInput.value = "";
                    inputField.after(newInput);
                }
            }
        }
    })
})

