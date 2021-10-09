var DropzoneExample = function () {

    var DropzoneDemos = function () {
        // single file upload
        Dropzone.options.singleFileUpload = {
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 1,
            maxFilesize: 5, // MB
            accept: function(file, done) {
                if (file.name == "unive.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        };

        // multi file upload
        Dropzone.options.multiFileUpload = {
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            accept: function(file, done) {
                if (file.name == "unive.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        };

        // file type validation
        Dropzone.options.fileTypeValidation = {
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            acceptedFiles: "image/*,application/pdf,.psd",
            accept: function(file, done) {
                if (file.name == "unive.jpg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        };


    }

    return {
        init: function() {
            DropzoneDemos();
        }
    };
}();

DropzoneExample.init();