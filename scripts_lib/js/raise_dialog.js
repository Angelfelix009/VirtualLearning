// JavaScript Document

function raiseDialog(div,title){
	$.pgwModal({target:'#'+div,closeOnEscape:false,closeOnBackgroundClick:false,title:title});
}

function raiseSuccess(msg,title){
	$.pgwModal({content:msg,closeOnEscape:false,closeOnBackgroundClick:false,title:"St Mary Cathedral| Success"});
}

function raiseError(msg){
	$.pgwModal({content:msg,closeOnEscape:false,closeOnBackgroundClick:false,title:"St Mary Cathedral| Error"});
}