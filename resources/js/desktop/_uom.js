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
    defineUOM($element, $next){

        let count = 0;

        $element.on('click', function(){
            const _this = $(this).closest('tr');
            let alt_qty = _this.find('input.alt-qty-value').val();
            let alt_uom = _this.find('.alt-uom-select').val().trim();
            let base_qty = _this.find('input.base-qty-value').val();
            let base_uom = _this.find('.base-uom-select').val().trim();

            let index = count++;
            
            $('.table-uom-list').append(
                '<tr><td><input name="uom['+index+'][alt_qty]" class="W75PX" value="'+alt_qty+'"></td>'+
                '<td><input name="uom['+index+'][alt_uom]" class="W75PX" value="'+alt_uom+'"></td>'+
                '<td>Equal</td>'+
                '<td><input name="uom['+index+'][base_qty]" class="W75PX" value="'+base_qty+'"></td>'+
                '<td><input name="uom['+index+'][base_uom]" class="W75PX" value="'+base_uom+'"></td>'+
                '<td><a href="#" class="text-danger"><i class="fas fa-trash"></i></a></td></tr>');
        });
        $next.on('click', function(){
            const frmData = $('#frm-data-uom').serialize();
            $.ajax({
                method: 'post',
                url: 'add-define-uom',
                data: frmData,
                success: (data) => {
                    if( data.success == true ) {
                        toastr.success(data.message, 'UOM Form', {
                            "timeOut": "1500",
                            onHidden: function () {
                                location.reload();
                            }
                        });
                    }else if(message.success == false) {
                        toastr.error('Whoops! Something wrong happended');
                    }
                }
            });
        });
    }
    
}

const uom = new UOM();
uom.toggleSwitch($('#switch'));
uom.defineUOM($('#btn-define-uom'), $('#btn-define-group-uom'));