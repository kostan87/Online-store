window.onload = function() {
  let element = document.getElementById("place1");
  element.children[0].setAttribute("href", "ball.html");
  $.ajax({
    url: 'products.JSON',
    success: function(data){
      //let test = JSON.parse(data);
      console.log(data);
    },
  });
}
