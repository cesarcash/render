const seleccion = document.querySelector('#seleccionPadre');
const seleccionBloque = document.querySelectorAll('.seleccionBloque');
const site = 'http://localhost/render';
// const site = 'https://ideim.com.mx/basaltex';
const content = document.querySelector('#load-content');

seleccion.addEventListener('click', e => {

    seleccionBloque.forEach( item => {
        item.checked = false;
    });

    content.innerHTML = '';
    document.querySelector('#negroOpciones').setAttribute('hidden',true);
    document.querySelector('#blancoOpciones').setAttribute('hidden',true);
    document.querySelector('#grisOpciones').setAttribute('hidden',true);

    if(e.target.id == 'gris'){

        if(e.target.checked){
            document.querySelector('#grisOpciones').removeAttribute('hidden');
        }

    }else if(e.target.id == 'negro'){

        if(e.target.checked){
            document.querySelector('#negroOpciones').removeAttribute('hidden');
        }

    }else if(e.target.id == 'blanco'){

        if(e.target.checked){
            document.querySelector('#blancoOpciones').removeAttribute('hidden');
        }

    }

});

seleccionBloque.forEach( item => {

    item.addEventListener('click', e => {
        
        let nombrePagina = e.target.id;
        let url = `${site}/pages/${nombrePagina}.html`;

        fetch(url, {
            method: 'GET'
        })
        .then(data => data.ok ? data.text() : Promise.reject(data))
        .then(res => {
            content.innerHTML = res;
        })
        .catch(err => {
            console.log(err);
        });

    });

});