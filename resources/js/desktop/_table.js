class Table {
    constructor() {

    }

    toggleTable($element){
        $element.on("click",function(){
            let obj = $(this);
            
            if( obj.hasClass("glyphicon-plus") ){
              obj.hide();
              obj.next().show();            
              obj.parent().parent().next().show("slow");
            }else{
               obj.hide();
               obj.prev().show();
               obj.parent().parent().next().hide();
            }
        });
    }
}

const table = new Table();

table.toggleTable($('.toggle-tr'));