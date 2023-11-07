let cropper = null;

$("#input-file").on("change", () => {
  let image = document.getElementById("img-cropper");
  let input = document.getElementById("input-file");

  let archivos = input.files;
  let extensiones = input.value.substring(
    input.value.lastIndexOf("."),
    input.value.lenght
  );

  if (!archivos || !archivos.length) {
    image.src = "";
    input.value = "";
  } else if (input.getAttribute("accept").split(",").indexOf(extensiones) < 0) {
    alert("Debes seleccionar una imagen");
    input.value = "";
  } else {
    let imagenUrl = URL.createObjectURL(archivos[0]);
    image.src = imagenUrl;

    cropper = new Cropper(image, {
      aspectRatio: 1, // es la proporción en la que queremos que recorte en este caso 1:1
      preview: ".img-sample", // contenedor donde se va a ir viendo en tiempo real la imagen cortada
      zoomable: false, //Para que no haga zoom
      viewMode: 1, //Para que no estire la imagen al contenedor
      responsive: false, //Para que no reacomode con zoom la imagen al contenedor
      dragMode: "none", //Para que al arrastrar no haga nada
      ready() {
        // metodo cuando cropper ya este activo, le ponemos el alto y el ancho del contenedor de cropper al 100%
        document.querySelector(".cropper-container").style.width = "100%";
        document.querySelector(".cropper-container").style.height = "100%";
      },
    });

    $(".modal").addClass("active");
    $(".modal-content").addClass("active");

    $(".modal").removeClass("remove");
    $(".modal-content").removeClass("remove");
  }
});

$("#close").on("click", () => {
  let image = document.getElementById("img-cropper");
  let input = document.getElementById("input-file");

  image.src = "";
  input.value = "";

  cropper.destroy();

  $(".modal").addClass("remove");
  $(".modal-content").addClass("remove");

  $(".modal").removeClass("active");
  $(".modal-content").removeClass("active");
});

$("#cut").on("click", () => {
  let crop_image = document.getElementById("crop-image");
  let loadingGif = document.getElementById("loading-gif");
  let canva = cropper.getCroppedCanvas();
  let image = document.getElementById("img-cropper");
  let input = document.getElementById("input-file");

  // Muestra el GIF de carga y oculta la imagen
  crop_image.style.display = "none";
  loadingGif.style.display = "block";

  canva.toBlob(
    function (blob) {
      let url_cut = URL.createObjectURL(blob);
      crop_image.src = url_cut;

      let formData = new FormData();
      formData.append("croppedImage", blob);

      $.ajax({
        url: "crop/js/save_cropped_image.php",
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
          // Independientemente del resultado, ocultamos el GIF de carga y mostramos la imagen
          loadingGif.style.display = "none";
          crop_image.style.display = "block";

          let responseData;
          try {
            responseData = JSON.parse(response);
          } catch (e) {
            console.error("Error al parsear respuesta:", response);
            alert("Ocurrió un error al procesar la respuesta del servidor.");
            return;
          }

          if (responseData.status === "success") {
            let fileName = responseData.fileName;
            let relativePath = "crop/js/uploads/" + fileName;

            // Actualizar src del elemento crop-image con la ruta relativa
            $("#crop-image").attr("src", relativePath);
            console.log(
              "Imagen actualizada con éxito. Ruta relativa:",
              relativePath
            );
          } else if (responseData.status === "error") {
            console.error("Error en el servidor:", responseData.message);
            alert("Error en el servidor: " + responseData.message);
          } else {
            console.error("Respuesta inesperada del servidor:", response);
            alert(
              "Respuesta inesperada del servidor. Por favor, inténtalo de nuevo."
            );
          }
        },
        error: function (error) {
          loadingGif.style.display = "none";
          crop_image.style.display = "block";
          console.error("Error al enviar la imagen:", error);
          alert("Error al enviar la imagen. Por favor, inténtalo de nuevo.");
        },
      });
    },
    "image/jpeg",
    1.0
  );

  image.src = "";
  input.value = "";
  cropper.destroy();

  $(".modal").addClass("remove");
  $(".modal-content").addClass("remove");
  $(".modal").removeClass("active");
  $(".modal-content").removeClass("active");
});
