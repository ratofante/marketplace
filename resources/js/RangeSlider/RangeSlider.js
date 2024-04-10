class RangeSlider {
    constructor() {
        if($('.product-range-slider').length > 0) {
            
            $('.product-range-slider').ionRangeSlider({
                skin: 'square',
                type: 'doble',
                grid: true,
                min: 0,
                max: 20000,
                from: 0,
                prefix: '$'
            });
        }
    }
}
export default RangeSlider;