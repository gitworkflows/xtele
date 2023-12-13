function validateFileExtension(fld) {
    if (!/(\.jpg)$/i.test(fld.value)) {
        alert("Image file format must be .jpg");
        // fld.form.reset();
        this.resetImg(fld);
        fld.focus();
        return false;
    }
    return true;
}

function resetImg(fld) {
    fld.value = '';
    if (!/safari/i.test(navigator.userAgent)) {
        fld.type = '';
        fld.type = 'file';
    }
}


function previewFile(fld) {
    if (!this.validateFileExtension(fld)) {
        return;
    }
    var preview = document.querySelector('#photo_view');
    var file = document.querySelector('#photo').files[0];
    var size = file.size / 1024;
    if (size > 100 || size < 4) {
        alert('Photo size must be between 4KB and 100KB!');
        this.resetImg(fld);
        return;
    }

    let img = new Image();
    img.src = window.URL.createObjectURL(file);
    img.onload = () => {
        if (img.width != 300 || img.height != 300) {
            alert('Photo size must be 300px X 300px!');
            this.resetImg(fld);
            return;
        } else {
            var reader = new FileReader();
            reader.onloadend = function () {
                preview.src = reader.result;
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
    }
}

function previewSign(fld) {
    if (!this.validateFileExtension(fld)) {
        return;
    }
    var preview = document.querySelector('#signature_view');
    var file = document.querySelector('#signature').files[0];
    var size = file.size / 1024;
    if (size > 60 || size < 3) {
        alert('Signature size must be between 3KB and 60KB!');
        this.resetImg(fld);
        return;
    }

    let img = new Image();
    img.src = window.URL.createObjectURL(file);
    img.onload = () => {
        if (img.width != 300 || img.height != 80) {
            alert('Signature size must be 300px X 80px!');
            this.resetImg(fld);
            return;
        } else {
            var reader = new FileReader();
            reader.onloadend = function () {
                preview.src = reader.result;
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
    }
}