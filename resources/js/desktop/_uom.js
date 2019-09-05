import common from './_common';

class UOM {
    constructor() {
        
    }
    toggleSwitch($element){
        $element.on('change', function(){
            let _switch = $(this).is(':checked');
            if(_switch == true){
                $('.tb-uom').hide();
                $('.tb-group-uom').show('slow');
            }
            else{
                $('.tb-group-uom').hide();
                $('.tb-uom').show('slow');
            }
        });
    }
    
}

const uom = new UOM();
uom.toggleSwitch($('#switch'));