

$(document).ready(function(){
    
    $("img.addcart").live("click",function(){
        $("img#img_utama").css({
            "margin-top":"-332px"
        });
        $("ul#list_list").css({
            "margin-top":"2px"
        });
        $("img#img_utama_shadow").css({
            "display":"block",
            "opacity":"0.3"
        });
        $("p#cartempty").fadeOut(2000);
        $("img#img_utama_shadow").animate({
            height:200
        },"fast");
        $("img#img_utama_shadow").animate({
            width:170
        },"fast");
        $("img#img_utama_shadow").animate({
            marginLeft:-197
        },"fast");
        $("img#img_utama_shadow").animate({
            marginTop:-95
        },"fast");
        
        $(".mycart .img_cart").css({
            "z-index":"-4"
        });
        $(".mycart .img_cart2").fadeIn(500);
        $(".mycart .img_cart2").fadeOut(500);
        $(".p_cart").animate({color:'green'},500);
         $(".p_cart").animate({color:'black'},500);
        $("img#img_utama_shadow").fadeOut(1000).css({
            "z-index":"3"
        });
        
       
//        $("img#img_utama_shadow").animate({
//                marginTop:-297
//            });
//            $("img#img_utama_shadow").animate({
//                marginLeft:-17
//            });
//            $("img#img_utama_shadow").animate({
//                height:336
//            });
//            $("img#img_utama_shadow").animate({
//                width:324
//            });
//        
       
        
        $("div#cartfadein").fadeIn(3000).css({
            "z-index":"1"
            
        });
        
        $("a p#showcart").fadeIn(3000).css({
           
            "margin-top":"8px",
            "z-index":"999999"
        });
        
        $(this).animate({
            marginTop:11
        },"slow");
        $("p#list_nama_barang").clone().insertAfter(this).appendTo("p#nama_barang").css({
            "z-index":"-1",
            "display":"block"
            
        }) ;
        $("h1#list_harga_barang").clone().insertAfter(this).appendTo("h1#harga_barang").css({
            "z-index":"-1",
            "display":"block"
        });
        
        $("p#confirmasi").fadeIn(5000);
    });
});

//--------------------------------------------------------------------------------------------------------------------------------------------------------                            


$(document).ready(function(){          
    $("img.img_kedua").hover(
        function(){
            $(this).css({
                "box-shadow":" 0 0 40px 0 red",
                "-webkit-box-shadow":" 0 0 40px 0 red",
                "-moz-box-shadow":" 0 0 40px 0 red",
                "-o-box-shadow":" 0 0 40px 0 red",
                "cursor":"pointer",
                "opacity":"1"
            });
        },function(){
            $(this).css({
                "box-shadow":" 0 0 40px 0 white",
                "-webkit-box-shadow":" 0 0 40px 0 white",
                "-moz-box-shadow":" 0 0 40px 0 white",
                "-o-box-shadow":" 0 0 40px 0 white",
                "cursor":"pointer",
                "opacity":"0.5"
            });
        }
        );
    //--------------------------------------------------------------------------------------------------------------------------------------------------------                            
    $("img#tk1").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk1").fadeIn(3000);     
        
        $("img#img_utama_tk1").css({
            "margin-top":"-300px"
        });
        $("ul#list_list").css({
            "margin-top":"2px"
        });
        
        $("img#img_utama_tk2,img#img_utama_tk3,img#img_utama_tk4,img#img_utama_tk5,img#img_utama_tk6").css({
            "display":"none"
        });
        
        $("#list_list,#list_list_tk2,#list_list_tk3,#list_list_tk4,#list_list_tk5,#list_list_tk6,#list_harga_barang,#list_harga_barang_tk2,#list_harga_barang_tk3,#list_harga_barang_tk4,#list_harga_barang_tk5,#list_harga_barang_tk6").css({
            "display":"none"
        });
        $("#list_list_tk1,#list_harga_barang_tk1").css({
            "display":"block"
        });
        
        $("img.addcart").css({
            "display":"none"
        });
        $("img.addcart_tk1").css({
            "display":"block"
        });
    });
    
    $("img.addcart_tk1").live("click",function(){
        $("img#img_utama_tk1_shadow").css({
            "display":"block",
            "opacity":"0.3"
        });
        $("p#cartempty").fadeOut(2000);
        $("img#img_utama_tk1_shadow").animate({
            height:200
        },"fast");
        $("img#img_utama_tk1_shadow").animate({
            width:170
        },"fast");
        $("img#img_utama_tk1_shadow").animate({
            marginLeft:-197
        },"fast");
        $("img#img_utama_tk1_shadow").animate({
            marginTop:-92
        },"fast");
        
         $(".mycart .img_cart").css({
            "z-index":"-4"
        });
        $(".mycart .img_cart2").fadeIn(500);
        $(".mycart .img_cart2").fadeOut(500);
        $(".p_cart").animate({color:'green'},500);
         $(".p_cart").animate({color:'black'},500);
        
        $("img#img_utama_tk1_shadow").fadeOut(1000);
        $("div#cartfadein").fadeIn(3000).css({
            "z-index":"1"
            
        });
        
        $("a p#showcart").fadeIn(3000).css({
           
            "margin-top":"8px",
            "display":"block",
            "z-index":"2"
           
        });
        
        $(this).animate({
            marginTop:11
        },"slow");
        $("p#list_nama_barang_tk1").clone().insertAfter(this).appendTo("p#nama_barang").css({
            "z-index":"-1",
            "display":"block"
            
        }) ;
        $("h1#list_harga_barang_tk1").clone().insertAfter(this).appendTo("h1#harga_barang").css({
            "z-index":"-1",
            "display":"block"
        });
        
        $("p#confirmasi").fadeIn(5000);
        
    //        $("#list_list").css({
    //            "display":"none"
    //        });
    //        $("#list_list_tk1").css({
    //            "display":"block"
    //        });
    });
    //--------------------------------------------------------------------------------------------------------------------------------------------------------                            

    $("img#tk2").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk2").fadeIn(3000);
        
        $("img#img_utama_tk2").css({
            "margin-top":"-300px"
        });
        $("ul#list_list").css({
            "margin-top":"2px"
        });
        
        $("img#img_utama_tk1,img#img_utama_tk3,img#img_utama_tk4,img#img_utama_tk5,img#img_utama_tk6").css({
            "display":"none"
        });
        
        $("#list_list,#list_list_tk1,#list_list_tk3,#list_list_tk4,#list_list_tk5,#list_list_tk6,#list_harga_barang,#list_harga_barang_tk1,#list_harga_barang_tk3,#list_harga_barang_tk4,#list_harga_barang_tk5,#list_harga_barang_tk6").css({
            "display":"none"
        });
        $("#list_list_tk2,#list_harga_barang_tk2").css({
            "display":"block"
        });
        
        $("img.addcart").css({
            "display":"none"
        });
        $("img.addcart_tk2").css({
            "display":"block"
        });
    });
    
    $("img.addcart_tk2").live("click",function(){
        $("img#img_utama_tk2_shadow").css({
            "display":"block",
            "opacity":"0.3"
        });
        $("p#cartempty").fadeOut(2000);
        $("img#img_utama_tk2_shadow").animate({
            height:200
        },"fast");
        $("img#img_utama_tk2_shadow").animate({
            width:170
        },"fast");
        $("img#img_utama_tk2_shadow").animate({
            marginLeft:-197
        },"fast");
        $("img#img_utama_tk2_shadow").animate({
            marginTop:-92
        },"fast");
        
        $(".mycart .img_cart").css({
            "z-index":"-4"
        });
        $(".mycart .img_cart2").fadeIn(500);
        $(".mycart .img_cart2").fadeOut(500);
        $(".p_cart").animate({color:'green'},500);
         $(".p_cart").animate({color:'black'},500);
        
        $("img#img_utama_tk2_shadow").fadeOut(1000);
        $("div#cartfadein").fadeIn(3000).css({
            "z-index":"1"
            
        });
        
        $("a p#showcart").fadeIn(3000).css({
           
            "margin-top":"8px"
           
        });
        
        $(this).animate({
            marginTop:11
        },"slow");
        $("p#list_nama_barang_tk2").clone().insertAfter(this).appendTo("p#nama_barang").css({
            "z-index":"-1",
            "display":"block"
            
        }) ;
        $("h1#list_harga_barang_tk2").clone().insertAfter(this).appendTo("h1#harga_barang").css({
            "z-index":"-1",
            "display":"block"
        });
        
        $("p#confirmasi").fadeIn(5000);
        
    //        $("#list_list,#list_list_tk1").css({
    //            "display":"none"
    //        });
    //        $("#list_list_tk2").css({
    //            "display":"block"
    //        });
    });
    //--------------------------------------------------------------------------------------------------------------------------------------------------------                            

    $("img#tk3").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk3").fadeIn(3000);
        
        $("img#img_utama_tk3").css({
            "margin-top":"-300px"
        });
        $("ul#list_list").css({
            "margin-top":"2px"
        });
        
        $("img#img_utama_tk2,img#img_utama_tk1,img#img_utama_tk4,img#img_utama_tk5,img#img_utama_tk6").css({
            "display":"none"
        });
        
        $("#list_list,#list_list_tk2,#list_list_tk1,#list_list_tk4,#list_list_tk5,#list_list_tk6,#list_harga_barang,#list_harga_barang_tk1,#list_harga_barang_tk2,#list_harga_barang_tk4,#list_harga_barang_tk5,#list_harga_barang_tk6").css({
            "display":"none"
        });
        $("#list_list_tk3,#list_harga_barang_tk3").css({
            "display":"block"
        });
        
        $("img.addcart").css({
            "display":"none"
        });
        $("img.addcart_tk3").css({
            "display":"block"
        });
    });
    
    $("img.addcart_tk3").live("click",function(){
        $("img#img_utama_tk3_shadow").css({
            "display":"block",
            "opacity":"0.3"
        });
        $("p#cartempty").fadeOut(2000);
        $("img#img_utama_tk3_shadow").animate({
            height:200
        },"fast");
        $("img#img_utama_tk3_shadow").animate({
            width:170
        },"fast");
        $("img#img_utama_tk3_shadow").animate({
            marginLeft:-197
        },"fast");
        $("img#img_utama_tk3_shadow").animate({
            marginTop:-92
        },"fast");
        
        $(".mycart .img_cart").css({
            "z-index":"-4"
        });
        $(".mycart .img_cart2").fadeIn(500);
        $(".mycart .img_cart2").fadeOut(500);
        $(".p_cart").animate({color:'green'},500);
         $(".p_cart").animate({color:'black'},500);
        
        $("img#img_utama_tk3_shadow").fadeOut(1000);
        $("div#cartfadein").fadeIn(3000).css({
            "z-index":"1"
            
        });
        
        $("a p#showcart").fadeIn(3000).css({
           
            "margin-top":"8px"
           
        });
        
        $(this).animate({
            marginTop:11
        },"slow");
        $("p#list_nama_barang_tk3").clone().insertAfter(this).appendTo("p#nama_barang").css({
            "z-index":"-1",
            "display":"block"
            
        }) ;
        $("h1#list_harga_barang_tk3").clone().insertAfter(this).appendTo("h1#harga_barang").css({
            "z-index":"-1",
            "display":"block"
        });
        
        $("p#confirmasi").fadeIn(5000);
    });
    //--------------------------------------------------------------------------------------------------------------------------------------------------------                            

    $("img#tk4").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk4").fadeIn(3000);
        
        $("img#img_utama_tk4").css({
            "margin-top":"-300px"
        });
        $("ul#list_list").css({
            "margin-top":"2px"
        });
        
        $("img#img_utama_tk2,img#img_utama_tk3,img#img_utama_tk1,img#img_utama_tk5,img#img_utama_tk6").css({
            "display":"none"
        });
        
        $("#list_list,#list_list_tk2,#list_list_tk3,#list_list_tk1,#list_list_tk5,#list_list_tk6,#list_harga_barang,#list_harga_barang_tk1,#list_harga_barang_tk2,#list_harga_barang_tk3,#list_harga_barang_tk5,#list_harga_barang_tk6").css({
            "display":"none"
        });
        $("#list_list_tk4,#list_harga_barang_tk4").css({
            "display":"block"
        });
        
        $("img.addcart").css({
            "display":"none"
        });
        $("img.addcart_tk4").css({
            "display":"block"
        });
    });
    
    $("img.addcart_tk4").live("click",function(){
        $("img#img_utama_tk4_shadow").css({
            "display":"block",
            "opacity":"0.3"
        });
        $("p#cartempty").fadeOut(2000);
        $("img#img_utama_tk4_shadow").animate({
            height:200
        },"fast");
        $("img#img_utama_tk4_shadow").animate({
            width:170
        },"fast");
        $("img#img_utama_tk4_shadow").animate({
            marginLeft:-197
        },"fast");
        $("img#img_utama_tk4_shadow").animate({
            marginTop:-92
        },"fast");
        
        $(".mycart .img_cart").css({
            "z-index":"-4"
        });
        $(".mycart .img_cart2").fadeIn(500);
        $(".mycart .img_cart2").fadeOut(500);
        $(".p_cart").animate({color:'green'},500);
         $(".p_cart").animate({color:'black'},500);
        
        $("img#img_utama_tk4_shadow").fadeOut(1000);
        $("div#cartfadein").fadeIn(3000).css({
            "z-index":"1"
            
        });
        
        $("a p#showcart").fadeIn(3000).css({
           
            "margin-top":"8px"
           
        });
        
        $(this).animate({
            marginTop:11
        },"slow");
        $("p#list_nama_barang_tk4").clone().insertAfter(this).appendTo("p#nama_barang").css({
            "z-index":"-1",
            "display":"block"
            
        }) ;
        $("h1#list_harga_barang_tk4").clone().insertAfter(this).appendTo("h1#harga_barang").css({
            "z-index":"-1",
            "display":"block"
        });
        
        $("p#confirmasi").fadeIn(5000);
    });
    //--------------------------------------------------------------------------------------------------------------------------------------------------------                            

    $("img#tk5").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk5").fadeIn(3000);
        
        $("img#img_utama_tk5").css({
            "margin-top":"-300px"
        });
        $("ul#list_list").css({
            "margin-top":"2px"
        });
        
        $("img#img_utama_tk2,img#img_utama_tk3,img#img_utama_tk4,img#img_utama_tk1,img#img_utama_tk6").css({
            "display":"none"
        });
        
        $("#list_list,#list_list_tk2,#list_list_tk3,#list_list_tk4,#list_list_tk1,#list_list_tk6,#list_harga_barang,#list_harga_barang_tk1,#list_harga_barang_tk2,#list_harga_barang_tk3,#list_harga_barang_tk4,#list_harga_barang_tk6").css({
            "display":"none"
        });
        $("#list_list_tk5,#list_harga_barang_tk5").css({
            "display":"block"
        });
        
        $("img.addcart").css({
            "display":"none"
        });
        $("img.addcart_tk5").css({
            "display":"block"
        });
    });
    
    $("img.addcart_tk5").live("click",function(){
        $("img#img_utama_tk5_shadow").css({
            "display":"block",
            "opacity":"0.3"
        });
        $("p#cartempty").fadeOut(2000);
        $("img#img_utama_tk5_shadow").animate({
            height:200
        },"fast");
        $("img#img_utama_tk5_shadow").animate({
            width:170
        },"fast");
        $("img#img_utama_tk5_shadow").animate({
            marginLeft:-197
        },"fast");
        $("img#img_utama_tk5_shadow").animate({
            marginTop:-92
        },"fast");
        
        $(".mycart .img_cart").css({
            "z-index":"-4"
        });
        $(".mycart .img_cart2").fadeIn(500);
        $(".mycart .img_cart2").fadeOut(500);
        $(".p_cart").animate({color:'green'},500);
         $(".p_cart").animate({color:'black'},500);
        
        $("img#img_utama_tk5_shadow").fadeOut(1000);
        $("div#cartfadein").fadeIn(3000).css({
            "z-index":"1"
            
        });
        
        $("a p#showcart").fadeIn(3000).css({
           
            "margin-top":"8px"
           
        });
        
        $(this).animate({
            marginTop:11
        },"slow");
        $("p#list_nama_barang_tk5").clone().insertAfter(this).appendTo("p#nama_barang").css({
            "z-index":"-1",
            "display":"block"
            
        }) ;
        $("h1#list_harga_barang_tk5").clone().insertAfter(this).appendTo("h1#harga_barang").css({
            "z-index":"-1",
            "display":"block"
        });
        
        $("p#confirmasi").fadeIn(5000);
    });
    //--------------------------------------------------------------------------------------------------------------------------------------------------------                            

    $("img#tk6").live("click",function(){
        $("img#img_utama").fadeOut(3000);
        $("img#img_utama_tk6").fadeIn(3000);    
        
        $("img#img_utama_tk6").css({
            "margin-top":"-300px"
        });
        $("ul#list_list").css({
            "margin-top":"2px"
        });
        
        $("img#img_utama_tk2,img#img_utama_tk3,img#img_utama_tk4,img#img_utama_tk5,img#img_utama_tk1").css({
            "display":"none"
        });
        
        $("#list_list,#list_list_tk2,#list_list_tk3,#list_list_tk4,#list_list_tk5,#list_list_tk1,#list_harga_barang,#list_harga_barang_tk1,#list_harga_barang_tk2,#list_harga_barang_tk3,#list_harga_barang_tk4,#list_harga_barang_tk5").css({
            "display":"none"
        });
        $("#list_list_tk6,#list_harga_barang_tk6").css({
            "display":"block"
        });
        
        $("img.addcart").css({
            "display":"none"
        });
        $("img.addcart_tk6").css({
            "display":"block"
        });
    });
    
    $("img.addcart_tk6").live("click",function(){
        $("img#img_utama_tk6_shadow").css({
            "display":"block",
            "opacity":"0.3"
        });
        $("p#cartempty").fadeOut(2000);
        $("img#img_utama_tk6_shadow").animate({
            height:200
        },"fast");
        $("img#img_utama_tk6_shadow").animate({
            width:170
        },"fast");
        $("img#img_utama_tk6_shadow").animate({
            marginLeft:-197
        },"fast");
        $("img#img_utama_tk6_shadow").animate({
            marginTop:-92
        },"fast");
        
        $(".mycart .img_cart").css({
            "z-index":"-4"
        });
        $(".mycart .img_cart2").fadeIn(500);
        $(".mycart .img_cart2").fadeOut(500);
        $(".p_cart").animate({color:'green'},500);
         $(".p_cart").animate({color:'black'},500);
        
        $("img#img_utama_tk6_shadow").fadeOut(1000);
        $("div#cartfadein").fadeIn(3000).css({
            "z-index":"1"
            
        });
        
        $("a p#showcart").fadeIn(3000).css({
           
            "margin-top":"8px"
           
        });
        
        $(this).animate({
            marginTop:11
        },"slow");
        $("p#list_nama_barang_tk6").clone().insertAfter(this).appendTo("p#nama_barang").css({
            "z-index":"-1",
            "display":"block"
            
        }) ;
        $("h1#list_harga_barang_tk6").clone().insertAfter(this).appendTo("h1#harga_barang").css({
            "z-index":"-1",
            "display":"block"
        });
        
        $("p#confirmasi").fadeIn(5000);
    });
});