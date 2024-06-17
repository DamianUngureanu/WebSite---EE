window.addEventListener('load',function(){
    document.getElementById("loading").style.opacity="0";
    this.setTimeout(function(){
        document.getElementById("loading").style.display="none"; 
    },3000);
});