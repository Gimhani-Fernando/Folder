
function changeParagraph(){
    document.getElementById('para1').innerHTML = 'Text changed';
}

function getUserName(){
    var name = document.getElementById('name').value;
    document.getElementById('displayName').innerHTML = '<em>'+ name+'</em>';

}
