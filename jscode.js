 
   
$(document).on("click","#inbox",function(){
           $("#user").load("inbox.php");
             $("#main-block").css("background-image","");
          
}); 
$(document).on("click","#fav",function(){
           $("#user").load("favorite_profile.php");
             $("#main-block").css("background-image","");
          
}); 

$(document).on("click",".btn.btn-primary",function(){
             var code=$(this).attr("id");
             $.post(
                "user_profile.php",{code:code},function(data){
                    
                    $("#user").html(data);
                });
});
$(document).on("click",".btn.btn-dark",function(){
             var code=$(this).attr("id");
             $.post(
                "user_profile.php",{code:code},function(data){
                    $("#user").html(data);
                });
});
$(document).on("click",".w3-button.w3-blue",function(){
   var code = $(this).attr("rel");
    $.post(
                "user_profile.php",{code:code},function(data){
                    $("#user").html(data);
   });
});

$(document).on("click",".fa.fa-edit",function(){
                          var rel=$(this).attr("rel");
                         var pattern=$(this).attr("pattern");
                          if(pattern=="check"){
                              $("#"+rel).prop('disabled', false);
                         }
                         else{
                             var flag=$("#store").attr("prec");
                              if(flag=="0"){
                                      $("#store").attr("prec","1");
                                     var dt=$("#d-"+rel).text();
                                     $("#d-"+rel).html("<input type='"+pattern+"' id='"+rel+"' value='"+dt+"' class='form-control'>");
                                     $("#i-"+rel).attr("class","fa fa-save");
                              }
                          }
});	
$(document).on("click",".fa.fa-save",function(){
         var flag=$("#store").attr("prec");
         if(flag=="1"){
                var rel=$("#store").attr("pid");
                var dt=$("#store").attr("prel");
                
                $.post(
                         "update.php",{id:rel,record:dt},function(data){
                          alert(data);
                             if(data=="success"){
                                  $("#d-"+rel).html(dt);
                                  $("#i-"+rel).attr("class","fa fa-edit");
                                   $("#store").attr("prec","0");
                                   $("#store").attr("pid","");
                                   $("#store").attr("prel","");
                             }
                  });
                        
         }
});
$(document).on("click","#change_pass",function(){
        $("#user").load("change_password.php");
});
$(document).on("click",".w3-btn.w3-red",function(){
        var cp=$("#cp").val();
       $.post(
          "current_pass.php",{cp:cp},function(data){
              if(data=="success"){
                 $("#user").load("match.php");	
              }
          }
       );		 
});
$(document).on("click",".w3-button.w3-purple",function(){
        var np=$("#np").val();
        var rp=$("#rp").val();
       
        if(np==rp){
            $.post(
               "update_pass.php",{np:np,rp:rp},function(data){
                   if(data=="success"){
                        $("#palert").css("background-color","#359F58");
                        
                        $("#palert").html("<h4 style='color:white'>Password Changed</h4>");
                        $("#np").val("");
                        $("#rp").val("");
                   }
               }
            );
        }
        else{
             $("#palert").css("background-color","red");
            $("#palert").html("<h4 style='color:white'>New Password & Retype password not match</h4>");
            $("#rp").focus();
        }
});
$(document).on("change","select",function(){
        var rel=$(this).attr("rel");
             var dt=$(this).val();
               $.post(
                 "update.php",{id:rel,record:dt},function(data){
                     if(data=="success"){
                          $(".form-control."+rel).prop('disabled', true);
                           $("#store").attr("prec","0");
                                   $("#store").attr("pid","");
                                   $("#store").attr("prel","");
                     }
                 }
                );
});
$(document).on("keyup","input",function(){
    var rel=$(this).attr("id");
                var dt=$(this).val();
                $.post(
                         "update.php",{id:rel,record:dt},function(data){
                           
                             if(data=="success"){
                                  $("#d-"+rel).html(dt);
                                  $("#i-"+rel).attr("class","fa fa-edit");
                                   $("#store").attr("prec","0");
                                   $("#store").attr("pid","");
                                   $("#store").attr("prel","");
                             }
                      });
                        
                
 });
$(document).on("click",".w3-button.w3-red",function(){
             var gender=$("#search_gender").val();
                 var caste=$("#search_caste").val();
             var religion=$("#search_religion").val();
             var num=$(this).attr("id");
             $(this).fadeOut(10);
             $("#main-block").css("background-image","");
             $.post(
              "search.php",{gender:gender,caste:caste,religion:religion,num:num},function(data){
                  $("#user").append(data);
              });
              
             
}); 
$(document).on("click",".w3-btn.w3-blue",function(){
          var num=$(this).attr("id");
           $(this).fadeOut(10);
          $.post(
             "inbox.php",{num:num},function(data){
                 $("#user").append(data);
                 
             }
          );
});
$(document).on("click",".btn.btn-info",function(){
             var gender=$("#search_gender").val();
                 var caste =$("#search_caste").val();
             var religion=$("#search_religion").val();
             var num=0;
             $("#main-block").css("background-image","");
             $.post(
              "search.php",{gender:gender,caste:caste,religion:religion,num:num},function(data){
                  $("#user").html(data);
              });
              
});
$(document).on("click",".btn.btn-danger",function(){
        var code=$(this).attr("id");
        var msg=$("#msg").val();
        $.post(
           "msg.php",{id:code,msg:msg},function(data){
               if(data.trim()=="success"){
                   $("#msg").val("");
                   $(".alert").html("<h3 style='color:blue'>Message Sent</h3>");
               }
           }
        );
        
});
    $(document).on("click",".fa.fa-heart",function(){
                         var code = $(this).attr("rel");
                        $.post(
                            "favorite.php",{code:code},function(data){
                               if(data=="success"){
                                        $("."+code).css("color","red"); 
                                    }
                                    else if(data=="delete"){
                                        $("."+code).css("color","black"); 
                                    }
                                });  
        
  });
    



setInterval(function(){
             $("#matches").load("load_profile.php");
         },10000);	
                   
 
