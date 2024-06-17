let ok=1;
        let nrSlide=1;
        function muveSlide(directie){
            if(ok==1){
                ok=0;
                if(!(directie==1 && nrSlide==1)&&!(directie==-1 && nrSlide==3)){
                    let muve=document.getElementById("inner-DivImg").offsetWidth;
                    console.log(muve,document.getElementById("img3").offsetLeft)
                    document.getElementById("img1").style.left=document.getElementById("img1").offsetLeft+muve*directie+"px";
                    document.getElementById("img2").style.left=document.getElementById("img2").offsetLeft+muve*directie+"px";
                    document.getElementById("img3").style.left=document.getElementById("img3").offsetLeft+muve*directie+"px";
                    document.getElementById("S"+nrSlide).name="stop-outline";
                    nrSlide-=directie;
                    document.getElementById("S"+nrSlide).name="stop";
                    setTimeout(function(){
                        ok=1;
                    },1000); 
                }else{ok=1;}   
            }
        }