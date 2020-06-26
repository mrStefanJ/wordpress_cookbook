<?php
/*
Template Name: Contact
*/
?>

<?php get_header();?>
<section class="page-wrap">
<div class="container">
    
    <p class="title-contact">Contact</p>

    <form>
    <label class="contact-text">First Name</label><br>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

    <label class="contact-text">Last Name</label><br>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

    <label class="contact-text">Subject</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><br>

    <input type="submit" value="Submit">
  </form>

</div>
</section>
<?php get_footer();?>