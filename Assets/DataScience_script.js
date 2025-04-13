const questions=[
    {
     question:"Which algorithm is best suited for predicting a continous value ? ",
     answers:[
        {text: "Logistic Regression",correct: false}, 
        {text: "K-Means Clustering",correct: false},
        {text: "Liner Regression",correct: true}, 
        {text: "Decision Tree Classifier",correct: false}, 
     ]
    },
    {
        question:"What is the main purpose of cross-validation  ? ",
     answers:[
        {text: "To reduce model complexity ",correct: false}, 
        {text: "To evaluate the model's performance",correct: true},
        {text: "To clean data ",correct: false}, 
        {text: "To encode categorical variables",correct: false}, 
     ]
    },
    {
        question:"Which SQL clause is used to group rows sharing the same values ?",
     answers:[
        {text: "GROUP BY ",correct: false}, 
        {text: "ORDER BY",correct: true},
        {text: "JOIN",correct: false}, 
        {text: "HAVING",correct: false}, 
     ]
    },
    {
        question:"Which type of JOIN returns all records when there is a match in either left or right table ? ",
     answers:[
        {text: "INNER JOIN",correct: false}, 
        {text: "LEFT JOIN",correct: false},
        {text: "RIGHT JOIN",correct: false}, 
        {text: "FULL OUTER JOIN",correct: true}, 
     ]
    },
    {
        question:`What will be the output of the following code ?<pre><code>
        import numpy as np
        a = np.array([1, 2, 3])
        print(a * 2)</code></pre>`,
     answers:[
        {text: "[2 4 6]",correct: true}, 
        {text: "[1,2,3,1,2,3]",correct: false},
        {text: "Error",correct: false}, 
        {text: "[1,2,3]",correct: false}, 
     ]
    },
    {
        question: `What will be the output of the following code ?<br><pre><code>
    df = pd.DataFrame({'A': [1,2,None],'B':[5,None,7]})
    print(df.isnull().sum())`,
     answers:[
        {text: "A: 1, B: 1",correct: true}, 
        {text: "A: 2, B: 1",correct: false},
        {text: "A: 1, B: 2",correct: false}, 
        {text: "A :0, B: 0",correct: false}, 
     ]
    },
    {
        question:"Which of the folllowingis NOT atype of database model ? ",
     answers:[
        {text: "Hierachical",correct: false}, 
        {text: "Relational",correct: false},
        {text: "Network",correct: false}, 
        {text: "Structural",correct: true}, 
     ]
    },
    {
        question:"In a relational database , what does each row represent ? ",
     answers:[
        {text: "A field",correct: false}, 
        {text: "A schema",correct: false},
        {text: "A record",correct: true}, 
        {text: "A data type",correct: false}, 
     ]
    },
    {
        question:"Which normal form ensures no transitive dependency ? ",
     answers:[
        {text: "1NF",correct: false}, 
        {text: "2NF",correct: false},
        {text: "3NF",correct: true}, 
        {text: "BCNF",correct: false}, 
     ]
    },
    {
        question:"In SQL,what is the result of a CROSS JOIN between two tables with 5 and 4 rows ? ",
     answers:[
        {text: "9 rows",correct: false}, 
        {text: "20 rows",correct: true},
        {text: "5 rows",correct: false}, 
        {text: "4 rows",correct: false}, 
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
            window.location.href = "DataScience_feedback.php?score="+score;
        },2000);  
    }

    /*moderate knowledge*/
    
    else if(score>5 && score<=10){
        setTimeout(function(){
            window.location.href = "DataScience_feedback.php?score="+score;
        },2000);
    }
    
}
