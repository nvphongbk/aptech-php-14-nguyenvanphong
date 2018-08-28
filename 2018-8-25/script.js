function loadData(){
    var request = new XMLHttpRequest();
    request.onreadystatechange =function(){
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("button")
            .style.display='none';
            document.getElementById("js-table")
            .style.display='block';
            var data = JSON.parse(request.response);
            renderData(data);
          }
        }
    request.open("GET","data.json" ,true)
    request.send();

}
function renderData(data){
     var users = data.users;
     users.forEach(function(users,index){

        var para1 = document.createElement('p');
        var node1 = document.createTextNode(users.id);
        para1.appendChild(node1);

        var element1 = document.getElementById('js-id');
        element1.appendChild(para1);

        var para2 = document.createElement('p');
        var node2 = document.createTextNode(users.name);
        para2.appendChild(node2);
    
        var element2 = document.getElementById('js-name');
        element2.appendChild(para2);

        var para3 = document.createElement('p');
        var node3 = document.createTextNode(users.email);
        para3.appendChild(node3);
    
        var element3 = document.getElementById('js-email');
        element3.appendChild(para3);
      });
    
}