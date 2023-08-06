function previewImage(event) {
    var reader = new FileReader();
    var InputImage = event.target;
  
    if (InputImage.files && InputImage.files[0]) {
      reader.onload = function (e) {
        var imageArea = document.getElementById('imageArea');
        imageArea.style.backgroundImage = 'url(' + e.target.result + ')';
        imageArea.style.backgroundSize = 'cover';
        imageArea.style.backgroundPosition = 'center';
        imageArea.textContent = '';
      };
  
      reader.readAsDataURL(InputImage.files[0]);
    }
  }
  