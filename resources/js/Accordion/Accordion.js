class Accordion {
    constructor() {
        if($('.accordion')) {
            $('.accordion').accordion({
                collapsible: true,
                icons: false,
                heightStyle: 'content',
                active: false,
            });
        }
    }
}

export default Accordion;