var questions = [{
    question : "When a user views a page containing a JavaScript program, which machine actually executes the script?",
    choices : [ "The User's machine running a Web browser",
        "The Web server",
        "A central machine deep within Netscape's corporate offices",
        "None of the above"],
    correctAnswer : 0
},{
    question : "Which of the following can't be done with client-side JavaScript?",
    choices : [ "Validating a form",
        "Sending a form's contents by email",
        "Storing the form's contents to a database file on the server",
        "None of the above"],
    correctAnswer : 2
},{
    question : "Using _______ statement is how you test for a specific condition",
    choices : [ "select",
        "if",
        "for",
        "none of the above"],
    correctAnswer : 1
}];

var currentQuestion = 0;
var correctAnswers = 0;
var quizOver = false;
displayCurrentQuestion();
document.getElementById("quiz-message").style.display = 'display';



function displayNext() {
    if(currentQuestion<2) {
        currentQuestion++;
        displayCurrentQuestion();
    }

    else{
        displayScore();
    }

}

function displayCurrentQuestion() {
    var i = 0;
    var question = document.getElementById("question");
    var choices = document.getElementById("choice-list");
    choices.innerHTML = ' ';

    question.innerText = questions[currentQuestion].question;
    var val = 0;

    choices.innerHTML += '<li>' + '<input id="op1" type="radio" value=val name="checked" >' + questions[currentQuestion].choices[val] + '</li>';
    val++;
    choices.innerHTML += '<li>' + '<input id="op2" type="radio" value=val name="checked" >' + questions[currentQuestion].choices[val] + '</li>';
    val++;
    choices.innerHTML += '<li>' + '<input id="op3" type="radio" value=val name="checked" >' + questions[currentQuestion].choices[val] + '</li>';
    val++;
    choices.innerHTML += '<li>' + '<input id="op4" type="radio" value=val name="checked" >' + questions[currentQuestion].choices[val] + '</li>';

    if (currentQuestion === 0){
        if (document.getElementById("op1").checked) {
            correctAnswers++;
        }
    }
    if (currentQuestion === 1){
        if (document.getElementById("op3").checked) {
            correctAnswers++;
        }
    }
    if (currentQuestion === 2){
        if (document.getElementById("op2").checked) {
            correctAnswers++;
        }
    }




}

function resetQuiz() {
    currentQuestion = 0;
    correctAnswers = 0;
    hideScore();
}
function displayScore() {
    document.getElementById("result").innerHTML = "you scored: " + correctAnswers + " out of: " + questions.length;
    document.getElementById("result").style.display = 'block';
}
function hideScore() {
    document.getElementById("result").style.display = 'none';
}