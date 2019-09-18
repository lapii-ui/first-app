import common from './_common';
class Table {
    constructor() {
        common.toggleTable($('.toggle-tr'),'.toggle-group', '');
    }
}

const table = new Table();
