-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 09:01 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `screw-it`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `blog_id` int(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `body` mediumtext NOT NULL,
  `body2` text,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(100) NOT NULL,
  `main_image` tinytext,
  `second_image` tinytext,
  `third_image` tinytext,
  `layout` tinyint(4) NOT NULL,
  `published` varchar(100) NOT NULL DEFAULT 'published',
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`blog_id`, `user_id`, `title`, `body`, `body2`, `date_posted`, `category`, `main_image`, `second_image`, `third_image`, `layout`, `published`, `slug`) VALUES
(279, 20, 'DIY Boho Pillow', 'Iâ€™m a huge fan of mixing black and white geometrics with subtle blush tones in an otherwise light and airy white interior. Thereâ€™s something that feels so fresh and feminine, yet grounded about the whole combination. I was making a Target run recently, and took a lap through their new home section [which btw is totally styled, curated and straight up awesome] and came across a fantastic black and white Kilim-inspired table runner.  Ken and I are not table-runner-people, but I liked it so much, I bought it anyway with this idea of making a long lumbar pillow for our bed. The black and white pattern was the perfect juxtaposition to our blush pillow cases and the fringe at each end of the table runner easily serve as the brush trim on the pillow ends. Hereâ€™s the tutorial on how I made the pillow in case you want to make one for your own home. And P.S. the table runner is on SALE at Target right now, so why not?!', '1. Cut off the two ends of your table runner (leaving 3/4â€³ seam allowance) at a location where when the two raw sides come together they look good matching up together. These two pieces will be your pillow face. Set aside remaining table runner fabric until Step 4.&#13;&#10;&#13;&#10;2. Pin the wrong sides of the two pieces forming the pillow face together.&#13;&#10;&#13;&#10;3. Sew the two pieces together to create one long pillow face with fringe edges.&#13;&#10;&#13;&#10;4. Cut out the remaining table runner piece down to the length of your table runner including the fringe. In this case, the runner including the fringe is 33â€³ long. Thus, the back piece is also cut to 33â€³ long.', '2020-04-17 12:22:54', 'DECORATE', 'views/images/IMG_3049.jpg', 'views/images/IMG_30962.jpg', 'views/images/IMG_31451.jpg', 1, 'published', NULL),
(280, 20, 'DIY Lampshade', 'If you&#39;ve missed the memo on cane, it&#39;s time to catch up on the latest trend that has stolen our hearts. This incredibly versatile material can easily be cut, shaped, and attached to just about any hard surface to give it a modern, beachy, boho vibe in seconds. (Need proof? Check out this table, this cabinet, this console table, and this headboard. DIYs for all to try.)&#13;&#10;&#13;&#10;For this project, we wanted to create a shade for a standing lamp, using lampshade rings for the frame. You could also use a shade you already own as the base.', 'Step 1&#13;&#10;To begin, measure the diameter and height of your frame. Add 2 inches to both measurements, then cut a piece of cane webbing to size.&#13;&#10;&#13;&#10;Step 2&#13;&#10;Using weights or heavy books, lay out the webbing as flat as possible. Starting with one end of the frame, use your hot glue gun to adhere sections of the webbing to the frame around 2 to 3 inches at a time.&#13;&#10;&#13;&#10;Step 3&#13;&#10;Measure a length of raffia ribbon long enough to cover the diameter of the shade and add on a couple of inches. Unravel the ribbon and fold in half.&#13;&#10;&#13;&#10;Using the hot glue gun, add a little glue to the edge of the shade. Press the inside of the fold line against the edge of the shade so that one side covers the front and the other side covers the back/inside of the shade. If needed, add glue to secure the ribbon on both sides.&#13;&#10;&#13;&#10;Continue around the shade at both ends to create a neat edge. And, you&#39;re done!', '2020-02-03 11:22:46', 'RENOVATE', 'views/images/0f41d9cd79ae4162bd7eb3a2a65dfd27.jpg', 'views/images/64db8903386944a294b6bca957458b13.jpg', 'views/images/5124e3e37f0e48d3938f9092c8b3f1bb.jpg', 1, 'published', NULL),
(281, 20, 'DIY House Shelf', 'I&#39;m always looking for bathroom storage, my various lotions and potions seem to keep breeding and my cupboards are now at capacity! I decided to make some simple shelving to organise and display some of my favourite products. I think this easy house shaped shelving is cute and practical to boot.. who can argue with that? &#13;&#10;&#13;&#10;You&#39;ll need:&#13;&#10;&#13;&#10;wood&#13;&#10;saw or mitre saw&#13;&#10;tape measure&#13;&#10;hammer&#13;&#10;small nails&#13;&#10;wood glue&#13;&#10;paint', 'Start off by measuring out the lengths you want, mark with a pencil and saw. I cut five 30cm pieces for my shelf. &#13;&#10;&#13;&#10;Next we want to find the rough angle for the roof joint. take two of your wood lengths and point them together to make the roof shape (as shown above.) hold a piece of wood over where they meet and draw two lines down each side- this is the angle you cut for a flush fit.&#13;&#10;&#13;&#10;If you&#39;re not very experienced at cutting grab a handy helper. I find bribery with cakes the easiest way to snag an assistant.&#13;&#10;&#13;&#10;Once dry you can paint or stain the wood. my bathroom is top to bottom white so I kept the theme going and gave mine a lick of basic emulsion. follow with a quick layer of varnish if needed, leave to dry and your shelf is finished.. hurrah!', '2020-02-05 11:27:20', 'CREATE', 'views/images/DIY SHELF PROJECT.jpg', 'views/images/DIY-wood-house-shelf-decor-v1.jpg', 'views/images/diy-wood-house-shelf-v2.jpg', 1, 'published', NULL),
(282, 20, 'DIY Calendar', 'Itâ€™s a new year which for many of us means itâ€™s time for a new calendar! This DIY desktop daytimer (say that 5 times fast!) takes its styling from the flip-clock beauties of yesteryear, adding a retro touch to the modern workspace.  Itâ€™s a perpetual desk calendar too which means make it once, and youâ€™ll be able to keep tabs on the day year after year. Get the how-to below!', 'Paint the wooden cubes and rectangular blocks completely black with acrylic paint.&#13;&#10;&#13;&#10;Once the black paint is completely dry centre the 1â€³ white number stickers on each face of the cubes. Cube #1 will have numbers 1, 2, 3, 4, 5, 6. Cube #2 will have numbers: 0, 1, 2, 3, 7, 8.&#13;&#10;&#13;&#10;Once the cube numbers are on, add the month names using the 1/4â€³ vinyl letters to the skinny rectangles. There are 12 sides so one for each month!&#13;&#10;&#13;&#10;Last but not least, peel the backing off the bottom flap and fold up along the inside back. Place the blocks inside, set to the current month and day, and youâ€™re in business!', '2020-03-03 11:32:08', 'DECORATE', 'views/images/straight-shot-1-of-1-12.jpg', 'views/images/calendar2.jpg', 'views/images/DSC01443.jpg', 1, 'published', NULL),
(283, 20, 'DIY Decorative Plates', 'With lockdown in full swing, I thought I&#39;d take the time to get to work on a DIY plate wall project that Iâ€™ve had dancing around in my head for awhile involving thrift shop plates and blue paint. Inspired by Japanese ceramics, I used a combination of 3 â€œpaintingâ€ techniques (detailed below) to create a cohesive plate grouping that conjures the look of a curated vintage plate collection.&#13;&#10;&#13;&#10;Materials:&#13;&#10;&#13;&#10;10-12 white, round mix-and-match plates in various sizes. I picked up mine up at a local thrift store for a total of $7!&#13;&#10;Adhesive stencils + fine tip oil-based paint pen in blue&#13;&#10;Cardstock roughly 3â€³ x 10â€³ in size&#13;&#10;Adhesive silk screens + high gloss acrylic paint in indigo + foam block or pouncer&#13;&#10;10-12 gold plate hangers + nails for hanging', 'Use adhesive stencils and ceramic paint pens to create geometric designs on the plates. Simply apply the stencil to the desired location on the plate and press down firmly to adhere. Use the paint pen to fill in the stencilâ€™s design. Allow paint to set a few minutes before removing the stencil to avoid smudging.&#13;&#10;&#13;&#10;Linear patterns can be achieved with a strip of cardstock and a ceramic paint pen. Use the cardstock as a guide to create clean, straight lines radiating out from the center.&#13;&#10;&#13;&#10;Install on the Wall. After adorning the plates to your heartâ€™s desire, allow them to dry completely, and hang on the wall. Clip a plate hanger to each, and arrange them on the floor first to sort out the arrangement before transferring onto the wall. Space the plates roughly 2-3â€³ apart in an asymmetric cluster. The paint will air cure over 21 days becoming semi-permanent and wipeable. Plates are for decorative purposes only.', '2020-02-13 11:41:00', 'DECORATE', 'views/images/Geometric-Pattern-Technique.jpg', 'views/images/IMG_0839.jpg', 'views/images/plate-wall-diy-francois-et-moi2.png', 1, 'published', NULL),
(284, 20, 'DIY Shelves', 'If you are looking for more wall storage options for your bathroom, you are not alone! We are always on the hunt for simple, stylish, and affordable shelving. Today we are delighted to show you just how simple it is to make a hanging wall shelf. You could even make this a multiple shelf DIY as well. We love the look of natural cotton cording (macrame cord) and natural wood. It&#39;s timeless, while giving a look of Scandinavian design as well.&#13;&#10;&#13;&#10;Adding some fresh greenery, candles, and pretty beauty products to this hanging shelf will elevate the look of the bathroom ... and give you more storage options, too!&#13;&#10;&#13;&#10;You will only need some basic materials for this project, so let&#39;s get started.', 'Step 1&#13;&#10;Trim wood to appropriate size. The shelf featured here is 5.5 inches x 17 inches. Sand edges. Drill holes using appropriate size drill bit.&#13;&#10;&#13;&#10;Step 2&#13;&#10;Lightly sand drilled holes.&#13;&#10;&#13;&#10;Step 3&#13;&#10;Cut two pieces of cording, 3 to 4 feet. Thread one piece up through the holes on the left side, and then the other cord through the holes on the right, pulling the cording up from the bottom.&#13;&#10;&#13;&#10;Step 4&#13;&#10;Pull the left and right sides of the cording to meet evenly at the top. Loop the four pieces of cording through the metal ring.', '2020-02-22 11:44:18', 'CREATE', 'views/images/shelves_3.jpg', 'views/images/shelves_4.jpg', 'views/images/shelves_1.jpg', 1, 'published', NULL),
(285, 20, 'DIY Scented Candles', 'Candles are something I like to keep around the house no matter the season for their scent, ambiance and air-purifying properties. My love for them runs so deep that Iâ€™ve even learned how to make them! And over the years, Iâ€™ve made ALOT of candles. I find the process satisfying and fun, so here are my 5 most popular candle DIY projects. Coincidentally, thereâ€™s a project for every season!', '1. Essential Oil Holiday Candle with Printable Label&#13;&#10;Thereâ€™s something about the clean, yet still festive scent of winter balsam trees that Iâ€™ve been craving as the weather turns cold. I kept meaning to pick up a winter balsam essential oil candle (which of course I spaced), so finally I decided just to make one. A no-brainer of course!&#13;&#10;&#13;&#10;The candleâ€™s scent is mostly pine needle with orange added for sweetness and Wyndmereâ€™s Forest Retreat Blend added to give depth and complexity. When picking out your essential oils, make sure to use pure essential oils and not essential oils in a carrier oil. Theyâ€™re a bit more expensive, but the scent is much more potent and just all around a better quality. Iâ€™m using Wyndmere here, but Whole Foods also has a great organic blend too. I love the scent I ended up with, and have been burning it like crazy lately!&#13;&#10;&#13;&#10;I decided to go with soy wax with this one  because A. the wax is white which I wanted for this candle, and B. itâ€™s way easier to clean up in your kitchen than beeswax. Seriously. Way. Easier. If natural beeswax is your jam, check out the beeswax tea lights tutorial further down in this post.&#13;&#10;&#13;&#10;I made this one for us, but of course these candles would make great gifts too!', '2020-04-17 10:46:58', 'DECORATE', 'views/images/affix-wick.jpg', 'views/images/pour-candle.jpg', 'views/images/soy-candle-diy7.jpg', 1, 'published', NULL),
(286, 20, 'Circular Shelves', 'Round shelving is all over our Pinterest feeds, but you probably wouldn&#39;t consider it as a potential DIY project â€” because wood isn&#39;t the easiest to bend, right? However, we&#39;ve come up with the perfect solution for making a circular frame using wooden hoops that gives a nod to minimal Scandinavian design, without breaking the bank. If you&#39;re looking for a stylish shelving project that requires very little woodwork skill, this trendy DIY may be just the ticket.', 'Step 1&#13;&#10;Unscrew the embroidery hoop frame and remove the inner ring. (Repeat on the remaining embroidery hoops.)&#13;&#10;&#13;&#10;Step 2&#13;&#10;Run wood glue around the frame of one of the inner hoops.&#13;&#10;&#13;&#10;Step 3&#13;&#10;Take a second inner hoop and press firmly onto the glue to stick them together and create a double hoop.&#13;&#10;&#13;&#10;Step 4&#13;&#10;Use hand clamps to hold the rings together as the glue dries. Repeat Step 2 and Step 3 with the remaining hoops (so you&#39;ll have three double hoops in total.)', '2020-02-28 11:51:44', 'Choose a category', 'views/images/e32d4c8535ef4baea1618598971d609f.jpg', 'views/images/36202f5baac04f42833c2241de303364.jpg', 'views/images/5f6be6ef5337497eb5e8e3096aa69f30.jpg', 1, 'published', NULL),
(287, 20, 'Revamp your stairs', 'Here&#39;s a clever way to add color and pattern to your home: &#34;decorate&#34; your stairs. Yes, stairs. In a few simple and affordable steps, you can add a pop of personality with removable wallpaper.&#13;&#10;&#13;&#10;To get a faux tile look, removable wallpaper is a smart (and budget-friendly) solution. And while you can certainly buy patterned peel-and-stick stair risers that are precut, for this tutorial we found a way to make it less expensive and pretty darn easy. This DIY will set you back around Â£30 â€” that&#39;s it!! Let&#39;s get started ...', 'Step 1: Measure the stair risers.&#13;&#10;Measure and check each riser (they should be the same size, but you will want to double check). The risers in this tutorial were 39.5 inches by 4.85 inches.&#13;&#10;&#13;&#10;Step 2: Measure out dimensions onto the removable wallpaper.&#13;&#10;First we measured the front of wallpaper to check that the lines were straight on the front pattern.&#13;&#10;&#13;&#10;Step 3: Cut the wallpaper with an X-ACTO knife.&#13;&#10;When cutting the wallpaper, be sure to cut on top of a piece of cardboard, foam core, or a self-healing mat.&#13;&#10;&#13;&#10;Step 4: Peel and stick.&#13;&#10;Now it is time to adhere the peel-and-stick wallpaper pieces to the stair riser. Peel off the backing and line up the piece on corner of riser. The removable wallpaper is forgiving, so if you need to straighten the paper, it is all good!', '2020-02-26 12:48:28', 'RENOVATE', 'views/images/stairs_2.jpg', 'views/images/stairs_3.jpg', 'views/images/stairs_1.jpg', 1, 'published', NULL),
(288, 20, 'DIY Floating Media Cabinet', 'With us spending more time in the house (thanks lockdown!) We knew we needed to address the toy storage (or lack their of!) in our living room. Weâ€™re a one-hangout-space-household, so when we hang out as a family itâ€™s in this room. This room is also the first space you walk into from the front foyer, so this area needs places to hide all our crap, I meanâ€¦stuff when people come over. Needless to say, this old train cart, though ruggedly handsome, just wasnâ€™t cutting it. Iâ€™m a little embarrassed showing you what this used to look like, but here it is!', 'We centered the cabinet between the archway and the corner and wall-mounted it using the recommended wall brackets from Ikea.  Itâ€™s installed 6.25â€³ above the floor at a height of 31.5â€³ (33â€³ once the top is installed). To determine the height, I taped out the TV placement with washi tape, and looked at height specifications for other similar media consoles for sale around the web. Also, being that itâ€™s right next to the front door and coat closet, it also functions as the key drop + mail catch, this was another consideration for height placement.&#13;&#10;&#13;&#10;In terms of installing the cabinet, we just followed the enclosed instructions. Though itâ€™s a two person operation, it wasnâ€™t necessarily difficult. The only tricky part was getting the drawers to catch on the slide mechanisms.&#13;&#10;&#13;&#10;We left a 9â€³ leap between the cabinet and the bottom of the TV. Iâ€™d like to tell you I went with the recommended Industry Standard for the height of the TV, but honestly, this was the height that just felt right for TV watching, and looked proportionally â€œrightâ€ on the wall too.', '2020-04-17 11:55:02', 'RENOVATE', 'views/images/media-top-1-of-1-4.jpg', 'views/images/media-top-1-of-1-2.jpg', 'views/images/console-1-of-1-15.jpg', 1, 'published', NULL),
(289, 20, 'DIY Draw dividers', 'I love to keep organised, but sometimes it can be hard to find something that is both practical yet still looks good! After searching endlessly for draw dividers that fit without breaking the bank, I was almost giving up when I realised -  why not make my own!&#13;&#10;&#13;&#10;This is a quick and easy DIY hack to bring some order back into your life.&#13;&#10;&#13;&#10;Start by measuring the internal dimensions of the drawer you are organising (width, depth, and height). Be sure to get exact measurements here; you want the organisers to fit snug so they stand up straight and donâ€™t move as you open and close the drawer.&#13;&#10;&#13;&#10;The last step is to assemble and insert the drawer divider. Find the center of each rectangle and cut a slit half-way into the board. Then, insert one rectangle into the other and adjust your cuts (as necessary) so the two rectangles sit at the same height.', '', '2020-02-09 13:00:50', 'CREATE', 'views/images/1a2e11a166a54f80804a286b72be1af3.jpg', 'views/images/aebd5b42ff904b4293613f0e4b2cbe4d.jpg', 'views/images/d2b2007973a2404785ce8d38dc4ec774.jpg', 2, 'published', NULL),
(290, 20, 'DIY Sofa Table', 'After having moved into a newer, yet smaller space I was looking for ways to be smarter about the layout. It got me thinking, do you have to have two freestanding end tables with a table lamp on each flanking your sofa?&#13;&#10;&#13;&#10;No! Of course not - with this simple hack you can have your cake (or tea, or biscuits - I wont judge!) without cramming your room full of side tables. What&#39;s better, is you can decorate it how you like!&#13;&#10;&#13;&#10;Step 1. Use circular saw to cut your board into three pieces (Or if you donâ€™t have a saw, ask the hardware store to cut your board for you). The width and height of your sofaâ€™s arm will dictate the size of the cuts. Our sofa arms are 8â€³ wide and 24â€³ tall, so the board sizes I used were:&#13;&#10;&#13;&#10;Top: 9.5â€³ board with 45 degree angle cuts on each end&#13;&#10;Side: 8â€³ board with a 45 degree cut on one end only&#13;&#10;Side: 4â€³ board with a 45 degree cut on one end only&#13;&#10;&#13;&#10;Step 2. Sand all faces of the boards until smooth.&#13;&#10;&#13;&#10;Step 3. Use Gorilla Glue to attach the angled edge on the 8â€³ board to one of the angle edges on the 9.5â€³ board. Then attach the angled edge on the 4â€³ board to the other angled edge on the 9.5â€³ board. Allow glue to dry overnight.&#13;&#10;&#13;&#10;Note: Gorilla Glue expands as it dries, so make sure to wipe off any excess before you leave to dry.', '', '2020-01-17 13:12:10', 'CREATE', 'views/images/IMG_79031.jpg', 'views/images/IMG_8333.jpg', 'views/images/DRINK-PERCH-1-of-1.jpg', 2, 'published', NULL),
(291, 17, 'Flip Clock Style Calendar for Your Desk', 'Oh hey Friday! So glad you made it! Today I’m talking about a retro favorite of mine: old school flip clocks. You know, like the one on the movie Groundhog Day. They’re just so dapper, and in a weird way, modern? I recently installed the Fliqlo Flip Clock Screensaver on my laptop and decided to go all out and create a flip clock style calendar for my desk too. Because it’s a new year, so why not.&#13<br/>&#13<br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&#13<br/>', '', '2020-04-19 15:32:59', 'CREATE', 'views/images/dstraight-shot-1-of-1-12.jpg', 'views/images/DSC01443.jpg', 'views/images/calendar2.jpg', 2, 'published', NULL),
(292, 17, 'DIY Candles: The Ultimate Guide', 'Candles are something I like to keep around the house no matter the season for their scent, ambiance and air-purifying properties. My love for them runs so deep that I’ve even learned how to make them! And over the years, I’ve made ALOT of candles. I find the process satisfying and fun, so here are my 5 most popular candle DIY projects. Coincidentally, there’s a project for every season!&#13<br/>&#13<br/>1. Essential Oil Holiday Candle with Printable Label&#13<br/>There’s something about the clean, yet still festive scent of winter balsam trees that I’ve been craving as the weather turns cold. I kept meaning to pick up a winter balsam essential oil candle (which of course I spaced), so finally I decided just to make one. A no-brainer of course!&#13<br/>&#13<br/>The candle’s scent is mostly pine needle with orange added for sweetness and Wyndmere’s Forest Retreat Blend added to give depth and complexity. When picking out your essential oils, make sure to use pure essential oils and not essential oils in a carrier oil. They’re a bit more expensive, but the scent is much more potent and just all around a better quality. I’m using Wyndmere here, but Whole Foods also has a great organic blend too. I love the scent I ended up with, and have been burning it like crazy lately!&#13<br/>&#13<br/>I decided to go with soy wax with this one  because A. the wax is white which I wanted for this candle, and B. it’s way easier to clean up in your kitchen than beeswax. Seriously. Way. Easier. If natural beeswax is your jam, check out the beeswax tea lights tutorial further down in this post.&#13<br/>&#13<br/>I made this one for us, but of course these candles would make great gifts too!&#13<br/>&#13<br/>Materials:&#13<br/>Glass Tumbler. Mine is from a thrift shop.&#13<br/>3 Cups of soy wax flakes or double the volume of your candle vessel&#13<br/>Lead free wicks&#13<br/>Wood dowel&#13<br/>Pine Needle, Orange and Forest Retreat Essential Oils&#13<br/>Old sauce pan&#13<br/>Larger pan for double boiler&#13<br/>&#13<br/>1. Bring 2 inches of water in a saucepan to a simmer. Place soy wax flakes in a slightly smaller saucepan or glass bowl and place over the simmering water in the larger saucepan, creating a double boiler. Stir the flakes every few minutes until completely melted. Once melted, remove the wax from the heat, dip the wick’s metal clip in the wax and press to the bottom center of the glass candle vessel with a wood dowel. Once the wick is affixed, wrap the top portion of the wick around the wood dowel and rest the wood dowel on the opening of the vessel.&#13<br/>&#13<br/>2. By this time, the wax should have had a few minutes to cool down, and is ready to accept the essential oils. If essential oils are added too soon, they’ll burn.&#13<br/>&#13<br/>Add about 100 essential oil drops in total (to make them super potent and delicious!) and give the wax a stir. My breakdown between the 3 oils was as follows:&#13<br/>&#13<br/>65 Pine Needle Drops&#13<br/>20-25 Orange Drops&#13<br/>10-15 Forest Retreat Drops depending on your preference&#13<br/>&#13<br/>Pour the scented wax into the vessel and allow to set for 24 hours in a relatively warm spot away from commotion to avoid cracking in the wax. Once the wax is set, trim to 1/4″ with scissors, and add the printable label.', '', '2020-04-19 15:36:07', 'CREATE', 'views/images/affix-wick.jpg', 'views/images/pour-candle.jpg', 'views/images/soy-candle-diy7.jpg', 2, 'published', NULL),
(293, 17, 'Modern DIY Circle Shelf Using Embroidery Hoops', 'Round shelving is all over our Pinterest feeds, but you probably wouldn&#39;t consider it as a potential DIY project — because wood isn&#39;t the easiest to bend, right? However, we&#39;ve come up with the perfect solution for making a circular frame using wooden hoops that gives a nod to minimal Scandinavian design, without breaking the bank. If you&#39;re looking for a stylish shelving project that requires very little woodwork skill, this trendy DIY may be just the ticket.&#13<br/>&#13<br/>THINGS YOU&#39;LL NEED&#13<br/>12-inch embroidery hoop, (6)&#13<br/>Hand clamps&#13<br/>Balsa wood sheets&#13<br/>Wood glue&#13<br/>Craft knife&#13<br/>Tape measure&#13<br/>&#13<br/>Step 1&#13<br/>Unscrew the embroidery hoop frame and remove the inner ring. (Repeat on the remaining embroidery hoops.)&#13<br/>Step 2&#13<br/>Run wood glue around the frame of one of the inner hoops.&#13<br/>Step 3&#13<br/>Take a second inner hoop and press firmly onto the glue to stick them together and create a double hoop.&#13<br/>Step 4&#13<br/>Use hand clamps to hold the rings together as the glue dries. Repeat Step 2 and Step 3 with the remaining hoops (so you&#39;ll have three double hoops in total.)&#13<br/>Step 5&#13<br/>Now, you&#39;ll glue all the double hoops together.&#13<br/>Run wood glue along one edge of a double hoop.', 'Step 6&#13<br/>Then glue to another set of hoops to create a stack of four hoops.&#13<br/>Once again, hold the hoop in place with hand clamps while the wood glue sets. (You can also use large binder clips or string to hold the hoops together while they dry.)&#13<br/>Step 7&#13<br/>Glue together the last set of hoops to finish the circle frame. You&#39;ll have six hoops joined together in total.&#13<br/>Step 8&#13<br/>Measure the depth of the finished frame — ours was 2 1/2 inches deep.&#13<br/>Step 9&#13<br/>Next, measure the width roughly 1/3 inch from the top and bottom to determine the shelf width. (Our hoops are 12-inch wide, so this measurement was about 10 1/2 inches.)&#13<br/>Step 10&#13<br/>Use the measurements from Step 8 and Step 9 to cut out your shelf dimensions from balsa wood. Balsa wood is a softwood, so it can be easily cut with a craft knife. Our shelves measured 2 1/2 inches deep and 10 1/2 inches wide, but this varies if you&#39;re using a larger or smaller embroidery hoop for your frame.', '2020-04-19 15:41:05', 'CREATE', 'views/images/36202f5baac04f42833c2241de303364.jpg', 'views/images/016346028cec424697f86b66127d4b0e.jpg', 'views/images/5f6be6ef5337497eb5e8e3096aa69f30.jpg', 1, 'published', NULL),
(294, 17, 'Transform a Humble IKEA Dresser Into a Gorgeous Bedroom Piece', 'As Pinterest, Instagram, and Facebook can attest, we all love us some IKEA furniture. The only issue is that since many of us own a piece (or two or three ... ), it can tend to leave our living spaces looking a tad unoriginal. Enter the IKEA hack: We jumped head-first into the maker movement to transform this humble Tarva dresser into a stunning chest of drawers that looks as if the wood has been intricately carved (a look that happens to be trending hard right now). Vintage oyster-hued chalk paint paired with gilded touches in the legs and hardware elevate the piece into a design superstar.&#13<br/>', 'Step 1&#13<br/>Use a screwdriver to remove the knobs from each drawer. They&#39;re a dead giveaway of an IKEA dresser, no?&#13<br/>Step 2&#13<br/>Fill in the holes from the knobs with wood filler and smooth it out with a putty knife. Once dry, sand down the wood filler until it&#39;s smooth and then wipe it clean.&#13<br/>Step 3&#13<br/>Lay the dresser flat on the floor with the drawers facing up (definitely enlist someone to help you). Use a speed square to mark precise 45-degree angled lines spaced 1-¼ inches apart across the first top drawer. This will set the design for the rest of the drawers, so take your time getting the spacing and angles right.&#13<br/>Step 4&#13<br/>Line up wood dowels diagonally on the 45-degree lines you drew on the first top drawer. Place 1 ¼-inch wide wood shims to act as spacers between each dowel to ensure the dowels stay spaced evenly across the drawer. Use a carpenter&#39;s square or ruler to mark where to cut off the excess wood on each dowel along the top, bottom, and sides of the drawer.&#13<br/>Step 5&#13<br/>Position each dowel at a 45-degree angle in the miter box and cut off the excess wood that you marked on the dowels. Yes, we are old school and hand-sawed each dowel, but if you have a power miter saw to do the job, we totally bow.', '2020-04-19 15:45:38', 'RENOVATE', 'views/images/1f86b8f22a63460a8d53c4365cfaec2e.jpg', 'views/images/aebd5b42ff904b4293613f0e4b2cbe4d.jpg', 'views/images/d2b2007973a2404785ce8d38dc4ec774.jpg', 1, 'published', NULL),
(295, 17, 'DIY Mud Cloth Inspired Easter Eggs', 'I’ve fallen for African mud cloth. The patterns are mesmerizing, in their simplicity and shape. I was dreaming up some ideas for black and white Easter eggs this year and came up with DIY mud cloth inspired Easter eggs. Honestly, you don’t need to be an artist, just a steady hand helps with this easy Easter project. I used good ole sharpies to get these patterns. These eggs will look so nice as Easter decor.&#13<br/>&#13<br/>Read more for the full tutorial.&#13<br/>&#13<br/>Supplies: Chalkboard and White Decorative Eggs / Sharpie White Paint Pen or white acrylic paint and brush / Black Sharpie Marker /&#13<br/>&#13<br/>Instructions:&#13<br/>&#13<br/>1. First, I spent a little time looking at images online of mud cloth. I searched mud cloth on Pinterest and Google Image Search for some inspiration. Then I practiced some patterns on paper before I dove in.&#13<br/>2. Get drawing! I used white acrylic paint on my chalkboard eggs, but in retrospect, I would prefer to use a paint pen the next time. You get cleaner lines with a marker. For the white eggs, I used a standard black Sharpie marker and it worked like a charm.&#13<br/>', '', '2020-04-19 15:47:59', 'DECORATE', 'views/images/diy-easter-eggs-3.jpg', 'views/images/diy-easter-eggs-4.jpg', 'views/images/diy-easter-eggs.jpg', 2, 'published', NULL),
(296, 17, 'DIY Firepit', 'Supplies: Chalkboard and White Decorative Eggs / Sharpie White Paint Pen or white acrylic paint and brush / Black Sharpie Marker /&#13<br/>&#13<br/>Instructions:&#13<br/>&#13<br/>1. First, I spent a little time looking at images online of mud cloth. I searched mud cloth on Pinterest and Google Image Search for some inspiration. Then I practiced some patterns on paper before I dove in.&#13<br/>&#13<br/>2. Get drawing! I used white acrylic paint on my chalkboard eggs, but in retrospect, I would prefer to use a paint pen the next time. You get cleaner lines with a marker. For the white eggs, I used a standard black Sharpie marker and it worked like a charm.', 'Supplies: Chalkboard and White Decorative Eggs / Sharpie White Paint Pen or white acrylic paint and brush / Black Sharpie Marker /&#13<br/>&#13<br/>Instructions:&#13<br/>&#13<br/>1. First, I spent a little time looking at images online of mud cloth. I searched mud cloth on Pinterest and Google Image Search for some inspiration. Then I practiced some patterns on paper before I dove in.&#13<br/>&#13<br/>2. Get drawing! I used white acrylic paint on my chalkboard eggs, but in retrospect, I would prefer to use a paint pen the next time. You get cleaner lines with a marker. For the white eggs, I used a standard black Sharpie marker and it worked like a charm.', '2020-04-19 15:50:10', 'CREATE', 'views/images/1.jpeg', 'views/images/3.jpg', 'views/images/Fire-pit-seating-area.jpg', 1, 'published', NULL),
(297, 17, 'DIY house shelving', 'I&#39;m always looking for bathroom storage, my various lotions and potions seem to keep breeding and my cupboards are now at capacity! I decided to make some simple shelving to organise and display some of my favourite products. I think this easy house shaped shelving is cute and practical to boot.. who can argue with that? &#13<br/>you&#39;ll need:&#13<br/>&#13<br/>wood&#13<br/>saw or mitre saw&#13<br/>tape measure&#13<br/>hammer&#13<br/>small nails&#13<br/>wood glue&#13<br/>paint&#13<br/>&#13<br/>start off by measuring out the lengths you want, mark with a pencil and saw. I cut five 30cm pieces for my shelf. &#13<br/>Next we want to find the rough angle for the roof joint. take two of your wood lengths and point them together to make the roof shape (as shown above.) hold a piece of wood over where they meet and draw two lines down each side- this is the angle you cut for a flush fit.&#13<br/>&#13<br/>if you&#39;re not very experienced at cutting grab a handy helper. I find bribery with cakes the easiest way to snag an assistant..now the fun part- wood glue! glue the 5 pieces together and secure with some small nails/tacks at the corners.', 'once dry you can paint or stain the wood. my bathroom is top to bottom white so I kept the theme going and gave mine a lick of basic emulsion. follow with a quick layer of varnish if needed, leave to dry and your shelf is finished.. hurrah!&#13<br/>&#13<br/>As you can see my Sanctuary toiletries fit in nicely and are easy to reach when I&#39;m in need of a pampering session.&#13<br/>the only issue with leaving them out on display ...james has been stealing them! &#13<br/>I&#39;m really pleased with my storage display! you could add an extra shelf inside (so you can fit in even more goodies) but I think I&#39;ll stick with the more minimal look for now..&#13<br/>&#13<br/>What do you think.. would you be tempted to make one too? you can find more DIY and upcycling ideas over on Sanctuary Spa here!&#13<br/>', '2020-04-19 15:52:52', 'CREATE', 'views/images/DIY BATHROOM SHELVES.jpg', 'views/images/DIY-wood-house-shelf-decor-v1.jpg', 'views/images/diy-wood-house-shelf-v2.jpg', 1, 'published', NULL),
(299, 17, 'DIY Modern Key Holder', 'As owners of a Duplex home, it’s safe to say we have a healthy number of keys to manage. Not only are we looking after our own home and car keys but the duplex’s exterior door key, our tenant’s spare keys, etc. Without a designated drop spot for them when you walk in the front door, our keys often end up in scattered, hard to find places throughout the home. And it makes for a frantic struggle when you need to dash out the door in a hurry.  So when Dremel challenged me to share a small space solution as part of their month-long August Maker Days (more on this in a bit!), it was a no-brainer which area to tackle. Key Storage in the Entry.&#13<br/>&#13<br/>Because our entry is a small space, I knew the key holder had to be wall mounted, and I found inspiration in this only-sold-in-Danish-stores key holder. Normally making a wall-mounted key holder with key chain slots &#38; recessed keyhole hangers would require 3 big-daddy tools: belt sander, mitre saw and router, but instead I’m simplifying things and using the Dremel 8050 Micro, a handheld rotary tool that satisfies all 3 tool needs in one. (It’s kind of amazing!)&#13<br/>&#13<br/>If you too need to organize your home’s key situation, check out the modern key holder solution I made for my entry. No more frantic key searching for this gal!&#13<br/>&#13<br/>Materials:&#13<br/>&#13<br/>Dremel 8050 Micro&#13<br/>1″ x 2″ Piece of wood cut to 5-1/2″ L&#13<br/>2 Small keyhole hangers&#13<br/>Screwdriver&#13<br/>1.5 mm Round leather cording&#13<br/>4 Gold jump rings or split rings&#13<br/>4 Caged necklace pendants (I picked these up at Michael’s, and it looks like they’re only available in stores.)&#13<br/>Wire cutter&#13<br/>Needle Nose Pliers&#13<br/>Scissors&#13<br/>Pencil&#13<br/>Ruler&#13<br/>Note: While you’re gathering materials, make sure your Micro is on the charger (or already charged). The charge time is about 3:45 minutes.', '', '2020-04-19 15:55:45', 'RENOVATE', 'views/images/key-holder-1-of-1-11.jpg', 'views/images/key-holder-1-of-1-18.jpg', 'views/images/key-holder-1-of-1.jpg', 2, 'published', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `blog_id` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`blog_id`, `tag`) VALUES
(291, '#crafts'),
(291, '#wood'),
(292, '#crafts'),
(292, '#home'),
(293, '#bedroom'),
(293, '#buildit'),
(293, '#crafts'),
(293, '#home'),
(293, '#painting'),
(293, '#wood'),
(294, '#bedroom'),
(294, '#crafts'),
(294, '#home'),
(294, '#upcycle'),
(294, '#wood'),
(295, '#crafts'),
(295, '#home'),
(295, '#painting'),
(295, '#upcycle'),
(295, '#wood'),
(296, '#buildit'),
(296, '#garden'),
(296, '#recycle'),
(296, '#wood'),
(297, '#bedroom'),
(297, '#buildit'),
(297, '#crafts'),
(297, '#home'),
(297, '#upcycle'),
(297, '#wood'),
(299, '#crafts'),
(299, '#home'),
(299, '#recycle'),
(299, '#upcycle');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `parent_comment_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `blog_id`, `user_id`, `comment`, `comment_date`, `parent_comment_id`) VALUES
(362, 297, 17, 'This is amazing i can&#39;t wait to try it!!', '2020-04-19 15:57:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `fav_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fave_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag`) VALUES
('#bedroom'),
('#buildit'),
('#crafts'),
('#garden'),
('#home'),
('#kitchen'),
('#painting'),
('#recycle'),
('#upcycle'),
('#wood');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_fn` varchar(100) NOT NULL,
  `user_ln` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `user_type` enum('Member','Blogger','Moderator') NOT NULL DEFAULT 'Member',
  `security_1` varchar(255) DEFAULT 'Who is your favourite Ryan',
  `answer_1` varchar(255) NOT NULL,
  `signature` varchar(100) DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `bio` text,
  `twitter_url` varchar(200) DEFAULT NULL,
  `insta_url` varchar(100) DEFAULT NULL,
  `facebook_url` varchar(100) DEFAULT NULL,
  `date_joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Locked` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_fn`, `user_ln`, `email`, `dob`, `user_type`, `security_1`, `answer_1`, `signature`, `profile_pic`, `bio`, `twitter_url`, `insta_url`, `facebook_url`, `date_joined`, `Locked`) VALUES
(1, 'sweet_tee', '', 'Tese', 'Ogbeifun', 'tese@hotmail.com', '1997-09-04', 'Blogger', 'Who is your favourite Ryan', 'reynolds', 'sweet_tee', NULL, 'Hi, i\'m sweet_tee or Tese, i\'m a digital designer by day and a DIY-er by night!', 'twitter.com', 'instagram.com', 'facebook.com', '2020-03-31 13:59:24', 'N'),
(2, NULL, '', 'Amrita', 'Bains', 'amrita@gmail.co.uk', '1990-05-25', 'Moderator', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, 'twitter.com', 'instagram.com', 'facebook.com', '2020-03-31 13:59:24', 'N'),
(3, 'saucy_steph', '', 'Stephanie', 'Foster', 'steph@gmail.com', '1989-02-12', 'Member', 'Who is your favourite Ryan', 'gallagher', NULL, NULL, NULL, 'twitter.com', 'instagram.com', 'facebook.com', '2020-03-31 13:59:24', 'N'),
(11, 'tese', '$2y$10$mZtCfWGcWIWCVOPl3cSJWubg2zDvXW0pP7qlKDBPSAKmJKc5Xfmsy', 'tese', 'tese', 'tese.og@hotmail.com', '2020-04-18', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 01:31:13', 'N'),
(12, 'tese', '$2y$10$DTT8YPNfsNEcGvuh24.Ezua6KwL.N0eMTbUyvlHRMNN0P1sIfkpSC', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2015-06-04', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 11:50:35', 'N'),
(13, 'hello', '$2y$10$jFdK8fOuv/l/dcs6tOjnV.lKZNRtdJgWJPLLyxQhxzvkczfTX00ge', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2019-07-11', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 11:59:10', 'N'),
(14, 'teseog', '$2y$10$rBjfCwevk34TQe3iSXyoa.qS12Zll/RsOqmYMltLRYE2.nSHQiUvm', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2014-02-05', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 19:28:57', 'N'),
(15, 'test', '$2y$10$OCnfF0dF76CbK3Fn1D9/e.3MB.JOmQPCpA1ARiPDQq8mlDh2ZmMZu', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2003-06-04', 'Member', 'Who is your favourite Ryan', '$2y$10$t2G1SsH529YL.peoTuqjs.6wIrcshim7.kNuykq8YxbsKJBbtsIW2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-11 14:20:49', 'N'),
(16, 'test', '$2y$10$00YszUVxfj.xAZ8OJSHDR./LyDMYTqPnUj9W4/I6g2Dm0uVqMZwSq', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2008-02-07', 'Member', 'Who is your favourite Ryan', '$2y$10$xKIMDm6yFMp7ljwuaILtU.fOoLPhK1eQ7hiooKKIjnpam22reIIHi', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-11 14:21:15', 'N'),
(17, 'sweetee', '$2y$10$PJUsRzFUJ.cEBgupNkZJBO/bp7SdEe.p0qEG5CrBNmawZWPrWCbii', 'Tese', 'Ogbeifun', 'tese.og@hotmail.com', '1997-09-04', 'Blogger', 'Who is your favourite Ryan', '$2y$10$qZorYewVFNa6uzj5zlAUBOgxfiRbWh4ctKcyX91kwUz5k9nT78z92', NULL, 'views/images/5dde91cb79d7576693279df7.jpeg', 'My name is sweetie and I like sweets', 'twitter.com', 'instagram.com', 'facebook.com', '2020-04-11 16:38:24', 'N'),
(19, 'member', '$2y$10$gEhGkZ0DWt7tr7SiGrH/SeKmcbmnQ9iiIMZJJrmPMYrESZLjbb8zm', 'Mildred', 'Member', 'email1@gmail.com', '1991-03-22', 'Member', 'Who is your favourite Ryan', '$2y$10$GUjbh5Zbve3Sni29ZXEPBe0B5DYBic9o7fDBjcsBaLDrV5EuFZHna', NULL, 'views/images/profile_pics/', NULL, NULL, NULL, NULL, '2020-01-17 10:15:50', 'N'),
(20, 'blogger', '$2y$10$Ze8y.9j/0pCYUvRbUgJPB.rXdphwY3nyHV.4DHzEWGVPNALDvloNm', 'Boris', 'Blog', 'email2@gmail.com', '1988-01-11', 'Blogger', 'Who is your favourite Ryan', '$2y$10$L7hi7yD4savVdG9S8pS9tejyi7QKhxwCGrZT6u2aDYoQQEaiziITS', NULL, 'views/images/profile_pics/', NULL, NULL, NULL, NULL, '2020-01-17 10:16:23', 'N'),
(21, 'mod', '$2y$10$cOFyJf.IZWm7CqOCxTf6e.d7pSB9l6gLv5VrsYBhroHWqGekTTiqa', 'Minnie', 'Mod', 'email3@gmail.com', '1904-01-11', 'Moderator', 'Who is your favourite Ryan', '$2y$10$DArBSStuedb5j8XIf1N7c.7LSyQuXQTBWKDJzCin3c.c8H974J13q', NULL, 'views/images/profile_pics/', NULL, NULL, NULL, NULL, '2020-01-17 10:16:45', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`blog_id`,`tag`),
  ADD KEY `tag` (`tag`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`) USING BTREE,
  ADD KEY `comments_ibfk_1` (`blog_id`),
  ADD KEY `comments_ibfk_2` (`user_id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `favourites_ibfk_2` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=363;
--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD CONSTRAINT `blog_tags_ibfk_1` FOREIGN KEY (`tag`) REFERENCES `tags` (`tag`),
  ADD CONSTRAINT `blog_tags_ibfk_2` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_posts` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
