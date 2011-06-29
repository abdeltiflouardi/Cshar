/*function ajax_page(ele,url){
        $("article").load(url);
}*/
$(document).ready(function(){
    $("nav a:first").addClass("current");
        $("nav a").click(function(){
            $("article").load(this+" "+"article");
            for(i=1;i<= 5;i++){
             $("nav a#"+i).removeClass("current");
            }
            $("nav a#"+$(this).attr('id')).addClass("current");
                return false;
        });
});