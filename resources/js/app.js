import Dropzone from "dropzone";


Dropzone.autoDiscover = false;

const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Sube aquí tu imagen",
    acceptedFiles: ".png,.jpg,.gif,.jpeg",
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxfiles: 1,
    uploadMultiple: false,
});