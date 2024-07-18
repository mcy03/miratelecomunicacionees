<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/libreriaDigital.css?1.0">
    <title>Librería Digital Miratelecomunicacions</title>
</head>
<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1>Librería Digital</h1>
        </div>
        <span>Encuentre la capacitación más adecuada y que mejor se adapte a su “life style” para alcanzar sus objetivos profesionales.</span>
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><p class="page">Librería Digital</p>
        </div>
    </section>
    <section class="intro-libreria row">
        <div class="col-2 lines"><hr><hr></div>
        <div class="col-8"><p>Entrene desde cualquier lugar con clases dirigidas por instructor o librería digital.</p></div>
        <div class="col-2 lines"><hr><hr></div>
        <div class="col-6 text-intro"><p>Los Cisco Learning Partner ofrecemos formación dirigida por instructor, pero también podemos ayudarle con la contratación de las diferentes opciones que presenta nuestra comunidad de aprendizaje.</p></div>
        <div class="col-6 text-intro border-left"><p>Las suscripciones digitales son un complemento a las formaciones dirigidas en línea que también puede comprar con Cisco Learning Credits.</p></div>
    </section>
    <section class="planesCisco row">
        <div class="cont-title col-4">
            <h4 class="title">PLANES CISCO U</h4>
        </div>
        
        <div class="buttonPlan col-4">
            <a class="btn-white" href="https://learningnetworkstore.cisco.com/ilt/specials/?src=14118&d=IGW1htsJd8ZWq0h2TxOCyP%2Fos7FGGr8y0oFwG91Y09sWQwHThehebmlHggYEcPFazugldvMa%2F%2BAe1xnNyfMtYg%3D%3D">
                Essentials Acceso a la compra por CLC
            </a>
            
        </div>
        <div class="buttonPlan col-4">
            <a class="btn-white" href="https://learningnetworkstore.cisco.com/ilt/specials/?src=14118&d=zxh%2BLRQTsnIEzRRdR8PsE5mEUB1zSqTcz%2FSd%2F0QevJoDzcZxwChJbO013yX0Orh6aNrcRrNbIZHK0F9Oe1A6UA%3D%3D">
                Full Access Acceso a la compra por CLC
            </a>
        </div>
    </section>
    <section class="subs row">
        <h4 class="title col-12">SUSCRIPCIONES</h4>
        <div class="options-sub col-12 row">
            <div class="col-6">
                <div class="sub">
                    <div class="cont-titleSub">
                        <h4 class="titleSub">LIBRERÍA DIGITAL</h4>
                    </div>
                    <form action="./config/sendMail.php" method="POST" class="form-sub" id="formLibrery">
                        <input type="text" placeholder="Nombre">
                        <input type="text" placeholder="Apellidos">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Teléfono">
                        <input type="text" placeholder="Empresa">
                        <input type="text" placeholder="Cargo">
                        <input type="text" placeholder="País">
                        <input type="text" placeholder="Curso">
                        
                        <label class="radio"><input type="checkbox" id="cbox1" value="first_checkbox"/> ¿Quiero adquirirlo con CLC?</label>
                        <label class="radio"><input type="checkbox" id="cbox1" value="first_checkbox"/> Me gustaría recibir actualizaciones sobre oportunidades de capacitación y certificaciones TIC.</label>

                        <label class="radio"><input type="checkbox" id="cbox1" value="first_checkbox"/> 
                            He podido leer y entiendo la Política de <a href="<?=url.'?controller=politicas&action=politicas_privacidad'?>">Privacidad</a>   y <a href="<?=url.'?controller=politicas&action=cookies'?>">Cookies</a>. Consiento a Mira Telecomunicacions, 
                            S.L. el tratamiento de mis datos personales para la realización de los servicios solicitados 
                            y comunicaciones comerciales. <a href="">Más info.</a>  
                        </label>
                    
                        <button type="submit" class="btn-red">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="sub">
                    <div class="cont-titleSub">
                        <h4 class="titleSub">Bar Labs / horas mentoría</h4>
                    </div>
                    <form action="./config/sendMail.php" method="POST" class="form-sub" id="formLabs">
                        <input type="text" placeholder="Nombre">
                        <input type="text" placeholder="Apellidos">
                        <input type="text" placeholder="Email">
                        <input type="text" placeholder="Teléfono">
                        <input type="text" placeholder="Empresa">
                        <input type="text" placeholder="Cargo">
                        <input type="text" placeholder="País">

                        <input type="text" placeholder="Servicio">
                        <input type="text" placeholder="Lab">
                        <input type="text" placeholder="Pack de horas">

                        <label class="radio"><input type="checkbox" id="cbox1" value="first_checkbox"/> ¿Quiero adquirirlo con CLC?</label>
                        <label class="radio"><input type="checkbox" id="cbox1" value="first_checkbox"/> Me gustaría recibir actualizaciones sobre oportunidades de capacitación y certificaciones TIC.</label>

                        <label class="radio"><input type="checkbox" id="cbox1" value="first_checkbox"/> 
                            He podido leer y entiendo la Política de <a href="<?=url.'?controller=politicas&action=politicas_privacidad'?>">Privacidad</a>   y <a href="<?=url.'?controller=politicas&action=cookies'?>">Cookies</a>. Consiento a Mira Telecomunicacions, 
                            S.L. el tratamiento de mis datos personales para la realización de los servicios solicitados 
                            y comunicaciones comerciales. <a href="">Más info.</a>  
                        </label>
                           
                        <button type="submit" class="btn-red">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
       
    </section>
</body>
</html>