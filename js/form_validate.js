$(function(){

	$("#login_button").click(function(){
		
			var lgn_uname=$("#lgn_uname").val();
			var lgn_pword=$("#lgn_pword").val();
			var lgn_type=$("#lgn_type").val();
			
			if(lgn_uname=='' || lgn_pword=='' || lgn_type=='Select account type'){
				alert("Please Fill all Fields");
				return;
			}
			/*$.post('server/login.php',{opType:'Login Existing User',lgn_uname:lgn_uname,lgn_pword:lgn_pword,lgn_type:lgn_type},function(data){
				if(data!='success'){
				error(data);
				return;
			}
			})
*/		else{
				$('#lgn_form').submit();
		}
	});
	
	$("#Register_admin_btn").click(function(){
		
			var uname=$("#uname").val();
			var pword=$("#pword").val();
			var name=$("#name").val();
			
			if(uname=='' || pword=='' || name==''){
				alert("Please Fill all Fields");
				return;
			}
			$.post('../../server/register_admin.php',{opType:'Register new admin',uname:uname,pword:pword,name:name},function(data){
				if(data!='success'){
				error(data);
				return;
			}
			})
			});
			$("#Register_center_btn").click(function(){
		
			var cname=$("#cname").val();
			var ccapacity=$("#ccapacity").val();
			
			if(cname=='' || ccapacity==''){
				alert("Please Fill all Fields");
				return;
			}
			$.post('../../server/register_center.php',{opType:'Register new center',cname:cname,ccapacity:ccapacity},function(data){
				if(data!='success'){
				error(data);
				return;
			}
			})
			});
	
$("#Register_student_btn").click(function(){
		
			var name=$("#name").val();
			var matric=$("#matric").val();
			var level=$("#level").val();
			
			if(name=='' || matric==''||level=='Select a Level'){
				alert("Please Fill all Fields");
				return;
			}
			$.post('../../server/register_student.php',{opType:'Register new Student',name:name,matric:matric,level:level},function(data){
				if(data!='success'){
				error(data);
				return;
			}
			})
			});
	$("#allocte_center_btn").click(function(){
		
			var center=$("#center").val();
			var level=$("#level").val();
			
			if(center=='Select a center' ||level=='Select a Level'){
				alert("Please Fill all Fields");
				return;
			}
			$.post('../../server/allocate_center.php',{opType:'Allocate Center for Student',center:center,level:level},function(data){
				if(data!='success'){
				error(data);
				return;
			}
			})
			});
	
	$("#search_btn").click(function(){
		
			var search_student=$("#search_student").val();
			
			if(search_student==''){
				alert("Please input matric no to search for student");
				return;
			}
			$.post('../../server/search_student.php',{opType:'Search for new Student',search_student:search_student},function(data){
				if(data!='success'){
				error(data);
				return;
			}
			})
			});
			$("#Change_admin_pword_btn").click(function(){
		
			var oldpword=$("#oldpword").val();
			var newpword=$("#newpword").val();
			
			if(oldpword==''|| newpword==''){
				alert("Please fill all fields");
				return;
			}
			$.post('../../server/change_pword_admin.php',{opType:'Search for new Student',oldpword:oldpword,newpword:newpword},function(data){
				if(data!='success'){
				error(data);
				return;
			}
			})
			});
}); // end of main function