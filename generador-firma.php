<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Mainjobs - Generador de firma para correo corporativo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css" />
    <link rel="stylesheet" href="crop/css/cropper.css" />
    <link rel="stylesheet" href="crop/css/index.css" />
    <style>
    .message.is-primary .message-body {
        border-color: #dfdfdf;
        color: #021310;
        box-shadow: 1px 1px 5px 0px #e9e7e7;
    }

    .message.is-primary {
        background-color: #ffffff;
    }

    .phone {
        color: rgb(85, 85, 85);
        text-decoration: none;
    }
    </style>
</head>

<body cz-shortcut-listen="true">
    <!-- partial:index.partial.html -->
    <?php include 'parts/header.html'; ?>
    <div id="banner" class="banner"></div>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h3 class="title" style="background-color: #f6f8f9; padding: 10px">
                        <svg fill="#000000" height="25px" width="25px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 502 502" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g>
                                        <g>
                                            <path
                                                d="M81.5,174H247c5.523,0,10-4.477,10-10s-4.477-10-10-10H81.5c-5.523,0-10,4.477-10,10S75.977,174,81.5,174z">
                                            </path>
                                            <path
                                                d="M306.5,220h-225c-5.523,0-10,4.477-10,10s4.477,10,10,10h225c5.523,0,10-4.477,10-10S312.023,220,306.5,220z">
                                            </path>
                                            <path
                                                d="M306.5,286h-225c-5.523,0-10,4.477-10,10s4.477,10,10,10h225c5.523,0,10-4.477,10-10S312.023,286,306.5,286z">
                                            </path>
                                            <path
                                                d="M306.5,352h-225c-5.523,0-10,4.477-10,10s4.477,10,10,10h225c5.523,0,10-4.477,10-10S312.023,352,306.5,352z">
                                            </path>
                                            <path
                                                d="M306.5,154h-22c-5.523,0-10,4.477-10,10s4.477,10,10,10h22c5.523,0,10-4.477,10-10S312.023,154,306.5,154z">
                                            </path>
                                            <path
                                                d="M481,379.417h-47.713c-2.364,0-4.287-1.923-4.287-4.287v-9.98c0-9.858-5.885-18.666-14.993-22.438 c-9.108-3.772-19.497-1.706-26.468,5.265L377,358.516V103c0-2.652-1.054-5.196-2.929-7.071l-93-93C279.196,1.054,276.652,0,274,0 H21c-5.523,0-10,4.477-10,10v482c0,5.523,4.477,10,10,10h346c5.523,0,10-4.477,10-10v-7.681l10.539,10.539 c4.658,4.657,10.841,7.125,17.149,7.125c3.133,0,6.297-0.609,9.319-1.861c9.107-3.772,14.993-12.58,14.993-22.438v-9.98 c0-2.364,1.923-4.287,4.287-4.287H481c5.523,0,10-4.477,10-10v-64C491,383.894,486.523,379.417,481,379.417z M284,34.142 L342.858,93H284V34.142z M357,482H31V20h233v83c0,5.523,4.477,10,10,10h83v265.516l-35.831,35.83 c-1.406,1.407-2.351,3.189-2.735,5.111c-0.128,0.641-0.194,1.297-0.194,1.96c0,2.652,1.054,5.196,2.929,7.071L357,464.319V482z M471,443.417h-37.713c-13.392,0-24.287,10.895-24.287,24.287v9.98c0,2.493-1.658,3.551-2.646,3.961 c-0.99,0.409-2.911,0.833-4.672-0.93l-59.299-59.298l59.298-59.298c1.763-1.762,3.684-1.338,4.672-0.929 c0.988,0.409,2.646,1.468,2.646,3.96v9.98c0,13.392,10.895,24.287,24.287,24.287H471V443.417z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        INFORMACIÓN:
                    </h3>
                    <form id="form">
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="name">Nombre:</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons has-addons-centered">
                                    <p class="control is-expanded">
                                        <input id="name" class="input" placeholder="Nombre y apellidos" />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="position">Cargo:</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons has-addons-centered">
                                    <p class="control is-expanded">
                                        <input id="position" class="input" placeholder="Posición en la empresa" />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="checkPhone">Teléfono:</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons has-addons-centered">
                                    <p class="control">
                                        <label class="button is-static" title="Número de contacto">
                                            <input id="checkPhone" type="checkbox" />
                                        </label>
                                    </p>
                                    <p class="control is-expanded">
                                        <input id="phone" class="input" placeholder="(+34) 555-555-555" disabled="" />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal" style="display: none">
                            <div class="field-label is-normal">
                                <label class="label" for="checkSkype">Dirección:</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons has-addons-centered">
                                    <p class="control">
                                        <label class="button is-static" title="Nombre de cuenta">
                                            <input id="checkSkype" type="checkbox" />
                                        </label>
                                    </p>
                                    <p class="control is-expanded">
                                        <input id="skype" class="input" placeholder="" disabled="" />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="email">Email:</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons has-addons-centered">
                                    <p class="control is-expanded">
                                        <input id="email" class="input" placeholder="correo@grupomainjobs.com" />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal" style="display: none">
                            <div class="field-label is-normal">
                                <label class="label" for="checkIcons">Redes:</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons has-addons-centered">
                                    <p class="control">
                                        <label class="button is-static">
                                            <input id="checkIcons" type="checkbox" />
                                        </label>
                                    </p>
                                    <p class="control is-expanded">
                                        <input id="network" class="input" placeholder="¿Ocultar redes sociales?"
                                            disabled="" />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal" style="display: none">
                            <div class="field-label is-normal">
                                <label class="label" for="checkLogo">Logotipo:</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons has-addons-centered">
                                    <p class="control">
                                        <label class="button is-static">
                                            <input id="checkLogo" type="checkbox" />
                                        </label>
                                    </p>
                                    <p class="control is-expanded">
                                        <input id="logo" class="input" placeholder="¿Ocultar logotipo?" disabled="" />
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="linkedin">LinkedIn:</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons has-addons-centered">
                                    <p class="control is-expanded">
                                        <input id="linkedin" class="input"
                                            placeholder="https://linkedin.com/usuario/" />
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <!-- La etiqueta se mantiene, pero puedes cambiar el texto si es necesario -->
                                <label class="label">Foto:</label>
                            </div>
                            <div class="field-body">
                                <div class="control">
                                    <div class="file has-name is-fullwidth">
                                        <label class="file-label">
                                            <input style="width: 20rem" class="file-input" type="file" name="input-file"
                                                id="input-file" accept=".png,.jpg,.jpeg" />
                                            <span class="file-cta">
                                                <span class="file-icon">
                                                    <!-- Ícono o imagen que quieras usar -->
                                                </span>
                                                <span class="file-label"> Elige una foto... </span>
                                            </span>
                                            <span class="file-name" id="file-name-label"> No se ha seleccionado ninguna
                                                foto. </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="linkedin">Partners:</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons has-addons-centered">
                                    <p class="control is-expanded">
                                        <input type="checkbox" name="partners" id="partners">
                                        <label for="partners">Añadir banner con partners</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label" for="gifSelector">Seleccionar GIF:</label>
                            </div>
                            <div class="field-body">
                                <div class="field has-addons has-addons-centered">
                                    <div class="control is-expanded">
                                        <div class="select">
                                            <select id="gifSelector">
                                                <option value="">Selecciona un GIF</option>
                                                <option value="img/gif/gif1.gif">GIF 1</option>
                                                <option value="img/gif/gif2.gif">GIF 2</option>
                                                <option value="img/gif/gif3.gif">GIF 3</option>
                                                <!-- Agrega más opciones según sea necesario -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div></div>
                    </form>
                </div>
                <div class="column">
                    <article class="message is-primary">
                        <div class="message-body" id="signature_container">
                            <table cellpadding="0" cellspacing="0" id="signature" style="width: 500px; border: none">
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <table border="0" cellpadding="0" cellspacing="1" style="width: 500px">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 145px">
                                                            <div class="group">
                                                                <img alt="" src="crop/css/user.png"
                                                                    style="height: 150px; width: 150px"
                                                                    id="crop-image" />
                                                                <img id="loading-gif" src="img/loading.gif"
                                                                    alt="Cargando" style="display: none" />
                                                                <input type="file" name="input-file" id="input-file"
                                                                    accept=".png,.jpg,.jpeg" />
                                                            </div>
                                                        </td>
                                                        <td
                                                            style="width: 343px; font-family: Helvetica, Arial, sans-serif; font-size: 12px">
                                                            <strong class="name" id="preparedName">Nombre y apellidos
                                                            </strong><br />
                                                            <span class="position">Cargo / Divisi&oacute;n</span><br />
                                                            <br />

                                                            <a class="email" href="mailto:name@gmail.com"
                                                                style="color: rgb(85, 85, 85); text-decoration: none">correo@grupomainjobs.com</a><br />
                                                            <div id="phoneWrap">
                                                                <a class="phone" href="tlf:"
                                                                    style="color: rgb(85, 85, 85); text-decoration: none"></a>
                                                            </div>
                                                            <br />
                                                            <a class="linkedin"
                                                                href="https://www.linkedin.com/company/mainjobs/mycompany/"
                                                                style="text-decoration: none"><span
                                                                    style="color: gray; font-family: Arial; font-size: 12px">&iquest;Conectamos
                                                                    en LinkedIn?&nbsp;</span></a>
                                                            <br /><br />
                                                            <div id="gif">
                                                                <img src="img/gif/gif1.gif" width="300" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>

                                    <tr>

                                        <td colspan="2">
                                            <div id="partners-banner" style="witdh:500px">
                                            </div>
                                            <p
                                                style="text-align: justify; font-family: Helvetica, Arial, sans-serif; font-size: 10px">
                                                Por favor, considere el impacto en el medio ambiente antes de imprimir
                                                este mail. Esta comunicaci&oacute;n contiene
                                                informaci&oacute;n confidencial y privilegiada de uso exclusivo para la
                                                persona destinataria del mensaje. Si no es usted,
                                                tenga en cuenta que cualquier distribuci&oacute;n, copia o uso de esta
                                                comunicaci&oacute;n queda totalmente prohibida. Si
                                                usted ha recibido esta comunicaci&oacute;n por error, por favor
                                                notif&iacute;quelo a la mayor brevedad por correo
                                                electr&oacute;nico o tel&eacute;fono.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                            <div id="imageWrap"></div>
                            <div class="logo"></div>
                        </div>
                    </article>
                    <h3 class="title">Obtener firma:</h3>
                    <div class="controls">
                        <button class="button is-primary" data-select="" data-signature="signature">Copiar
                            (recomendado)</button>
                        <button class="button is-info" data-prepare="" data-signature="signature">Crear HTML para
                            descargar</button>
                        <a class="button is-primary is-hidden" data-load="" download="NRG_signature.htm"> Guardar
                            archivo HTML generado </a>
                        <p style="font-size: 14px">
                            Al seleccionar "copiar" se seleccionará el contenido de la firma.
                            <span style="color: red">Solo deberás hacer clic encima, botón derecho/copiar.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'parts/instructions.html'; ?>
    <?php include 'parts/clientify.html'; ?>



    <div class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <p>Recorta tu foto</p>
            </div>
            <div class="modal-body">
                <div class="content-imagen-cropper">
                    <img src="" alt="" class="img-cropper" id="img-cropper" />
                </div>
                <div class="content-imagen-sample">
                    <div src="" alt="" class="img-sample" id="img-croppered"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn primary" id="cut">Recortar</button>
                <button class="btn secundary" id="close">Cancelar</button>
            </div>
        </div>
    </div>

    <!-- partial -->
    <script>
    (function(w) {
        var doc = w.document;
        var inputs = doc.querySelectorAll("form .input");
        var select = doc.querySelector("[data-select]");
        var prepare = doc.querySelector("[data-prepare]");
        var download = doc.querySelector("[data-load]");
        var banner = doc.querySelector("#checkImage");
        var checkPhone = doc.querySelector("#checkPhone");
        var phoneInput = doc.querySelector("#phone");
        var phoneWrap = doc.querySelector("#phoneWrap");
        var enlace = doc.querySelector("#enlace");
        var checkSkype = doc.querySelector("#checkSkype");
        var skypeInput = doc.querySelector("#skype");
        var skypeWrap = doc.querySelector("#skypeWrap");
        var checkIcons = doc.querySelector("#checkIcons");
        var checkLogo = doc.querySelector("#checkLogo");
        var tableSignature = doc.querySelector("#signature > tbody");
        var savedNode = null;
        var savedLogo = null;

        var logoWrap = doc.querySelector("#logoWrap");
        var bannerWrap = doc.querySelector("#imageWrap");
        var bannerInput = doc.querySelector("#image");
        var companyRadio = doc.querySelectorAll("#company input");

        var styleName = doc.querySelector("#preparedName");
        var styleEnlace = doc.querySelector("#enlace");

        for (var i = inputs.length - 1; i >= 0; i--) {
            inputs[i].addEventListener("keyup", updateSignature);
        }

        checkPhone.addEventListener("click", function() {
            if (!this.checked) {
                phoneInput.disabled = true;
                phoneWrap.innerHTML = "";
            } else {
                phoneInput.disabled = false;
                updatePhoneWrap();
            }
        });

        phoneInput.addEventListener("keyup", updatePhoneWrap);

        function updatePhoneWrap() {
            var phoneNumber = phoneInput.value.trim();

            phoneWrap.innerHTML = phoneNumber || "(+34) 555-555-555";
        }

        phoneInput.addEventListener("keyup", function() {
            var phoneNumber = phoneInput.value; // Obtener el valor actual del input del teléfono
            phoneWrap.innerHTML = phoneNumber; // Actualizar phoneWrap con el nuevo valor
        });

        checkSkype.addEventListener("click", function() {
            if (!this.checked) {
                skypeInput.disabled = true;
                removeHtmlNodes(skypeWrap);
            } else {
                skypeInput.disabled = false;
                addHtmlNodes(skypeWrap, "skypename", "skype");
            }
        });

        function removeHtmlNodes(node) {
            node.innerHTML = "";
        }

        function addHtmlNodes(node, data, className) {
            var br = doc.createElement("br");
            var span = doc.createElement("span");
            span.classList.add(className);
            span.innerHTML = data;
            node.appendChild(span);
            node.appendChild(br);
        }
        checkIcons.addEventListener("click", function() {
            this.checked ? removeIcons() : addIcons();
        });

        function removeIcons() {
            savedNode = tableSignature.removeChild(tableSignature.lastElementChild);
        }

        function addIcons() {
            tableSignature.appendChild(savedNode);
        }

        checkLogo.addEventListener("click", function() {
            this.checked ? removeLogo() : addLogo();
        });

        function removeLogo() {
            savedLogo = logoWrap.removeChild(logoWrap.lastElementChild);
        }

        function addLogo() {
            logoWrap.appendChild(savedLogo);
        }

        function removeBanner() {
            bannerWrap.innerHTML = "";
            doc.querySelector("#image").value = "";
        }

        function updateSignature(e) {
            var id = e.target.id;
            var value = e.target.value;
            var element = doc.querySelector("." + id);

            if (id === "email") {
                element.href = "mailto:" + value;
                element.innerHTML = value;
            } else if (id === "facebook") {
                element.href = value;
            } else if (id === "twitter") {
                element.href = value;
            } else if (id === "linkedin") {
                element.href = value;
            } else if (id === "image") {} else {
                element.innerHTML = value;
            }
            download.classList.add("is-hidden");
            prepare.classList.remove("is-hidden");
        }

        select.addEventListener("click", selectGmail);
        prepare.addEventListener("click", prepareHTML);

        function selectGmail(event) {
            var id = event.target.dataset.signature;
            var element = doc.querySelector("#" + id);
            selectText(element);
        }

        function prepareHTML() {
            var html = doc.querySelector("#signature_container").innerHTML;
            download.href = "data:text/html, " + html;
            download.classList.remove("is-hidden");
            prepare.classList.add("is-hidden");
        }

        // from SO: http://stackoverflow.com/a/987376/1592915
        function selectText(element) {
            if (doc.body.createTextRange) {
                range = doc.body.createTextRange();
                range.moveToElementText(element);
                range.select();
            } else if (w.getSelection) {
                selection = w.getSelection();
                range = doc.createRange();
                range.selectNodeContents(element);
                selection.removeAllRanges();
                selection.addRange(range);
            }
        }
    })(window);


    document.addEventListener('DOMContentLoaded', function() {
        var checkbox = document.getElementById('partners');
        var banner = document.getElementById('partners-banner');

        // Función para actualizar el estado del banner.
        function updateBanner() {
            if (checkbox.checked) {
                // Inserta la imagen en el DOM si el checkbox está marcado.
                banner.innerHTML = '<img src="img/banner-partners.png" alt="banner-partners.png">';
            } else {
                // Elimina la imagen del DOM si el checkbox no está marcado.
                banner.innerHTML = '';
            }
        }

        // Verifica el estado inicial del checkbox y actualiza el banner.
        updateBanner();

        // Función para manejar el cambio de estado del checkbox.
        checkbox.addEventListener('change', updateBanner);
    });



    document.addEventListener('DOMContentLoaded', function() {
        var gifSelector = document.getElementById('gifSelector');
        var gifContainer = document.getElementById('gif');

        gifSelector.addEventListener('change', function() {
            var selectedGif = this.value;
            if (selectedGif) {
                // Actualizar el GIF en el contenedor.
                gifContainer.innerHTML = '<img src="' + selectedGif + '" width="300" />';
            } else {
                // Si no se selecciona nada, limpiar el contenedor.
                gifContainer.innerHTML = '';
            }
        });
    });
    </script>



    <script src="crop/js/jquery.js"></script>
    <script src="crop/js/cropper.js"></script>
    <script src="crop/js/index.js"></script>
</body>

</html>