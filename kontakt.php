<?php
  include("header.php");
 ?>
  <div id="wrapper">

    <div id="header" style="margin-top: 27px; margin-left: 5px;">

    <?php
      include("nav-kontakt.php");
     ?>
   </div>

   <div id="content-kontakt">
     <div style="float: left;text-align: left;margin-right: 45px;">
       <img src="img/simon-grau.jpg" style="margin-top: 15px;"/><br />
       <p style="font-size: 14px;margin-left: 0px;color: #858484;">
         Bitterfelder Straße 23B<br />
          Gewerbehof/Haus 4<br />
          12681 Berlin<br />
          Telefon 030 47611677<br />
          Fax 030 47611688<br />
          <a href="mailto:info@gewerbliche-vermietungen.net" style="color:#fd5308;text-decoration: none;">info@gewerbliche-vermietungen.net</a><br />
          <a href="http://gewerbliche-vermietungen.net" style="color:#858484;text-decoration: none;">www.gewerbliche-vermietungen.net</a><br />
          <br />
          Ansprechpartner:<br />
           Jörg Simon, Frank Simon<br /><br />
          Geschäftsführer:<br />
          Jörg Simon<br />
          Dieter Kiesewetter<br />
          Sitz der Gesellschaft: Berlin<br />
          Handelsregister:<br />
          AG Charlottenburg<br />
          HRB 180103<br />
          Gerichtsstand: Berlin<br />
          USt.-IDNr.: DE237362263<br />
       </p>

     </div>

     <div id="kontakt-kontaktfeld" style="padding-left: 10px;padding-top: 7px;padding-bottom: 0px;">
       <div id="kontakt-inputhinweise" style="float: left;color: white; font-size: 15px;line-height: 50px;">
         BETREFF<br />
         FIRMA<br />
         NAME<br />
         TELEFON<br />
         EMAIL<br />
         WEBSITE<br />

       </div>
         <div id="kontakt-inputfelder" style="float: left;padding-left: 10px; ">
           <input type="text" id="betreff" style="margin-top: 10px;" /><br/>
           <input type="text" id="firma" style="margin-top: 20px;"/><br/>
           <input type="text" id="name" style="margin-top: 20px;"/><br/>
           <input type="text" id="telefon" style="margin-top: 20px;"/><br/>
           <input type="text" id="email" style="margin-top: 20px;"/><br/>
           <input type="text" id="website" style="margin-top: 20px;"/><br/>
         </div>

         <div id="kontakt-textarea" style="">
           <textarea id="nachricht" style="margin-top: 5px;width: 402px; height: 130px;font-size: 15px;border: 3px solid white; color: #8c8c8b;">IHRE NACHRICHT</textarea>
           <input type="submit" value="ABSENDEN" onclick="kontakt_senden()" style="padding: 5px;color: #8c8c8b; font-size: 14px; background-color: white; border: #69696b 3px solid; margin-top: -40px; margin-left: 300px;"/>
         </div>
     </div>



     <div id="kontakt-karte">
       <img src="img/karte.jpg" />
     </div>

     <div id="kontakt-hinweise">
       <p style="color: #828281; font-size: 16px;">
         Hier finden Sie uns und</br/>
         unsere Mietobjekte
       </p>

      <p style="color: #828281; font-size: 14px;margin-top: 306px;">
        © Copyright.</br/>
       Alle Rechte bei</br/>
       Simon GmbH</br/>
       Bau- &amp; Industrieservice</br/>
       Design: Artprojects</br/>
       Webmaster: Webfuchs</br/>
      </p>

     </div>


   </div>
   <div id="disclaimer-kontakt">
     <img src="img/disclaimer.jpg" width="1465px;" />
   </div>
 </div>

  </body>
</html>

<script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
<script>
  function kontakt_senden(){
    $.get(
      "kontakt_senden.php", {
        betreff: $("#betreff").val(),
        name: $("#name").val(),
        firma: $("#firma").val(),
        telefon: $("#telefon").val(),
        email: $("#email").val(),
        website: $("#website").val(),
        nachricht: $("#nachricht").val()
      }
    );

    alert("Ihre Kontaktanfrage wurde versendet");
  }
</script>
