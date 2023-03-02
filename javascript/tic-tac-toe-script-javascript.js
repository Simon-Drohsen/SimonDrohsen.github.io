const statusDisplay = document.querySelector('.status');

let game = true;

let currentPlayer = 'X';

let result = ['', '', '', '', '', '', '', '', ''];

const win = () => `Spieler ${currentPlayer} hat gewonnen!`;
const draw = () => "Unentschieden!";
const turn = () => `Spieler ${currentPlayer} ist am Zug`;

statusDisplay.innerHTML = turn();

function cellPlayed(clickedCell, clickedCellIndex) {
  result[clickedCellIndex] = currentPlayer;
  clickedCell.innerHTML = currentPlayer;
}

function playerChange() {
  if (currentPlayer === 'X') {
    currentPlayer = 'O';
  } else {
    currentPlayer = 'X';
  }
  statusDisplay.innerHTML = turn();
}

const winningPossibilities = [
  [0, 1, 2],
  [3, 4, 5],
  [6, 7, 8],
  [0, 3, 6],
  [1, 4, 7],
  [2, 5, 8],
  [0, 4, 8],
  [2, 4, 6]
];

function winningControl() {
  let roundWon = false;

  for (let i = 0; i <= 7; i++) {
    let winningCombination = winningPossibilities[i];
    let a = result[winningCombination[0]];
    let b = result[winningCombination[1]];
    let c = result[winningCombination[2]];

    if (a === '' || b === '' || c === '') {
      continue;
    }

    if (a === b && b === c) {
      roundWon = true;
      break;
    }
  }

  if (roundWon) {
    statusDisplay.innerHTML = win();
    game = false;
    return;
  }

  let roundDraw = !result.includes('');

  if (roundDraw) {
    statusDisplay.innerHTML = draw();
    game = false;
    return;
  }

  playerChange();
}

function cellClick(click) {
  const clickedCell = click.target;
  const clickedCellIndex = Number.parseInt(
      clickedCell.getAttribute('data-cell-index'),
      10
  );

  if (result[clickedCellIndex] !== '' || !game) {
    return;
  }

  cellPlayed(clickedCell, clickedCellIndex);
  winningControl();
}

function restart() {
  game = true;
  currentPlayer = 'X';
  document.querySelectorAll('.cell').forEach(cell => cell.innerHTML = '');
  result = ['', '', '', '', '', '', '', '', ''];
  statusDisplay.innerHTML = `Spieler ${currentPlayer} ist am Zug`;
}

document.querySelectorAll('.cell').forEach(cell => cell.addEventListener('click', cellClick));
document.querySelector('.restart').addEventListener('click', restart);
