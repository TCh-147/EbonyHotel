<?php
/**
* Template Name: Contact Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
    get_header();
?>

<h1>Contact Us</h1>

<!-- make the three into a grid area where the info and the map are on the left
and the form is on the right spanning two rows -->

<div class="contact-info">
    <p>
        Customer support: 888 888 8888 <br>
        Make a reservation: 888 8888 8888 <br>
        Address: Somewhere, str.Somewhere
    </p>

    <div class="contact-form-info">
        <p>
            At Ebony Manor Hotel, your comfort and satisfaction are our top priorities.
            Have a question or need assistance? We're here to help! Contact us anytime with
             your inquiries or concerns. Our friendly team is ready to ensure a comfortable 
             and enjoyable stay at Ebony Manor Hotel. 
            Don’t hesitate
             to reach out to us!You can contact us via phone, email, or by 
             filling out the form. We look forward to hearing from you!
        </p>
    </div>

    
</div>


<div class="contacts-form">
    <div>
        <?php echo do_shortcode('[contact-form-7 id="465c1f9" title="Формуляр за контакт"]') ?>
    </div>
    
    <div class="contact-map">
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12386182.960956775!2d-74.08302114251626!3d40.71866701702417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1436524193425" allowfullscreen></iframe>
    </div>
    
</div>

<?php
    get_footer();
?>