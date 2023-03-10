function order1(){
    
    window.location.replace("my_order.php");

}
function fun1()
{
    var data, xhr, fileList;

    data = new FormData();

    fileList = document.getElementById('file').files;
    
    if(fileList.length > 0) {
  data.append('image', fileList[0]);
    }

    data.append('mealname',  document.getElementById('mealname').value);
    data.append('price',  document.getElementById('price').value);
    data.append('det',  document.getElementById('det').value);

    xhr = new XMLHttpRequest();

    xhr.onload =function()
    {
        if (xhr.readyState === xhr.DONE) {
            if (xhr.status === 200) {
                console.log(xhr.response);
                document.getElementById("r").innerHTML=xhr.responseText;
        
                document.getElementById('mealname').value = '';
                document.getElementById('price').value = '';
                document.getElementById('det').value = '';
            }
          }
    }

    xhr.open( 'POST', 'control.php', true );
    xhr.onreadystatechange = function ( response ) {};
    xhr.send( data );


}
