const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
    <div class="nav">
    <img src="img/logo_transparent.png" class="brand-logo" alt="">
    <div class="nav-items">
        <div class="search">
            <input type="text" class="search-box" placeholder="search brand, product">
            <button class="search-btn">search</button>
        </div>
    
        <a href="http://127.0.0.1:3000/public/signup.html"><img src="img/user.png" alt=""></a>
        <a href="#"><img src="img/cart.png" alt=""></a>
    </div>
</div>
<ul class="links-container">
    <li class="link-item"><a href="#" class="link">Home</a></li>
    <li class="link-item"><a href="#" class="link">Motherboard</a></li>
    <li class="link-item"><a href="#" class="link">RAM</a></li>
    <li class="link-item"><a href="#" class="link">Solid-State Drives</a></li>
</ul>
    `;
}

createNav();