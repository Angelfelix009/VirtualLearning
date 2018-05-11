

$(function(){

//===============================MENU GOES HERE	
$(document).on('click','#close',function(){
        $("#content_pane").html("");
    });

    $("#mereload").click(function(){
        location="me.php";
    });
	$("#newadmin").click(function(){
		loadItems("register_admin.php");
	});
	
	$("#add_student").click(function(){
		loadItems("register_student.php");
	});

	$("#edit_student").click(function(){
		loadItems("show_student.php");
	});
	$("#upload_ebook").click(function(){
		loadItems("upload_ebook.php");
	});
	$("#upload_ebook2").click(function(){
		loadItems("upload_ebook2.php");
	});
	$("#delete_ebook").click(function(){
		loadItems("delete_ebook.php");
	});

	$("#delete_video").click(function(){
		loadItems("delete_video.php");
	});

	$("#change_pword_uname").click(function(){
		loadItems("edit_admin.php");
	});

	$("#change_data_student").click(function(){
		loadItems("change_data_student.php");
	});

	$("#viewprofile").click(function(){
		loadItems("viewprofile.php");
	});

	$("#update_student").click(function(){
		loadItems("update_student.php");
	});

	$("#download_ebook").click(function(){
		loadItems("download_ebook.php");
	});
	$("#download_video").click(function(){
		loadItems("download_video.php");
	});
	$("#download_oebook").click(function(){
		loadItems("download_oebook.php");
	});
	$("#download_ovideo").click(function(){
		loadItems("download_ovideo.php");
	});

//closing the innerpane
	$(document).on('click','#close',function(){
		$("#content_pane").html("");
	});
	//==============================================MENU ENDS HERE
});

//=================SUCCESS AND ERROR FUNCTIONS GOES HERE
	function success(msg){
		$.pgwModal({
			content:msg,
			title:'Digital Library| Success',
			closable:true,
			closeOnEscape:true,
			closeOnBackgroundClick:false
				
			});
	}
	
	function error(msg){
		$.pgwModal({
			content:msg,
			title:'Digital Library| Error',
			closable:true,
			closeOnEscape:true,
			closeOnBackgroundClick:false
				
			});
	}
	
	function loadItems(url){
		$("#content_pane").load(url);
	}