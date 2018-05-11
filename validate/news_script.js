// JavaScript Document
$(function(){

       $(document).on('click','#reg_news_btn',function(){
       	  var news=$("#reg_news").val();
		  var headline=$("#reg_news_head").val();
		   if(news=='' || headline==''){
                error("Please Fill all details");
                return;
            }

           else {
			   $("#news_reg").submit(); 
		   }
       });

      /* $(document).on('click','#edit_bname_btn',function(){
       		var oid=$("#edit_bname").val();
       		var nname=$("#edit_nbname").val();

       		if(oid=='Select Bank'){
       			error("Please Select A Bank!!!");
       			return;
       		}

       		if(nname==''){
       			error("Please provide a new Name!");
       			return;
       		}

       		$.post("../../servers/bank_server.php",{opType:'Edit Bank Details',oid:oid,nname:nname},function(data){
       			if(data!='success'){
       				error(data);
       				return;
       			}
       			success("Bank Name Changed Successfully");
       		});

       });

       //=========================BANK ACCOUNT MANIPULATION GOES HERE

       $(document).on('click','#reg_bacct_btn',function(){
          var bid=$("#reg_bank_bname").val();
          var bname=$("#reg_bank_aname").val();
          var bnum=$("#reg_bank_anum").val();

          if(bid=='Select Bank'){
            error("Please Select A Bank");
            return;
          }

          if(bname=='' || bnum==''){
            error("Please Fill all Fields");
            return;
          }

          $.post('../../servers/bank_server.php',{opType:'Register Account Number',bid:bid,bname:bname,bnum:bnum},
            function(data){

                if(data!='success'){
                  error(data);
                  return;
                }

                success("Bank Account registered Successfully");
          });
       });*/
});