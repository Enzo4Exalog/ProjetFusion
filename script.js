function AjouterDesFichiers() {
    var fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.name = "selected_files[]";
  
    var fileListDiv = document.getElementById("file-list");
    fileListDiv.appendChild(fileInput);
  }
  function RetirerDesFichiers() {
    var fileListDiv = document.getElementById("file-list");
    var fileInputs = fileListDiv.getElementsByTagName("input");

    if (fileInputs.length > 0) {
        fileListDiv.removeChild(fileInputs[fileInputs.length - 1]);
    }
}
