import.meta.glob([
    '../images/**',
  ]);

import Dropzone from "dropzone";

Dropzone.autoDiscover = false;
const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Drop your image here to upload',
    acceptedFiles: '.png, .jpg, .jpeg, .gif',
    addRemoveLinks: true,
    dictRemoveFile: 'Remove file',
    maxFiles: 1,
    uploadMultiple: false,

    init: function () {
        if (document.querySelector('[name="image"]').value.trim()) {
            const publishedImage = {};
            publishedImage.name = document.querySelector('[name="image"]').value;
            publishedImage.size = 12345;

            this.options.addedfile.call(this, publishedImage);
            this.options.thumbnail.call(this, publishedImage, `/uploads/${publishedImage.name}`);

            publishedImage.previewElement.classList.add('dz-success', 'dz-complete');
        }
    },
});

dropzone.on('success', function (file, response) {
    document.querySelector('[name="image"]').value = response.image;
});

dropzone.on('removedfile', function () {
    document.querySelector('[name="image"]').value = '';
});
