class Category {
    constructor() {

    }

    selectChange($element, $param){
        $element.on('change', function(){
            console.log('changed');
        });
    }

}

const category = new Category();
category.selectChange($('.text_color'));
category.selectChange($('#background_color'));
category.selectChange($('#icon'));