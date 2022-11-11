-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 08:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `event_city` varchar(200) NOT NULL,
  `total_paid` decimal(10,0) NOT NULL,
  `event_image` text NOT NULL,
  `event_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `username`, `event_name`, `event_city`, `total_paid`, `event_image`, `event_time`) VALUES
(7, 'ritwickoo1', 'Card title', 'delhi', '1400', 'images/otw.jpg', '18:43:26'),
(8, 'ritwickoo1', 'Card title', 'delhi', '1050', 'images/otw.jpg', '18:43:26'),
(9, 'ritwickoo1', 'Card title', 'delhi', '2100', 'images/otw.jpg', '18:43:26'),
(10, 'ritwickoo1', 'Card title', 'delhi', '1750', 'images/otw.jpg', '18:43:26'),
(11, 'ritwickoo1', 'Card title', 'delhi', '1750', 'images/otw.jpg', '18:43:26'),
(12, 'ritwickoo1', 'Card title', 'delhi', '2100', 'images/otw.jpg', '18:43:26'),
(13, 'ritwickoo1', 'Card title', 'delhi', '3500', 'images/otw.jpg', '18:43:26'),
(14, 'ritwickoo1', 'Card title', 'delhi', '1050', 'images/otw.jpg', '18:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'Music'),
(2, 'Sports'),
(3, 'Theatre'),
(4, 'Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`) VALUES
(1, 'Mumbai'),
(2, 'Delhi'),
(3, 'Bangalore'),
(4, 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Show_id` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Image` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Show_id`, `Title`, `Description`, `Image`, `city`, `category`) VALUES
(1, 'Outside The Wire', 'In the near future, a drone pilot sent into a war zone finds himself paired with a top-secret android officer on a mission to stop a nuclear attack.', 'images/otw.jpg', 'Delhi', 'Music'),
(2, 'Cherry', '\'Cherry\' follows the wild journey of a disenfranchised young man from Ohio who meets, Cherry drifts from college dropout to army medic in Iraq - anchored only  by his true love, Emily. But after returning from the war with PTSD, his life spirals into drugs and crime as he struggles to find his place in the world.', 'images/cherry.jpg', 'Delhi', 'Sports'),
(3, 'Zack Snyder\'s Justice League', 'Justice League: Directed by Zack Snyder. With Ben Affleck, Henry Cavill, Amy Adams, and Gal Gadot. Fueled by his restored faith in humanity and inspired by Superman\'s selfless act, Bruce Wayne enlists the help of his new-found ally, Diana Prince, to face an even greater enemy.', 'images/zsjl.jpg', 'Delhi', 'Theatre'),
(4, 'GodZilla vs Kong ', 'The epic next chapter in the cinematic Monsterverse pits two of the greatest icons in motion picture history against each other--the fearsome Godzilla and the mighty Kong--with humanity caught in the balance.', 'images/gvkpster.jpg', 'Delhi', 'Comedy'),
(5, 'The Invisible Man', 'When Cecilia\'s abusive ex takes his own life and leaves her his fortune, she suspects his death was a hoax. As a series of coincidences turn lethal, Cecilia works to prove that she is being hunted by someone nobody can see.', 'images/tim.jpg', 'Mumbai', 'Music'),
(6, 'Black Widow', 'Black Widow: Directed by Cate Shortland. With Scarlett Johansson, Florence Pugh, Rachel Weisz, David Harbour. Natasha Romanoff confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises.', 'images/blackwidow.jpg', 'Mumbai', 'Sports'),
(7, 'Bad Sisters', 'Follows the Garvey sisters, who are bound together by the death of their parents and a promise to always protect each other.', 'images/bad sisters.jpg', 'Mumbai', 'Comedy'),
(8, 'Derry Girl', 'The personal exploits of a 16-year-old girl and her family and friends during the Troubles in the early 1990s.', 'images/derr.jpg', 'Mumbai', 'Theatre'),
(9, 'Orange is the new Black', 'Orange Is the New Black: Created by Jenji Kohan. With Taylor Schilling, Kate Mulgrew, Uzo Aduba, Danielle Brooks.', 'images/orbl.jpg', 'Bangalore', 'Music'),
(10, 'Reboot', 'Reboot: Created by Steven Levitan. With Keegan-Michael Key, Johnny Knoxville, Rachel Bloom, Calum Worthy.', 'images/Reboot.jpeg', 'Bangalore', 'Sports'),
(11, 'Seinfeld\r\n', 'The continuing misadventures of neurotic New York City stand-up comedian Jerry Seinfeld and his equally neurotic New York City friends.\r\n', 'images/sein.jpg', 'Bangalore', 'Theatre'),
(12, 'Shameless\r\n', 'Shameless\r\nA scrappy, feisty, fiercely loyal Chicago family makes no apologies.\r\n\r\n', 'images/sham.jpg', 'Bangalore', 'Comedy'),
(13, 'Ted Lasso', 'American college football coach Ted Lasso heads to London to manage AFC Richmond, a struggling English Premier League football team.\r\n', 'images/tedlasso.jpg', 'Chennai', 'Music'),
(14, 'Bridgerton', 'Bridgerton is an American historical-romance television series based on Julia Quinn\'s novels. Created by Chris Van Dusen, it is Shondaland\'s first scripted show for Netflix.', 'images/bridgerton.jpg', 'Chennai', 'Sports'),
(15, 'College Romance\r\n', 'College Romance: With Apoorva Arora, Keshav Sadhna, Gagan Arora, Shreya Mehta. Three best friends look for love, laughs and some lifelong memories while attending college together.\r\n', 'images/collegeromance.jpg', 'Chennai', 'Comedy'),
(16, 'New Girl', 'New Girl: Created by Elizabeth Meriwether. With Zooey Deschanel, Jake Johnson, Max Greenfield, Hannah Simone. After a bad break-up, Jess, an offbeat young woman, moves into an apartment loft with three single men.', 'images/New Girl.jpg', 'Chennai', 'Theatre'),
(17, 'The Empress\r\n', 'The Empress is a German Netflix Original historical romantic drama series written by Katharina Eyssen and based on the early life and romance of Empress Elisabeth of Austria.', 'images/theempress.jpg', 'Delhi', 'Music'),
(18, 'This is Us', 'This Is Us: Created by Dan Fogelman. With Milo Ventimiglia, Mandy Moore, Sterling K. Brown, Chrissy Metz. A heartwarming and emotional story about a unique set of triplets, their wonderful parents.', 'images/thisisus.jpeg', 'Delhi', 'Sports'),
(19, 'Grey\'s Anatomy', ' Grey\'s Anatomy: Created by Shonda Rhimes. With Ellen Pompeo, Chandra Wilson, James Pickens Jr., Justin Chambers. A drama centered on the personal and professional lives of five surgical interns and their supervisors.', 'images/greysanatomy.jpg', 'Delhi', 'Theatre'),
(20, 'All-American Basketball	Tournament', 'An All-American team is an honorary sports team composed of the best amateur players of a specific season for each team position.', 'images/basketball.jpg', 'Delhi', 'Comedy'),
(21, 'Cricket Premier League', 'It is annually contested by ten teams based out of seven Indian cities and three Indian states. The league was founded by the Board of Control for Cricket in India (BCCI) in 2007.\r\n\r\n', 'images/cricket.jpg', 'Bangalore', 'Music'),
(26, 'Mirzapur', 'Mirzapur is an Indian Hindi-language action crime thriller web series on Amazon Prime Video, created by Karan Anshuman, who wrote the script along with Puneet Krishna & Vineet Krishna. ', 'images/mirzapur.jpg', '', ''),
(27, 'Outlander', 'Outlander: Created by Ronald D. Moore. With Caitríona Balfe, Sam Heughan, Sophie Skelton, Richard Rankin. An English combat nurse from 1945 is mysteriously swept back in time to 1743.\r\n', 'images/out.jpg', '', ''),
(28, 'Panchayat', 'A comedy-drama, which captures the journey of an engineering graduate Abhishek, who for lack of a better job option joins as secretary of a Panchayat office in a remote village of Uttar Pradesh.', 'images/Panchayat.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `id` int(11) NOT NULL,
  `City_name` varchar(100) NOT NULL,
  `event_category` varchar(250) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `total_seats` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL,
  `ticket_price` decimal(10,0) NOT NULL,
  `DESCRIPTION` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`id`, `City_name`, `event_category`, `event_date`, `event_time`, `total_seats`, `available_seats`, `ticket_price`, `DESCRIPTION`) VALUES
(1, 'Delhi', 'Music', '2022-11-10', '18:00:00', 50, 50, '350', 'In the near future, a drone pilot sent into a war zone finds himself paired with a top-secret android officer on a mission to stop a nuclear attack.'),
(2, 'Delhi', 'Sports', '2022-11-12', '10:30:00', 110, 65, '650', '\'Cherry\' follows the wild journey of a disenfranchised young man from Ohio who meets, Cherry drifts from college dropout to army medic in Iraq - anchored only by his true love, Emily. But after returning from the war with PTSD, his life spirals into drugs and crime as he struggles to find his place in the world.'),
(3, 'Delhi', 'Theatre', '2022-11-18', '16:45:00', 200, 100, '800', 'Justice League: Directed by Zack Snyder. With Ben Affleck, Henry Cavil, Amy Adams, and Gal Gadot. Fueled by his restored faith in humanity and inspired by Superman\'s selfless act, Bruce Wayne enlists the help of his new-found ally, Diana Prince, to face an even greater enemy.'),
(4, 'Mumbai', 'Music', '2022-11-20', '19:30:00', 75, 50, '300', 'The epic next chapter in the cinematic Monsterverse pits two of the greatest icons in motion picture history against each other--the fearsome Godzilla and the mighty Kong--with humanity caught in the balance.'),
(5, 'Mumbai', 'Sports', '2022-11-16', '09:30:00', 65, 20, '200', 'When Cecilia\'s abusive ex takes his own life and leaves her his fortune, she suspects his death was a hoax. As a series of coincidences turn lethal, Cecilia works to prove that she is being hunted by someone nobody can see.'),
(6, 'Bangalore', 'Music', '2022-12-01', '12:30:00', 75, 50, '300', 'Black Widow: Directed by Cate Shortland. With Scarlett Johansson, Florence Pugh, Rachel Weisz, David Harbour. Natasha Romanoff confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises.'),
(7, 'Bangalore', 'Comedy', '2022-11-18', '11:30:00', 200, 50, '650', 'Plot - Follows the Garvey sisters, who are bound together by the death of their parents and a promise to always protect each other.\r\n'),
(8, 'Chennai', 'Music', '2022-12-20', '01:00:00', 110, 20, '200', 'Plot - The personal exploits of a 16-year-old girl and her family and friends during the Troubles in the early 1990s.Derry Girls has inspired a mural of its main characters painted on the side of Badgers Bar and Restaurant at 18 Orchard Street, Derry, which has become a popular tourist attraction.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ritwickoo1', 'ritwick.verma91@gmail.com', '12345'),
(2, 'ritwickoo1', 'ritwick.verma91@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Show_id`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
