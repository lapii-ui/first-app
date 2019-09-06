class Common {
    constructor(){

    }

    toggleTable($element, param1, param2){
        $element.on("click",function(){
            let obj = $(this);
            
            if( obj.hasClass("glyphicon-plus") ){
              obj.hide();
              obj.next().show();
              obj.parents(param1).nextUntil(param1).not(param2).show('slow');

            }else{
              obj.hide();
              obj.prev().show();
              obj.parents(param1).nextUntil(param1).not(param2).hide();
            }
        });
    }
}

const common = new Common();
export default common;