<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Martín Velarde</title>
    <link rel="stylesheet" href={{ asset('assets/css/app.css') }} id="styleLink" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body>
    <a href="#" class="back-top hidden" id="back-top">
        <img src={{ asset('./assets/images/icons/chevron-doble-up.svg') }} alt="back to top" />
    </a>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src={{ asset('./assets/images/icons/LogoSinFondo.png') }} alt="" />
            </div>
            <div class="right-header">
                <div class="theme-icon">
                    <img class="sun-icon hidden" src={{ asset('./assets/images/icons/sol.svg') }} alt="" />
                    <img class="moon-icon" src={{ asset('./assets/images/icons/luna.svg') }} alt="" />
                </div>
                <nav class="navbar hidden" id="navbar">
                    <div class="navItem"><a href="#skills">Skills</a></div>
                    <div class="navItem"><a href="#projects">Projects</a></div>
                    <div class="navItem"><a href="#contacme">Contac me</a></div>
                </nav>

                <img class="menu-icon" id="menu-icon" src={{ asset('./assets/images/icons/menu-svgrepo-com-1.svg') }}
                    alt="" />
                <img class="close-icon hidden" id="close-icon" src={{ asset('./assets/images/icons/icon-close.svg') }}
                    alt="" />
            </div>
        </header>
        <main class="main">
            <section class="hero">
                <div class="hero-image">
                    <img class="my-image" src={{ asset('./assets/images/photos/myImage.jpg') }} alt="" />

                    <img class="absolute cube" src={{ asset('./assets/images/icons/cube.svg') }} alt="" />
                    <img class="absolute circles" src={{ asset('./assets/images/icons/circles.svg') }}
                        alt="" />
                    <img class="absolute plus" src={{ asset('./assets/images/icons/plus.svg') }} alt="" />
                    <img class="absolute zigzags" src={{ asset('./assets/images/icons/zigzags.svg') }}
                        alt="" />
                </div>
                <div class="hero-description">
                    <h1>Martín Velarde</h1>
                    <p>
                        Hello! I am a software developer and here is my portfolio website.
                        Here you’ll learn about my journey as a software developer.
                    </p>
                    <a href="https://www.linkedin.com/in/martin-cesar-velarde-quispe-a58bb6245/" target="_blank" class="btn btn-primary">Hire me</a>
                </div>
            </section>
            <section class="skills mp-t-100" id="skills">
                <h2 class="title-section">Skills</h2>
                <div class="skills-info">
                    <div class="image-skills">
                        <img src={{ asset('./assets/images/photos/skillsCode.svg') }} alt="" />
                    </div>
                    <div class="description-skills">
                        <p>I have a vast experience in the following web technologies:</p>
                        <div class="grid-icon-skills">
                            <div class="icon-skill">
                                <img src={{ asset('./assets/images/icons/html5.svg') }} alt="" />
                                <p>Html</p>
                            </div>
                            <div class="icon-skill">
                                <img src={{ asset('./assets/images/icons/css3.svg') }} alt="" />
                                <p>Css</p>
                            </div>
                            <div class="icon-skill">
                                <img src={{ asset('./assets/images/icons/js.svg') }} alt="" />
                                <p>Javascript</p>
                            </div>
                            <div class="icon-skill">
                                <img src={{ asset('./assets/images/icons/react.svg') }} alt="" />
                                <p>React</p>
                            </div>
                            <div class="icon-skill">
                                <img src={{ asset('./assets/images/icons/php.svg') }} alt="" />
                                <p>Php</p>
                            </div>
                            <div class="icon-skill">
                                <img src={{ asset('./assets/images/icons/laravel.svg') }} alt="" />
                                <p>Laravel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="projects mp-t-100" id="projects">
                <h2 class="title-section">
                    Projects
                    <span>
                        <img src={{ asset('./assets/images/icons/gears-svgrepo-com-1.svg') }} alt="" />
                    </span>
                </h2>
                <div class="projects-info">
                    <p>Some of my projects include:</p>
                    <div class="grid-card-projects">
                        <div class="card-project">
                            <div class="image-card">
                                <img src={{ asset('./assets/images/photos/project-ascindu.jpg') }} alt="" />
                            </div>
                            <div class="body-card">
                                <p>
                                    Most ambitious project I have ever done. ERP system with
                                    inventory, payroll, sales, billing and accounting.<b>Admin LTE</b> template and
                                    <b>LARAVEL</b> were used.
                                    Deployed on <b>AWS</b>, but this demo on <b>Heroku</b>.
                                </p>
                                <a href="https://minierp-mvelardeq.herokuapp.com/seguridad/login" target="_blank">
                                    <img src={{ asset("./assets/images/icons/internet-blue-1.svg") }} alt="" />
                                    Visit site
                                </a>
                            </div>
                        </div>
                        <div class="card-project">
                            <div class="image-card">
                                <img src={{ asset('./assets/images/photos/Portfolio-page.jpg') }} alt="" />
                            </div>
                            <div class="body-card">
                                <p>
                                    I made a portfolio with <b>Laravel</b> and
                                    only <b>CSS</b>, it's responsive and was deployed on
                                    <b>Heroku</b>. Has a change of theme with
                                    <b>Local Storage</b>.
                                </p>
                                <a href="https://portfolio-mvelarde.herokuapp.com/" target="_blank">
                                    <img src={{ asset('./assets/images/icons/internet-blue-1.svg') }}
                                        alt="" />
                                    Visit site
                                </a>
                            </div>
                        </div>
                        <div class="card-project">
                            <div class="image-card">
                                <img src={{ asset('./assets/images/photos/Space-page.jpg') }} alt="" />
                            </div>
                            <div class="body-card">
                                <p>
                                    This web page was made with <b>React</b> and react router,
                                    it's responsive and it was deployed on <b>Github Pages</b>.
                                    This project had previously been done in <b>Figma</b>.
                                </p>
                                <a href="https://mvelardeq.github.io/space-tourims-web/" target="_blank">
                                    <img src={{ asset('./assets/images/icons/internet-blue-1.svg') }}
                                        alt="" />
                                    Visit site
                                </a>
                            </div>
                        </div>
                        <div class="card-project">
                            <div class="image-card">
                                <img src={{ asset('./assets/images/photos/calculator-web-app.jpg') }}
                                    alt="" />
                            </div>
                            <div class="body-card">
                                <p>
                                    Was made with <b>React</b> and has change of thme, it's
                                    responsive and was deployed on <b>Github Pages</b>. This web
                                    app can constrains some invalid values or type of
                                    operations.
                                </p>
                                <a href="https://mvelardeq.github.io/calculator-app/" target="_blank">
                                    <img src={{ asset('./assets/images/icons/internet-blue-1.svg') }}
                                        alt="" />
                                    Visit site
                                </a>
                            </div>
                        </div>
                        <div class="card-project">
                            <div class="image-card">
                                <img src={{ asset('./assets/images/photos/Home-landing-bootstrap-page.jpg') }}
                                    alt="" />
                            </div>
                            <div class="body-card">
                                <p>
                                    Was made with <b>Vanilla Javascript</b> and bootstrap, it's
                                    responsive and was deployed on <b>Github Pages</b>.
                                </p>
                                <a href="https://mvelardeq.github.io/agency-landing-page/" target="_blank">
                                    <img src={{ asset('./assets/images/icons/internet-blue-1.svg') }}
                                        alt="" />
                                    Visit site
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact mp-t-100 m-b-100" id="contacme">
                <h2 class="title-section">Contact me</h2>
                <div class="contact-info">
                    <div class="image-contact">
                        <img src={{ asset('./assets/images/photos/man-standing-on-chats-1.svg') }} alt="" />
                    </div>
                    <form action={{ route('contact') }} method="POST">
                        @csrf

                        <input type="email" class="@error('email') invalid @enderror" name="email"
                            placeholder="Enter email address" value="{{ old('email') }}" required/>
                        @error('email')
                            <p class="invalid-message">{{ $message }}</p>
                        @enderror

                        <textarea name="message" id="message" placeholder="Enter message..." class="@error('message') invalid @enderror" required>{{ old('message') }}</textarea>
                        @error('message')
                            <p class="invalid-message">{{ $message }}</p>
                        @enderror

                        <button type="submit" class="btn btn-primary">
                            <span>Send</span>
                            <img src={{ asset('./assets/images/icons/paper-plane-1.svg') }} alt="" />
                        </button>
                    </form>
                </div>
            </section>
        </main>
        <footer class="footer">
            <img src={{ asset('./assets/images/icons/wave.svg') }} alt="" />
            <div class="social-media">
                <h3>My social media links:</h3>
                <div class="list-social-icons">
                    <a href="https://www.linkedin.com/in/mvelardeq/" target="_blank">
                        <img class="icon-footer" src={{ asset('./assets/images/icons/linkedin-svgrepo-com-1.svg') }}
                            alt="" />
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=51971142315" target="_blank">
                        <img class="icon-footer" src={{ asset('./assets/images/icons/whatsapp-svgrepo-com-1.svg') }}
                            alt="" />
                    </a>
                    <a href="https://twitter.com/mvelardeq" target="_blank">
                        <img class="icon-footer" src={{ asset('./assets/images/icons/twitter-svgrepo-com-1.svg') }}
                            alt="" />
                    </a>
                    <a href="mailto:mvelardeq@uni.pe?subject=Portfolio web">
                        <img class="icon-footer" src={{ asset('./assets/images/icons/envelope-solid.svg') }}
                            alt="" />
                    </a>
                </div>
            </div>
            <div class="github-contact">
                <h3>Where to get my code</h3>
                <div class="github-info">
                    <a href="https://github.com/mvelardeq" target="_blank">
                        <img class="icon-footer" src={{ asset('./assets/images/icons/github-svgrepo-com-1.svg') }}
                            alt="" />
                    </a>
                    <p><a href="https://github.com/mvelardeq" target="_blank">@mvelardeq</a> on github</p>
                </div>
            </div>
        </footer>
    </div>


    <script src={{ asset('assets/js/app.js') }}></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    @include('includes.mensaje')
</body>

</html>
