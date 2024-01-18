    <div class="Navbar">
        <a href="#" class="logo">Logo</a>
        <nav class="Navbar_Href">
            <a href="../PrivateSocialMedia/MainPage.php">Domovská stránka</a>
            <a href="../PrivateSocialMedia/ProfileMenu.php">Profil</a>
            <a href="../PrivateSocialMedia/Login.php">Log in</a>
            <a href="../PrivateSocialMedia/register.php">Registrace</a>
            <a href="#"></a> 
        </nav>
    </div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
* {
 /* margin: 0;
    padding: 0; */
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {
    min-height: 100vh;
    /*background: url('../images/navbar.jpg') no-repeat; */
    background-size: cover;
    background-position: center;
}
.Navbar {
    z-index: 1; 
    position: absolute;
    top: 0;
    left: 0;
    height: 3%;
    width: 100%;
    padding: 20px 100px;
    background: rgba(0, 0, 0, .7);
    display: flex;
    justify-content: space-between;
    align-items: center;
    backdrop-filter: blur(10px);
    border-bottom: 2px solid rgba(255, 255, 255, .2);
}
.Navbar::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .4), transparent);
    transition: .5s;
}
.Navbar:hover::before {
    left: 100%;
}
.logo {
    color: #fff;
    font-size: 25px;
    text-decoration: none;
    font-weight: 600;
    cursor: default;
}
.Navbar_Href     a {
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    margin-left: 35px;
    transition: .3s;
}
.Navbar_Href a:hover {
    color: #f00;
}
</style>