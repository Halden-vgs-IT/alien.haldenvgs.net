<!DOCTYPE html>
<html lang="no">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- General -->
    <title>Javascript Basics</title>
    <link rel="icon" href="images/favicon.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="script/script.js" defer></script>
    <!-- Stylesheets -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
</head>
<body>
<main class="flexbox-col">
    <!-- Header -->
    <header class="flexbox">
        <div class="header-inner flexbox">
            <h1>Javascript Basics</h1>
            <img src="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
        </div>
        <img src="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
    </header>

    <!-- Main Content -->
    <section class="content">
        <!-- Texts -->
        <h2>Innhold</h2>
        <div class="content-list">
            <p class="flexbox-col-left">
                <a class="variabler-list" href="#variabler"><span>1.</span>Variabler</a>
                <a class="variabler-list indent" href="#deklarere-variabler"><span>1.1</span>Deklarere variabler</a>
                <a class="variabler-list indent" href="#bruke-variabler"><span>1.2</span>Bruke variabler</a>
                <a class="funksjoner-list" href="#funksjoner"><span>2.</span>Funksjoner</a>
                <a class="funksjoner-list indent" href="#lage-funksjoner"><span>2.1</span>Lage funksjoner</a>
                <a class="eventer-list" href="#eventer"><span>3.</span>Eventer</a>
                <a class="eventer-list indent" href="#eventer-list"><span>3.1</span>Eventer</a>
            </p>
        </div>
    </section>

    <!-- Generell Info -->
    <section class="content">
        <!-- Texts -->
        <h3 class="title">Generelt</h3>
        <div class="blocks-grid">
            <div class="block">
                <p class="undertitle flexbox-left">Eksempel hvor &#60;script&#62; ligger i &#60;head&#62;</p>
                <div class="code-block cb-long">
                    <p>
                        <span class="brackets">&#60;</span><span class="element">html</span>
                        <span class="ident">lang</span><span class="text">="no"</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="brackets">&#60;</span><span class="element">head</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="indent comment">&#60;!-- Her lastes script i html head taggen --&#62;</span></p>
                    <p>
                        <span class="indent brackets">&#60;</span><span class="element">script</span>
                        <span class="ident">src</span><span class="text">="javascript/script.js"</span>
                        <span class="italic ident">defer</span><span class="brackets">&#62;</span><span class="brackets">&#60;/</span><span class="element">script</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="brackets">&#60;/</span><span class="element">head</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="brackets">&#60;</span><span class="element">body</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="indent">[...]</span></p>
                    <p>
                        <span class="brackets">&#60;/</span><span class="element">body</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="brackets">&#60;/</span><span class="element">html</span><span class="brackets">&#62;</span></p>
                </div>
            </div>

            <div class="block">
                <p class="undertitle flexbox-left">Eksempel hvor &#60;script&#62; ligger i bunnen av &#60;html&#62; dokumentet</p>
                <div class="code-block cb-long">
                    <p>
                        <span class="brackets">&#60;</span><span class="element">html</span>
                        <span class="ident">lang</span><span class="text">="no"</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="brackets">&#60;</span><span class="element">head</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="indent">[...]</span></p>
                    <p>
                        <span class="brackets">&#60;/</span><span class="element">head</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="brackets">&#60;</span><span class="element">body</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="indent">[...]</span></p>
                    <p>
                        <span class="indent comment">&#60;!-- Her lastes script i html dokumentet --&#62;</span></p>
                    <p>
                        <span class="indent brackets">&#60;</span><span class="element">script</span>
                        <span class="ident">src</span><span class="text">="javascript/script.js"</span><span class="brackets">&#62;</span><span class="brackets">&#60;/</span><span class="element">script</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="brackets">&#60;/</span><span class="element">body</span><span class="brackets">&#62;</span></p>
                    <p>
                        <span class="brackets">&#60;/</span><span class="element">html</span><span class="brackets">&#62;</span></p>
                </div>
            </div>
        </div>

    </section>

    <!-- Variabler -->
    <section class="content variabler">
        <h3 id="variabler" class="title flexbox-left"><i class="uil uil-link"></i> Variabler</h3>
        <div class="block">
            <p id="deklarere-variabler" class="undertitle flexbox-left">1.1 Dekalrere variabler</p>
            <div class="code-block cb-short">
                <p>
                    <span class="comment">// Her deklareres de tre variablene på de</span></p>
                <p>
                    <span class="comment">// forskjellige måtene</span></p>
                <p>
                    <span class="var">var</span>
                    <span class="var-name">svaretPaAlt</span>
                    <span class="unique">=</span>
                    <span class="number">42</span><span class="unique">;</span></p>
                <p class="small-space">&nbsp</p>
                <p>
                    <span class="var">let</span>
                    <span class="var-name">variabelTo</span>
                    <span class="unique">=</span>
                    <span class="text">"Hello World!"</span><span class="unique">;</span></p>
                <p class="small-space">&nbsp</p>
                <p>
                    <span class="var">const</span>
                    <span class="var-name">minKnapp</span>
                    <span class="unique">=</span>
                    <span class="ident">document</span><span class="evt">.getElementById</span><span class="unique">(</span><span class="text">"min-knapp"</span><span class="unique">);</span></p>
            </div>
        </div>
        <div class="block">
            <p id="bruke-variabler" class="undertitle flexbox-left">1.2 Bruke variabler</p>
            <div class="code-block-wrapper flexbox-left">
                <div class="code-block cb-short">
                    <p>
                        <span class="var">let</span>
                        <span class="var-name">helloWorld</span>
                        <span class="unique">=</span>
                        <span class="text">"Hello World!"</span><span class="unique">;</span></p>
                    <p>
                        <span class="ident">console</span><span class="evt">.log</span><span class="unique">(</span><span class="var-name">helloWorld</span><span class="unique">);</span></p>
                    <div class="code-block-button-wrapper">
                        <button onclick="console.log('Hello World!')" class="secondary flexbox"><i class="uil uil-brackets-curly"></i> Test koden!</button>
                    </div>
                </div>

            </div>
            <div class="code-block-wrapper flexbox-left">
                <div class="code-block cb-short">
                    <p>
                        <span class="var">let</span>
                        <span class="var-name">helloWorld</span>
                        <span class="unique">=</span>
                        <span class="text">"Hello World!"</span><span class="unique">;</span></p>
                    <p>
                        <span class="evt">alert</span><span class="unique">(</span><span class="var-name">helloWorld</span><span class="unique">);</span></p>
                    <div class="code-block-button-wrapper">
                        <button onclick="alert('Hello World!')" class="secondary flexbox"><i class="uil uil-brackets-curly"></i> Test koden!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funksjoner -->
    <section class="content funksjoner">
        <h3 id="funksjoner" class="title flexbox-left"><i class="uil uil-link"></i> Funksjoner</h3>
        <div class="block">
            <p id="lage-funksjoner" class="undertitle flexbox-left">2.1 Lage funksjoner</p>
            <div class="code-block cb-short">
                <p>
                    <span class="var">function</span>
                    <span class="evt">minFunksjon</span><span class="unique">(</span><span class="number">p1</span><span class="var-name">,</span>
                    <span class="number">p2</span><span class="unique">)</span>
                    <span class="unique">{</span></p>
                <p>
                    <span class="indent var">return</span>
                    <span class="var-name">p1, p2</span><span class="unique">;</span></p>
                <p>
                    <span class="unique">};</span></p>
            </div>
        </div>
    </section>

    <!-- Eventer -->
    <section class="content eventer">
        <h3 id="eventer" class="title flexbox-left"><i class="uil uil-link"></i> Eventer</h3>
        <div class="block">
            <p id="eventer-list" class="undertitle flexbox-left">3.1 Eventer</p>
            <div class="code-block cb-short">
                <p>
                    <span class="var">function</span>
                    <span class="evt">minFunksjon</span><span class="unique">(</span><span class="number">p1</span><span class="var-name">,</span>
                    <span class="number">p2</span><span class="unique">)</span>
                    <span class="unique">{</span></p>
                <p>
                    <span class="indent var">return</span>
                    <span class="var-name">p1, p2</span><span class="unique">;</span></p>
                <p>
                    <span class="unique">};</span></p>
            </div>
        </div>
    </section>
</main>
</body>
</html>
