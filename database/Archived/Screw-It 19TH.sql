-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2020 at 05:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Screw-it`
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
  `body2` text DEFAULT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category` varchar(100) NOT NULL,
  `main_image` tinytext DEFAULT NULL,
  `second_image` tinytext DEFAULT NULL,
  `third_image` tinytext DEFAULT NULL,
  `layout` tinyint(4) NOT NULL,
  `published` varchar(100) NOT NULL DEFAULT 'published',
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`blog_id`, `user_id`, `title`, `body`, `body2`, `date_posted`, `category`, `main_image`, `second_image`, `third_image`, `layout`, `published`, `slug`) VALUES
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
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `parent_comment_id` int(11) DEFAULT 0
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
  `fave_date` timestamp NOT NULL DEFAULT current_timestamp()
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
  `bio` text DEFAULT NULL,
  `twitter_url` varchar(200) DEFAULT NULL,
  `insta_url` varchar(100) DEFAULT NULL,
  `facebook_url` varchar(100) DEFAULT NULL,
  `date_joined` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_fn`, `user_ln`, `email`, `dob`, `user_type`, `security_1`, `answer_1`, `signature`, `profile_pic`, `bio`, `twitter_url`, `insta_url`, `facebook_url`, `date_joined`) VALUES
(1, 'sweet_tee', '', 'Tese', 'Ogbeifun', 'tese@hotmail.com', '1997-09-04', 'Blogger', 'Who is your favourite Ryan', 'reynolds', 'sweet_tee', NULL, 'Hi, i\'m sweet_tee or Tese, i\'m a digital designer by day and a DIY-er by night!', 'twitter.com', 'instagram.com', 'facebook.com', '2020-03-31 13:59:24'),
(2, NULL, '', 'Amrita', 'Bains', 'amrita@gmail.co.uk', '1990-05-25', 'Moderator', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, 'twitter.com', 'instagram.com', 'facebook.com', '2020-03-31 13:59:24'),
(3, 'saucy_steph', '', 'Stephanie', 'Foster', 'steph@gmail.com', '1989-02-12', 'Member', 'Who is your favourite Ryan', 'gallagher', NULL, NULL, NULL, 'twitter.com', 'instagram.com', 'facebook.com', '2020-03-31 13:59:24'),
(11, 'tese', '$2y$10$mZtCfWGcWIWCVOPl3cSJWubg2zDvXW0pP7qlKDBPSAKmJKc5Xfmsy', 'tese', 'tese', 'tese.og@hotmail.com', '2020-04-18', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 01:31:13'),
(12, 'tese', '$2y$10$DTT8YPNfsNEcGvuh24.Ezua6KwL.N0eMTbUyvlHRMNN0P1sIfkpSC', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2015-06-04', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 11:50:35'),
(13, 'hello', '$2y$10$jFdK8fOuv/l/dcs6tOjnV.lKZNRtdJgWJPLLyxQhxzvkczfTX00ge', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2019-07-11', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 11:59:10'),
(14, 'teseog', '$2y$10$rBjfCwevk34TQe3iSXyoa.qS12Zll/RsOqmYMltLRYE2.nSHQiUvm', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2014-02-05', 'Member', 'Who is your favourite Ryan', 'gosling', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-09 19:28:57'),
(15, 'test', '$2y$10$OCnfF0dF76CbK3Fn1D9/e.3MB.JOmQPCpA1ARiPDQq8mlDh2ZmMZu', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2003-06-04', 'Member', 'Who is your favourite Ryan', '$2y$10$t2G1SsH529YL.peoTuqjs.6wIrcshim7.kNuykq8YxbsKJBbtsIW2', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-11 14:20:49'),
(16, 'test', '$2y$10$00YszUVxfj.xAZ8OJSHDR./LyDMYTqPnUj9W4/I6g2Dm0uVqMZwSq', 'Omotese', 'Omotese', 'tese.og@hotmail.com', '2008-02-07', 'Member', 'Who is your favourite Ryan', '$2y$10$xKIMDm6yFMp7ljwuaILtU.fOoLPhK1eQ7hiooKKIjnpam22reIIHi', NULL, NULL, NULL, NULL, NULL, NULL, '2020-04-11 14:21:15'),
(17, 'sweetee', '$2y$10$PJUsRzFUJ.cEBgupNkZJBO/bp7SdEe.p0qEG5CrBNmawZWPrWCbii', 'Tese', 'Ogbeifun', 'tese.og@hotmail.com', '1997-09-04', 'Blogger', 'Who is your favourite Ryan', '$2y$10$qZorYewVFNa6uzj5zlAUBOgxfiRbWh4ctKcyX91kwUz5k9nT78z92', NULL, 'views/images/5dde91cb79d7576693279df7.jpeg', 'My name is sweetie and I like sweets', 'twitter.com', 'instagram.com', 'facebook.com', '2020-04-11 16:38:24'),
(19, 'member', '$2y$10$gEhGkZ0DWt7tr7SiGrH/SeKmcbmnQ9iiIMZJJrmPMYrESZLjbb8zm', 'Mandy', 'Member', 'email1@gmail.com', '1991-03-22', 'Member', 'Who is your favourite Ryan', '$2y$10$GUjbh5Zbve3Sni29ZXEPBe0B5DYBic9o7fDBjcsBaLDrV5EuFZHna', NULL, 'views/images/profile_pics/', NULL, NULL, NULL, NULL, '2020-01-17 10:15:50'),
(20, 'blogger', '$2y$10$Ze8y.9j/0pCYUvRbUgJPB.rXdphwY3nyHV.4DHzEWGVPNALDvloNm', 'Boris', 'Blog', 'email2@gmail.com', '1988-01-11', 'Blogger', 'Who is your favourite Ryan', '$2y$10$L7hi7yD4savVdG9S8pS9tejyi7QKhxwCGrZT6u2aDYoQQEaiziITS', NULL, 'views/images/profile_pics/', NULL, NULL, NULL, NULL, '2020-01-17 10:16:23'),
(21, 'mod', '$2y$10$cOFyJf.IZWm7CqOCxTf6e.d7pSB9l6gLv5VrsYBhroHWqGekTTiqa', 'Minnie', 'Mod', 'email3@gmail.com', '1904-01-11', 'Moderator', 'Who is your favourite Ryan', '$2y$10$DArBSStuedb5j8XIf1N7c.7LSyQuXQTBWKDJzCin3c.c8H974J13q', NULL, 'views/images/profile_pics/', NULL, NULL, NULL, NULL, '2020-01-17 10:16:45');

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
