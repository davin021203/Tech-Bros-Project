const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="footer-content">
        <img src="img/logo_transparent.png" class="logo" alt="">
    </div>
    <p class="footer-title">about company</p>
    <p class="info">At Tech Bros, we are dedicated to providing our customers with the best possible shopping experience for all of their PC hardware needs. With a wide range of products and a knowledgeable team, we strive to be the go-to destination for tech enthusiasts, gamers, and professionals alike. Whether you're building a new system from scratch or upgrading an existing one, our goal is to make the process as seamless and enjoyable as possible. Come visit us today and see why we are the premier choice for all things PC hardware.</p>
    <p class="info">support emails - davin.m.avalani@gmail.com, techbros@support.com</p>
    <p class="info">telephone - +60142322518, 2831991</p>
    <div class="footer-social-container">
        <div>
            <a href="#" class="social-link">instagram</a>
            <a href="#" class="social-link">facebook</a>
            <a href="#" class="social-link">twitter</a>
        </div>
    </div>
    <p class="footer-credit">Tech Bros, Tech All Day !!!</p>
    `;
}

createFooter();