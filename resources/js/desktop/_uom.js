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
    defineUOM($element){
        $element.on('click', function(){
            const _this = $(this).closest('tr');
            let alt_qty = _this.find('input.alt-qty-value').val();
            let alt_uom = _this.find('.alt-uom-select').val().trim();
            let base_qty = _this.find('input.base-qty-value').val();
            let base_uom = _this.find('.base-uom-select').val().trim();
            
            $('.table-uom-list').append(
                '<tr><td>'+alt_qty+'</td>'+
                '<td>'+alt_uom+'</td>'+
                '<td>Equal</td>'+
                '<td>'+base_qty+'</td>'+
                '<td>'+base_uom+'</td>'+
                '<td><a href="#" class="text-danger"><i class="fas fa-trash"></i></a></td></tr>');
            // console.log(alt_uom);
        });
    }
    
}

const uom = new UOM();
uom.toggleSwitch($('#switch'));
uom.defineUOM($('#btn-define-uom'));