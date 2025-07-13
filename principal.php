<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Malla Interactiva de economia udc – Universidad de Cartagena</title>
  <meta name="description" content="Explora la malla curricular interactiva de economia en la Universidad de Cartagena. Descubre requisitos por semestre y desbloquea ramos al aprobar.">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="estilos.css" />
</head>

<body>
  <h1>ECONOMIA UDC</h1>
  <div class="malla-grid">
    <div class="semestre" id="sem1">
      <h2>1° Semestre</h2>
      <div class="ramo" id="mate1" onclick="aprobar('mate1')">matematicas I</div>
      <div class="ramo" id="conta1" onclick="aprobar('conta1')">fundamentos de contabilidad</div>
      <div class="ramo" id="admn1" onclick="aprobar('admn1')">fundamentos de administracion</div>
      <div class="ramo" id="eco1" onclick="aprobar('eco1')">fundamentos de economia</div>
      <div class="ramo" id="ingles1" onclick="aprobar('ingles1')">ingles I</div>
      <div class="ramo" id="lectura1" onclick="aprobar('lectura1')">comprencion y produccion textual I</div>
      <div class="ramo" id="catedra" onclick="aprobar('catedra')">Catedra institucional</div>
    </div>

    <div class="semestre" id="sem2">
      <h2>2° Semestre</h2>
      <div class="ramo bloqueado" id="comprencion2" onclick="aprobar('omprencion2')">comprencion y produccion textual II</div>
      <div class="ramo bloqueado" id="constitucional" onclick="aprobar('constitucional')">derecho constitucional</div>
      <div class="ramo bloqueado" id="historiaeco" onclick="aprobar('historiaeco')">historia economica general</div>
      <div class="ramo bloqueado" id="etica" onclick="aprobar('etica')">etica</div>
      <div class="ramo bloqueado" id="mate2" onclick="aprobar('mate2')">matematicas II</div>
      <div class="ramo bloqueado" id="ingles2" onclick="aprobar('ingles2')">ingles II</div>
    </div>

    <div class="semestre" id="sem3">
      <h2>3° Semestre</h2>
      <div class="ramo bloqueado" id="macroeconomia1" onclick="aprobar('macroeconomia1')">Macroeconomía I</div>
      <div class="ramo bloqueado" id="microeconomia1" onclick="aprobar('microeconomia1')">Microeconomía I</div>
      <div class="ramo bloqueado" id="historiaeconomica" onclick="aprobar('historiaeconomica')">Historia Económica</div>
      <div class="ramo" id="estadistica1" onclick="aprobar('estadistica1')">Estadística I</div>
      <div class="ramo bloqueado" id="economiamatematica" onclick="aprobar('economiamatematica')">Economía Matemática</div>
      <div class="ramo bloqueado" id="ingles3" onclick="aprobar('ingles3')">Inglés III</div>
    </div>

    <div class="semestre" id="sem4">
      <h2>4° Semestre</h2>
      <div class="ramo bloqueado" id="fundinv" onclick="aprobar('fundinv')">fundamentos de investigacion cientifica</div>
      <div class="ramo bloqueado" id="macroeconomia2" onclick="aprobar('macroeconomia2')">Macroeconomía II</div>
      <div class="ramo bloqueado" id="microeconomia2" onclick="aprobar('microeconomia2')">Microeconomía II</div>
      <div class="ramo bloqueado" id="ecopolitica" onclick="aprobar('ecopolitica')">economia politica</div>
      <div class="ramo bloqueado" id="analitica1" onclick="aprobar('analitica1')">analitica de datos I</div>
      <div class="ramo bloqueado" id="estadistica2" onclick="aprobar('estadistica2')">Estadística II</div>
      <div class="ramo bloqueado" id="ingles4" onclick="aprobar('ingles4')">Inglés IV</div>
    </div>

    <div class="semestre" id="sem5">
      <h2>5° Semestre</h2>
      <div class="ramo bloqueado" id="invapli" onclick="aprobar('invapli')">Investigacion aplicada</div>
      <div class="ramo bloqueado" id="macroeconomia3" onclick="aprobar('macroeconomia3')">Macroeconomía III</div>
      <div class="ramo bloqueado" id="microeconomia3" onclick="aprobar('microeconomia3')">Microeconomía III</div>
      <div class="ramo bloqueado" id="tecmedeco" onclick="aprobar('tecmedeco')">tecnicas de medicion economica</div>
      <div class="ramo bloqueado" id="finpriv1" onclick="aprobar('finpriv1')">finanzas privadas I</div>
      <div class="ramo bloqueado" id="ecome1" onclick="aprobar('ecome1')">econometria I</div>
      <div class="ramo bloqueado" id="ingles5" onclick="aprobar('ingles5')">Inglés V</div>
    </div>

    <div class="semestre" id="sem6">
      <h2>6° Semestre</h2>
      <div class="ramo bloqueado" id="ecoregyloc" onclick="aprobar('ecoregyloc')">economia regional y local</div>
      <div class="ramo bloqueado" id="peneco1" onclick="aprobar('peneco1')">pensamiento economico I</div>
      <div class="ramo bloqueado" id="ecocolom" onclick="aprobar('ecocolom')">economia colombiana</div>
      <div class="ramo bloqueado" id="finpriv2" onclick="aprobar('finpriv2')">finanzas privadas II</div>
      <div class="ramo bloqueado" id="ecome2" onclick="aprobar('ecome2')">econometria II</div>
      <div class="ramo bloqueado" id="analitica2" onclick="aprobar('analitica2')">analitica de datos II</div>
      <div class="ramo" id="fh" onclick="aprobar('fh')">Formación humana</div>
      <div class="ramo bloqueado" id="ingles6" onclick="aprobar('ingles6')">Inglés VI</div>
    </div>

    <div class="semestre" id="sem7">
      <h2>7° Semestre</h2>
      <div class="ramo bloqueado" id="ecoint" onclick="aprobar('ecoint')">economia internacional</div>
      <div class="ramo bloqueado" id="peneco2" onclick="aprobar('peneco2')">pensamiento economico II</div>
      <div class="ramo bloqueado" id="ecopubli" onclick="aprobar('ecopubli')">economia publica</div>
      <div class="ramo bloqueado" id="deseco" onclick="aprobar('deseco')">desarrollo economico</div>
      <div class="ramo bloqueado" id="form_eva_proy" onclick="aprobar('form_eva_proy')">formulacion y evaluacion de proyectos</div>
      <div class="ramo bloqueado" id="plan" onclick="aprobar('plan')">planificacion</div>
      <div class="ramo bloqueado" id="formhuma2" onclick="aprobar('formhuma2')">formacion humana II</div>
    </div>

    <div class="semestre" id="sem8">
      <h2>8° Semestre</h2>
      <div class="ramo" id="semigrad" onclick="aprobar('semigrad')">seminario de grado</div>
      <div class="ramo bloqueado" id="poli_macro" onclick="aprobar('poli_macro')">politica macroeconomico</div>
      <div class="ramo" id="elec1" onclick="aprobar('elec1')">electiva I</div>
      <div class="ramo" id="elec2" onclick="aprobar('elec2')">electiva II</div>
      <div class="ramo" id="elec3" onclick="aprobar('elec3')">electiva III</div>
      <div class="ramo" id="analis_multi" onclick="aprobar('analis_multi')">analisis multivariado</div>
      <div class="ramo bloqueado" id="formhuma3" onclick="aprobar('formhuma3')">formacion humana III</div>
    </div>

    <div class="semestre" id="sem9">
      <h2>9° Semestre</h2>
      <div class="ramo" id="prac" onclick="aprobar('prac')">practicas</div>
      <div class="ramo bloqueado" id="formhuma4" onclick="aprobar('formhuma4')">formacion humana IIII</div>
    </div>
  </div>

  <script src="script.js"></script>

  <style>
    h1 {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      color: #c2185b;
      text-align: center;
      margin-bottom: 40px;
    }
  </style>
</body>
</html>
