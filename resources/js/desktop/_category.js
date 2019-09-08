import common from './_common';

class Category {
    constructor() {
        common.toggleTable($('.toggle-tr-category'), '.category-toggle', '.sub-ii-toggle');
        common.toggleTable($('.toggle-tr-sub'), '.sub-i-toggle', '.category-toggle');
        common.toggleTable($('.toggle-tr-company'), '.company-toggle');
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