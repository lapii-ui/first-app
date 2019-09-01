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

}

const category = new Category();
category.selectChangeColor($('.text_color'), $('.text-color'));
category.selectChangeBackground($('.background_color'), $('.background'));
category.selectChangeIcon($('.icon'));