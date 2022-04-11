<!doctype html>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pl">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="{$page_description|default:'Opis domyślny'}">
   <link rel="stylesheet" href="{$config->app_url}/css/main.css" />

   <title>{$page_title|default:"Nie działa :("}</title>
</head>

<body>

   <div id="wrapper">
      <!-- HEADER -->
      <header id="header" class="alt">
         <a class="logo"><strong>Jacek</strong> <span>Czernecki</span></a>
      </header>


         {block name=content} Domyślna treść zawartości .... {/block}


         <!-- FOOTER -->
         <footer id="footer">
            <ul class="copyright">
               <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
               <li>{block name=footer} Domyślna treść stopki .... {/block}</li>
            </ul>
         </footer>
      </div>
   </div>

</body>

</html>