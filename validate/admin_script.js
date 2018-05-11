$(function(){

       $(document).on('click','#reg_admin_btn',function(){
       	  var name=$("#name").val();
		  var uname=$("#uname").val();
		  var pword=$("#pword").val();
		  var desg=$("#desg").val();

       	   if(name=='' || uname=='' || pword=='' || desg==''){
                error("Please Fill all details");
                return;
            }

           
	$.post('../server/reg_admin.php',{opType:'Register Admin',name:name,uname:uname,pword:pword,desg:desg},function(data){
			if(data!='success'){
				error(data);
				return;
			}
			})

       });

	 $(document).on('click','#update_admin_btn',function(){
       	   var uname=$("#edit_admin_uname").val();
		  var pword=$("#edit_admin_pword").val();
		  var desg=$("#edit_admin_desg").val();
		  var id =$("#user_id").val();

       	   if(uname=='' || pword=='' || desg==''){
                error("Please Fill all details");
                return;
            }

           $.post('../server/update_admin.php',{opType:'Update Admin',uname:uname,pword:pword,desg:desg,id:id},function(data){
			if(data!='success'){
				error(data);
				return;
			}
			})
       });
	    $(document).on('click','#reg_student_btn',function(){
			var name = $("#name").val();
			var onames=$("#onames").val();
			var matricno = $("#matric").val();
			var dpt = $("#dpt").val();
			var lvl = $("#lvl").val();
			var phoneno = $("#phoneno").val();
			var email = $("#email").val();
			var sess = $("#sess").val();
			
			if(name==''||onames==''||matricno==''||dpt=='Select your Department'||lvl=='Select Your Level'||phoneno==''||email==''||sess=='Select the Academic Session'){
				error("Please Fill all Details");
				return;
			}
			$.post('../server/register_student.php',{opType:'Register Student',name:name,onames:onames,matricno:matricno,dpt:dpt,lvl:lvl,phoneno:phoneno,email:email,sess:sess},function(data){
			if(data!='success'){
				error(data);
				return;
			}
			})
			
       });
	  /* $(document).on('click','#upload_ebook_btn',function(){
		
			var ename=$("#ename").val();
			var dpt = $("#dpt").val();
			var efile=$("#efile").val();
			if(ename==''|| dpt =='Select your Department' || efile ==''){
				error ("please fill all details");
				return;
			}
				else{
				$("#upload_ebook").submit();
				}

			
			});*/
     $(document).on('click','#update_student_btn',function(){
       	   var uname=$("#edit_student_uname").val();
		  var pword=$("#edit_student_pword").val();
		   var id =$("#user_id").val();

       	   if(uname=='' || pword=='' ){
                error("Please Fill all details");
                return;
            }

           $.post('../server/update_student.php',{opType:'Update Student',uname:uname,pword:pword,id:id},function(data){
			if(data!='success'){
				error(data);
				return;
			}
			})
       });
       $(document).on('click','#update_Student_record_btn',function(){
       	   var lvl=$("#edit_student_lvl").val()
 		  var phoneno=$("#edit_student_phoneno").val()
  		  var email=$("#edit_student_email").val()
		   var id =$("#user_id").val();

       	   if(lvl =='Select Your Level' || phoneno=='' || email=='' ){
                error("Please Fill all details");
                return;
            }

           $.post('../server/update_student_record.php',{opType:'Update Student record',lvl:lvl,phoneno:phoneno,email:email,id:id},function(data){
			if(data!='success'){
				error(data);
				return;
			}
			})
       });
		$(document).on('click','#reg_reflect_btn',function(){
		
					var reflection=$("#reflection").val();
					if(reflection==''){
						error("Please Fill all details");
               			 return;
					}
					
					else {
			  			 $("#reflect_reg").submit(); 
		  				 }
					
					});
		 $(document).on('click','#reg_catecheisi_btn',function(){
		
					var reflection=$("#reflection").val();
					if(reflection==''){
						error("Please Fill all details");
               			 return;
					}
					
					else {
			  			 $("#catechesis_reg").submit(); 
		  				 }
					
					});
					$(document).on('click','#reg_file_btn',function(){
		
					var reg_file=$("#reg_file").val();
					if(reg_file==''){
						error("Please Fill all details");
               			 return;
					}
					else {
			  			 $("#member_file_reg").submit(); 
		  				 }
					//$.post('../server/upload_member.php',{opType:'Upload New Parishioner File',reg_file:reg_file},function(data){
//				if(data!='success'){
//				error(data);
//				return;
//			}
//			})

					
					});
      
      
      
});