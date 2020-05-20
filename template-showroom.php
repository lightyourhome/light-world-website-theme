<?php /* Template Name: Showroom */ ?>

<?php get_header(); ?>

<div class="mobile-only">

    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-12">
                <img id="home-image"
                    src="<?php echo site_url('/wp-content/uploads/2018/10/Light_World_Showroom_Small.jpg'); ?>">
            </div>
            <div class="col-md-12" style="background-color: #f6f6f6; text-align: center;">
                <div class="home-hero-desc">
                    <h2>Explore Light World</h2>
                    <h3>Pennsylvania's Premier Lighting Showroom</h3>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="desktop-only">

    <?php add_revslider( 'showroom-hero'); ?>

</div>

<div class="wrapper" id="page-wrapper">

    <div id="content" class="container">

        <div id="primary" class="content-area col-md-12">

            <main id="main" class="site-main" role="main">

                <!-- NAVIGATION -->
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-md-12 col-12">
                        <nav id="lighting-ideas-navigation" style="margin: 0 auto; width: 100%; text-align: center;">
                            <a href="#lw-showroom" class="lw-showroom-nav-button">Showroom</a>
                            <a href="#lw-showroom-staff"
                                class="lw-showroom-nav-button lw-showroom-staff-nav-btn">Staff</a>
                            <a href="#lw-showroom-services" class="lw-showroom-nav-button">Services</a>
                            <a href="#lw-showroom-reviews" class="lw-showroom-nav-button">Reviews</a>
                            <a href="#lw-showroom-gallery" class="lw-showroom-nav-button">Gallery</a>
                        </nav>
                    </div>
                </div>

                <div id="lw-showroom" class="row justify-content-center">
                    <div class="col-md-12 mb-3" style="border-bottom: 2px solid rgb(253, 156, 21);">
                        <h2>Our Showroom</h2>
                    </div>

                    <!-- STORE IMAGE -->
                    <div class="col-md-7 mb-3">
                        <div class="row h-100">
                            <div class="col-md-12 my-auto">
                                <img src="<?php echo site_url('/wp-content/uploads/2019/06/IMG_2779.jpg'); ?>"
                                    style="height: auto; width: 100%;">
                            </div>
                        </div>
                    </div>

                    <!-- STORE BIO -->
                    <div class="col-md-5 mb-3">

                        <p><span style="font-weight: 400;">Founded in 1989 by Joy, Light World&rsquo;s first location
                                was in a Holland Strip Mall with a </span><span style="font-weight: 400;">store
                            </span><span style="font-weight: 400;">size of only 1,500 square feet.</span></p>

                        <p><span style="font-weight: 400;">Since then, Light World has outgrown three locations and has
                                found its current home in a 13,000 sq. ft. </span><span
                                style="font-weight: 400;">showroom </span><span style="font-weight: 400;">and warehouse
                                in Feasterville-</span><span style="font-weight: 400;">Trevose</span><span
                                style="font-weight: 400;">, Pennsylvania. This facility gave Light World a superior
                                focus on customer service and an inspiring selection of </span><span
                                style="font-weight: 400;">lighting fixtures</span><span style="font-weight: 400;">, as
                                well as an entrance into a thriving e-commerce market.</span></p>

                        <p><span style="font-weight: 400;">Light World is also a member of LIGHTING ONE, a co-op of
                            </span><span style="font-weight: 400;">lighting showrooms</span><span
                                style="font-weight: 400;"> across the country. This association allows Light World to
                                give its customers the lowest prices in the industry, and access to private label
                                products exclusive to its </span><span style="font-weight: 400;">lighting
                                showroom</span><span style="font-weight: 400;">.</span></p>

                        <p><span style="font-weight: 400;">We know that your choice matters when it comes to a perfect
                                lighting solution, and Light World is committed to making sure you find it! Visit our
                            </span><span style="font-weight: 400;">showroom </span><span style="font-weight: 400;">in
                            </span><span style="font-weight: 400;">Trevose</span><span style="font-weight: 400;">, PA,
                                to find one-of-a-kind </span><span style="font-weight: 400;">lighting </span><span
                                style="font-weight: 400;">fixtures today!</span></p>
                        <div style="text-align: center;">
                            <a href="<?php echo site_url('/contact'); ?>" class="button">Contact or Visit Us</a>
                        </div>

                    </div>
                </div>

                <!-- STAFF SLIDESHOW -->
                <div id="lw-showroom-staff" class="row mt-5 justify-content-center">

                    <div class="col-md-12 mb-3" style="border-bottom: 2px solid rgb(253, 156, 21);">
                        <h2>Meet Our Family...</h2>
                    </div>

                    <div class="col-md-8">

                        <i class="prev-lw-showroom-staff"></i>

                        <div id="lw-showroom-staff-carousel">

                            <div>
                                <div class="p-5 mx-auto lw-showroom-staff-slide">
                                    <h3>Joy - Owner</h3>
                                    <div class="mt-2 mb-2">
                                        <img class="mx-auto"
                                            src="<?php echo site_url('/wp-content/uploads/2019/06/Joy_Headshot-1-200x200.jpg'); ?>"
                                            style="border-radius: 100px;">
                                    </div>
                                    <p>Joy started her career as a commercial lighting representative. Shortly after,
                                        she fell in love with the challenge, the fast pace and the never-ending chance
                                        for knowledge and experience. Joy’s early career allowed her to visit most of
                                        the United States, and much of the world. However, after many years, Joy felt it
                                        was time to put the suitcases away and grow some roots in the community. In
                                        1989, Joy opened her first store and called it “Light World”. Four stores, two
                                        recessions, one flood, many wonderful clients and friends later and she wouldn’t
                                        change a thing. In her little bit of free time, she loves challenging her
                                        husband Peter on the golf course and riding bikes on the boardwalk!</p>
                                </div>
                            </div>

                            <div>
                                <div class="p-5 mx-auto lw-showroom-staff-slide">
                                    <h3>Jim T. - Manager</h3>
                                    <div class="mt-2 mb-2">
                                        <img class="mx-auto"
                                            src="<?php echo site_url('/wp-content/uploads/2019/06/Jim_HeadShot-200x200.jpg'); ?>"
                                            style="border-radius: 100px;">
                                    </div>
                                    <p>Jim has been a part of the Light World family for 28 years. His favorite part of
                                        his position is building relationships with guests and assisting them in finding
                                        the perfect lighting solution, while still having a great time. Outside of work,
                                        Jim enjoys spending time with his family and is an avid Philly Sports Fan.</p>
                                </div>
                            </div>

                            <div>
                                <div class="p-5 mx-auto lw-showroom-staff-slide">
                                    <h3>Jim M. - Director of E-Commerce</h3>
                                    <div class="mt-2 mb-2">
                                        <img class="mx-auto"
                                            src="<?php echo site_url('/wp-content/uploads/2019/06/Jim_m_headshot-200x200.jpg'); ?>"
                                            style="border-radius: 100px;">
                                    </div>
                                    <p>Jim M. has been with Light World since September of 2018. Jim can most often be
                                        found designing and developing Light World's website, or planning the next step
                                        for Light World's online presence. Jim’s hobbies include writing music and
                                        gaming.</p>
                                </div>
                            </div>

                            <div>
                                <div class="p-5 mx-auto lw-showroom-staff-slide">
                                    <h3>Beth</h3>
                                    <div class="mt-2 mb-2">
                                        <img class="mx-auto"
                                            src="<?php echo site_url('/wp-content/uploads/2019/06/beth_headshpt-200x200.jpg'); ?>"
                                            style="border-radius: 100px;">
                                    </div>
                                    <p>Beth has over 20 years under her belt with the Light World Family. Beth has a
                                        wide range of experience with lighting and design. While at Light World, she
                                        enjoys getting to know customers most. In addition to sales, Beth is responsible
                                        for pricing, order entry and tagging the showroom! Downtime is spent with her
                                        family and friends, watching football, baseball and Seinfeld reruns, live music
                                        and her happy place, LBI.</p>
                                </div>
                            </div>

                            <div>
                                <div class="p-5 mx-auto lw-showroom-staff-slide">
                                    <h3>Jack</h3>
                                    <div class="mt-2 mb-2">
                                        <img class="mx-auto"
                                            src="<?php echo site_url('/wp-content/uploads/2019/06/jack_headshot-200x200.jpg'); ?>"
                                            style="border-radius: 100px;">
                                    </div>
                                    <p>Jack brings a background in electronics to the Light World team. Before joining
                                        Light World, Jack owned and operated a business of his own for over 35 years. In
                                        his off time, Jack enjoys spending time with his wife, 3 children, and 2
                                        grand-children. Jack is a proud member of the Light World family.</p>
                                </div>
                            </div>

                            <div>
                                <div class="p-5 mx-auto lw-showroom-staff-slide">
                                    <h3>Amy</h3>
                                    <div class="mt-2 mb-2">
                                        <img class="mx-auto"
                                            src="<?php echo site_url('/wp-content/uploads/2019/06/Amy_Headshot-200x200.jpg'); ?>"
                                            style="border-radius: 100px;">
                                    </div>
                                    <p>Amy joined Light World’s team in October of 2015. She enjoys building
                                        relationships with customers and taking part in her family’s business. After
                                        recently graduating college, Amy feels that her experience at Light World will
                                        help contribute to her success. When not working, Amy enjoys babysitting and
                                        taking walks with friends and family.</p>
                                </div>
                            </div>

                            <div>
                                <div class="p-5 mx-auto lw-showroom-staff-slide">
                                    <h3>Brad</h3>
                                    <div class="mt-2 mb-2">
                                        <img class="mx-auto"
                                            src="<?php echo site_url('/wp-content/uploads/2019/06/brad_headshot-200x200.jpg'); ?>"
                                            style="border-radius: 100px;">
                                    </div>
                                    <p>Brad joined Light World in 2007. He enjoys the sales, merchandising and technical
                                        parts of his job. When he’s not working, he likes spending time with his four
                                        dogs.</p>
                                </div>
                            </div>

                            <div>
                                <div class="p-5 mx-auto lw-showroom-staff-slide">
                                    <h3>John</h3>
                                    <div class="mt-2 mb-2">
                                        <img class="mx-auto"
                                            src="<?php echo site_url('/wp-content/uploads/2019/06/John_headshot-200x200.jpg'); ?>"
                                            style="border-radius: 100px;">
                                    </div>
                                    <p>John has been with the Light World family for 7 years. Before being welcomed to
                                        the team, John served in the Navy and happily retired from the United States
                                        Postal Service after 20 years. While on the clock, John enjoys driving and being
                                        out on the open road. While at home, John enjoys long walks and golf with his
                                        family.</p>
                                </div>
                            </div>

                            <div>
                                <div class="p-5 mx-auto lw-showroom-staff-slide">
                                    <h3>Sue</h3>
                                    <div class="mt-2 mb-2">
                                        <img class="mx-auto"
                                            src="<?php echo site_url('/wp-content/uploads/2019/06/sue_headshot-200x200.jpg'); ?>"
                                            style="border-radius: 100px;">
                                    </div>
                                    <p>Sue has enjoyed 6 years as a part of the Light World family. Sue is a person who
                                        seems to know everyone and loves being around people. She retired from a career
                                        in sales and enjoys spending time with her two sons and her grandchildren.</p>
                                </div>
                            </div>

                            <div>
                                <div class="p-5 mx-auto lw-showroom-staff-slide">
                                    <h3>Linda</h3>
                                    <div class="mt-2 mb-2">
                                        <img class="mx-auto"
                                            src="<?php echo site_url('/wp-content/uploads/2019/06/Linda_headshot-200x200.jpg'); ?>"
                                            style="border-radius: 100px;">
                                    </div>
                                    <p>Linda has been a part of the Light World team for over a dozen years. Linda
                                        enjoys working with her associates along with all the “Nice Folks” that shop at
                                        Light World. When not working, Linda enjoys spending time outdoors, watching
                                        movies and spending time with friends and family.</p>
                                </div>
                            </div>

                        </div>

                        <i class="next-lw-showroom-staff"></i>

                    </div>

                </div>

                <div id="lw-showroom-services" class="row mt-5 justify-content-center">

                    <div class="col-md-12 mb-3" style="border-bottom: 2px solid rgb(253, 156, 21);">
                        <h2>Services</h2>
                    </div>

                    <div class="col-md-4">
                        <div style="text-align: center;">
                            <img src="<?php echo site_url('/wp-content/uploads/2018/10/broken_light_bulb-300x250.jpg'); ?>"
                                style="box-shadow: 2px 2px 5px #000;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3 class="mt-3 mb-3">Lamp and Lighting Repairs</h3>
                        <p>We offer a variety of different repairs, from rewiring to replacing various parts. Light
                            World takes pride in customer repairs and we promise you will be satisfied with the results,
                            whether your piece is new or old! Have questions? Contact us today!</p>
                        <div style="text-align: center;">
                            <a href="<?php echo site_url('/contact'); ?>" class="button">Get a Repair</a>
                        </div>
                    </div>

                </div>

                <div class="row mt-5 mb-5 justify-content-center">

                    <div class="col-md-4">
                        <div style="text-align: center;">
                            <img src="<?php echo site_url('/wp-content/uploads/2018/10/room_blueprint-300x250.jpg'); ?>"
                                style="box-shadow: 2px 2px 5px #000;">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3 class="mt-3 mb-3">Design Help</h3>
                        <p>Want to make a vision a reality but don’t know where to start? With over 30 years of
                            experience in the lighting industry, Light World’s family of professionals is here to help
                            with finding the perfect lights for any part of your home! Have questions? Contact us today!
                        </p>
                        <div style="text-align: center;">
                            <a href="<?php echo site_url('/contact'); ?>" class="button">Contact Us</a>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12" style="border-bottom: 2px solid rgb(253, 156, 21);">
                        <h2>What Our Extended Family Says About Us...</h2>
                    </div>
                </div>

                <div id="lw-showroom-reviews" class="row mt-5 justify-content-center">

                    <div class="col-md-3 m-3 lw-showroom-review">
                        <div class="row h-100">
                            <div class="col-md-12 p-2 my-auto">
                                <p><em>"I’ve had several occasions to use Light World’s repair service and they far
                                        exceeded expectations both times. While they have a terrific selection of
                                        lighting, how they back what they sell makes them a Five Star business in my
                                        eyes."</em></p>
                                <p>Hank Boyer - Customer</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 m-3 lw-showroom-review">
                        <div class="row h-100">
                            <div class="col-md-12 p-2 my-auto">
                                <p><em>"The only place to get quality lights! Never go anywhere else for lighting!"</em>
                                </p>
                                <p>Charli Desman - Customer</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 m-3 lw-showroom-review">
                        <div class="row h-100">
                            <div class="col-md-12 p-2 my-auto">
                                <p><em>Jim was extremely helpful and very pleasant. They had everything I needed, and I
                                        got in-and-out of the store very quickly.</em></p>
                                <p>Heather Holmes - Customer</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- PHOTO GALLERY -->
                <div id="lw-showroom-gallery" class="row mt-5 mb-3 justify-content-center">

                    <div class="col-md-12 mb-5" style="border-bottom: 2px solid rgb(253, 156, 21);">
                        <h2>Photos of our Showroom</h2>
                    </div>

                    <div class="col-md-12">
                        <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '6826' ); } ?>
                    </div>

                </div>

                <div class="row mb-5">
                    <div class="col-md-12" style="border-bottom: 2px solid rgb(253, 156, 21);"></div>
                </div>




            </main><!-- #main -->

        </div><!-- primary -->

    </div><!-- #content -->

    <div class="container-fluid">

        <!-- ACCORDION  -->
        <div id="accordion-container" class="row justify-content-center mt-5" style="background-color: #f6f6f6;">

            <div class="col-md-8 p-4">

            <h2><strong>Indoor Lighting and </strong><strong>Chandelier Showroom</strong></h2>

                    <p><span style="font-weight: 400;">To have the home of your dreams, you need the correct
                            lighting fixtures installed throughout every room in your house. Luckily, you
                            don&rsquo;t have to travel far to make your vision a reality. Our </span><span
                            style="font-weight: 400;">lighting showroom in Trevose, PA</span><span
                            style="font-weight: 400;">, has every kind of indoor lighting fixture you could have
                            ever hoped for under one roof. From </span><a
                            href="https://www.lightyourhome.com/ceiling-lights"><span
                                style="font-weight: 400;">ceiling-mounted lights</span></a><span
                            style="font-weight: 400;"> to vanity </span><a
                            href="https://www.lightyourhome.com/wall-lights"><span style="font-weight: 400;">wall light
                                fixtures</span></a><span style="font-weight: 400;">, we&rsquo;re confident you&rsquo;ll
                            find everything
                            you&rsquo;re looking for when you pay our light store a short visit.&nbsp;</span>
                    </p>

                <div id="accordion-hidden-content">

                    <p><span style="font-weight: 400;">The lighting industry experts at Light World will be
                            happy to walk you through the different types of light fixtures you&rsquo;ll see in
                            the </span><span style="font-weight: 400;">showroom</span><span style="font-weight: 400;">.
                            Here&rsquo;s a quick breakdown of the three main
                            categories of lighting:&nbsp;</span></p>

                    <ul class="accordion-list">
                        <li><strong>Ambient:</strong><span style="font-weight: 400;"> Your living room</span> <a
                                href="https://www.lightyourhome.com/product-category/chandeliers"><span
                                    style="font-weight: 400;">chandelier</span></a><span style="font-weight: 400;">,
                                bedroom </span><a
                                href="https://www.lightyourhome.com/product-category/flush-mounts"><span
                                    style="font-weight: 400;">flush ceiling lights</span></a><span
                                style="font-weight: 400;">, and </span><a
                                href="https://www.lightyourhome.com/product-category/bath-vanity-lights"><span
                                    style="font-weight: 400;">bathroom light fixtures</span></a><span
                                style="font-weight: 400;"> are all examples of ambient lighting, better known as
                                general lighting. These light fixtures will evenly cover your whole home in the
                                appropriate amount of light so that you may navigate, work, and play about
                                harmlessly. General lighting is fundamental to your home safety, but it can also
                                play an important role in home comfort decor. For example, </span><a
                                href="https://www.lightyourhome.com/product-category/ceiling-fans/"><span
                                    style="font-weight: 400;">ceiling fans</span></a><span style="font-weight: 400;">
                                not only brighten up the room, but they can also
                                adjust your home climate. Likewise, </span><a
                                href="https://www.lightyourhome.com/product-category/floor-lamps"><span
                                    style="font-weight: 400;">Tiffany floor lamps</span></a><span
                                style="font-weight: 400;"> add style and character to the room while
                                illuminating the space. Ambient </span><span style="font-weight: 400;">lighting
                            </span><span style="font-weight: 400;">is essential and decorative, and you can find
                                the latest styles at our </span><span style="font-weight: 400;">local
                                store</span><span style="font-weight: 400;">. Our indoor lighting and
                            </span><span style="font-weight: 400;">chandelier showroom</span><span
                                style="font-weight: 400;"> showcases some of the </span><span
                                style="font-weight: 400;">best </span><span style="font-weight: 400;">pieces in
                                terms of style and functionality. Not to mention, everything is sold at the most
                                affordable prices found in </span><span style="font-weight: 400;">Trevose</span><span
                                style="font-weight: 400;">.&nbsp;</span></li>
                        <li><strong><strong>Task: </strong><span style="font-weight: 400;">When you need to
                                    focus on the task at hand, a localized source of light may be necessary to
                                    highlight your work and keep your attention from straying elsewhere. Task
                                    lighting can easily be combined with ambient lighting to create a beautiful
                                    and functional interior look. For example, many home offices have </span><a
                                    href="https://www.lightyourhome.com/product-category/table-lamps"><span
                                        style="font-weight: 400;">modern table lamps</span></a><span
                                    style="font-weight: 400;"> in addition to general </span><span
                                    style="font-weight: 400;">ceiling lighting</span><span style="font-weight: 400;">.
                                    Some homeowners also install </span><a
                                    href="https://www.lightyourhome.com/product-category/pendant-lights"><span
                                        style="font-weight: 400;">pendant light fixtures</span></a><span
                                    style="font-weight: 400;"> in their </span><span style="font-weight: 400;">kitchen
                                </span><span style="font-weight: 400;">for
                                    cooking and cleaning. Visit our </span><span
                                    style="font-weight: 400;">Trevose</span><span style="font-weight: 400;">-based
                                </span><span style="font-weight: 400;">showroom </span><span
                                    style="font-weight: 400;">or
                                    browse through our online </span><span style="font-weight: 400;">shop
                                </span><span style="font-weight: 400;">to find the task</span><span
                                    style="font-weight: 400;"> light fixtures </span><span style="font-weight: 400;">of
                                    your choice.&nbsp;</span></strong></li>
                        <li><strong>Accent:</strong><span style="font-weight: 400;"> Last, but not least, is the
                                accent lighting. When you want to highlight special characteristics of your
                                house, such as an art piece, you&rsquo;ll be using accent lighting to help draw
                                attention. Just a few pieces of accent lights strategically placed throughout
                                your property can catapult your home from boring to luxurious. You can find
                            </span><span style="font-weight: 400;">LED lights</span><span style="font-weight: 400;">,
                            </span><a href="https://www.lightyourhome.com/product-category/sconces"><span
                                    style="font-weight: 400;">wall sconces</span></a><span style="font-weight: 400;">,
                                and other types of accent light fixtures at your
                                local Light World </span><span style="font-weight: 400;">showroom </span><span
                                style="font-weight: 400;">and </span><span style="font-weight: 400;">store</span><span
                                style="font-weight: 400;">.&nbsp;</span></li>
                    </ul>

                    <p><span style="font-weight: 400;">Visit your </span><span style="font-weight: 400;">local
                        </span><span style="font-weight: 400;">Light World </span><span style="font-weight: 400;">store
                        </span><span style="font-weight: 400;">today, and
                            we&rsquo;ll help you bring your home to life with the beautiful and high-quality
                            light fixtures. From the </span><span style="font-weight: 400;">kitchen </span><span
                            style="font-weight: 400;">to the living room to the bathroom, we&rsquo;ve got your
                            indoor and </span><span style="font-weight: 400;">outdoor lighting </span><span
                            style="font-weight: 400;">needs covered.&nbsp;</span></p>

                    <h2><strong>Outdoor Lighting Showroom</strong></h2>

                    <p><span style="font-weight: 400;">Although you spend most of your time indoors, that
                            doesn&rsquo;t mean your </span><span style="font-weight: 400;">outdoor
                            lighting</span><span style="font-weight: 400;"> needs should be ignored. Outdoor
                            lighting is incredibly important to the safety of your family. Whether you&rsquo;re
                            enjoying a warm summer night by hanging out in the backyard or you&rsquo;re arriving
                            home from work in the dark during a winter day, your </span><a
                            href="https://www.lightyourhome.com/product-category/outdoor-lighting/outdoor-wall-lighting/"><span
                                style="font-weight: 400;">outdoor wall lights</span></a><span style="font-weight: 400;">
                            will help to illuminate the path from your driveway to
                            the stairs and finally to the front door.&nbsp;</span></p>

                    <p><a href="https://www.lightyourhome.com/product-category/outdoor-lighting/"><span
                                style="font-weight: 400;">Outdoor light fixtures</span></a><span
                            style="font-weight: 400;"> can also be just as decorative as they can be functional.
                            For example, you can give your background pool a little extra pizzazz by installing
                        </span><span style="font-weight: 400;">LED lights</span><span style="font-weight: 400;">
                            around the perimeter. Or you can create an outdoor ambiance for the perfect backyard
                            party with some wall light fixtures. Just imagine all the heads of people walking or
                            driving by that will be turning in the direction of your house when everything is
                            brightly and artfully illuminated. You&rsquo;ll be sure to give your home value a
                            boost if nothing else.&nbsp;</span></p>

                    <p><br /><span style="font-weight: 400;">Stop by our </span><span style="font-weight: 400;">Trevose
                            lighting showroom</span><span style="font-weight: 400;"> today and you guarantee
                            you&rsquo;ll find the perfect
                            outdoor </span><span style="font-weight: 400;">lighting </span><span
                            style="font-weight: 400;">products </span><span
                            style="font-weight: 400;">in-store</span><span style="font-weight: 400;">.&nbsp;
                        </span></p>



                </div>

                <a href="javascript:void(0)" id="accordion-read-more">Read More</a>

            </div>

        </div>

    </div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>