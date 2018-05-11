// JavaScript Document

$(function(){
	
	$(document).on('click','#Login_btn',function(){
		
		var uname=$("#uname").val();
		var pword=$("#pword").val();
		
		if(uname == ''){
			alert("Enter your username");
			return;
		}
		else if (pword==""){
			alert ("Enter your password");
			return;
		}
		else{
			$("#admin_login").submit();
				
		}
		
	});
	$(document).on('click','#lgn_search',function(){
		
		var searchme=$("#lgn_text_search").val();
		var pword=$("#pword").val();
		
		if(searchme == ''){
			alert("Enter a search keyword");
			return;
		}
		
		else{
			$("#searchme2").submit();
				
		}
		
	});
});