class Subscribe {
    constructor() {
        if(document.getElementById('subscribe')){
            this.subscribe = document.getElementById('subscribe');
            this.closeBtn = this.subscribe.querySelector('.subscribe-close-btn');

            this.init();
        }
    }

    init() {

        // setTimeout(() => {
        //     this.subscribe.classList.add('show');
        // }, 1000);

        this.closeBtn.addEventListener('click', () => {
            this.close()
        })
    }
    
    close() {
        this.subscribe.classList.remove('show');
    }
}

export default Subscribe;