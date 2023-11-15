<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300;400;500;600;700;800&display=swap');

*{
    list-style: none;
    text-decoration: none;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lexend Deca', sans-serif;
}

body{
    background: #ffffff;
}

.wrapper .sidebar{
    background: #151c2b;
    position: fixed;
    top: 0;
    left: 0;
    width: 225px;
    height: 100%;
    padding: 20px 0;
    transition: all 0.5s ease;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
}

.wrapper .sidebar .title{
  margin-bottom: 30px;
  text-align: center;
}

.wrapper .sidebar .title h3{
  color: #ffffff;
  margin: 100px 0 5px;
  margin-left: 13px;
  font-size: 15px;
  text-align: left;
}

.wrapper .sidebar ul li a{
  display: block;
  padding: 13px 30px;
  border-bottom: 1px solid #151c2b;
  color: rgb(241, 237, 237);
  font-size: 13px;
  position: relative;
}

.wrapper .sidebar ul li a .icon{
  color: #dee4ec;
  width: 30px;
  display: inline-block;
}

.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
    color: #ffffff;

    background: #18212f;
    border-left: 5px solid #0ea5e9;
}

.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
    color: #ffffff;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
    display: block;
}

.nav {
  height: 50px;
  width: 100%;
  margin-bottom: 30px;
  background-color: #151c2b;
  position: fixed;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
}

.nav-title {
  display: inline-block;
  padding: 13px 10px 10px 40px;
  font-size: 22px;
  color: #d0d2d5;
  font-weight: 550;
}

.dot{
  color: #0ea5e9;
}

.nav-links {
  float: right;
  padding: 10px;
}

.nav-li{
  font-size: 15px;
  padding: 10px;
  color: #fff;
}

.container{
  padding: 20px;
  margin-left: 240px;
}


    </style>
</head>
<div class="sidebar">
          <div class="title">
            <img width="180px" src="https://cdn.discordapp.com/attachments/799393124740759592/1172958771388096552/The_Edge.png?ex=656235fb&is=654fc0fb&hm=22d8be6eadff646e2564cfa2c1cd71109d77bc236bd2e74a20c9993d8764b0d6&">
          </div>
            <!--menu item-->
            <ul>
              <li>
                  <a href="../index.php">
                      <span class="icon"><i class="fas fa-home"></i></span>
                      <span class="item">Home</span>
                  </a>
              </li>
              <li>
                  <a href="./albums">
                      <span class="icon"><i class="fas fa-images"></i></span>
                      <span class="item">Albums</span>
                  </a>
              </li>
              <li>
                  <a href="./files">
                      <span class="icon"><i class="fas fa-folder"></i></span>
                      <span class="item">Files</span>
                  </a>
              </li>
              <li>
                  <a href="../accounts/index.php">
                      <span class="icon"><i class="fas fa-user-shield"></i></span>
                      <span class="item">My Account</span>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                      <span class="item">Logout</span>
                  </a>
              </li>
          </ul>
        </div>
    </div>
    </div>