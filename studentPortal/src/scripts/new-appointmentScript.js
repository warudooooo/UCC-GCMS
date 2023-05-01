const optionMenu = document.querySelector(".select-menu"),
    selectBtn = optionMenu.querySelector(".select-btn"),
    options = optionMenu.querySelectorAll(".option"),
    sBtn_text = optionMenu.querySelector(".sBtn-text"),
    sBtn_text_clone = optionMenu.querySelector(".sBtn-text-clone");
    

selectBtn.addEventListener("click",() => optionMenu.classList.toggle("active"));

options.forEach(option => {
    option.addEventListener("click", () =>{
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;
        sBtn_text_clone.innerText = selectedOption;

        optionMenu.classList.remove("active");
    })
})

flatpickr("input[type=datetime-local]", {
    disableMobile: "true",
    minDate: "today",
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    altInput: true,
    altFormat: "F j, Y (h:i K)",
    minTime: "08:00",
    maxTime: "17:00",
    minuteIncrement: "30",
});

if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}