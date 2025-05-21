function validateForm() {
    const task = document.forms["taskForm"]["task"].value.trim();
    if (task === "") {
        alert("Zadej prosím nějaký úkol.");
        return false;
    }
    return true;
}
