<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Webarto" />
    <title>
      FlareGramster &bull; Oatmeal
    </title>

<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext);
*{margin:0;padding:0;}
body
{
  color: #fff;
  font-size: 14px;
  font-family: Lobster, Helvetica, Arial, sans-serif;
  background-image: url(http://themes.trendywebstar.com/Smallish/images/header-patterns/header-pattern-01.png), url(http://themes.trendywebstar.com/Smallish/images/background-patterns/body-bg-33.jpg);
  background-repeat: repeat, repeat;
}
input{padding:10px;background:rgba(255,255,255,0.1) url(http://instagraph.me/static/gfx/paper.png) repeat;min-width:480px;border:0;font-family: Lobster, Helvetica, Arial, sans-serif;color:#fff;font-size:1.5em;border:3px solid #4b1805;border-radius:8px;}
h1,h2,h3{text-shadow: 0 0 10px #000;margin: 10px 0;}
.wrapper{margin:0 auto; width:960px;}
.dark-shadow{box-shadow: 0 0 20px #000;}
#filters img{margin:10px;cursor:pointer;}
.center{text-align:center;}
#content, #footer{margin:20px 0;}
a{color:#fff;text-shadow: 0 0 10px #fff;text-decoration:none;}
</style>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
      
    </script>
  </head>
  
  <body>
    <div class="wrapper">
      <div id="content" class="center">
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="filter" value="" />
          <h1>
            1. Enter Image URL (size will be 612px by 612px)
          </h1>
          <input type="text" name="url" value="https://pbs.twimg.com/media/A8S4f4PCQAA-BT2.jpg" class="dark-shadow" />
          <h1>
            2. Over Saturation 
          </h1>
          <h1>
            3. Over-Saturate Colors
          </h1>
          <h1>
            4. Add Lens Flare
          </h1>
          <div>
            <img class="dark-shadow" id="result" alt="" src="" />
          </div>
        </form>
      </div>
    </div>
    <div id="footer" class="center">
      <div class="wrapper">
        <h2>
          Created by
          <a href="http://webarto.com">&#9733;Webarto</a>
        </h2>
      </div>
    </div>
    <script type="text/javascript">
      $('input[name=url]').mouseleave(function(e)
      {
        e.preventDefault();
        $(this).css('opacity', 1);
        
        var url = $('input[name=url]').val();
        
        if ( ! url)
        {
          alert('URL is missing!');
          return;
        }
        
        $('#result').attr('src', '/index.php?__ajax=1&url=' + url);
        
      });
    </script>
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-6881803-14']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
  </body>
</html>