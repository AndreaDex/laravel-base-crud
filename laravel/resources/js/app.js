require("./bootstrap");

const formsDestroy = document.getElementsByClassName("destroyForm");

for (var i = 0; i < formsDestroy.length; i++) {
    formsDestroy[i].addEventListener("submit", function(e) {
        e.preventDefault();
        if (confirm("The manga will be delete definitely. Are you sure ?")) {
            // alert("confirmed");
            this.submit();
        }
    });
}
/* 
function confirmDelete() {
    return confirm("Are your sure ?");
} */
