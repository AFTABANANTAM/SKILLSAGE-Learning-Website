const questions=[
    {
     question:"Which of the following is a classification algoritm ? ",
     answers:[
        {text: "K-Means",correct: false}, 
        {text: "Linear Regression",correct: false},
        {text: "Decision Tree",correct: true}, 
        {text: "PCA",correct: false}, 
     ]
    },
    { 
        question:"Which library is commonly used for building ML mode in Python ?",
     answers:[
        {text: "Pandas",correct: false}, 
        {text: "NumPy",correct: false},
        {text: "Scikit-learn",correct: true}, 
        {text: "Flask",correct: false}, 
     ]
    },
    {
        question:"What is the purpose of feature scaling ?",
     answers:[
        {text: "Remove irrelevant features",correct: false}, 
        {text: "Combine features",correct: false},
        {text: "Normalize the range of features",correct: true}, 
        {text: "One-hot encode features",correct: false}, 
     ]
    },
    {
        question:"What type of problem is solved by K-Means? ",
     answers:[
        {text: "Regression",correct: false}, 
        {text: "Classification",correct: false},
        {text: "Clustering",correct:true},
        {text: "Dimensionality reduction",correct:false}, 
     ]
    },
    {
        question:"Which of the following is a method to prevent overfitting ?",
     answers:[
        {text:"Dropout",correct: false}, 
        {text: "Learning Rate Decay",correct: false},
        {text: "Batch Normalization",correct: false}, 
        {text: "ALL of the Above",correct: true}, 
     ]
    },
    {
        question: "Which optimization algorithm adapts learning rate based on past gradients ?",
     answers:[
        {text: "SGD",correct:false}, 
        {text: "Adagrad",correct: true},
        {text: "Mini-batch",correct: false}, 
        {text: "Momentum",correct: false}, 
     ]
    },
    {
        question:"What is a confusion used for ? ",
     answers:[
        {text: "Visualizing regression errors",correct: true}, 
        {text: "Understanding model bias",correct: false},
        {text: "Evaluating classification performance",correct: false}, 
        {text: "Determining optimal k in clustering",correct: false}, 
     ]
    },
    {
        question:"What does LSTM stand for ? ",
     answers:[
        {text: "Long Short-Term Memory",correct: false}, 
        {text: "Large Set Training Model",correct: false},
        {text: "Least Square Training Method",correct:false}, 
        {text: "Linear Sequential Temporal Model",correct:true}, 
     ]
    },
    {
        question:"What is the main benefit of using transfer learning ? ",
     answers:[
        {text: "Training time increases",correct: false}, 
        {text: "Reuses pre-trained models for faster convergence",correct: false},
        {text: "Data is always cleaned",correct: true}, 
        {text: "Works only for supervised learning",correct: false}, 
     ]
    },
    {
        question:"Which loss function is used for binary classification ? ",
     answers:[
        {text: "Mean Squared Error",correct: false}, 
        {text: "Ctegorical Crossentropy",correct: false},
        {text: "Binary Crossentropy",correct: true}, 
        {text: "Hinge Loss",correct: false}, 
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
        },1000);  
    }

    /*high knowledge*/
    
    else if(score>6 && score<=10){
        setTimeout(function(){
            window.location.href = "feedback.html?score="+score;
        },1000);
    }   
}
