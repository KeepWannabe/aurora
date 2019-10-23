<html>
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aurora | CASANOVA</title>
    <meta name="description" content="Free Multi Encoder">
    <meta name="keywords" content="encoder, decoder, base64 encode, base64 decode, urlencode, urldecode, hex encode, hex decode, html encode, html decode">
    <meta name="author" content="Mukhammad Akbar">
    <meta property="og:image" content="http://103.129.221.24:1337/screenshot/default.jpg" />
    <link rel="icon" type="image/png" sizes="16x16" href="http://103.129.221.24:1337/icon.png">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href="css/cookieconsent.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">AURORA</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="https://c0delabs.com/aurora">Casanova</a></li>
        </ul>
      </div><!-- /.container-fluid -->
    </nav>
    <div>
      <ul class="nav nav-pills nav-stacked col-md-2">
        <li class="active"><a href="#tab_b64" data-toggle="pill">Base64</a></li>
        <li class=""><a href="#tab_url" data-toggle="pill">URL</a></li>
        <li class=""><a href="#tab_ascbin" data-toggle="pill">Binary (Ascii)</a></li>
        <li class=""><a href="#tab_intbin" data-toggle="pill">Binary (Integer)</a></li>
        <li class=""><a href="#tab_aschex" data-toggle="pill">Hex (Ascii)</a></li>
        <li class=""><a href="#tab_inthex" data-toggle="pill">Hex (Integer)</a></li>
        <li class=""><a href="#tab_html" data-toggle="pill">HTML</a></li>
        <li class=""><a href="#tab_ascoct" data-toggle="pill">Oct (Ascii)</a></li>
        <li class=""><a href="#tab_intoct" data-toggle="pill">Oct (Integer)</a></li>
        <li class=""><a href="#tab_jsoct" data-toggle="pill">Oct (JS)</a></li>
        <li class=""><a href="#tab_uni" data-toggle="pill">Unicode</a></li>
      </ul>
      <div class="tab-content col-md-10" style="overflow:scoll">
      <div class="tab-pane active" id="tab_b64">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>Base64 encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="b64"></textarea>
              </div>
              <div class="col-md-6">
                <h4>Base64 decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="b64"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="b64_output"></code></pre>
            </div>
          </div>
        </div>
      <div class="tab-pane" id="tab_url">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>URL encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="url"></textarea>
              </div>
              <div class="col-md-6">
                <h4>URL decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="url"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="url_output"></code></pre>
            </div>
          </div>
        </div>
      <div class="tab-pane" id="tab_html">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>HTML encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="html"></textarea>
              </div>
              <div class="col-md-6">
                <h4>HTML decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="html"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="html_output"></code></pre>
            </div>
          </div>
        </div>
      <div class="tab-pane" id="tab_aschex">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>Hex (Ascii) encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="aschex"></textarea>
              </div>
              <div class="col-md-6">
                <h4>Hex (Ascii) decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="aschex"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="aschex_output"></code></pre>
            </div>
          </div>
        </div>
      <div class="tab-pane" id="tab_jshex">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>Hex (JS) encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="jshex"></textarea>
              </div>
              <div class="col-md-6">
                <h4>Hex (JS) decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="jshex"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="jshex_output"></code></pre>
            </div>
          </div>
        </div>
      <div class="tab-pane" id="tab_inthex">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>Hex (Integer) encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="inthex"></textarea>
              </div>
              <div class="col-md-6">
                <h4>Hex (Integer) decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="inthex"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="inthex_output"></code></pre>
            </div>
          </div>
        </div>
      <div class="tab-pane" id="tab_ascbin">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>Binary (Ascii) encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="ascbin"></textarea>
              </div>
              <div class="col-md-6">
                <h4>Binary (Ascii) decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="ascbin"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="ascbin_output"></code></pre>
            </div>
          </div>
        </div>
      <div class="tab-pane" id="tab_intbin">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>Binary (Integer) encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="intbin"></textarea>
              </div>
              <div class="col-md-6">
                <h4>Binary (Integer) decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="intbin"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="intbin_output"></code></pre>
            </div>
          </div>
        </div>
      <div class="tab-pane" id="tab_ascoct">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>Octal (Ascii) encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="ascoct"></textarea>
              </div>
              <div class="col-md-6">
                <h4>Octal (Ascii) decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="ascoct"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="ascoct_output"></code></pre>
            </div>
          </div>
        </div>
      <div class="tab-pane" id="tab_intoct">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>Octal (Integer) encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="intoct"></textarea>
              </div>
              <div class="col-md-6">
                <h4>Octal (Integer) decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="intoct"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="intoct_output"></code></pre>
            </div>
          </div>
        </div>
      <div class="tab-pane" id="tab_jsoct">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>Octal (JS) encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="jsoct"></textarea>
              </div>
              <div class="col-md-6">
                <h4>Octal (JS) decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="jsoct"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="jsoct_output"></code></pre>
            </div>
          </div>
        </div>
      <div class="tab-pane" id="tab_uni">
          <div class="container">
            <div class="container">
              <div class="col-md-6">
                <h4>Unicode encoding</h4>
                <textarea class="form-control" rows="5" data-type="encode" data-id="uni"></textarea>
              </div>
              <div class="col-md-6">
                <h4>Unicode decoding</h4>
                <textarea class="form-control" rows="5" data-type="decode" data-id="uni"></textarea>
              </div>
            </div>
            <div class="container">
              <hr />
              <pre><code id="uni_output"></code></pre>
            </div>
          </div>
        </div>
      </div><!-- tab content -->
    </div><!-- end of container -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/cookieconsent.min.js"></script>
    <!-- Source: https://github.com/carlo/jquery-base64 -->
    <script src="js/jquery.base64.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/cookies.js"></script>


  </body>
</html>

