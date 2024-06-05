function inic(){
    const nomb=document.getElementById('nombres').value;    //el nombre del estudiante
    const appe=document.getElementById('apellidos').value;  //los apellidos del estudiante
    const email = document.getElementById('correo').value; //correo electronico del estudiante
    const exp=document.getElementById('experiencia').value;   //cuanto sabe o su experiencia

    const estu={
        elnomb:nomb,
        elappe:appe,
        elemail:email,
        expe:exp,
    };
    // este es listado de estudiantes del almacenamiento local (si existe ) o lo crea si no existe
    let listadeestu=JSON.parse(localStorage.getItem("listadeestu"))|| []; 
    listadeestu.push(estu);       //agrega los  datos del nuevo estudiante a lista de estudiantes

    //aqui los guardamos
    localStorage.setItem("listadeestu", JSON.stringify(listadeestu));  

    mostrarestu();
}

function mostrarestu(){
    //esta funcion es para mostrar los estudiantes
    const contendordiv=document.getElementById('infoni');

    contendordiv.innerHTML='';

    const listadeestu=JSON.parse(localStorage.getItem("listadeestu"))||[];

    if (listadeestu.length === 0) {
        /*: Esta condición verifica si la longitud del array de estudiantes es igual a cero, lo que significa que no hay ningún estudiante*/
        listadoDiv.textContent = 'no hay nigun estudiante.';
    } else {
        //si hay creara un lista desordenada
        const ul = document.createElement('ul');

        listadeestu .forEach((estu, index) => {
            const li = document.createElement('li');

            li.textContent = `Nombre: ${estu.elnomb}, Correo: ${estu.elemail}, Experiencia: ${estu.expe}`;


                // Agregar botones para editar y eliminar cada estudiante
                const editarBtn = document.createElement('button');
                editarBtn.textContent = 'Editar';
                editarBtn.addEventListener('click', () => editarEstudiante(index));
    
                const eliminarBtn = document.createElement('button');
                eliminarBtn.textContent = 'Eliminar';
                eliminarBtn.addEventListener('click', () => eliminarEstudiante(index));
    
                li.appendChild(editarBtn);
                li.appendChild(eliminarBtn);
    
                ul.appendChild(li);
            });
    
            contendordiv.appendChild(ul);

        }
    }
    function editarEstudiante(index) {
        const listadeestu = JSON.parse(localStorage.getItem('listadeestu')) || [];
        const estudiante = listadeestu[index];
    
        const nuevoNombre = prompt('Ingrese el nuevo nombre:', estudiante.elnomb);
        const nuevoCorreo = prompt('Ingrese el nuevo correo electrónico:', estudiante.elemail);
        const nuevaExperiencia = prompt('Ingrese la nueva experiencia en diseño web:', estudiante.expe);
    
        if (nuevoNombre && nuevoCorreo && nuevaExperiencia) {
            estudiante.elnomb = nuevoNombre;
            estudiante.elemail = nuevoCorreo;
            estudiante.expe = nuevaExperiencia;
    
            localStorage.setItem('listadeestu', JSON.stringify(listadeestu));
            mostrarestu();
        }
    }
    
    function eliminarEstudiante(index) {
        const confirmacion = confirm('¿Estás seguro de que quieres eliminar este estudiante?');
        if (confirmacion) {
            const listadeestu = JSON.parse(localStorage.getItem('listadeestu')) || [];
            listadeestu.splice(index, 1);
            localStorage.setItem('listadeestu', JSON.stringify(listadeestu));
            mostrarestu();
        }
    }
    
    window.onload = function() {
        mostrarestu();
    };
    