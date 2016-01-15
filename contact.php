<?php
include 'include.php';
include 'header.php';
?>

<!-- Main Section
================================================== -->
<section id="main">
  <div class="page-header">
    <h1>Contact Us</h1>
  </div>

  <div class="row">

    

  
 <!-- PUT CONTENT IN HERE
================================================== --> 
    <div class="span6">
      <h3>Rice Community</h3>
      <p>If you need to contact club leadership, please <a href="mailto:riceucsclub@gmail.com">email us</a>.</p>
      <p>We particularly encourage you to submit any suggestions you may have for the club!</p>
      <p><ul class="contact-icons" style="text-align: center;">
            <li><a class="email" target="_blank" href="mailto:riceucsclub@gmail.com"></a></li>
            <li><a class="facebook" target="_blank" href="{{ links.facebook}}"></a></li>
            <li><a class="twitter" target="_blank" href="{{ links.twitter}}"></a></li>
      </ul></p>

 
      <h4>Mailing List</h4>
      <p>Stay up to date on the latest events and activities by subscribing to our <a href="{{ links.mailing_list }}">mailing list</a>.</p>

  </div>

  <div class="span6">
    <h3>Outside Rice</h3>
    <p>CS Club has a long history of collaborating with organizations and individuals outside of the Rice community. If you are interesting in working with the club, please look at the information below for different ways to get involved. We hope to hear from you soon!</p>
    <p><h5>- Tech Talks & Info Sessions</h5>
      Tech Talks are a great way to get Rice students interested in what your company does and get in contact with potential interns and employees. If you are interested in hosting one of these, please email our current vice president <a href="mailto:riceucsclub@gmail.com">{{ officers['Vice President']['name'] }}</a>. Please be ready to provide a preferred date, time, and duration.
    </p>

     <p><h5>- Weekly Lunch Talks</h5>
      The CS Club and the Department of Computer Science together host a series of weekly Wednesday lunch talks throughout the semester. We provide the food, you provide the talk! If you are interested in presenting at one of these, please contact <a class="email" href="mailto:greiner@rice.edu"> John Greiner </a>.
    </p>

      <p><h5>- Sponsorship</h5>
      Putting together HackRice every year is expensive, so we really appreciate all of our sponsors. If you'd like to support HackRice and other club activities financially, we have a variety of sponsorship packages available. <!--You can review the <a href = "/files/HackRiceSponsorshipPackages.pdf">current package offerings</a> and -->Please contact our current technical chair <a href="mailto:riceucsclub@gmail.com">{{ officers['Technical Chair']['name'] }}</a> for more information. 
    </p>
  </div>

</section>

<?php
include 'footer.php';
?>

