const INPUT_SEARCH = document.getElementById('input-search');
const DOCUMENT_SEARCH = document.getElementById('documents-search');

INPUT_SEARCH.addEventListener('keyup', () => {
    let expression = INPUT_SEARCH.value.toLowerCase();

    if (expression.length > 3) {
        return;
    }

    let lines = DOCUMENT_SEARCH.getElementsByTagName('tr');

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


