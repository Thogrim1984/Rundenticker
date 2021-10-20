function getDiceRoll(die) {
    return Math.floor(Math.random() * die) + 1;
}

function changeDie(die, upOrDown) {
    var diceList = [2,3,4,6,8,10,12,20,100];

    if (upOrDown == "+") {
        if(die != 100) {
            return diceList[diceList.indexOf(die)+1];
        }        
    } else {
        if(die != 2) {
            return diceList[diceList.indexOf(die)-1];
        }        
    }
    return die;
}