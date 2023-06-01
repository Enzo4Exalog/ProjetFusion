function AjouterDesFichiers() {
    var fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.name = "selected_files[]";
  
    var fileListDiv = document.getElementById("file-list");
    fileListDiv.appendChild(fileInput);
  }
  $ = function(id) {
    return document.getElementById(id);
  }
  
  var show = function(id) {
      $(id).style.display ='block';
  }
  var hide = function(id) {
      $(id).style.display ='none';
  }