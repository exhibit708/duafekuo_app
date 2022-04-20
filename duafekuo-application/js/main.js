
    
    jQuery(document).ready(function(){
        "use strict";
        $(".slider").caroufredsel({
            responsive:true,
            width:"100%",
            circular:true,
           
            
            scroll:{
            items:1,
                duration:1000,
                PouseOnHover:true
        },
            auto:true,
            items:{
                
                visible:{
                    min:1,
                    max:1,
                },
                height:"variable"
            },
        
    
        })
        $("#recomended").caroufredsel({
            responsive:true,
            width:"100%",
            circular:true,
           
            
            scroll:{
            items:1,
                duration:1000,
                PouseOnHover:true
        },
            auto:true,
            items:{
                
                visible:{
                    min:1,
                    max:3,
                },
                height:"variable"
            },
        
    
        })
 
    
               
        
    });
    
    
   
    
    