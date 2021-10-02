
var page = 1;
var allpage = 11;

function previous(){
      
    if(page>1){ 
      page--;    
    }
    
    if(page==1){ 
      var coverpage = $("#cover_number").val();
      loadcover(coverpage);  
    }
     
   $("#page_number").val(page);
   loadpage(page)
   
}

function nexts(){
  
    if(page<11){ 
    page++;
    }
    
    $("#page_number").val(page);
    loadpage(page)
}

function loadpage(pages){

     $('#output').fadeOut('slow');   
     $('#output').load('Template1/page'+pages);
     $('#output').fadeIn('slow'); 
}


function loadcover(pages){
    
    
    
    $('#output').load('coverpage/cover'+pages);
     page=1;
    $('#output').fadeIn('slow');  
    $("#cover_number").val(pages);
    $("#page_number").val(1);   
}



function loadgraphic(){
    
    
    
    
    var pages = $("#cover_number").val();
    $('#output').load('graphic/graphic'+pages);
     page=1;
    $('#output').fadeIn('slow');  
    $("#cover_number").val(pages);
    $("#page_number").val(1);   
}
