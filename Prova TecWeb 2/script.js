var data = [];
let i= 0;
let k =0;
function formChildren(){

let div = document.createElement('div');

div.innerHTML = `
<fieldset>
<label for="task-1">Nome:</label><input type="text" id="task-1" class="name" name="name-${i++}" placeholder="Digite o nome"/><input type="button" value="Adicionar" id="add" /></br>
<label for="task-2">Idade:</label><input type="number" class="idade" id="task-2" name="idade-${k++}"/><button id="del">Excluir</button>
</fieldset>
`;

document.querySelector('.todo').append(div);

div.querySelector('#add').addEventListener("click", e=>{

    data.push({
        nome: div.querySelector('.name').value,
        idade: div.querySelector('.idade').value
    });

    formChildren();

    console.log(data);

});

div.querySelector('#del').addEventListener("click", e=>{
    div.remove();
});
}

document.querySelector('#yes').addEventListener("change", formChildren);

document.querySelector('#no').addEventListener('change', e=>{

document.querySelector('.todo').innerHTML ='';

});