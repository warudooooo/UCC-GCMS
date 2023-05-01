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