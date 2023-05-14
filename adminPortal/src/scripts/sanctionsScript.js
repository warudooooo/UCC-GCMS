
const caseDropdown = document.getElementById("case");
const degreeDropdown = document.getElementById("degree");
const sanctionDropdown = document.getElementById("sanction");

caseDropdown.addEventListener("change", function () {

    const selectedCase = caseDropdown.value;
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = xhr.responseText;
            if (selectedCase === "Flag Ceremony Attendance") {
                if (response === "No Data was Found.") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Warning";
                    sanctionDropdown.text = "Warning";
                    degreeDropdown.value = "Mild";
                    degreeDropdown.text = "Mild";
                } else if (response === "1") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 2nd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Written reprimand";
                    sanctionDropdown.text = "Written reprimand";
                    degreeDropdown.value = "Mild";
                    degreeDropdown.text = "Mild";
                } else if (response === "2") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 3rd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "One (1) day Suspension and 12 hours of community service";
                    sanctionDropdown.text = "One (1) day Suspension and 12 hours of community service";
                    degreeDropdown.value = "Mild";
                    degreeDropdown.text = "Mild";
                } else {
                    let totalCase = parseInt(response) + 1;
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's " + totalCase + "th offense. You can manually select the sanction you will give.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "Mild";
                    degreeDropdown.text = "Mild";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                }
            } else if (selectedCase === "No ID, No Entry Policy") {
                if (response === "No Data was Found.") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Warning";
                    sanctionDropdown.text = "Warning";
                    degreeDropdown.value = "Mild";
                    degreeDropdown.text = "Mild";
                } else if (response === "1") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 2nd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Written reprimand";
                    sanctionDropdown.text = "Written reprimand";
                    degreeDropdown.value = "Mild";
                    degreeDropdown.text = "Mild";
                } else if (response === "2") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 3rd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "One (1) day Suspension and 6 hours of community service";
                    sanctionDropdown.text = "One (1) day Suspension and 6 hours of community service";
                    degreeDropdown.value = "Mild";
                    degreeDropdown.text = "Mild";
                } else {
                    let totalCase = parseInt(response) + 1;
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's " + totalCase + "th offense. You can manually select the sanction you will give.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "Mild";
                    degreeDropdown.text = "Mild";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                }
            } else if (selectedCase === "Loitering, Littering and Commiting Unsanitary Acts") {
                if (response === "No Data was Found.") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Warning";
                    sanctionDropdown.text = "Warning";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else if (response === "1") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 2nd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Written reprimand";
                    sanctionDropdown.text = "Written reprimand";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else if (response === "2") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 3rd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "One (1) week Suspension";
                    sanctionDropdown.text = "One (1) week Suspension";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else {
                    let totalCase = parseInt(response) + 1;
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's " + totalCase + "th offense. You can manually select the sanction you will give.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate ";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                }
            } else if (selectedCase === "Libelous, Subversive and Defamatory Acts") {
                if (response === "No Data was Found.") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "One (1) week Suspension";
                    sanctionDropdown.text = "One (1) week Suspension";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else if (response === "1") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 2nd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Two (2) weeks Suspension";
                    sanctionDropdown.text = "Two (2) weeks Suspension";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else if (response === "2") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 3rd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Dismissal";
                    sanctionDropdown.text = "Dismissal";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else {
                    let totalCase = parseInt(response) + 1;
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's " + totalCase + "th offense. You can manually select the sanction you will give.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate ";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                }
            } else if (selectedCase === "Alcohol, Smoking, and Drugs") {
                if (response === "No Data was Found.") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "One (1) week Suspension";
                    sanctionDropdown.text = "One (1) week Suspension";
                    degreeDropdown.value = "Severe";
                    degreeDropdown.text = "Severe";
                } else if (response === "1") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 2nd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Dismissal";
                    sanctionDropdown.text = "Dismissal";
                    degreeDropdown.value = "Severe";
                    degreeDropdown.text = "Severe";
                } else {
                    let totalCase = parseInt(response) + 1;
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's " + totalCase + "th offense. You can manually select the sanction you will give.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate ";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                }
            } else if (selectedCase === "Morally and Offensive and Defematory Materials") {
                if (response === "No Data was Found.") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Written reprimand";
                    sanctionDropdown.text = "Written reprimand";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else if (response === "1") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 2nd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "One (1) week Suspension";
                    sanctionDropdown.text = "One (1) week Suspension";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else if (response === "2") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 3rd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Dismissal";
                    sanctionDropdown.text = "Dismissal";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else {
                    let totalCase = parseInt(response) + 1;
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's " + totalCase + "th offense. You can manually select the sanction you will give.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate ";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                }
            } else if (selectedCase === "Habitual Disobedience to Policies, Rules and Regulations") {
                if (response === "No Data was Found.") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Warning";
                    sanctionDropdown.text = "Warning";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else if (response === "1") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 2nd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "Written reprimand";
                    sanctionDropdown.text = "Written reprimand";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else if (response === "2") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 3rd offense. The system will automatically select a degree / sanctions. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    sanctionDropdown.value = "One (1) week Suspension";
                    sanctionDropdown.text = "One (1) week Suspension";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate";
                } else {
                    let totalCase = parseInt(response) + 1;
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's " + totalCase + "th offense. You can manually select the sanction you will give.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "Moderate";
                    degreeDropdown.text = "Moderate ";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                }
            } else if (selectedCase === "Theft and Damage of University properties") {
                if (response === "No Data was Found.") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a sanction based on the degree you selected. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "";
                    degreeDropdown.text = "";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                } else if (response === "1") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a sanction based on the degree you selected. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "";
                    degreeDropdown.text = "";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                } else if (response === "2") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a sanction based on the degree you selected. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "";
                    degreeDropdown.text = "";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                } else {
                    let totalCase = parseInt(response) + 1;
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's " + totalCase + "th offense. You can manually select the sanction you will give.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "";
                    degreeDropdown.text = "";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                }
            } else if (selectedCase === "Immoral and Obscene Conduct") {
                if (response === "No Data was Found.") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a sanction based on the degree you selected. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "";
                    degreeDropdown.text = "";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                } else if (response === "1") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a sanction based on the degree you selected. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "";
                    degreeDropdown.text = "";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                } else if (response === "2") {
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's 1st offense. The system will automatically select a sanction based on the degree you selected. If you think that it is incorrect, you can manually choose it.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "";
                    degreeDropdown.text = "";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                } else {
                    let totalCase = parseInt(response) + 1;
                    document.getElementById("autoSelector").style.display = "none";
                    document.getElementById("offenses").textContent = "Based on the case you selected, the system found that this was the student's " + totalCase + "th offense. You can manually select the sanction you will give.";
                    document.getElementById("offenses").style.display = "auto";
                    degreeDropdown.value = "";
                    degreeDropdown.text = "";
                    sanctionDropdown.value = "";
                    sanctionDropdown.text = "";
                }
            }
        }
    };
    xhr.open("GET", "ajax/get_services_sanctions.php?case=" + selectedCase, true);
    xhr.send();
});

degreeDropdown.addEventListener("change", function () {

    const selectedCase = caseDropdown.value;
    const selectedDegree = degreeDropdown.value;

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const response = xhr.responseText;
            if (selectedCase === "Immoral and Obscene Conduct") {
                if (selectedDegree === "Mild") {
                    sanctionDropdown.value = "Written reprimand";
                    sanctionDropdown.text = "Written reprimand";
                }
                if (selectedDegree === "Moderate") {
                    sanctionDropdown.value = "One (1) day Suspension and 12 hours of community service";
                    sanctionDropdown.text = "One (1) day Suspension and 12 hours of community service";
                }
                if (selectedDegree === "Severe") {
                    sanctionDropdown.value = "One (1) week Suspension";
                    sanctionDropdown.text = "One (1) week Suspension";
                }
            } else if (selectedCase === "Theft and Damage of University properties") {
                if (selectedDegree === "Mild") {
                    sanctionDropdown.value = "One (1) week Suspension";
                    sanctionDropdown.text = "One (1) week Suspension";
                }
                if (selectedDegree === "Moderate") {
                    sanctionDropdown.value = "Two (2) weeks Suspension";
                    sanctionDropdown.text = "Two (2) weeks Suspension";
                }
                if (selectedDegree === "Severe") {
                    sanctionDropdown.value = "Dismissal";
                    sanctionDropdown.text = "Dismissal";
                }
            }
        }
    };
    xhr.open("GET", "ajax/get_services_sanctions.php?case=" + selectedCase, true);
    xhr.send();
});


const optionMenu = document.querySelector(".select-menu"),
    selectBtn = optionMenu.querySelector(".select-btn"),
    options = optionMenu.querySelectorAll(".option"),
    sBtn_text = optionMenu.querySelector(".sBtn-text"),
    sBtn_text_clone = optionMenu.querySelector(".sBtn-text-clone");


selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

options.forEach(option => {
    option.addEventListener("click", () => {
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;
        sBtn_text_clone.innerText = selectedOption;

        optionMenu.classList.remove("active");
    })
});