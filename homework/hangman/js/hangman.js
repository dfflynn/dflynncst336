// Creating an array of available letters
var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H',
    'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P',
    'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
];


// variables
var selectedWord = "";
var selectedHint = "";
var board = [];
var remainingGuesses = 6;
var words = [{ word: "snake", hint: "It's a reptile" },
    { word: "monkey", hint: "It's a mammal" },
    { word: "beetle", hint: "It's an insect" }
];

// listeners
window.onload = startGame();

//functions

function startGame() {
    pickWord();
    initBoard();
    updateBoard();
    createLetters();


}


function initBoard() {
    for (var letter in selectedWord) {
        board.push();
    }
}

function pickWord() {
    var randomInt = Math.floor(Math.random() * words.length);
    selectedWord = words[randomInt].word.toUpperCase();
    selectedHint = words[randomInt].hint;
}

function updateBoard() {
    $("#word").empty();
    for (var i=0; i < board.length;i++) {
        if(board[i] != undefined) {
            $("#word").append(board[i] + " ");
        }
        
    }
    
    $("#word").append("<br />");
    $("#word").append("<span class='hint'>Hint:" + selectedHint + "</span>");

}

// creates the letters inside the letters div
function createLetters() {
    for (var letter of alphabet) {
        $("#letters").append("<button class='letter btn btn-success' id = '" + letter + "'>" + letter + "</button>");
    }
}

function checkLetter(letter) {
    var positions = new Array();

    //put all the positions the letter exists in an array
    for (var i = 0; i < selectedWord.length; i++) {
        if (letter == selectedWord[i]) {
            positions.push(i);
        }
    }

    if (positions.length > 0) {
        updateWord(positions, letter);
        stringo = board.join('');
        console.log(stringo);
        console.log(selectedWord)

        if (board.join('') == selectedWord.toUpperCase()) {
            endGame(true);
        }
    }
    else {
        remainingGuesses -= 1;
        updateMan();
    }

    if (remainingGuesses <= 0) {
        endGame(false);
    }
}

//update the current word then calls for a board update

function updateWord(positions, letter) {
    for (var pos of positions) {
        board[pos] = letter;
    }

    updateBoard();
}


function updateMan() {
    $("#hangImg").attr("src", "img/stick_" + (6 - remainingGuesses) + ".png");
}

function endGame(win) {
    $("#letters").hide();

    if (win) {
        $('#won').show();
    }
    else {
        $('#lost').show();
    }
}


function disableButton(btn) {
    btn.prop("disabled", true);
    btn.attr("class", "btn btn-danger");
}


$(".letter").click(function() {
    checkLetter($(this).attr("id"));
    disableButton($(this));
});

$(".hintBtn").on("click", function() {
    console.log("clicked");
    $('.hint').show(); 
    checkLetter('1');
});

$(".replayBtn").on("click", function() {
    location.reload();
});
