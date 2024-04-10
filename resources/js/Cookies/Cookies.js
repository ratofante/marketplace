class Cookies {
    constructor() {
        if(document.querySelector('#cookies')) {
            this.cookies = document.getElementById('cookies');
            this.btns = [];
            
            document.querySelectorAll('.btn-cookie').forEach(btn => {
                this.btns.push(btn);
            })

            // setTimeout(() => {
            //     cookies.classList.add('show');
            // }, 5000);

            this.btns.forEach(btn => {
                btn.addEventListener('click', () => {
                    this.closeCookies();
                })
            })
        }
    }

    closeCookies() {
        this.cookies.classList.remove('show');
    }
}
export default Cookies;document.getElementById('cookies-close').addEventListener('click', () => {

})