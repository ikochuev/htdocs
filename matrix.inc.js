var width = q.width = document.documentElement.clientWidth-document.documentElement.clientHeight*0.017;
var height = q.height = document.documentElement.clientHeight*0.25;
var letters = Array(256).join(1).split('');

window.onresize = function () {
  var newWidth = window.innerWidth;
  if (newWidth != width) {
      width = newWidth;
  }
};

var draw = function () {
  q.getContext('2d').fillStyle='rgba(0,0,0,.05)'; //Тут цвет фона
  q.getContext('2d').fillRect(0,0,width,height);
  q.getContext('2d').fillStyle='#0F0'; //Тут цвет букв
  letters.map(function(y_pos, index){
  text = String.fromCharCode(65+Math.random()*33);
  x_pos = index * 10;
  q.getContext('2d').fillText(text, x_pos, y_pos);
  letters[index] = (y_pos > 758 + Math.random() * 1e4) ? 0 : y_pos + 10;
  });
};
setInterval(draw, 33);

window.addEventListener("resize", () => location.reload());