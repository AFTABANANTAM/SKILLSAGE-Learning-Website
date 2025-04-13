const questions=[
    {
     question:"Which file is used to declare app premission in Android ? ",
     answers:[
        {text: "MainActivity.java",correct: false}, 
        {text: "activity_main.xml",correct: false},
        {text: "AndroidManifest.xml",correct: true}, 
        {text: "build.gradle",correct: false}, 
     ]
    },
    {
        question:"Which of the following is used for UI design in Android apps ? ",
     answers:[
        {text: "Java",correct: false}, 
        {text: "XML",correct: true},
        {text: "JSON ",correct: false}, 
        {text: "YAML",correct: false}, 
     ]
    },
    {
        question:"What does APK stand for ?",
     answers:[
        {text: "Android Programming Kit",correct: false}, 
        {text: "Android Package",correct: true},
        {text: "App Publishing Kit",correct: false}, 
        {text: "Application Protocol Kit",correct: false}, 
     ]
    },
    {
        question:"What is theofficial IDE for Android development ? ",
     answers:[
        {text: "Eclipse",correct: false}, 
        {text: "IntelliJ IDEA",correct: false},
        {text: "Android Studio",correct:true}, 
        {text: "Visual Studio Code",correct:false}, 
     ]
    },
    {
        question:"In Flutter, what widget is used to create scrollable lists ?",
     answers:[
        {text:"Column ",correct: false}, 
        {text: "Row",correct: false},
        {text: "ListView",correct: true}, 
        {text: "Container",correct: false}, 
     ]
    },
    {
        question: "What is the lifecycle method called when an activity is about to go into the background ?",
     answers:[
        {text: "onCreate()",correct:false}, 
        {text: "onStart()",correct: false},
        {text: "onPause()",correct: true}, 
        {text: "onDestroy()",correct: false}, 
     ]
    },
    {
        question:"Which Flutter widget is used to manage status in a reactive way ? ",
     answers:[
        {text: "StatefulWidget",correct: true}, 
        {text: "StatelessWidget",correct: false},
        {text: "InheritedWidget",correct: false}, 
        {text: "BlocBuilder",correct: false}, 
     ]
    },
    {
        question:"Which Android architecture component is responsible for handling background operations ? ",
     answers:[
        {text: "LiveData",correct: false}, 
        {text: "Room",correct: false},
        {text: "ViewModel",correct:false}, 
        {text: "WorkManager",correct:true}, 
     ]
    },
    {
        question:"Which HTTP status code indicates that a request has succeeded and a new resource has been created ? ",
     answers:[
        {text: "200",correct: false}, 
        {text: "201",correct: false},
        {text: "204",correct: true}, 
        {text: "400",correct: false}, 
     ]
    },
    {
        question:"Which library is used for state management in React Native ? ",
     answers:[
        {text: "Axios",correct: false}, 
        {text: "Redux",correct: true},
        {text: "React Router",correct: false}, 
        {text: "Lodash",correct: false}, 
     ]
    },
    {
        question:" What is the role of the bridge in React Native, and how does it impact app performance? ",
     answers:[
        {text: "It directly compiles JavaScript into native code for faster execution",correct: false}, 
        {text: " It connects JavaScript and native modules but can introduce performance overhead",correct: true},
        {text: "It eliminates the need for native code in React Native apps",correct: false}, 
        {text: " It renders UI components using Flutter widgets",correct: false}, 
     ]
    },
    {
        question:" How does Flutter achieve consistent UI rendering across platforms?",
     answers:[
        {text: " By using native UI components for each platform",correct: false}, 
        {text: "By compiling to native code with React-like principles",correct: false},
        {text: "By rendering widgets directly to a canvas using its own engine",correct: true}, 
        {text: "By integrating with HTML and CSS rendering engines",correct: false}, 
     ]
    }


];
const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex=0;
let score=0;

function startQuiz(){
    currentQuestionIndex=0;
    score=0;
    nextButton.innerHTML="Next";
    showQuestion();
}

function showQuestion(){
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question;

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        answerButtons.appendChild(button);
        if(answer.correct){
            button.dataset.correct = answer.correct;
        }


        button.addEventListener("click",selectAnswer);
    });
}
function resetState(){
    nextButton.style.display = "none";
    while(answerButtons.firstChild){
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAnswer(e){
    const selectedBtn = e.target;
    selectedBtn.classList.add("selected");
    const isCorrect = selectedBtn.dataset.correct === "true";
    if(isCorrect){
        selectedBtn.classList.add("correct");
        selectedBtn.classList.add("selected");
        score++;
    }
    else{
        selectedBtn.classList.add("incorrect");
        selectedBtn.classList.add("selected");
    }
    Array.from(answerButtons.children).forEach(button => {
        if(button.dataset.correct === "true")
            {
            button.classList.add("correct");
        }
        button.disabled = true;
    });
    nextButton.style.display = "block";
}

function handleNextButton(){
    currentQuestionIndex++;
    if(currentQuestionIndex < questions.length){
        showQuestion();
    }
    else {
        showResult();
    }
}

nextButton.addEventListener("click",()=>{
    if(currentQuestionIndex < questions.length){
        handleNextButton();
    }
    else{
        startQuiz();
    }
}
)
startQuiz();

function showResult(){
    /*low knowledge*/
    if(score>=0 && score<=4){
        setTimeout(function(){
            window.location.href = "app_dev_feedback.php?score="+score;
        },2000);  
    }

    /*moderate knowledge*/
    
    else if(score>5 && score<=8){
        setTimeout(function(){
            window.location.href = "app_dev_feedback.php?score="+score;
        },2000);
    }
    
    /*high knowledge*/
    else if(score>9 && score<=12){
        setTimeout(function(){
            window.location.href = "app_dev_feedback.php?score="+score;
        },2000);
    }
}