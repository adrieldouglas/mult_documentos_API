const INPUT_SEARCH = document.getElementById('input-search');
const USER_SEARCH = document.getElementById('users-search');

INPUT_SEARCH.addEventListener('keyup', () => {
    let expression = INPUT_SEARCH.value.toLowerCase();

    if (expression.length === 1) {
        return;
    }

    let lines = USER_SEARCH.getElementsByTagName('tr');

    for (let position in lines) {
        if (true === isNaN(position)) {
            continue;
        }

        let contentOfLine = lines[position].innerHTML.toLowerCase();

        if (true === contentOfLine.includes(expression)) {
            lines[position].style.display = '';
        } else {
            lines[position].style.display = 'none';
        }
    }

});

