<?php 
    get_header();
?>

<div class="container-fluid text-center py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3><?php the_title(); ?></h3>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <form class="text-left">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name...">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your email...">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" rows="3" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary justify-content-center">Send message</button>
                </form>
            </div>
        </div>
    </div>


 

<?php get_footer(); ?>