
function mainImgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("main_preview");
  var previewImage = document.getElementById("previewImage");
   
  if(previewImage != null) {
    preview.removeChild(previewImage);
  }
  reader.onload = function(event) {
    var img = document.createElement("img");
    img.setAttribute("src", reader.result);
    img.setAttribute("id", "previewImage");
    preview.appendChild(img);
  };
 
  reader.readAsDataURL(file);
}

function sub1ImgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("sub1_preview");
  var previewImage1 = document.getElementById("previewImage1");
   
  if(previewImage1 != null) {
    preview.removeChild(previewImage1);
  }
  reader.onload = function(event) {
    var img = document.createElement("img");
    img.setAttribute("src", reader.result);
    img.setAttribute("id", "previewImage1");
    preview.appendChild(img);
  };
 
  reader.readAsDataURL(file);
}

function sub2ImgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("sub2_preview");
  var previewImage2 = document.getElementById("previewImage2");
   
  if(previewImage2 != null) {
    preview.removeChild(previewImage2);
  }
  reader.onload = function(event) {
    var img = document.createElement("img");
    img.setAttribute("src", reader.result);
    img.setAttribute("id", "previewImage2");
    preview.appendChild(img);
  };
 
  reader.readAsDataURL(file);
}

function sub3ImgPreView(event) {
  var file = event.target.files[0];
  var reader = new FileReader();
  var preview = document.getElementById("sub3_preview");
  var previewImage3 = document.getElementById("previewImage3");
   
  if(previewImage3 != null) {
    preview.removeChild(previewImage3);
  }
  reader.onload = function(event) {
    var img = document.createElement("img");
    img.setAttribute("src", reader.result);
    img.setAttribute("id", "previewImage3");
    preview.appendChild(img);
  };
 
  reader.readAsDataURL(file);
}