// Créditos oficiales de cada ramo 
const creditos = {
  mate1: 4,
  conta1: 3,
  admn1: 3,
  eco1: 3,
  ingles1: 2,
  lectura1: 2,
  catedra: 2,
  comprencion2: 2,
  constitucional: 2,
  historiaeco: 3,
  etica: 2,
  mate2: 4,
  ingles2: 2,
  macroeconomia1: 4,
  microeconomia1: 3,
  historiaeconomica: 3,
  estadistica1: 3,
  economiamatematica: 3,
  ingles3: 2,
  fundinv: 3,
  macroeconomia2: 4,
  microeconomia2: 4,
  ecopolitica: 3,
  analitica1: 2,
  estadistica2: 3,
  ingles4: 2,
  invapli: 3,
  macroeconomia3: 3,
  microeconomia3: 3,
  tecmedeco: 3,
  finpriv1: 3,
  ecome1: 3,
  ingles5: 2,
  ecoregyloc: 3,
  peneco1: 3,
  ecocolom: 3,
  finpriv2: 3,
  ecome2: 3,
  analitica2: 2,
  fh: 2,
  ingles6: 2,
  ecoint: 3,
  peneco2: 3,
  ecopubli: 3,
  deseco: 3,
  form_eva_proy: 3,
  plan: 3,
  formhuma2: 2,
  semigrad: 3,
  poli_macro: 4,
  elec1: 3,
  elec2: 3,
  elec3: 3,
  analis_multi: 2,
  formhuma3: 2,
  prac: 12,
  formhuma4: 2
};

// Prerrequisitos por ramo 
const prerequisitos = {
  comprencion2: ['lectura1'],
  constitucional: ['eco1'],
  historiaeco: ['eco1'],
  mate2: ['mate1'],
  etica: ['catedra'],
  ingles2: ['ingles1'],
  macroeconomia1: ['mate1', 'eco1'],
  microeconomia1: ['mate2', 'eco1'],
  historiaeconomica: ['historiaeco'],
  economiamatematica: ['mate2'],
  ingles3: ['ingles2'],
  fundinv: ['comprencion2' , 'estadistica1'],
  macroeconomia2: ['macroeconomia1'],
  microeconomia2: ['microeconomia1'],
  ecopolitica: ['historiaeconomica'],
  analitica1: ['estadistica1'],
  estadistica2: ['estadistica1'],
  ingles4: ['ingles3'],
  invapli: ['fundinv'],
  macroeconomia3: ['macroeconomia2'],
  microeconomia3: ['microeconomia2'],
  tecmedeco: ['estadistica2'],
  finpriv1: ['microeconomia2'],
  ecome1: ['economiamatematica' , 'estadistica2'],
  ingles5: ['ingles4'],
  ecoregyloc: ['macroeconomia2'],
  peneco1: ['ecopolitica'],
  ecocolom: ['macroeconomia2'],
  finpriv2: ['finpriv1'],
  ecome2: ['ecome1'],
  analitica2: ['analitica1'],
  ingles6: ['ingles5'],
  ecoint: ['macroeconomia3'],
  peneco2: ['peneco1'],
  ecopubli: ['macroeconomia3' , 'microeconomia3'],
  deseco: ['macroeconomia3'],
  form_eva_proy: ['microeconomia3' , 'finpriv2'],
  plan: ['macroeconomia3'],
  formhuma2: ['fh'],
  poli_macro: ['macroeconomia3'],
  formhuma3:  ['formhuma2'],
  formhuma4:  ['formhuma3'],
};

// Obtener aprobados desde localStorage
function obtenerAprobados() {
  const data = localStorage.getItem('mallaAprobados');
  return data ? JSON.parse(data) : [];
}

// Guardar aprobados en localStorage
function guardarAprobados(aprobados) {
  localStorage.setItem('mallaAprobados', JSON.stringify(aprobados));
}

// Calcular créditos aprobados
function calcularCreditosAprobados() {
  const aprobados = obtenerAprobados();
  return aprobados.reduce((sum, ramo) => sum + (creditos[ramo] || 0), 0);
}

// Actualiza desbloqueos según prerrequisitos
function actualizarDesbloqueos() {
  const aprobados = obtenerAprobados();

  for (const [destino, reqs] of Object.entries(prerequisitos)) {
    const elem = document.getElementById(destino);
    if (!elem) continue;

    let puedeDesbloquear = reqs.every(r => aprobados.includes(r));

    if (!elem.classList.contains('aprobado')) {
      if (puedeDesbloquear) elem.classList.remove('bloqueado');
      else elem.classList.add('bloqueado');
    } else {
      elem.classList.remove('bloqueado');
    }
  }
}

// Marca o desmarca ramos como aprobados al hacer clic
function aprobar(e) {
  const ramo = e.currentTarget;
  if (ramo.classList.contains('bloqueado')) return;

  ramo.classList.toggle('aprobado');
  const aprobados = obtenerAprobados();

  if (ramo.classList.contains('aprobado')) {
    if (!aprobados.includes(ramo.id)) aprobados.push(ramo.id);
  } else {
    const idx = aprobados.indexOf(ramo.id);
    if (idx > -1) aprobados.splice(idx, 1);
  }

  guardarAprobados(aprobados);
  actualizarDesbloqueos();
}

// Al cargar la página, asignar eventos y restaurar estado
window.addEventListener('DOMContentLoaded', () => {
  const todosRamos = document.querySelectorAll('.ramo');

  const aprobados = obtenerAprobados();
  todosRamos.forEach(ramo => {
    if (aprobados.includes(ramo.id)) {
      ramo.classList.add('aprobado');
    }
  });

  todosRamos.forEach(ramo => {
    ramo.addEventListener('click', aprobar);
  });

  actualizarDesbloqueos();
});