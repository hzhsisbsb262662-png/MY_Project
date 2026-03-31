var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
var sim;

const win = document.querySelector("#winner");
const loader = document.querySelector(".loder-con");

var myModal = new bootstrap.Modal(document.getElementById('model'), {
  keyboard: false 
});

function progressSim(){

    diff = ((al / 100) * Math.PI * 2 * 10);

    ctx.clearRect(0, 0, cw, ch);
    ctx.lineWidth = 17;
    ctx.fillStyle = '#4285f4';
    ctx.strokeStyle = "#4285f4";
    ctx.textAlign = "center";
    ctx.font = "28px monospace";

    ctx.fillText(al + '%', cw / 2, ch / 2 + 10);

    ctx.beginPath();
    ctx.arc(100, 100, 75, start, diff / 10 + start, false);
    ctx.stroke();

    if(al >= 100){
        clearInterval(sim);          
        loader.style.display = 'none'; 
        myModal.show();              
        return;
    }

    al++;
}

win.addEventListener('click', function(){

    al = 0;                   
    loader.style.display = 'flex'; 
    sim = setInterval(progressSim, 20);

});
