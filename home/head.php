<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindfulness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="">

    <style>
   
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap");
 *{
  font-family: "Poppins",sans-serif;
 }
html, body
{
    height: 100%;
    width: 100%;

  background-image: url("./images/purple.jpg");
  opacity:1;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
    font-family: "Poppins",sans-serif;
   
}


/* NAVBAR */
.nav-link
{
    color: #332179;
font-weight: 100%;
font-family: "Poppins",sans-serif;


}

.navbar
{
    height: 12vh;
  
    background: linear-gradient( #8567f7,#CDE3FF);
    color: white;
    text-align: right;
    
}

.navbar-brand
{
    color: #332179;
    margin-left: 4vw;
    font-size: 30px !important;
    font-family: "Poppins",sans-serif;
}
.navbar-brand:hover
{
    color: #5c3ae1;
    transition-duration: 250ms;
}

.row
{
    display: flex;
    flex-direction: row;
    justify-content: center;
    /* border: 2px solid red; */
}

.nav-navbar
{
    display: flex;
    padding-right: 2vw;
}

.nav-link
{
    margin-left: 3vw;
    font-size: 22px;
    margin-top: -10px;
}

.nav-link:hover
{
    color: #5c3ae1;

}
/* NAVBAR --END-- */

/* MAIN PAGE CONTENT */
    .col-md-10, .col-md-11, .col-md-4
    {
        height: 90%;
        border-color: #9DDFEF;
        background: linear-gradient(#8567f7,#CDE3FF);
        text-align: center;
        border: 2px solid #690598;
        border-radius: 30px;
        overflow-y: auto;
        overflow-x: hidden;
        background-image: url("./images/new/bg7.jpg");
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: 100% 100%;
}
    

    .main-page-button
    {
        margin-top: 40vh;
        border: 2px solid #690598;
        border-radius: 25px;
        background-color: #8567f7;
        color: white;
        height: 6vh;
        width: 20vw;
    }
    .main-page-button:hover
    {
        transition-duration: 300ms;
        transform: scale(1.05);
        background-color: #5c3ae1;
    }

    .main-page-link
    {
        color: white;
    }
    a:link
    {
        text-decoration: none;
    }
    /* a:visited
    {
        text-decoration: none;
    } */
    a:hover
    {
        text-decoration: none;
    }


    .col-md-9
    {
        margin-top: -10vh;
    }

/* MAIN PAGE CONTENT --END-- */

/* card */
.grid {
    /* display: grid; */
    display: flex;
    width: 114em;
    grid-gap: 6rem;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    align-items: start;
  }
  
  .grid-item {
    background-color: #fff;
    border-radius: 0.4rem;
    overflow: hidden;
    box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: 0.2s;
  }
  
  .grid-item:hover {
    transform: translateY(-0.5%);
    box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.5);
  }
  
  .card-img {
    display: block;
    width: 100%;
    height: 15rem;
    object-fit: cover;
  }
  
  .card-content {
    padding: 1rem;
    background-color: #EDF2F8 ;
  }
  
  .card-header {
    font-size: 1rem;
    font-weight: 500;
    color: #0d0d0d;
    margin-bottom: 1.5rem;
  }
  
  .card-text {
    font-size: 1rem;
    /* letter-spacing: 0.1rem; */
    line-height: 1.7;
    color: #3d3d3d;
    margin-bottom: 2.5rem;
    overflow-y: auto;
    overflow-x: auto;
  }
  
  .card-btn {
    display: block;
    width: 100%;
    padding: 1.5rem;
    font-size: 1rem;
    text-align: center;
    color: #ffffff;
    background-color: #6f38e5;
    border: none;
    border-radius: 0.4rem;
    transition: 0.2s;
    cursor: pointer;
    letter-spacing: 0.1rem;
  }
  
  .card-btn span {
    margin-left: 1rem;
    transition: 0.2s;
  }
  
  .card-btn:hover,
  .card-btn:active {
    background-color: #8567f7;
  }
  
  .card-btn:hover span,
  .card-btn:active span {
    margin-left: 1.5rem;
  }


.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}

    </style>

</head>