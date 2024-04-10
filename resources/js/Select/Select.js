class Select {
    constructor() {
        if($('.navigation-select')){
            $('.navigation-select').select2({
                width: '100%',
                minimumResultsForSearch: -1,
                dropdownCssClass: 'navigation-select',
                dropdownParent: $('.wrapper-search'),
            });
        }

        if($('.filter-by-mobile .products-menu-filter')){
            $('.products-menu-filter').select2({
                width: '100%',
                minimumResultsForSearch: -1,
                dropdownCssClass: 'products-menu-filter',
                dropdownParent: $('.filter-by-mobile'),
                debug: true,
            });
        }

        if($('.filter-by-desktop .products-menu-filter')){
            $('.products-menu-filter').select2({
                width: '100%',
                minimumResultsForSearch: -1,
                dropdownCssClass: 'products-menu-filter',
            });
        }
    }
}   

export default Select;