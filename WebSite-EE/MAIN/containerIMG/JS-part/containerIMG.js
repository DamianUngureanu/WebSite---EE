let masura=document.getElementById("promo").offsetWidth/9;
        if(masura<150){masura=150;}
        for(i=1;i<=10;i++){
            document.getElementById("I"+i).style.left=masura*(i-1)+"px";
        }

        setInterval(function(){
            for(i=1;i<=10;i++){
                document.getElementById("I"+i).style.left=document.getElementById("I"+i).offsetLeft-1+"px";
                if(document.getElementById("I"+i).offsetLeft<=-masura){
                    document.getElementById("I"+i).style.left=masura*9+"px";
                }
            }
        },15);