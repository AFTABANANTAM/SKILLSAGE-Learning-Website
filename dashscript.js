let inputText = document.getElementById("inputContainer");
let listItem = document.getElementById("listContainer");
let dark = document.getElementById("dark");
let time = document.getElementById("date");
// adding task and delete btn 
function addTask(){
    if(inputText.value === ""){
        alert("Please enter the task");
    }
    else{
        let li = document.createElement("li");
        li.innerText= inputText.value;
        listItem.appendChild(li);
        let deleteBtn = document.createElement("button");
        deleteBtn.textContent = "Delete";
        deleteBtn.classList.add("deleteBtn");
        li.appendChild(deleteBtn);
    }
    inputText.value = "";
    saveData();
}


// for removing the task that is completed
listItem.addEventListener("click",(event)=>{
    if(event.target.tagName === "LI"){
        event.target.classList.toggle("checked");
        saveData();
    }
    else if(event.target.tagName === "BUTTON"){
        event.target.parentElement.remove();
        saveData();
    }
});

// adding event listener
dark.addEventListener("click",()=>{
    dark.classList.toggle("darkMode");
});

// to save the info for further usage
function saveData(){
    localStorage.setItem("data",listItem.innerHTML);
}

// to show the data whenever the website is loaded
function showTask(){
    listItem.innerHTML = localStorage.getItem("data");
}

showTask();

//displaying the time 
time.innerHTML = new Date();
time.classList.add("timeStyle");