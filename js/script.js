
document.addEventListener("DOMContentLoaded", function() {
    const inputs = document.querySelectorAll(".floatLabel");
    inputs.forEach(input => {
        input.addEventListener("focus", () => {
            const label = input.nextElementSibling;
            if (label) {
                label.classList.add("active");
            }
        });
        input.addEventListener("blur", () => {
            if (input.value === "") {
                const label = input.nextElementSibling;
                if (label) {
                    label.classList.remove("active");
                }
            }
        });
    });
});


window.onbeforeunload = function() {
    window.scrollTo(0, 0);
};
