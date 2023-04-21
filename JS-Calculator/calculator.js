const calculator = {                                                                        //Eine konstante Variable wurde erstellt.
  displayValue: '0',                                                                        //Der Wert des Displays ist 0.
  firstOperand: null,                                                                       //Es gibt noch keinen Operanden, deshalb ist es auf null.
  waitingForSecondOperand: false,                                                           //Das ist auf false da noch kein erster operand bestimmt wurde.
  operator: null,                                                                           //Es gibt noch keinen Operator, deshalb ist es auf null.
};

function inputDigit(digit) {                                                                //Hier wird eine Funktion erstellt. in dieser sind displayValue und waitingForSecondOperand = calculator
  const {
    displayValue,
    waitingForSecondOperand
  } = calculator;

  if (waitingForSecondOperand === true) {                                                    //Wenn der erste Operand und der erste Operator ausgewählt wurde, wird das wahr.
    calculator.displayValue = digit;
    calculator.waitingForSecondOperand = false;
  } else {

    calculator.displayValue = displayValue === '0' ? digit : displayValue + digit;          //Und wenn nicht, wird verglichen: ist displayValue = 0, wenn ja, zeige displayValue, wenn nicht, zeige
  }                                                                                          //displayValue + die Zahl die eingegeben wurde.
}

function inputDecimal(dot) {                                                                 //Wenn noch kein Operand eingegeben wurde, dann zeige "0."

  if (calculator.waitingForSecondOperand === true) {
    calculator.displayValue = "0."
    calculator.waitingForSecondOperand = false;
    return
  }

  if (!calculator.displayValue.includes(dot)) {                                              // Wenn schon ein Operand eingegeben wurde, dann füge einfach ein punkt hinzu.
    calculator.displayValue += dot;
  }
}

function handleOperator(nextOperator) {                                                      //Hier wird eine Funktion erstellt. in dieser sind displayValue, firstOperand und operator = calculator
  const {
    firstOperand,
    displayValue,
    operator
  } = calculator
  const inputValue = parseFloat(displayValue);                                               //Hier wird der Wert von displayValue in einer Konstanten Variable gespeichert.

  if (operator && calculator.waitingForSecondOperand) {                                      //Wenn ein Operator ausgewählt wurde und es einen zweiten Operanden gibt, dann ka
    calculator.operator = nextOperator;
    return;
  }


  if (firstOperand == null && !isNaN(inputValue)) {                                          //Wenn der erste Operand "null" ist und man einen inputValue hat, dann firstOperand = inputValue.
    calculator.firstOperand = inputValue;
  } else if (operator) {
    const result = calculate(firstOperand, inputValue, operator);                            //sonst rechne firstOperand, inputValue und operator zusammen.

    calculator.displayValue = parseFloat(result.toFixed(7));
    calculator.firstOperand = result;
  }

  calculator.waitingForSecondOperand = true;
  calculator.operator = nextOperator;
}

function calculate(firstOperand, secondOperand, operator) {                                  //Wenn der Operator "+" ist, wird auch "+" zurückgegeben. sonst den anderen den man ausgewählt hat.
  if (operator === '+') {
    return firstOperand + secondOperand;
  } else if (operator === '-') {
    return firstOperand - secondOperand;
  } else if (operator === '*') {
    return firstOperand * secondOperand;
  } else if (operator === '/') {
    return firstOperand / secondOperand;
  }

  return secondOperand;
}

function resetCalculator() {                                                                 //Der Taschenrechner wird zurückgesetzt.
  calculator.displayValue = '0';
  calculator.firstOperand = null;
  calculator.waitingForSecondOperand = false;
  calculator.operator = null;
}

function updateDisplay() {
  const display = document.querySelector('.calculator-screen');                     //Der Selector: selector.calculator-screen wird zu display hinzugefügt.
  display.value = calculator.displayValue;
  console.log(display.value)
}

updateDisplay();

const screen = document.querySelector('.calculator-screen');
screen.addEventListener('keyup', event => {
  calculator.displayValue = event.target.value;
  updateDisplay()
});

const keys = document.querySelector('.calculator-keys');                            //Der Selector: selector.calculator-keys wird zu keys hinzugefügt.
keys.addEventListener('click', event => {                                       //Beim Click wird ein event in die Konstante Keys gespeichert.

  const {
    target
  } = event;

  const {
    value
  } = target;

  // not button
  if (!target.matches('button')) {
    return;
  }

  switch (value) {                                                                           //Hier werden mehrere Values einer Variablen zugeteilt.
    case '+':
    case '-':
    case '*':
    case '/':
    case '=':
      handleOperator(value);
      break;
    case '.':
      inputDecimal(value);
      break;
    case 'all-clear':
      resetCalculator();
      break;
    default:
      if (Number.isInteger(parseFloat(value))) {
        inputDigit(value);
      }
  }

  updateDisplay();
});

document.addEventListener("keydown", function(){
  var x=event.keyCode || event.which;
  if(x===48)
  {
    console.log("0");
  }
  if(x===49)
  {
    console.log("1");
  }
  if(x===50)
  {
    console.log("2");
  }
  if(x===51)
  {
    console.log("3");
  }
  if(x===52)
  {
    console.log("4");
  }
  if(x===53)
  {
    console.log("5");
  }
  if(x===54)
  {
    console.log("6");
  }
  if(x===55)
  {
    console.log("7");
  }
  if(x===56)
  {
    console.log("8");
  }
  if(x===57)
  {
    console.log("9");
  }
})