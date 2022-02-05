$(document).ready(function () {
  //Eitor CKEditor
  ClassicEditor.create(document.querySelector("#body")).catch((error) => {
    console.error(error);
  });
});
