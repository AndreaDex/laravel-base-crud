require("./bootstrap");

const btn = document.getElementById("destroy");

btn.addEventListener("click", confirmDelete());

function confirmDelete() {
    return confirm("Are your sure ?");
}
