class Category {
    constructor() {

    }

    selectChangeColor($element, $param){
        $element.on('input', function(){
            $color = $element.val();
            $param.css('color', $color);
        });
    }
    selectChangeBackground($element, $param){
        $element.on('input', function(){
            $color = $element.val();
            $param.css('background-color', $color);
        });
    }
    selectChangeIcon($element, $param){
        $element.on('input', function(){
            $color = $element.val();
            // $param.attr('style="color:'+ $color +'; background-color:'+ $color +'"')
        });
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

const category = new Category();
category.selectChangeColor($('.text_color'), $('.text-color'));
category.selectChangeBackground($('.background_color'), $('.background'));
category.selectChangeIcon($('.icon'));

category.toggleTable($('.toggle-tr'));