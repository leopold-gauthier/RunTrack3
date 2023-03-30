const button = document.querySelector('#button');
const p = document.querySelector('#expression');

async function text(){
    button.addEventListener('click', () => {
        fetch('expression.txt')
          .then(response => response.text())
          .then(data => {
            p.textContent = data;
            console.log(data);
          });
      });
}

text();