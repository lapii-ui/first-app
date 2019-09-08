<div class="modal fade" id="defineGroupUOM" tabindex="-1" role="dialog" aria-labelledby="defineGroupUOM" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="defineGroupUOMTitle">Define Unit of Measure</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="define-setting" style="padding:4px 0; border-bottom: 2px solid #999;">
            <table class="table-uom-setting" style="width: 100%;">
              <thead>
                <tr>
                  <th class="text-center">Alt QTY</th>
                  <th class="text-center">Alt UOM</th>
                  <th class="text-center">Operator</th>
                  <th class="text-center">Base QTY</th>
                  <th class="text-center">Base UOM</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">
                      <input type="number" class="alt-qty-value W75PX">
                  </td>
                  <td class="text-center">
                      <select name="" id="alt-uom-select" class="alt-uom-select select-option">
                          <option value="1">UNIT</option>
                          <option value="2">CASE</option>
                      </select>
                  </td>
                  <td class="text-center">
                    <button>=</button>
                  </td>
                  <td class="text-center">
                    <input type="number" class="base-qty-value W75PX">
                  </td>
                  <td class="text-center">
                    <select name="" id="base-uom-select" class="base-uom-select select-option">
                        <option value="1">UNIT</option>
                        <option value="2">CASE</option>
                    </select>
                  </td>
                  <td class="text-center">
                      <a href="#" id="btn-define-uom"><i class="fas fa-angle-double-down"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>

        <div class="uom-list">
          <table class="table-uom-list" style="width: 100%;"></table>
        </div>
      </div>
      <div class="modal-footer">
        {{--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  --}}
        <button type="button" class="btn-define-group-uom">Submit</button>
      </div>
    </div>
  </div>
</div>