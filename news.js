$(document).ready(function() {
  //頁面剛進來時，default顯示"Life"那一欄
  var LIFE_LI = $('li').eq(0);
  
  LIFE_LI.addClass('active');
  $('li').mouseover(function(){  
    //這裡不能用hover 會對server送出兩次request
    LIFE_LI.removeClass('active');    
		//移除"Life"那一欄的預設
    $(this).addClass('active');     
		//當下被選取的li增加active class
    $(this).siblings().removeClass('active');  
    //除了當前的li需要active的class之外，其他li都要移除active的class
    
    var SELECTED_CATEGORY = $(this).attr('value');
    var BD_CONTENT = $('.bd');
			//$.ajaxSetup({cache:false});
      $.ajax({
      
      url:"give_me_data.php?category="+SELECTED_CATEGORY,
      type : "GET",
      dataType:'json',
      beforeSend:function(){
       // $('#loading_div').show(); 
      },
      success:function(o){
         var msg = o['msg']
             ,data=o['data']
             ;
         //console.log(msg);
        if(msg =="success"){
          BD_CONTENT.html('');
					//如果msg回傳success,清空bd的內容
          for(var i=0;i<data.length;i++){
             /*console.log(data[i].title);
               console.log(data[i].content);
               console.log('---');*/
             BD_CONTENT.append('<h3>'+data[i].title+'</h3>'+
                             '<p>'+data[i].content+'</p>'
                            );
							//把取得的資料塞到bd，標題title跟內文content	
          }
        }else{	
          BD_CONTENT.html('No data.....');
					//沒資料顯示no data
        }
      },
      error:function(xhr){
        alert('Ajax request 發生錯誤');
      },
      complete:function(){
        //$('#loading_div').hide();
      }
      });	 
    
  }
  );
  
  //表單簡單驗證空值
   $('#news_frm').submit(function(){
   var new_title_field = $('#frm_title').val(),
       new_content_field = $('#frm_content').val();
   if(new_title_field=="" || new_content_field==""){
      alert('你有東西沒有填');return false;
   }
   });
    
    
});
  