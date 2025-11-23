function changeTab(tab, date) {
    document
        .querySelectorAll(".nav-link")
        .forEach((el) => el.classList.remove("active"));
    tab.classList.add("active");
    const form = document.getElementById("filterForm");
    let dateInput = form.querySelector('input[name="date"]');
    if (!dateInput) {
        dateInput = document.createElement("input");
        dateInput.type = "hidden";
        dateInput.name = "date";
        form.appendChild(dateInput);
    }
    dateInput.value = date;
    form.submit();
}

function resetFilters() {
    const form = document.getElementById("filterForm");
    let dateInput = form.querySelector('input[name="date"]');
    if (dateInput) dateInput.remove();
    document.getElementById("categorySelect").value = "";
    form.submit();
}

function changeTab(element, date) {
    document.getElementById("dateInput").value = date;
    document.getElementById("filterForm").submit();
}

function resetFilters() {
    document.getElementById("dateInput").value = "";
    document.getElementById("filterForm").submit();
}
