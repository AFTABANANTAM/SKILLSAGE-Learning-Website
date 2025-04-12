const questions=[
    {
     question:" What does the 'DOCTYPE' declaration in HTML do? ",
     answers:[
        {text: "Starts a new script",correct: false}, 
        {text: "Links CSS files",correct: false},
        {text: "Defines the document type and HTML version",correct: true}, 
        {text: "Makes the site responsive",correct: false}, 
     ]
    },
    {
        question:"Which CSS unit is relative to the root font size?",
        answers:[
            {text: "px",correct: false}, 
            {text: "em",correct: false},
            {text: "%",correct: false}, 
            {text: "rem",correct: true}, 
         ]
    },
    {
        question:"Which property is used to make a website mobile-responsive in HTML?",
        answers:[
            {text: "meta name='mobile'",correct: false}, 
            {text: "viewport",correct: false},
            {text: "meta name='viewport'",correct: true}, 
            {text: "responsive",correct: false}, 
         ]
    },
    {
        question:"What is the main difference between Bootstrap and Tailwind CSS?",
     answers:[
        {text: "Bootstrap has more colors",correct: false}, 
        {text: "Tailwind is utility-first ",correct: true},
        {text: "Bootstrap is only for JavaScript",correct: false}, 
        {text: "Tailwind uses jQuery",correct: false}, 
     ]
    },
    {
        question:`What will typeof null return in JavaScript?`,
     answers:[
        {text: "null",correct: false}, 
        {text: "object",correct: true},
        {text: "undefined",correct: false}, 
        {text: "boolean",correct: false}, 
     ]
    },
    {
        question: `In Express.js, what does req.params hold?`,
     answers:[
        {text: "Query string data",correct: false}, 
        {text: "Form data",correct: false},
        {text: "Route parameters",correct: true}, 
        {text: "JSON headers",correct: false}, 
     ]
    },
    {
        question:"What does CRUD stand for? ",
     answers:[
        {text: "Create, Run, Update, Delete",correct: false}, 
        {text: "Connect, Read, Use, Delete",correct: false},
        {text: "Create, Read, Update, Delete",correct: true}, 
        {text: "Code, Render, Upload, Deploy",correct: false}, 
     ]
    },
    {
        question:"Which tool is commonly used to manage project dependencies in Node.js?",
     answers:[
        {text: "Git",correct: false}, 
        {text: "Webpack",correct: false},
        {text: "npm",correct: true}, 
        {text: "Docker",correct: false}, 
     ]
    },
    {
        question:" In a React application, what does useMemo() help optimize?",
     answers:[
        {text: "Memory usage",correct: false}, 
        {text: "DOM rendering",correct: false},
        {text: "Expensive function computations",correct: true}, 
        {text: "Event propagation",correct: false}, 
     ]
    },
    {
        question:"In RESTful API design, which HTTP method is idempotent? ",
     answers:[
        {text: "POST",correct: false}, 
        {text: "PUT",correct: true},
        {text: "PATCH",correct: false}, 
        {text: "CONNECT",correct: false}, 
     ]
    },
    {
        question:" In JavaScript, what is the output of: [] + {} and {} + []",
     answers:[
        {text: "Both return '[object Object]'",correct: false}, 
        {text: "[] + {} returns '[object Object]'', but {} + [] returns 0",correct: false},
        {text: "[] + {} → '[object Object]'', {} + [] → '[object Object]'",correct: true}, 
        {text: "Throws a syntax error",correct: false}, 
     ]
    },
    {
        question:" In a MongoDB document, which of the following is true?",
     answers:[
        {text: "Each document must have a unique _id field",correct: true}, 
        {text: "Fields must match schema",correct: false},
        {text: "All values must be strings",correct: false}, 
        {text: "You can't nest objects",correct: false}, 
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
    if(score>=0 && score<=5){
        setTimeout(function(){
            window.location.href = "feedback.html?score="+score;
        },2000);  
    }

    /*moderate knowledge*/
    
    else if(score>5 && score<=10){
        setTimeout(function(){
            window.location.href = "feedback.html?score="+score;
        },2000);
    }
    
   
}
